<!DOCTYPE html>
<html>

<head>
    <?php echo file_get_contents("./global/head-tags.html") ?>
</head>

<body>
    <!-- Hero Image -->
    <section id="hero">
        <!-- Site Name -->
        <div class="text-center" style="margin-left:10%;margin-right:10%;padding-top:3%;">
            <div class="row tab">
                <div class="col-sm-3" onclick="location.href='#about';">
                    About
                </div>
                <div class="col-sm-3" onclick="location.href='/description.pdf';">
                    Rules
                </div>
                <div class="col-sm-3" onclick="location.href='#sponsors';">
                    Sponsors
                </div>
                <div class="col-sm-3" onclick="location.href='#contact';">
                    Contact
                </div>
            </div>
        </div>
        <div style="padding:140px;">
            <img src="/img/bcco-logo.png" alt="BCCO Logo" style="width:140px; margin: auto;">

            <h1 style="text-align: center; font-size: 75px;">British Columbia Computing Olympiad</h1>
            <!-- End Site Name -->

            <!-- Subtitle -->
            <p>Presented by <a href="http://www.inovaca.org" style="color: white;"><strong><em>Inova Computer Association</em></strong></a></p>
            <!-- End Subtitle -->
        </div>
    </section>
    <!-- End Hero Image -->

    <?php
      // Display alerts. Login scripts return to the homepage if they fail.

      if( isset($student_id_exists) && !$student_id_exists ) {
        echo('<div class="alert alert-danger alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error</strong> Invalid student ID.
        </div>');
      } else if( isset($school_id_exists) && !$school_id_exists ) {
        echo('<div class="alert alert-danger alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error</strong> Invalid school ID.
        </div>');
      }

      ?>

        <!-- Login Forms -->
        <section id="login">
            <div class="row" style="margin:0px;">
                <div class="col-md-6" style="border-right: solid #FAFAFA 3px; padding: 16px 0px 16px 0px;">
                    <p style="font-size:50px;font-weight:bold;">LOGIN</p>
                    <p>Attempting to log in as a student before the contest opens will result in an immediate ban.<br>You will have an hour to write the test from the moment you log in.</p>
                </div>
                <!-- Teacher Login -->
                <div class="col-md-6 text-center" style="border-left: solid #FAFAFA 3px; padding: 16px 0px 16px 0px;">
                    <center>
                        <form action="https://www.bcco-inovaca.org/school-login" method="post" style="display:inline;">
                            <label style="margin-right:12px;">Teacher:</label>
                            <input type="text" name="school_id" placeholder="School ID" required style="margin-right:8px;">
                            <button type="submit" class="btn btn-default btn-login">Log In</button>
                        </form>
                        <br>
                        <br>
                        <form action="https://www.bcco-inovaca.org/student-login" method="post" style="display:inline;">
                            <label style="margin-right:10px;">Student:</label>
                            <input type="text" name="student_id" placeholder="Student ID" required style="margin-right:8px;">
                            <button type="submit" class="btn btn-default btn-login">Log In</button>
                        </form>
                    </center>
                </div>
                <!-- End Teacher Login -->

            </div>

        </section>
        <!-- End Login Forms -->

        <!-- Start sample contest-->
        <section style="background-color:#FFFFFF;">
           <div class="container" style="padding-top:16px;padding-bottom:16px;">
             <hr>
             <h2 class="text-center" style="font-weight:bold;">SAMPLE CONTEST</h2>
             <hr>
             <p style="text-align:center;">Practice using our contest interface.</p>
             <form action="https://www.bcco-inovaca.org/student-login" method="post" style="text-align:center;margin-top: 30px;">
                 <input type="hidden" name="student_id" value="DEMO">
                 <button type="submit" class="blue-btn btn-login">Start Sample Contest</button>
             </form>
             <hr>
           </div>
       </section>
       <!-- End sample contest -->

        <!-- Contest Explanation -->
        <a class="anchor" id="about"></a>
        <section style="background-color:#FAFAFA;">
            <div class="container" style="padding-top:16px;padding-bottom:16px;">
                <hr>
                <h2 class="text-center" style="font-weight:bold;">About</h2>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h2>What</h2>
                    </div>
                    <div class="col-sm-10">
                        <p>The British Columbia Computing Olympiad (BCCO) is a contest that tests computer-related logic and thinking skills for students in grades 7 to 9. It is free to write either online or on paper, and consists of 15 multiple choice and 3 free response questions. No prior knowledge of computer science is required to write the BCCO; any questions that require background knowledge will provide it in the question. For more detailed information, please read our <a href="http://www.bcco-inovaca.org/description.pdf">contest specifications</a>.</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h2>When</h2>
                    </div>
                    <div class="col-sm-10">
                        <p>The contest will be held on May 24th, 2018 from 9:00-10:00AM. The time limit for the BCCO is 1 hour.</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h2>Where</h2>
                    </div>
                    <div class="col-sm-10">
                        <p>BCCO will be written in-school, with the supervising teacher administering the contest.</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h2>Who</h2>
                    </div>
                    <div class="col-sm-10">
                        <p>The contest is available to anyone in grades 7 to 9 in an official school of British Columbia.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h2>Why</h2>
                    </div>
                    <div class="col-sm-10">
                        <p>The aim of this contest is to promote computer science for students in BC at an early age. Through this competition, students can find computer science to be interesting and that in the future they will be more involved in the field of technology and other related subjects.
                        </p>
                    </div>
                </div>
                <center>
                    <p>To register for this contest, please talk to your computer science/math teacher and they will sign you up. If your teacher doesn't have school login, please contact us at bcco@inovaca.org</p>
                </center>
            </div>
        </section>
        <!-- End Contest Explanation -->


        <!-- Sponsors -->
        <a class="anchor" id="sponsors"></a>
        <div class="container text-center" style="padding-bottom:16px;padding-top:16px;">
            <hr>
            <h2 style="font-weight:bold;">Sponsors</h2>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <a href="http://www.hivevancouver.com/"><img src="/img/sponsors/hive.png" alt="" style="height:160px;">
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="https://www.codeschool.com/"><img src="/img/sponsors/codeschool.png" alt="" style="height:160px;">
                    </a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <a href="https://www.lighthouselabs.ca/"><img src="/img/sponsors/lighthouselabs.png" alt="" style="height:100px;">
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="https://www.redacademy.com"><img src="/img/sponsors/redacademy.png" alt="" style="height:100px;"></a>
                </div>
            </div>
        </div>
        <!-- end Sponsors -->

        <!-- Contact Form -->
        <section id="contact" style="background-color:#FAFAFA;padding: 16px 0px 16px 0px;">
            <div class="container">
                <hr>
                <h2 class="text-center" style="font-weight:bold;">Contact Us</h2>
                <hr>
                <div style="margin-left:20%; margin-right:20%;">
                    <form style="margin-left: 3%; margin-right: 3%;" action="./forms/contact" method="post">
                        <div class="form-group">
                            <label style="font-weight:bold;">Name:</label>
                            <input class="form-control" type="text" placeholder="Name" name="cf_name" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold;">Email:</label>
                            <input class="form-control" type="email" placeholder="Email" name="cf_email" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold;">Message:</label>
                            <textarea class="form-control" name="cf_message" style="height:150px; resize:vertical;" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <input style="margin-top:10px;" type="submit" value="Send" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Contact Form -->

</body>

<style>
    footer {
        background-color: #bfbfbf;
        color: white;
    }
</style>
<?php echo file_get_contents("./global/footer.html") ?>

</html>
