<?php

include "includes/header.php";
include "includes/functions.php";

$title = "Hola";
$intro = "Bienvenido a mi página web. Mi nombre es Marco y soy fotografo aficionado.";
$subtitle = "Fotos de lima";
$fotos = fotos();


?>

  <h1><?php echo $title ?></h1>

  <p><?= $intro ?></p>

  <h2><?= $subtitle ?></h2>

<?php foreach($fotos as $foto):?>

<div class="card">
  <div class="card-content">
    <h3><a href="fotos.php?id=<?= $foto['id']?>"><?= $foto ['title']?></a></h3>
    <img src="<?= $foto ['img']?>">
  </div>
</div>
<?php endforeach; ?>

  <h4>Mi equipo</h4>
  <p>Canon 9D</p>

<?php

include "includes/footer.php";

?>
