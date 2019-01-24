<?php
    require_once "includes/header.php";
?>

    <!--jumbotron-->
    <div class="jumbotron mt-3 mb-5 text-center">
        <h1 class="display-4 text-info mb-3">Ajax with JS/PHP</h1>
        <p class="lead">Ajax is short for Asynchronous Javascript and XML, which refers to a set of web development techniques rather than an actual programming language. Ajax however, is widely used in client-side programming (e.g. Javascript) to allow for data to be sent and received to and from a database / server.</p>
        <hr class="my-4">
        <p class="font-italic">Add Dynamic Content to Websites</p>
    </div>
    <!--jumbotron-->

    <h1 class="text-center bg-info text-light mb-4">AJAX projects</h1>

        <!--*****************first row***************************************-->
        <div class="row mb-3">
          <!--first column-->
          <div class="col-md-4">
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h5 class="card-title">AJAX Like Button</h5>
                    <hr>
                    <p class="card-text">Asynchronous buttons have become common in modern web applications.The idea is a button or a link that you click on the page and it makes a small update to the application state.For example a status post on Facebook or favoriting an article that you like.All of these things can change the state of the application without us having to reload the page.</p>
                    <a href="./ajax-button/index_button.php" class="btn btn-primary" target="_blank">Check it &nbsp;
                        <i class="fas fa-arrow-circle-right fa-lg"></i>                   
                    </a>
                </div>
            </div>
          </div>
          <!--first column-->

          <!--second column-->
          <div class="col-md-4">
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h5 class="card-title">AJAX Form Submission</h5>
                    <hr>
                    <p class="card-text">Form which uses Ajax to send its data to a remote server asynchronusly.This is what a normal HTML form would look like with inputs and a submit button.The Ajax submit button has a few extra behaviours build into it.Now, whatever the form's action was is what JavaScript is going to know is the action, and we can use it in our Ajax.</p>
                    <a href="./ajax-form/index-form.php" target="_blank" class="btn btn-primary">Check it &nbsp;
                        <i class="fas fa-arrow-circle-right fa-lg"></i>                   
                    </a>
                </div>
            </div>
          </div>
          <!--second column-->

          <!--third column-->
          <div class="col-md-4">
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h5 class="card-title">Infinite Scrolling</h5>
                    <hr>
                    <p class="card-text">when a user scrolls to the bottom of the existing page content, then additional content loads onto the page using Ajax. It's very prevalent on the internet and you've probably experienced it on sites like Facebook, LinkedIn, Twitter, or Pinterest.You can scroll to the bottom of the page, and you can watch as new content appears and that allows you to just keep scrolling.</p>
                    <a href="./infinite-scroll/index-scroll.php" target="_blank" class="btn btn-primary">Check it &nbsp;
                        <i class="fas fa-arrow-circle-right fa-lg"></i>                  
                    </a>
                </div>
            </div>
          </div>
          <!--third column-->

        </div><!--row-->
        <!--*****************first row***************************************-->




        <!--*****************second row***************************************-->
        <div class="row">
            <!--seconnd row's first column-->
            <div class="col-md-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Autosuggest search</h5>
                        <hr>
                        <p class="card-text"> The idea is that as a user is typing into a text input field, the webpage then displays suggestions below the text input. In other words, it takes the data the user's typing, and uses that to make suggestions, in order to save them typing. Those suggestions could be used to populate the text input field simply as text, or they could be links that take you to either search results or to a specific content page.</p>
                        <a href="./autocomplete/auto_index.php" target="_blank" class="btn btn-primary">Check it &nbsp;
                            <i class="fas fa-arrow-circle-right fa-lg"></i>                   
                        </a>
                    </div>
                </div>
            </div>
            <!--seconnd row's first column-->
      
            <!--seconnd row's second column-->
            <div class="col-md-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title">AJAX Image Search</h5>
                        <hr>
                        <p class="card-text">Image search with Ajax from the most powerful photo engine in the world,Unsplash.Beautiful,free images and photos that you can download and use for any project.Better than any royalty free or stock photos.You can scroll to the bottom of the page, and you can watch as new content appears and that allows you to just keep scrolling.</p>
                        <a href="./ajax-images/index-gallery.php" target="_blank" class="btn btn-primary">Check it &nbsp;
                            <i class="fas fa-arrow-circle-right fa-lg"></i>                   
                        </a>
                    </div>
                </div>
            </div>
            <!--seconnd row's second column-->
      
            <!--seconnd row's third column-->
            <div class="col-md-4">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Pokemon data</h5>
                        <hr>
                        <p class="card-text">A beautiful Pokemon App based on Pokeapi.The free-to-use Pokémon RESTful API (Pokéapi) is linked to an extensive database of Pokémon-related information- a true virtual Pokédex.Access in more than 54,363 objects sourced from Pokémon video games covering Pokémon characters, abilities, moves, attack, life and defensive statistics.</p>
                        <a href="./ajax-pokemon/poke-index.php" target="_blank" class="btn btn-primary">Check it &nbsp;
                            <i class="fas fa-arrow-circle-right fa-lg"></i>                   
                        </a>
                    </div>
                </div>
            </div>
            <!--seconnd row's third column-->

        </div><!--row-->
        <!--*****************second row***************************************-->


<?php
    require_once "includes/footer.php";
?>