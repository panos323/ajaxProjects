$(document).ready(function() {

    var container = $("#contentHere");
    var load_more = $("#load_more");
    var requestProgress = false;

    function showSpinner() {
        $("#spinnerImg").css("display", "inline");
    }

    function hideSpinner() {
        $("#spinnerImg").css("display", "none");
    }

   function setCurrentPage(page) {
       console.log("Incrementing page " + page);
       load_more.attr("data-page", page);
   }

   function  scrollReaction() {
       var content_height = container.outerHeight(true);
       var current_y = window.innerHeight + window.pageYOffset;
      // console.log(current_y + "/ " + content_height);
       if (current_y >= content_height) {
        loadMore();
       }
   }; //function scrollReaction

    function loadMore() {
        if (requestProgress) {
            return;
        }
        requestProgress = true;
        showSpinner();

        var page = parseInt(load_more.attr("data-page"));
        var next_page = page + 1;
        
        $.get( "blog_posts.php?page=" + next_page, function( data ) {
          //  console.log(data);
            hideSpinner();
            setCurrentPage(next_page);
            container.append(data);
            requestProgress = false;
        });

    }; //function loadMore

    //load_more.on("click", loadMore);
    $(window).on("scroll", function() {
        scrollReaction();
    })

    //load first page with Ajax
    loadMore();

}); //PAGE LOADED

















