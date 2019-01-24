$(document).ready(function() {

    function onSuccess() {
        $("#cardDynamic").css("display","block");
        $("#noResults").css("display","none");
    }

    function onError() {
        $("#noResults").css("display","block");
        $("#cardDynamic").css("display","none");
    }

   function AjaxCall() {
        var param =  $("#userInput").val().toLowerCase().trim();

        $.getJSON( "https://pokeapi.co/api/v2/pokemon/" + param + "/", function( data ) {
            if (Object.keys(data).length <= 5) {
                onError();
            } else {
                //console.log data from api
                onSuccess();
                //pass data from api to div card dynamically
                $("#imgDyn").attr("src", data.sprites.front_shiny);
                $("#imgDyn").on("mouseenter", function() {
                    $(this).attr("src", data.sprites.back_default);
                });
                $("#imgDyn").on("mouseleave", function() {
                    $(this).attr("src", data.sprites.front_shiny);
                });
                $("#titleDyn").html("Name: " + data.forms[0].name);
                $("#firstDyn").html("Abilities: " + data.abilities[0].ability.name  + " & " +  data.abilities[1].ability.name);
                $("#secondDyn").html("Experiance: " + data.base_experience);
                $("#thirdDyn").html("Held Items: " +  data.held_items[0].item.name);
                $("#fourthDyn").html("Moves: " +  data.moves[0].move.name);
                $("#fifthDyn").html("Version: " +  data.game_indices[0].version.name);
                $("#sixthDyn").html("Weight: " + data.weight);
            }   
        });//getJSON
   }//function AjaxCall()

   $("#submitBtn").on("click", AjaxCall);

}); //PAGE LOADED