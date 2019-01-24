$(document).ready(function() {

    //like a post
    function likeAjax() {
        var parent = $(this).parents().eq(2);
        var parent_data = "id=" + parent.attr("id");
               
        $.post("like.php", parent_data, function( data ) {
            parent.addClass("favorite");
        });
    }
    //like a post

    //dislike a post
    function unlikeAjax() {
        var parent = $(this).parents().eq(2);
        var parent_data = "id=" + parent.attr("id");
               
        $.post("unlike.php", parent_data, function( data ) {
            parent.removeClass("favorite");
        });
    }
    //dislike a post

    //on each button click run ajax
    $(".like-button").each(function(){
        $(this).on("click", likeAjax);
    });
    //on each button click run ajax

    //on each button click run ajax
    $(".unlike-button").each(function(){
        $(this).on("click", unlikeAjax);
    });
    //on each button click run ajax


}); //PAGE LOADED