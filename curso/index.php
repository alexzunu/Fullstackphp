<?php

include "includes/header.php";

$title = "Hola";
$intro = "Bienvenido a mi página web. Mi nombre es Marco y soy fotografo aficionado.";
$subtitle = "Fotos de lima";

$fotos = [
  [
    'title' => 'Centro financiero',
    'url' => 'centro-financiero.php',
    'img' => 'image/lima1.jpg'
  ],
  [

      'title' => 'Costa verde',
      'url' => 'costa-verde.php',
      'img' => 'image/lima2.jpg'

  ],
  [
    'title' => 'Malecon de Miraflores',
    'url' => 'malecon-miraflores.php',
    'img' => 'image/lima3.jpg'
  ]

]

?>

  <h1><?php echo $title ?></h1>

  <p><?= $intro ?></p>

  <h2><?= $subtitle ?></h2>

<?php foreach($fotos as $foto):?>

<div class="card">
  <div class="card-content">
    <h3><a href="<?= $foto ['url']?>"><?= $foto ['title']?></a></h3>
    <img src="<?= $foto ['img']?>">
  </div>
</div>
<?php endforeach; ?>

  <h4>Mi equipo</h4>
  <p>Canon 9D</p>

<?php

include "includes/footer.php";

?>
