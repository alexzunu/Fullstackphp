<?php

include "includes/header.php";
include "includes/functions.php";

//$id = $_GET['id'];

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$foto = buscaFoto($id);

$title = $foto['title'];
$intro = $foto['intro'];
$img = $foto['img'];

 ?>

 <?php if(empty($foto)): ?>

<h1>Foto no encontrada</h1>

 <?php else: ?>

  <h1><?= $title?></h1>
  <p><?= $intro?></p>

  <div>
    <img src="<?= $img?>">
  </div>

<?php endif ;?>

<?php

include "includes/footer.php";

 ?>
