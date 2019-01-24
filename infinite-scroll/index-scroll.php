

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
    <div class="container">

    <!--first row-->
    <div class="row text-center mb-5">
        <div class="col-md-12">
            <h1 class="mt-3 text-dark display-4 font-italic" style="border-radius:15px;">Infinite scroll with Ajax</h1>
    </div><!--col-md-12-->


    </div><!--row-->
    <!--first row-->

    <!--second row-->
    <div class="row text-center">
        <div id="contentHere" class="col-md-12 blog-posts">

        <!--DYNAMIC TEXT COMING FROM DATABASE WILL GO HERE-->
           
        </div><!--col-md-12-->

        <div class="col-md-12">
            <button id="load_more" class="btn btn-danger" data-page="0">Load More</button>
        </div>

         <div class="col-md-12 text-center">
                <img id="spinnerImg" src="assets/images/spinner.gif" alt="spinner">
        </div>

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