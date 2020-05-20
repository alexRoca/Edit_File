<?php
/*
$file = "file_prueba.txt";
$texto = "Hola que tal";
$fp = fopen($file, "w");
fwrite($fp, $texto, 4); // Escribirá sólo: Hola
*/

// al copiar  se debe tener en cuenta que el texto del archivo se toma como un array string
// al que se le modificaran desde la posisicon especificada, esto quiere decir que si
// el texto que colocas es mayor al texto que deseas reemplazar, si hay mas texto este se borrara
// hasta ocupar todo el texto nuevo, si no hay mas texto despues del que deseas reemplazar
// este si el texto nuevo es mayor este se añadira en nuevas lineas o espacios.

  $fh   = fopen("file_prueba.php", 'r+') or die("Ocurrio un error al abrir el archivo");
  $texto = fgets($fh);
  
  //fseek($fh, 0, SEEK_END);
  fseek($fh, 3372, SEEK_SET);
  fwrite($fh, "'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'lwrwpn4e_demov',
	'dbdriver' => 'mysqli',
	'dbprefix' => 'tec_',
	'pconnect' => FALSE,
	'db_debug' => FALSE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => FALSE
);") or die("No se puede escribir en el archivo");
  fclose($fh);  
  
  echo "Modificado correctamente";

