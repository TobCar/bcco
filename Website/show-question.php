<?php

// Pre: $_POST["question"] must be greater than zero, or not set at all

require_once("./questions.php");

// session_start() must be called before _SESSION variables can be used.
if( session_id() == '' ) { // Session has not started
  session_start();
}

$is_open = 1527180300 < time() && time() < 1527184800;

if( $_SESSION["is_demo"] || $is_open ) {
  $previous_question = isset($_POST["question"]) ? $_POST["question"] : -1;
  $go_to_next = isset($_POST["next"]) ? $_POST["next"] : "";
  $student_id = isset($_POST["student_id"]) ? $_POST["student_id"] : "";
  $student_name = isset($_POST["student_name"]) ? $_POST["student_name"] : "Default Student Name";
  $school_name = isset($_POST["school_name"]) ? $_POST["school_name"] : "Default School Name";

  // Get the next question number
  if( $go_to_next == "Next" ) {
    $question_to_display = $previous_question + 1;
  } else if( $go_to_next == "Previous" ) {
    $question_to_display = $previous_question - 1;
  } else if( $go_to_next == "Finish" || $go_to_next == "Save" ) {
    // End the contest
    include("./review.php");
    exit(0);
  } else {
    // Navigation Squares and review page
    $question_to_display = isset($_POST["jump_to"]) ? $_POST["jump_to"] : 0;
  }

  // Prevent trying to access negative numbered questions
  // The "previous" button should be hidden on question 0 anyway, this is a backup.
  $question_to_display = max(0, $question_to_display);

  if( $question_to_display < $_SESSION["number_of_mc_questions"] ) {
    include("./multiple-choice.php");
  } else {
    include("./free-response.php");
  }
}
?>
