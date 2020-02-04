<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>List of schools</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="favicon.ico">
</head>

<body>
  <div id='page-content'>
    <div class="wrapper">

      <div id="mydiv">

        <div id="duck" class="duck"></div>

      </div>
      <!--
  Comments are written as HTML style.
-->
      <div class="sticky">
        <?php include 'view/header.php'; ?>
      </div>


      <h1 class="HeaderCenter">List of schools</h1>

      <p id='htmlbutton'><button id="fetchButton" onclick="fetchScools()">Fetch</button></p>

      <div id="content">
        <table id="showData"></table>
      </div>


    </div>
      <?php include 'view/footer.php'; ?>
  </div>
  <script src="js/snowman.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/school.js"></script>
</body>

</html>
