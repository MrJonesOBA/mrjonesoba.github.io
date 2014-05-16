<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap_cerulean.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  
<!-- header -->
<?php
include "nav.html";
?>


<!-- popup box -->

<?php
include "modalpopup.html";
?>


<!-- jumbotron -->

<div class="container">
  <div class="jumbotron">
    <h1>Welcome to Computing & IT</h1>
    <p>at Ormiston Bushfield Academy</p>
  </div>
</div>


<!-- content -->

<div class="container" style="padding-bottom: 100px">
  <div class="row">
    <div class="col-md-4">
      <h3>Curriculum</h3>
      <p>Find out about our Key Stage 3, 4 and 5 curricula and see what software and skills will be developed. With cutting-edge facilities and industry-level software we aim to ensure that our students gain skills and experience that are both relevant and desirable in both employment and higher education.</p>
      <a href="curriculum.html" class="btn btn-default">Read more</a>
    </div>
    <div class="col-md-4">
      <h3>Resources</h3>
      <p>Log in with your <b>obamail</b> google account to access a range of useful resources for classwork, homework and extra-curricular activities.</p>
      <a href="resources.html" class="btn btn-default">Read more</a>
    </div>
    <div class="col-md-4">
      <h3>Tutorials</h3>
      <p>A wealth of live and downloadable files and projects to keep you busy outisde of the classroom. Visit the official OBA Computing & IT YouTube channel for clear and straightforward tutorials.</p>
      <a href="tutorials.html" class="btn btn-default">Read more</a>
    </div>
  </div>
</div>


<!-- footer -->

<?php
include "footer.html";
?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>