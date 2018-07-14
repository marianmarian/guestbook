<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign the Guest Book</title>

    <!-- Bootstrap core CSS -->
    <link href="static/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="static/sign.css" rel="stylesheet">
  </head>

  <body>
    <?php
      $id = $_SESSION['id'];
      $nume = $_SESSION['nume'];
      
    ?>

    <div class="container">

      <form class="form-signin" action="edit.db.php" method="POST">
        <h2 class="form-signin-heading">Sign the Guest Book</h2>
        <div class="form-group">
          <label for="inputName" class="sr-only">Name</label>
          <input type="text" name="inputName" class="form-control" value="<?php echo $nume ?>" required autofocus>
        </div>
        <div class="form-group">
          <label for="comment" class="sr-only">Comment:</label>
            <textarea class="form-control" rows="5" name="comment" placeholder="Comment" required></textarea>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign</button>
      </form>

    </div> <!-- /container -->

  </body>
</html>