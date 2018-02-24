<?php

function buscaFoto($id){

$fotos = fotos();

foreach ($fotos as $foto) {

if($foto['id'] == $id){
  return $foto;
}

}

}

function fotos(){

  $fotos = [
    [
      'id' => 1,
      'title' => 'Centro financiero',
      'url' => 'centro-financiero.php',
      'img' => 'image/lima1.jpg',
      'intro' => 'El centro financiero se encuentra en el distrito de San Isidro.'
    ],
    [
        'id' => 2,
        'title' => 'Costa verde',
        'url' => 'costa-verde.php',
        'img' => 'image/lima2.jpg',
        'intro' => 'La costa verde vista desde el distrito de Miraflores.'

    ],
    [
      'id' => 3,
      'title' => 'Malecon de Miraflores',
      'url' => 'malecon-miraflores.php',
      'img' => 'image/lima3.jpg',
      'intro' => 'Vista de Chorrillos desde el Malecon de Miraflores.'
    ]

  ];

return $fotos;

}

?>
