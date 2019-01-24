$(document).ready(function() {


    function clearResult() {
        $("#concrete").html("");
        $("#concrete").css("display","none");
        $("#ajax-button").prop('disabled', true);
        $("#ajax-button").css("cursor", "not-allowed");
    }

    function postResult(value) {
        $("#result").css("display","block");
        $("#concrete").html(value);
        $("#concrete").css("display","block");
        $("#ajax-button").prop('disabled', false);
        $("#ajax-button").css("cursor", "pointer");
    }

    function showSpinner() {
        $("#spinnerImg").css("display","inline");
    }

    function hideSpinner() {
        $("#spinnerImg").css("display","none");
    }

   

    //ajax request
    function calculateAjax() {
        clearResult();
        showSpinner();
        
        $.ajax({
            type: "POST",
            url: $("form").attr("action"),
            data:  $("form").serialize(),
            success: function(data) {
                console.log("data is " + data);
                hideSpinner();
                postResult(data);
            },
            error:function() {
                console.log("error");
            }
        });
    };
    //ajax request


   // $("#ajax-button").on("click", calculateAjax);
      $("#ajaxForm").on("submit", function(e) {
          e.preventDefault();
          calculateAjax();
      })

}); //PAGE LOADED