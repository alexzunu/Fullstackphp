<?php

$menu = [
  "index.php" => "Home",
  "contactos.php" => "Contactos"
];

?>


<!doctype html>
<html>
<!-- Inicio encabezado -->
<head>
  <title>Mi página web personal</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<!-- Fin encavezado -->

<!-- Inicio Cuerpo -->
<body>

<div id="main">

  <div id="menu">

<?php foreach($menu as $url => $link): ?>

    <a href="<?= $url ?>" class="menu-link"> <?= $link ?></a>

  <?php endforeach;?>
  </div>
