<?php
// Save the student's answers in the database.
include("./global/database-info.php");
$conn = new mysqli($servername, $username, $password, $dbname);

if( $conn->connect_error ) {
    die("Connection failed: " . $conn->connect_error);
}

// session_start() must be called before _SESSION variables can be used.
if( session_id() == '' ) { // Session has not started
  session_start();
}

if( !$_SESSION["is_demo"] ) {
  $stmt = $conn->prepare('UPDATE Students SET answer_1 = ?, answer_2 = ?, answer_3 = ?, answer_4 = ?,
                          answer_5 = ?, answer_6 = ?, answer_7 = ?, answer_8 = ?, answer_9 = ?, answer_10 = ?,
                          answer_11 = ?, answer_12 = ?, answer_13 = ?, answer_14 = ?, answer_15 = ?,
                          answer_16 = ?, answer_17 = ?, answer_18 = ?, answer_19 = ?, answer_20 = ?,
                          answer_21 = ?, answer_22 = ?, answer_23 = ?, answer_24 = ? WHERE id = ?');
  $stmt->bind_param('sssssssssssssssssssssssss',
        $_SESSION["committed_answers"][0], $_SESSION["committed_answers"][1], $_SESSION["committed_answers"][2],
        $_SESSION["committed_answers"][3], $_SESSION["committed_answers"][4],$_SESSION["committed_answers"][5],
        $_SESSION["committed_answers"][6], $_SESSION["committed_answers"][7],
        $_SESSION["committed_answers"][8], $_SESSION["committed_answers"][9], $_SESSION["committed_answers"][10],
        $_SESSION["committed_answers"][11], $_SESSION["committed_answers"][12], $_SESSION["committed_answers"][13],
        $_SESSION["committed_answers"][14], $_SESSION["committed_answers"][15], $_SESSION["committed_answers"][16],
        $_SESSION["committed_answers"][17], $_SESSION["committed_answers"][18], $_SESSION["committed_answers"][19],
        $_SESSION["committed_answers"][20], $_SESSION["committed_answers"][21], $_SESSION["committed_answers"][22],
        $_SESSION["committed_answers"][23], $_SESSION["student_row_id"]);
  $stmt->execute();
  $stmt->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <?php echo file_get_contents("./global/head-tags.html") ?>

    <!-- Prevent this page from being indexed by search engines. -->
    <meta name="robots" content="noindex">
</head>

<body>
  <div class="container" style="padding-top:325px; padding-bottom:325px;">
    <?php if( !isset($_POST["finished_willingly"]) || empty($_POST["finished_willingly"]) ) {
      echo('<h1 align="center" style="font-size:48px;">Time is up.</h1>');
    } ?>
    <h1 align="center" style="font-size:64px;">Thank you for participating!</h1>
  </div>
</body>
