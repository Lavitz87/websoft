<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Search</title>
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
          <section class="textblock">
            <?php
            /**
             * A page controller
             */
            require "config.php";
            require "src/functions.php";

            // Get incoming values
            $search = $_GET["search"] ?? null;
            $like = "%$search%";
            //var_dump($_GET);

            if ($search) {
                // Connect to the database
                $db = connectDatabase($dsn);

                // Prepare and execute the SQL statement
                $sql = <<<EOD
            SELECT
                *
            FROM tech
            WHERE
                id = ?
                OR label LIKE ?
                OR type LIKE ?
            ;
            EOD;
                $stmt = $db->prepare($sql);
                $stmt->execute([$search, $like, $like]);

                // Get the results as an array with column names as array keys
                $res = $stmt->fetchAll();
            }




            ?>

            <h1>Search the database</h1>

            <form>
                <p>
                    <label>Search:
                        <input type="text" name="search" value="<?= $search ?>">
                    </label>
                </p>
            </form>

            <?php if ($search) : ?>
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Label</th>
                        <th>Type</th>
                    </tr>

                <?php foreach ($res as $row) : ?>
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["label"] ?></td>
                        <td><?= $row["type"] ?></td>
                    </tr>
                <?php endforeach; ?>

                </table>
            <?php endif; ?>

          </section>
      <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    </div>

      <?php include 'view/footer.php'; ?>
    <script src="js/snowman.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </div>
</body>

</html>
