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
    <div class="container mt-2 mb-5">

        <!--first row-->
        <div class="row text-center mb-5">
            <div class="col-md-12">
                <h1 class="display-4 text-success">Image Galler With Ajax</h1>
                <hr>
                <p class="lead">Search by category any image you like</p>
            </div><!--col-md-12-->
        </div><!--row-->
        <!--first row-->

        <div class="row  mb-5">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button id="btnSubmit" type="sumit" class="btn btn-primary" id="basic-addon1">Search photo:</button>
                </div>
                <input type="text" id="imgSearched" class="form-control" placeholder="Type a photo category" aria-label="Username" aria-describedby="basic-addon1" data-page="0">
                </div>
            </div>
        </div><!--row-->

    </div><!--container-->

    <div class="container" id="noFounded">
        <div class="row text-center">
            <div class="col-md-12">
            <p class='lead text-center bg-danger text-light'>No results founded</p>
            </div>
        </div>
    </div>

    <div class="container" id="imgContainer">
        
    </div>

<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="assets/js/script.js"></script>
</body>
</html>