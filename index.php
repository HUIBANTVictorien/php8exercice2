<?php
session_start();
$_SESSION['prenom'] = 'Victorien';
$_SESSION['nom'] = 'HUIBANT';
$_SESSION['age'] = 25;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>exercice 2 partie 8 php</title>
</head>
<body>
  <p>
    Bonjour <?php echo $_SESSION['prenom']; ?> !<br/>
    Clique sur le lien !
  </p>
  <p>
    <a href="user.php">Lien vers user.php</a><br/>
  </p>
</body>
</html>
