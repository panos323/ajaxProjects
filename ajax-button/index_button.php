<?php
    session_start();

    //$_SESSION["like"] = [];
    if (!isset($_SESSION["like"])) {
        $_SESSION["like"] = [];
    }

    function is_liked($id) {
        return in_array($id, $_SESSION["like"]);
    }

?>

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
            <h1 class="mt-3 bg-dark text-light" style="border-radius:15px;">Like your favorite post</h1>
        </div><!--col-md-12-->


    </div><!--row-->
    <!--first row-->

    <!--second row-->
    <div class="row text-center">
        
        <div class="col-md-12">
        <!--start of first card post-->
        <div id="blog-post-01" class="card text-center mb-4 blog-post <?php if (is_liked(01)) {
            echo "favorite";
        } ?>" >
            <div class="card-header">
                <h4>Post #1
                    <span class="favorite-heart float-right">&hearts;</span>
                </h4>
            </div>
            <div class="card-body">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur elementum, dui sit amet pharetra vehicula, nisl dolor molestie risus, sed consectetur orci odio at massa. Quisque a fringilla tortor, et tempor turpis. Donec tempus iaculis consectetur. In aliquam consectetur libero, non congue dolor mattis sit amet. Cras pellentesque mauris sit amet bibendum malesuada. Morbi at consequat tortor, eu sagittis dui. Nullam quis risus interdum, vestibulum purus eu, accumsan nisi. Donec eget ex dui. Pellentesque consectetur purus nisl, nec volutpat quam sollicitudin vel. Sed dictum mi eget est porta, id gravida nulla vehicula. Donec est dolor, sagittis et faucibus eget, hendrerit sit amet ipsum. Integer tortor ante, luctus et tortor id, porttitor posuere lorem. Donec a interdum lorem, vitae faucibus nisi.</p>
               <p class="card-text">
                <button   class="btn btn-primary text-light like-button">Like &nbsp;
                    <i class="far fa-thumbs-up"></i> 
                </button>
                <button  class="btn btn-danger text-light unlike-button">Unlike &nbsp;
                    <i class="far fa-thumbs-down"></i>
                </button>
               </p>

            </div>
        </div><!--card-->
        <!--end of first card post-->
        </div><!--col-md-12-->



         <div class="col-md-12">
        <!--start of first card post-->
        <div  id="blog-post-02" class="card text-center mb-4 blog-post <?php if (is_liked(02)) {
            echo "favorite";
        } ?>">
            <div class="card-header">
                <h4>Post #2
                    <span class="favorite-heart float-right">&hearts;</span>
                </h4>
            </div>
            <div class="card-body">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur elementum, dui sit amet pharetra vehicula, nisl dolor molestie risus, sed consectetur orci odio at massa. Quisque a fringilla tortor, et tempor turpis. Donec tempus iaculis consectetur. In aliquam consectetur libero, non congue dolor mattis sit amet. Cras pellentesque mauris sit amet bibendum malesuada. Morbi at consequat tortor, eu sagittis dui. Nullam quis risus interdum, vestibulum purus eu, accumsan nisi. Donec eget ex dui. Pellentesque consectetur purus nisl, nec volutpat quam sollicitudin vel. Sed dictum mi eget est porta, id gravida nulla vehicula. Donec est dolor, sagittis et faucibus eget, hendrerit sit amet ipsum. Integer tortor ante, luctus et tortor id, porttitor posuere lorem. Donec a interdum lorem, vitae faucibus nisi.</p>
               <p class="card-text">
                <button  class="btn btn-primary text-light like-button">Like &nbsp;
                    <i class="far fa-thumbs-up"></i> 
                </button>
                <button  class="btn btn-danger text-light unlike-button">Unlike &nbsp;
                    <i class="far fa-thumbs-down"></i>
                </button>
               </p>
               </p>

            </div>
        </div><!--card-->
        <!--end of first card post-->
        </div><!--col-md-12-->



        <div class="col-md-12">
        <!--start of first card post-->
        <div id="blog-post-03" class="card text-center mb-4 blog-post <?php if (is_liked(03)) {
            echo "favorite";
        } ?>" >
            <div class="card-header">
                <h4>Post #3
                    <span class="favorite-heart float-right">&hearts;</span>
                </h4>
            </div>
            <div class="card-body">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur elementum, dui sit amet pharetra vehicula, nisl dolor molestie risus, sed consectetur orci odio at massa. Quisque a fringilla tortor, et tempor turpis. Donec tempus iaculis consectetur. In aliquam consectetur libero, non congue dolor mattis sit amet. Cras pellentesque mauris sit amet bibendum malesuada. Morbi at consequat tortor, eu sagittis dui. Nullam quis risus interdum, vestibulum purus eu, accumsan nisi. Donec eget ex dui. Pellentesque consectetur purus nisl, nec volutpat quam sollicitudin vel. Sed dictum mi eget est porta, id gravida nulla vehicula. Donec est dolor, sagittis et faucibus eget, hendrerit sit amet ipsum. Integer tortor ante, luctus et tortor id, porttitor posuere lorem. Donec a interdum lorem, vitae faucibus nisi.</p>
               <p class="card-text">
                <button  class="btn btn-primary text-light like-button">Like &nbsp;
                    <i class="far fa-thumbs-up"></i> 
                </button>
                <button  class="btn btn-danger text-light unlike-button">Unlike &nbsp;
                    <i class="far fa-thumbs-down"></i>
                </button>
               </p>
               </p>

            </div>
        </div><!--card-->
        <!--end of first card post-->
        </div><!--col-md-12-->




    </div><!--row-->
    <!--second row-->


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