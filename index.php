<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Rock! Paper! Scissors</h3>
    <form action="handle.php" method="POST">
      <p>Chose one of the options</p>
    <select name="choice" required>
      <option value="Rock">Rock</option>
      <option value="Paper">Paper</option>
      <option value="Scissors">Scissors</option>
    </select>
    <input type="submit" name="submit" value="Submit my choice">
    </form>
  </body>
</html>
