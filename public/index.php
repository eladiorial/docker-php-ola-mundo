<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Docker PHP Ola Mundo</title>
  </head>
  <body>
    <?php if ($_POST['quen'] != '') {?>
      <h1>Ola <?php echo htmlspecialchars($_POST['quen']); ?></h1>
      <a href="index.php">Saúda a alguén máis</a>
    <?php } else { ?>
      <form class="saudosForm" action="index.php" method="post">
        <label for="quen">Di ola a</label>
        <input type="text" name="quen">
        <input type="submit" name="saudo" value="Di ola">
      </form>
    <?php } ?>
  </body>
</html>
