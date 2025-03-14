<!-- programa que lee los elementos de un archivo
	Luego son ordenados y reescritos en el archivo original de forma ordenada
 -->
<?php
$archivo = "test(1).txt";

$line = file($archivo);
if (sort($line)) {
	echo "informacion ordenada<br>";
	// foreach ($line as $i) {
	// 	echo $i."\n";
	// }
	if ($fp = fopen($archivo, "w+")) {
		echo "Se logro abrir el archivo";
		foreach ($line as $id) {
			fwrite($fp, $id);
		}

		fclose($fp);
	} else
		echo "No se pudo abrir el archivo";
}
?>