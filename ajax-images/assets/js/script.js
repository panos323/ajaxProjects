$(document).ready(function() {

    var imgSearched = $("#imgSearched");
    var processing = false; //flag to prevent multiple ajax calls on scroll

    //images that come from api appent to container
    function comingImgs(src) {
        $('<img />').attr({
            'id': 'myImage',
            'src': src,
            'alt': 'Unsplash image',
            'title': 'Unsplash image',
            'width': 350,
            'height':350
        }).appendTo('#imgContainer');
    } //function comingImgs()

    //increment the pages so on scroll more content will load
    function setCurrentPage(page) {
        imgSearched.attr("data-page", page);
    }
 

    //bring data from unsplash api
    function AjaxCall() {
        $('#imgContainer').empty();
        //return if another ajax call is already in use
        if (processing) {
            return false;
        }
        requestProgress = true;

        var page = parseInt(imgSearched.attr("data-page"));
        var next_page = page + 1;

        //ajax get 
        $.get( "https://api.unsplash.com/search/photos/?page=" + next_page + "&per_page=10&query=" + imgSearched.val() + "&client_id=3f91218e0e5da7b10a85de1fb6e2fba47fb0579f805a89a4843977e303dfe6ca" , function( data ) {
        if (data.results.length > 0) {
            $("#noFounded").css("display","none");
            //console.log(data.results[0].urls.small);
            for (let i = 0; i < data.results.length; i++) {
                comingImgs(data.results[i].urls.small);
            }//for loop
        } else {
            $("#noFounded").css("display","block");

        }
         
        setCurrentPage(next_page);
        processing = false;
        }); //get

    }// function AjaxCall


     //bring data for scroll
     function AjaxCallScroll() {
        //return if another ajax call is already in use
        if (processing) {
            return false;
        }
        requestProgress = true;

        var page = parseInt(imgSearched.attr("data-page"));
        var next_page = page + 1;

        //ajax get 
        $.get( "https://api.unsplash.com/search/photos/?page=" + next_page + "&per_page=10&query=" + imgSearched.val() + "&client_id=3f91218e0e5da7b10a85de1fb6e2fba47fb0579f805a89a4843977e303dfe6ca" , function( data ) {
        if (data.results.length > 0) {
            $("#noFounded").css("display","none");
            //console.log(data.results[0].urls.small);
            for (let i = 0; i < data.results.length; i++) {
                comingImgs(data.results[i].urls.small);
            }//for loop
        } else {
            $("#noFounded").css("display","block");

        }
         
        setCurrentPage(next_page);
        processing = false;
        }); //get

    }// function AjaxCall

  
    //when user is typing take the value
    imgSearched.on("blur", function() {
        var imgSearched = $("#imgSearched").val();
       // console.log(imgSearched);
        AjaxCall();
    });

    $("#btnSubmit").on("submit", AjaxCall);
    
    function loadScroll() {
        //load images when user scroll at 80% of the page
       if ($(window).scrollTop() >= ($(document).height() - $(window).height()) - 700){
            AjaxCallScroll();
       }
    }//function loadScroll()

    $(window).on("scroll", function() {
        loadScroll();
    })

}); //PAGE LOADED