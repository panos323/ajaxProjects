<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="../favicon/favicon.png" type="image/png">
    <title>Ajax-PHP projects</title>
</head>
<body>

    <div class="container mt-3">
        <div class="row text-center">
            <div class="col-md-12">
                <!--start of jumbotron-->
                <div class="jumbotron" id="styleJumbotron">
                    <h1 class="display-4">Bring me Pokemon!</h1>
                    <hr class="style-five">
                    <p class="lead">Pokémon (Japanese: ポケモン Hepburn: Pokemon, English: /ˈpoʊkɪˌmɒn, -ki-, -keɪ-/),[1][2][3][not in citation given] also known as Pocket Monsters (ポケットモンスター) in Japan, is a media franchise managed by The Pokémon Company, a Japanese consortium between Nintendo, Game Freak, and Creatures.The franchise copyright is shared by all three companies, but Nintendo is the sole owner of the trademark.</p>
                    <hr class="my-4 style-five">
                    <p>All the Pokémon data you'll ever need in one place, easily accessible through a modern RESTful API.</p>
                    <a class="btn btn-success btn-lg" href="https://pokeapi.co" target="_blank" role="button">Learn more</a>
                </div>
                <!--end of jumbotron-->
            </div><!--col-md-12-->
        </div><!--row-->
        <!--end of first row-->

        <!--second row-->
         <div class="row text-center">
            <div class="col-md-12">
                <h1 class="mb-4">Search <span class="badge badge-secondary">Pokemon</span></h1>
            </div><!--col-md-12-->
         </div><!--row-->
        <!--end of second row-->

        <!--third row-->
        <div class="row text-center">

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button type="button" id="submitBtn" class="btn btn-outline-success"  id="button-addon1">Search</button>
                </div>
                <input type="text" class="form-control" id="userInput" placeholder="Search Pokemon By Name" aria-label="Example text with button addon" aria-describedby="button-addon1">
            </div>

        </div><!--row-->
        <!--end of third row-->

    </div><!--container-->


    <!--container for dynamic data coming from api-->
    <div class="container mb-5">
        <!--dynamic ontent for no results-->
        <div class="row text-center">
            <div class="col-md-12 mt-5">
                <p class="lead bg-danger text-light" id="noResults">No results founded for your search</p>
            </div>
        </div>

        <!--dynamic content for results-->
        <div class="row text-center" id="cardDynamic">
            <div class="col-md-12  d-flex">
            <div class="card mx-auto" style="width: 18rem;">
                    <img class="card-img-top" id="imgDyn" src="" alt="Card image pokemon">
                    <hr class="style-six">
                    <div class="card-body">
                        <h5 id="titleDyn" class="card-title"></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li id="firstDyn" class="list-group-item"></li>
                        <li id="secondDyn" class="list-group-item"></li>
                        <li id="thirdDyn" class="list-group-item"></li>
                        <li id="fourthDyn" class="list-group-item"></li>
                        <li id="fifthDyn" class="list-group-item"></li>
                        <li id="sixthDyn" class="list-group-item"></li>
                    </ul>
                    <div class="card-body">
                        <a href="https://pokeapi.co/" target="_blank" class="card-link">PokeAPI</a>
                    </div>
                </div><!--card-->
            </div><!--col-md-12-->
        </div><!--row-->
    </div><!--container-->




<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="assets/js/script.js"></script>
</body>
</html>