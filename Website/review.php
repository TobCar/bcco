<!DOCTYPE html>
<html>

  <head>
      <?php echo file_get_contents("./global/head-tags.html") ?>
      <!-- Used by the edit buttons. -->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <!-- Prevent this page from being indexed by search engines. -->
      <meta name="robots" content="noindex">
      <title>BCCO Review Page</title>
  </head>


  <body>
      <h1 class="title">BC Computing Olympiad 2017</h1>

      <!-- Student Info -->
      <p class="text-center student-info"><?php echo $_SESSION["student_name"] ?> | <?php echo $_SESSION["school_name"] ?></p>
      <!-- End Student Info -->

      <!-- Heading for table for Multiple Choice Qs -->
      <h2 class="text-center" style="margin-top:32px;">Multiple Choice</h2>
      <hr style="width: 50%; margin-left: auto; margin-right: auto">
      <!-- End Heading for table for Multiple Choice Qs -->

      <!-- Show Question Form, Allows for answers to be edited -->
      <form action="http://www.inovaca.org/bcco/show-question.php" method="post">

        <!-- Table for Multiple Choice Qs -->
        <table id="multiplechoice">

            <!-- Column Titles for the table -->
            <tr>
                <th class="review-question-column-m">Question</th>
                <th class="review-answer-column">Answer</th>
                <th class="icon-h">Edit</th>
            </tr>


            <tr>
                <td><?php echo $_SESSION["mc_questions"][0]?></td>
                <td class="answer"><?php if( isset($_SESSION["committed_answers"][0]) ){ echo $_SESSION["committed_answers"][0]; } ?></td>
                <td class="icon"><button name="jump_to" value="0" class="fa fa-pencil"></button></td>
            </tr>


            <tr>
                <td><?php echo $_SESSION["mc_questions"][1]?></td>
                <td class="answer"><?php if( isset($_SESSION["committed_answers"][1]) ){ echo $_SESSION["committed_answers"][1]; } ?></td>
                <td class="icon"><button name="jump_to" value="1" class="fa fa-pencil"></button></td>
            </tr>


            <tr>
                <td><?php echo $_SESSION["mc_questions"][2]?></td>
                <td class="answer"><?php if( isset($_SESSION["committed_answers"][2]) ){ echo $_SESSION["committed_answers"][2]; } ?></td>
                <td class="icon"><button name="jump_to" value="2" class="fa fa-pencil"></button></td>
            </tr>


            <tr>
                <td><?php echo $_SESSION["mc_questions"][3]?></td>
                <td class="answer"><?php if( isset($_SESSION["committed_answers"][3]) ){ echo $_SESSION["committed_answers"][3]; } ?></td>
                <td class="icon"><button name="jump_to" value="3" class="fa fa-pencil"></button></td>
            </tr>


            <tr>
                <td><?php echo $_SESSION["mc_questions"][4]?></td>
                <td class="answer"><?php if( isset($_SESSION["committed_answers"][4]) ){ echo $_SESSION["committed_answers"][4]; } ?></td>
                <td class="icon"><button name="jump_to" value="4" class="fa fa-pencil"></button></td>
            </tr>


            <tr>
                <td><?php echo $_SESSION["mc_questions"][5]?></td>
                <td class="answer"><?php if( isset($_SESSION["committed_answers"][5]) ){ echo $_SESSION["committed_answers"][5]; } ?></td>
                <td class="icon"><button name="jump_to" value="5" class="fa fa-pencil"></button></td>
            </tr>

            <tr>
                <td><?php echo $_SESSION["mc_questions"][6]?></td>
                <td class="answer"><?php if( isset($_SESSION["committed_answers"][6]) ){ echo $_SESSION["committed_answers"][6]; } ?></td>
                <td class="icon"><button name="jump_to" value="6" class="fa fa-pencil"></button></td>
            </tr>


            <tr>
                <td><?php echo $_SESSION["mc_questions"][7]?></td>
                <td class="answer"><?php if( isset($_SESSION["committed_answers"][7]) ){ echo $_SESSION["committed_answers"][7]; } ?></td>
                <td class="icon"><button name="jump_to" value="7" class="fa fa-pencil"></button></td>
            </tr>


            <tr>
                <td><?php echo $_SESSION["mc_questions"][8]?></td>
                <td class="answer"><?php if( isset($_SESSION["committed_answers"][8]) ){ echo $_SESSION["committed_answers"][8]; } ?></td>
                <td class="icon"><button name="jump_to" value="8" class="fa fa-pencil"></button></td>
            </tr>


            <tr>
                <td><?php echo $_SESSION["mc_questions"][9]?></td>
                <td class="answer"><?php if( isset($_SESSION["committed_answers"][9]) ){ echo $_SESSION["committed_answers"][9]; } ?></td>
                <td class="icon"><button name="jump_to" value="9" class="fa fa-pencil"></button></td>
            </tr>


            <tr>
                <td><?php echo $_SESSION["mc_questions"][10]?></td>
                <td class="answer"><?php if( isset($_SESSION["committed_answers"][10]) ){ echo $_SESSION["committed_answers"][10]; } ?></td>
                <td class="icon"><button name="jump_to" value="10" class="fa fa-pencil"></button></td>
            </tr>


            <tr>
                <td><?php echo $_SESSION["mc_questions"][11]?></td>
                <td class="answer"><?php if( isset($_SESSION["committed_answers"][11]) ){ echo $_SESSION["committed_answers"][11]; } ?></td>
                <td class="icon"><button name="jump_to" value="11" class="fa fa-pencil"></button></td>
            </tr>


            <tr>
                <td><?php echo $_SESSION["mc_questions"][12]?></td>
                <td class="answer"><?php if( isset($_SESSION["committed_answers"][12]) ){ echo $_SESSION["committed_answers"][12]; } ?></td>
                <td class="icon"><button name="jump_to" value="12" class="fa fa-pencil"></button></td>
            </tr>


            <tr>
                <td><?php echo $_SESSION["mc_questions"][13]?></td>
                <td class="answer"><?php if( isset($_SESSION["committed_answers"][13]) ){ echo $_SESSION["committed_answers"][13]; } ?></td>
                <td class="icon"><button name="jump_to" value="13" class="fa fa-pencil"></button></td>
            </tr>


            <tr>
                <td><?php echo $_SESSION["mc_questions"][14]?></td>
                <td class="answer"><?php if( isset($_SESSION["committed_answers"][14]) ){ echo $_SESSION["committed_answers"][14]; } ?></td>
                <td class="icon"><button name="jump_to" value="14" class="fa fa-pencil"></button></td>
            </tr>

        </table>
        <!-- End of Table for Multiple Choice Qs -->


      <br>
      <!-- Heading for Table for Free Response Qs -->
      <h2 class="text-center">Free Response</h2>
      <hr style="width: 50%; margin-left: auto; margin-right: auto">
      <!-- End Heading for Table for Free Response Qs -->

      <!-- Table for Free Response Qs -->
      <table id="longanswer">

          <!-- Captions for Table for Long Answer Qs -->
            <tr>
              <th class="review-question-column">Question</th>
              <th class="review-answer-column">Answer</th>
              <th class="icon-h">Edit</th>
          </tr>


          <tr>
              <td><?php echo $_SESSION["fr_questions"][0]?></td>
              <td class="answer"><?php if( isset($_SESSION["committed_answers"][15]) ){ echo $_SESSION["committed_answers"][15]; } ?></td>
              <td class="icon"><button name="jump_to" value="15" class="fa fa-pencil"></button></td>
          </tr>


          <tr>
              <td><?php echo $_SESSION["fr_questions"][1]?></td>
              <td class="answer"><?php if( isset($_SESSION["committed_answers"][16]) ){ echo $_SESSION["committed_answers"][16]; } ?></td>
              <td class="icon"><button name="jump_to" value="16" class="fa fa-pencil"></button></td>
          </tr>


          <tr>
              <td><?php echo $_SESSION["fr_questions"][2]?></td>
              <td class="answer"><?php if( isset($_SESSION["committed_answers"][17]) ){ echo $_SESSION["committed_answers"][17]; } ?></td>
              <td class="icon"><button name="jump_to" value="17" class="fa fa-pencil"></button></td>
          </tr>


      </table>
      <!-- End Table for Free Response Qs -->

      <input type="hidden" name="is_editing" value="true">

    </form>
    <!-- End Show Question Form -->

      <br>
      <br>

      <!-- Submit Button -->

    <form action="http://www.inovaca.org/bcco/finish.php" method="post">
      <input type="submit" class="btn btn-default" style="margin:0 auto; display:block; width:160px; margin-bottom: 16px;" name="submit" value="Submit">
      <input type="hidden" name="finished_willingly" value="true">
    </form>

  </body>

</html>
