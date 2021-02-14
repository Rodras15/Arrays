<center><h1>Ejercicio 1</h1></center>
<h2>Crea un array con los meses del año y muestra el que te indique el usuario a través de un formulario con un campo de tipo select</h2>
<form>
<button>Mostrar</button>
<input name="mes" id="mes" value="<?=$_GET["mes"]?>"onkeyup="Mostrar()"/>
</form>
<br/>
<?php
if(!isset($_GET["mes"]))
	$_GET["mes"]=1;
$meses = [
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
];
$mes= $_GET['mes'];
foreach ($meses as $n=>$m){
if ($n==$mes-1){
echo $m;
}}

?>
</br>
</br>

<div id="t"></div>
<script>

mes = [
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
];
function Mostrar(){
	meses=document.getElementById('mes').value;
document.getElementById('t').innerHTML =mes[meses-1];
}
Mostrar();
</script>

<br>
<br>
<br>
<center><h1>Ejercicio 2</h1></center>
<h2>Crea un array con el nombre de tus compañeros, en qué puesto se sienta y selecciona uno de ellos al azar indicando su nombre y puesto</h2>

<?php
$companeros = [
	'Andrei	(Mesa 1, silla 1)',
	'Fabian	(Mesa 2, silla 1)',
	'Hector	(Mesa 2, silla 2)',
	'Gabriel	(Mesa 2, silla 3)',
	'Agustina	(Mesa 4, silla 1)',
	'Daniel	(Mesa 4, silla 2)',
	'Nury	(Mesa 5, silla 1)',
	'Ismael	(Mesa 6, silla 1)',
	'Pepe	(Mesa 6, silla 2)',
	'Jesus	(Mesa 7, silla 1)',
	'Javier Sañudo	(Mesa 8, silla 1)',
	'Rodrigo Suárez	(Mesa 8, silla 2)',
	'Alvaro	(Mesa 8, silla 3)',
	'Alfonso	(Mesa 9, silla 1)',
	'Darius	(Mesa 10, silla 1)',
	'Ivan	(Mesa 10, silla 2)',
	'Rodrigo Tejo	(Mesa 10, silla 3)',,
];
$i=rand(0,count($companeros));
$c=0;
foreach($companeros as $m=>$nombre){
		$c++;

		if($i==$c)
			echo $m. '-'.$nombre.'<br/>';
}
?>
</br>
<div id="r3"></div>
<script>
		puestos= [
			'Andrei	(Mesa 1, silla 1)',
			'Fabian	(Mesa 2, silla 1)',
			'Hector	(Mesa 2, silla 2)',
			'Gabriel	(Mesa 2, silla 3)',
			'Agustina	(Mesa 4, silla 1)',
			'Daniel	(Mesa 4, silla 2)',
			'Nury	(Mesa 5, silla 1)',
			'Ismael	(Mesa 6, silla 1)',
			'Pepe	(Mesa 6, silla 2)',
			'Jesus	(Mesa 7, silla 1)',
			'Javier Sañudo	(Mesa 8, silla 1)',
			'Rodrigo Suárez	(Mesa 8, silla 2)',
			'Alvaro	(Mesa 8, silla 3)',
			'Alfonso	(Mesa 9, silla 1)',
			'Darius	(Mesa 10, silla 1)',
			'Ivan	(Mesa 10, silla 2)',
			'Rodrigo Tejo	(Mesa 10, silla 3)',
		];
	i=Math.random()*((puestos.length)-1);
	i=Math.round(i);
	console.log(i);
	console.log(puestos);
	document.getElementById('r3').innerHTML =puestos[i];
</script>


<br>
<br>
<br>


<center><h1>Ejercicio 3</h1></center>
	<h2>Almacena en un array la tabla de cuadrados perfectos y muestra el contenido del array</h2>
<?php
	//arrays
		$raiz = [
			'vacio',
			'√1=>1',
			'√4=>2',
			'√9=>3',
			'√16=>4',
			'√25=>5',
			'√36=>6',
			'√49=>7',
			'√64=>8',
			'√81=>9',
			'√100=>10',
			'√121=>11',
			'√144=>12',
			'√169=>13',
		];
?>

<form>

	<button onclick="seleccionar()"> seleccionar </button>

<?php

	$txt='<select name="resultado raiz(1-13)">';
	for ($i=1; $i<= 13; $i++)
		$txt.='<option>'.$i.'</option>';
	$txt.='</select>';
	echo $txt;
?>
</form>

<?php
echo $txt[$_GET["$txt"]];
?>

<div id="u" </div>

<div id="v" </div>