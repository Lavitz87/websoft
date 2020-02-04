<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>About this site</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="favicon.ico">
</head>

<body>

  <div id='page-content'>
    <div class="wrapper">


      <div id="mydiv">

        <div id="duck" class="duck"></div>

      </div>


      <div class="sticky">
          <?php include 'view/header.php'; ?>
      </div>

      <main class="main">
        <article>

          <h1 class="HeaderCenter">About</h1>
          <section class="textblock">
            <p>This website is part of the course websoft <a href="https://www.hkr.se/en/course/DA377B">Software Development for the Web</a>.</p>

            <p>This About website is a short reflection on what this course is about and what we have done so far.
              <br>
              This course will cover many different programming languages. So far we have only covered git and some html. This website is created with the help of Git and cloning an already existing repository, where the teacher have some examples
              which we copy and then add our own comments or own content to already created website.</p>

            <p> <img src="img/whatisweb.jpg" width="500" alt="What is web devolpment"></p>

            <p>Url to the course repo on <a href="https://github.com/Webbprogrammering/websoft">GitHub</a></p>

        </article>
      </main>
    </div>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
      <?php include 'view/footer.php'; ?>
    <script src="js/snowman.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </div>
</body>

</html>
