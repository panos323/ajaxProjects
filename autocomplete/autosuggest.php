<?php


//check if its ajax request
function is_ajax_request() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
      $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
  }

  if(!is_ajax_request()) {
    exit;
  }

  function str_starts_with($choice, $query) {
    return strpos($choice, $query) === 0;
  }

function search($query, $choices) {
    $matches = [];

    $d_query = strtolower($query);

    foreach($choices as $choice) {
      // Downcase both strings for case-insensitive search
      $d_choice = strtolower($choice);
      if(str_starts_with($d_choice, $d_query)) {
        $matches[] = $choice;
      }//if
    }
    return $matches;
}//function search


$query = isset($_GET['q']) ? $_GET['q'] : '';


//find and return search suggestions as JSON
$choices = file("./assets/names.txt", FILE_IGNORE_NEW_LINES);


$suggestions = search($query, $choices);
sort($suggestions);
$max_suggestions = 10;
$top_suggestions = array_slice($suggestions, 0, $max_suggestions);

echo json_encode($top_suggestions);









