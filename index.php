<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Server</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div>
      <h1><strong>MELSSEN HOME SERVER</strong></h1>
    </div>

    <nav class="headerNav">
      <a href="/index.php">HOME</a>
      <a href="/pages/AddMember.php">ADD MEMBER</a>
      <a href="/pages/ViewMembers.php">VIEW MEMBERS</a>
    </nav>
  </header>

  <div>
  <?php
    phpinfo();
  ?>
  </div>
</body>
</html>