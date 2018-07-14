<?php include "conectare.php" ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Guest Book</title>

    <!-- Bootstrap core CSS -->
    <link href="static/bootstrap.min.css" rel="stylesheet"> 
    <!-- Bootstrap theme -->
    <link href="static/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="static/theme.css" rel="stylesheet">

  </head>

  <body>

    <div class="container theme-showcase" role="main">

      <div class="jumbotron">
        <h1>Guest Book</h1>
        <a type="button" class="btn btn-link" href="sign.php"><h3>Sign the Guest Book</h3></a>
      </div>
      <?php 

        $sql = "SELECT * FROM users;";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $name = $row['nume'];
          $comment = $row['comment'];
          echo "<div class='page-header'>
                  <h1>" . $name . "</h1>
                </div>
                <div class='well'>
                  <p>" . $comment . "</p>
                </div>";
          echo "<form action='modificare.php' method='POST'>
                  <input type='submit' class='btn btn-danger' value='Delete' name='danger'>
                  <input type='submit' class='btn btn-primary' value=' Edit ' name='edit'>
                  <input type='hidden' name='idbut' value='" . $id . "'>
                  <input type='hidden' name='nume' value='" . $name . "'>
                </form>";


        }

      ?>
      

    </div> <!-- /container -->

  </body>
</html>