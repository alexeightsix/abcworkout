<?php

$url = parse_url('http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
$url = "http://".$url['host'];

function is_results() {
  if (empty($_GET)) {
    return false;
  } elseif (empty($_GET['name'])) {
    return false;
  } elseif (!empty($_GET['name'])) {
    return true;
  }
}

function get_workout($letter) {

  if ($letter === "-"){
    return false;
  }

  switch ($letter) {
  case 'a' :
  $result = "50 jumping jacks";
  break;
  case 'b' :
  $result = "20 crunches";
  break;
  case 'c' :
  $result = "30 squats";
  break;
  case 'd' :
  $result = "15 pushups";
  break;
  case 'e' :
  $result = "1 minute wall sit";
  break;
  case 'f' :
  $result = "10 burpees";
  break;
  case 'g' :
  $result = "20 second arm circles";
  break;
  case 'h' :
  $result = "20 squats";
  break;
  case 'i' :
  $result = "30 jumping jacks";
  break;
  case 'j' :
  $result ="15 crunches";
  break;
  case 'k' :
  $result = "10 pushups";
  break;
  case 'l' :
  $result = "2 minute wall sit";
  break;
  case 'm' :
  $result = "20 burpees";
  break;
  case 'n' :
  $result = "25 burpees";
  break;
  case 'o' :
  $result = "40 jumping jacks";
  break;
  case 'p' :
  $result = "15 second arm circles";
  break;
  case 'q' :
  $result = "30 crunches";
  break;
  case 'r' :
  $result = "15 pushups";
  break;
  case 's' :
  $result = "30 burpees";
  break;
  case 't' :
  $result = "15 squats";
  break;
  case 'u' :
  $result = "30 second arm circles";
  break;
  case 'v' :
  $result = "3 minute wall sit";
  break;
  case 'w' :
  $result = "20 burpees";
  break;
  case 'x' :
  $result = "60 jumping jacks";
  break;
  case 'y' :
  $result = "10 crunches";
  break;
  case 'z' :
  $result = "20 pushups";
  break;

}

return $result;

}

function abc_title() {

	if (is_results()) {
		return 'ABCWorkout.me - Your Results - '.$_GET['name'];
	} else { 
		return 'USE YOUR FULL NAME, THAT\'S THE WORKOUT! - ABCWorkout.me';
	} 

}

function body_class() {
	$output = 'class="';
	if (is_results()) {
		$output .= 'inner';
	} else {
		$output .= 'home';
	}

	$output .= '"';
	return $output;
}

function abc_results() {

$output ='<ul class="list-center">';

if (is_results()) {
  $name = $_GET['name'];
  $array = str_split($name);
  foreach ($array as $letter) {
    $output .='<li><span class="letter">'.$letter.'</span> <span class="text-red">'.get_workout(strtolower($letter)).'</span></li>';
  }

  $output .='</ul>';

  return $output;

}

}

$queryString = $_SERVER['QUERY_STRING'];


function social_icons() {
  global $url;
  $output = '<div class="text-center buttons-socialMedia">';
  $output .='<a href="https://www.facebook.com/sharer/sharer.php?u='.urlencode($url).'" class="button-share fb-share"><i class="fa fa-facebook"></i> Share on Facebook</a>';
  $output .='<a href="http://twitter.com/share?url='.$url.'&text='.urlencode('USE YOUR FULL NAME THAT\'S THE WORKOUT').'" class="button-tweet twitter"><i class="fa fa-twitter"></i> Tweet This</a>';
  if (is_results()) :
   // $output .='<a href="#" class="button-green"><i class="fa fa-print"></i> Print Workout</a>';
   // $output .='<a href="#" class="button-gray"><i class="fa fa-envelope"></i> Email Workout</a>';
  endif;
  $output .='</div>';
  return $output;
}