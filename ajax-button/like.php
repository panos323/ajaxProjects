<?php

session_start();

if (!isset($_SESSION["like"])) {
    $_SESSION["like"] = [];
}

//check if its ajax request
function is_ajax_request() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
      $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
  }

//exit if its not ajax request
if (!is_ajax_request()) {
    exit;
}



//extract_id
$raw_id = isset($_POST["id"]) ? $_POST["id"] : "";
echo $raw_id;

//check if $raw_id is same with id of blog post
if(preg_match("/blog-post-(\d+)/", $raw_id, $matches)) {
    $id = $matches[1];

//store in $_SESSION["like"]
if(!in_array($id, $_SESSION['like'])) {
    $_SESSION['like'][] = $id;
}
//return true/false
    echo "true";
    } else {
    echo "false";
    }
















