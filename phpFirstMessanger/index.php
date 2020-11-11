<?php
include 'database.php';
 ?>

 <?php
  $query="SELECT*FROM shouts ORDER BY id DESC";
  $shouts=mysqli_query($con,$query);

  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shout it </title>
    <link rel="stylesheet" href="/firstproject/css/style.css" type="text/css">
   </head>
  <body>
        <div id="container">
          <header>
            <h1>SHOUT IT !! shout box</h1>
            <div id="shouts">
              <ul>
                <?php  while($row=mysqli_fetch_assoc($shouts)):?>
                <li class="shout">
                  <Span><?php echo $row['time'] ?></span>
                 <strong><?php echo $row['user'] ?>:</strong>
                  <?php echo $row['message'] ?>
                 </li>
                <?php endwhile; ?>
              </ul>
            </div>
            <div id="input">
              <?php if(isset($_GET['error'])) : ?>
                <div class="error"><?php echo $_GET['error']; ?></div>
              <?php endif; ?>
              <form class="" action="/firstproject/process.php" method="post">
                <input type="text" name="user" placeholder="enter ur name">
                <input type="text" name="message" placeholder="enter message">
                <br>
                <input class="shout-btn" type="submit" name="submit" value="shout it out">
              </form>
            </div>
          </header>
        </div>
  </body>
</html>
