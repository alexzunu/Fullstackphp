<?php

include "includes/header.php";

if(!empty($_POST)){
  //echo "Formulario enviado<br>";
  $nombre = filter_input(INPUT_POST,'nombre',FILTER_SANITIZE_STRING);
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];

  $cuerpo = "Nombre: $nombre";
  $cuerpo = "Correo: $correo";
  $cuerpo = "Telefono: $telefono";

  if(empty($nombre)){

 ?>

 <h1>Completar la informacion solicitada</h1>

<?php

  } else{

  mail("informesfullstack.pe", "Solicitud de informacion", $cuerpo);

header ("Location: gracias.php?nombre=$nombre");
exit();
}
}

?>

<h1>Contactos</h1>

<form action="contactos.php" method="post">

<div class="formulario">
<label>Nombre</label>
<input type="text" name="nombre">
</div>

<div class="formulario">
<label>Correo</label>
<input type="text" name="correo">
</div>

<div class="formulario">
<label>Teléfono</label>
<input type="text" name="telefono">
</div>

<hr>

<input type="submit" name="Enviar">

</form>


<?php

include "includes/footer.php";

?>
