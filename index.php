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

//el @ es para ignorar el mensaje de error del servidor

  //$fh   = @fopen("fi le_prueba.php", 'r+') or die("Ocurrio un error al abrir el archivo");
  $fh   = @fopen("file_prueba.php", 'r+');
  
  /*if(!$fh){
	  echo "no se pudo Modificar file";
  }else{*/
	  //$texto = @fgets($f);
	  //fseek($fh, 0, SEEK_END);
	  @fseek($fh, 3437, SEEK_SET);
	  /*@fwrite($fh, "'hostname' => 'localhost',
		'username' => 'root',
		'password' => '123456789',
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
	  fclose($fh); */
	  
	  if( @fwrite($fh, "'hostname' => 'localhost',
		'username' => 'root',
		'password' => '123456789',
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
		);")){// or die("No se puede escribir en el archivo")){
			
		  echo "Modificado correctamente";
		  fclose($fh);
		  
	  }else{
		  
		  echo "error al Modificar el file";
		  
	  }
	  
	  
//}
		
/*		
$file = "file_prueb.php";
$gestor = @fopen($file, "r+");
$contador=0;
if(!$gestor){
	echo "no se pudo leer archivo";
}else{
	while (($búfer[$contador] = fgets($gestor, 4096)) !== false) {
			//echo $búfer[$contador]."<br>";
			//$contenido[$contador]=$búfer[$contador];
			$contador++;
		}

	  

	for($i=0; $i<$contador; $i++){
		 echo $i." - ".$búfer[$i];
		 echo "<br>";
	}



	fclose($gestor);//cierras el fichero 
}
*/



