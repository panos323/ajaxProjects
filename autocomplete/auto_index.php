<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="icon" href="../favicon/favicon.png" type="image/png">
    <title>Ajax-PHP projects</title>

    <style>

    .navbar-nav > li{
        padding-left:20px;
        padding-right:20px;
    }
    .containerAuto {
        position: relative;
        display: inline-block;
    }
    #suggestions {
        display:none;
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        left: 0;
        right: 0;
    }

    #suggestions li:hover {
        background:black;
    }
  
    #suggestions li:hover a{
        color:white;
        cursor:pointer
    }

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <a class="navbar-brand" href="#">Auto-Complete Search</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Page1</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Page2
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Page2.1</a>
                <a class="dropdown-item" href="#">Page2.2</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Page2.3</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Page3</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" id="search-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            <?php $q = isset($_GET["q"]) ? $_GET["q"] : ""; ?>
            <div class="containerAuto" style="width:300px;">
                <input type="search"  class="form-control mr-sm-2" id="search" name="q"  placeholder="Search" aria-label="Search" value="<?php echo htmlspecialchars($q); ?>" >
                <ul class="list-group" id="suggestions">
                    <!--DYNAMIC CONTENT GOES HERE-->
                </ul>
            </div>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="searchBtn" name="search">Search</button>
            </form>
        </div>
    </nav>


    


<div class="container" style="margin-top:150px;">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="display-4 text-danger">Search results</h1>
                <?php
                $query = isset($_GET["q"]) ? $_GET["q"] : "";
                ?>
            
            <div id="searchedDiv">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>You searched for: </strong><?php echo htmlspecialchars($query); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            </div>

           
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









