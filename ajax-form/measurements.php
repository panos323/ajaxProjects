<?php
sleep(5);


//check if its ajax request
function is_ajax_request() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
      $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

//check if values are set
$length = isset($_POST["length"]) ? (int) $_POST["length"] : "";
$width =  isset($_POST["width"]) ? (int) $_POST["width"] : "";
$height =  isset($_POST["height"]) ? (int) $_POST["height"] : "";
$cylindrical_columns =  isset($_POST["cylindrical_columns"]) ? (int) $_POST["cylindrical_columns"] : "";
$diameter =  isset($_POST["diameter"]) ? (int) $_POST["diameter"] : "";
$cylindrical_height =  isset($_POST["cylindrical_height"]) ? (int) $_POST["cylindrical_height"] : "";




$errors = [];
//handle errors
if ($length == "") {
    $errors[] = "length empty";
}
if ($width == "") {
    $errors[] = "width empty";
}
if ($height == "") {
    $errors[] = "height empty";
}
if ($cylindrical_columns == "") {
    $errors[] = "cylindrical_columns empty";
}
if ($diameter == "") {
    $errors[] = "diameter empty";
}
if ($cylindrical_height == "") {
    $errors[] = "cylindrical_height empty";
}
//handle errors

if (!empty($errors)) {
    $result_array = array("errors" => $errors);
    json_encode($result_array);
    exit;
} 




//result from form if not empty the values
if (!empty($length) && !empty($width)  && !empty($height)  && !empty($cylindrical_columns)  && !empty($diameter)  && !empty($cylindrical_height) ) {
    $concrete_result = ($length * $width * $height) / ($cylindrical_columns * $diameter * $cylindrical_height);
}



//if is ajax request give the result otherwise exit
if (is_ajax_request()) {
   
    echo $concrete_result . "cm(s)";;
} else {
    exit;
}






















