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
                <h1 class="display-4 text-success">Form submission with Ajax</h1>
                <hr>
                <p class="lead">This is a form submission with AJAX, that simulates a slow connection.</p>
            </div><!--col-md-12-->
        </div><!--row-->
        <!--first row-->

        <!--second row-->
        <div class="row text-center  align-items-center justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center font-italic mb-3 border">Concrete Volume Calculator(in centimetres)</h3>
            </div>
            <form id="ajaxForm" class="col-md-8 mx-auto mb-5" action="measurements.php" method="POST">
                <div class="form-group">
                    <label for="length">Length</label>
                    <input type="number" class="form-control" id="length" name="length" placeholder="Length(number)" required>
                </div>

                 <div class="form-group">
                    <label for="width">Width</label>
                    <input type="number" class="form-control" id="width" name="width" placeholder="Width(number)" required>
                </div>

                 <div class="form-group">
                    <label for="height">Height</label>
                    <input type="number" class="form-control" id="height" name="height" placeholder="Height(number)" required>
                </div>

                 <div class="form-group">
                    <label for="cylindrical_columns">Cylindrical Columns</label>
                    <input type="number" class="form-control" id="cylindrical_columns" name="cylindrical_columns" placeholder="Cylindrical Columns(number)" required>
                </div>

                 <div class="form-group">
                    <label for="diameter">Cylindrical-Diameter</label>
                    <input type="number" class="form-control" id="diameter" name="diameter" placeholder="Diameter(number)" required>
                </div>

                 <div class="form-group">
                    <label for="cylindrical_height">Cylindrical-Height</label>
                    <input type="number" class="form-control" id="cylindrical_height" name="cylindrical_height" placeholder="Height(number)" required>
                </div>
               
                <button type="submit" name="ajax-button" id="ajax-button" class="btn btn-primary">Submit</button>
            </form>

            <div class="col-md-12 text-center">
                <img id="spinnerImg" src="assets/images/spinner.gif" alt="spinner">
            </div>

            <div class="col-md-12 text-center" id="result">
                <p>The result is: <span id="concrete"></span></p>
            </div>
        </div>
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