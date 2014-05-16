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


<!-- content -->

<div class="container" style="padding-bottom: 100px">
  <div class="row">
    <div class="col-md-4">
      <h3>Key Stage 3</h3>
      <p>This is what you'll learn at Key Stage 3.</p>
      <a href="keystage3.html" class="btn btn-default">Read more</a>
    </div>
    <div class="col-md-4">
      <h3>Key Stage 4</h3>
      <p>This is what you'll learn at Key Stage 4.</p>
      <a href="keystage4.html" class="btn btn-default">Read more</a>
    </div>
    <div class="col-md-4">
      <h3>Key Stage 5</h3>
      <p>This is what you'll learn at Key Stage 5.</p>
      <a href="keystage5.html" class="btn btn-default">Read more</a>
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