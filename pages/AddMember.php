<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Member</title>
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="/style/style.AddMember.css">
  
</head>
<body>
  <header>
    <div class="headerTitle">
      <h1>MELSSEN HOME SERVER</h1>
    </div>

    <nav class="headerNav">
      <?php
      echo ' 
      <a href="/index.php">HOME</a>
      <a href="/pages/AddMember.php">ADD MEMBER</a>
      <a href="/pages/ViewMembers.php">VIEW MEMBERS</a>
      ';
      ?>
    </nav>
  </header>

  <main>
    <h2>Add a Family Member</h2>
    <form action="../../includes/formhandler.inc.php" method="post">
        <input type="text" name="firstName" placeholder="first name" />
        <input type="text" name="lastName" placeholder="last name" />
        <input type="text" name="birthDate" placeholder="birth date" />
        <button>Submit</button>
    </form>
  </main>
</body>
</html>