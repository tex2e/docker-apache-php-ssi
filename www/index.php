<!DOCTYPE html>
<html>
<head>
  <meta charset="UFT-8">
  <title>SSI Injection</title>
</head>
<body>
  <h2>Apache2 + PHP + SSI Example</h2>
  <form action="index.php" method="get">
    <input type="text" name="comment"/><br/>
    <input type="submit" value="Submit"/>
  </form>

<?php
if (isset($_GET['comment'])) {
  $comment = $_GET['comment'];
  echo 'Comment: ' . $comment;
}
?>
</body>
</html>
