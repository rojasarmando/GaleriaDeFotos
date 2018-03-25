<?php 

 require ('php/head.php'); 
 include('php/Carousel.php'); 
 include('php/Banner.php');
 include('php/Panel.php');

 ?>

<body>


<?php 

	$banner = new Banner("unefa.png");
	$banner->show();



	# <!-- Carussel -->
	$fotos= array("presentacion.png","presentacion3.png","presentacion2.png");
	$galeria = new Carousel($fotos); 
	$galeria->show();

?>

	
<?php

	echo "<div class=row>";
	echo "<div class=\"container salto\">";

	$registro =  array(  

		
		array("Playa Cayo de Agua","Esta increíble playa de una suave arena blanca se encuentra rodeada por el mar Caribe por ambos lados. La playa se encuentra ubicada dentro del Parque Nacional Los Roques y ha sido elegida como la segunda playa más popular de América del Sur, después de la brasileña Playa do Sancho. Este paraíso natural es uno de los mejores lugares de Venezuela y vale la pena conocerlo. Sus distintas tonalidades de azul, atrae a miles de turistas.","2.jpg"),
		array("Playa Arapito","Dentro del Parque Nacional Mochima, parque ubicado entre los estados venezolanos de Sucre y de Anzóategui, se encuentra la turística playa de Arapito. Esta playa, junto con otra gran cantidad de playas que presenta el parque, son ideales para distintos deportes náuticos tales como velerismo y submarinismo gracias a sus cálidas aguas pertenecientes al mar Caribe. Además los turistas pueden visitar una infinidad de islas pertenecientes al parque ya las que se puede acceder desde distintos embarcaderos, ya sea desde Puerto La Cruz, Guanta, Lechería y en Mochima.","3.jpg"),
		array("Tepuy Sarisariñama","Este tepuy venezolano se encuentra ubicado en Parque Nacional Jaua Sarisariñama, en el estado de Bolívar. El tepuy posee 2.300 metros de altura y en su sima podemos observar unas formidables cavidades circulares, las cuales representan un gran misterio para la geología hasta hoy en día con un diámetro de 350 metros y una profundidad de igualmente 350 metros .","4.jpg"),
		array("Laguna de Canaima al Atardecer","Dentro del Parque Nacional de Canaima se encuentra la Laguna de Canaima, un lugar bordeado de playas con palmeras y siete cascadas. Esta laguna se localiza a poca distancia del centro urbano de Canaima. La laguna se caracteriza por la variedad de colores de sus aguas, que van desde las tonalidades rojizas por presencia de minerales hasta azules por la fuerza de la caída de las aguas de sus cascadas.","5.jpg"),
		array("Cataratas Kaieteur","Las cataratas Kaieteur se encuentran ubicadas en el Parque Nacional de Kaieteur, en el territorio Esequibo. Estas cataratas son las más grandes del mundo, incluso superan a las cataratas del Niágara en más de 5 metros. Posee una caída libre de 226 metros desde su salida hasta que toca roca por primera vez, enseguida el agua sigue su curso hacia varias cascadas menores, llegando a alcanzar los 256 metros en total.","6.jpg" ),
		array("Tepuy Roraima","El tepuy Roraima es el mayor tepuy o monte del Parque Nacional Canaima, mide 34 kilómetros cuadrados de superficie y alrededor de 2.700 metros de altitud. El pueblo de San Francisco es el punto de partida de los circuitos que suben hasta lo alto. Las travesías duran seis días, deben realizarse con guías y porteadores, y exigen buena forma física.","7.jpg"),
		array("Isla Coche","Al sur de la isla Margarita se encuentra la isla Coche, en el mar Caribe. una isla árida pero que posee grandes salinas que producen una excelente calidad de sal, siendo ésta y actualmente el turismo las principales actividades económicas de la isla. Su capital es la ciudad de San Pedro de coche. En la isla se pueden practicar diversos deportes acuáticos ya que siempre tiene una agradable brisa ideal para los amantes del windsurf.","8.jpg"),
		array("Virgen de la Paz","Este es el ícono del estado, la patrona espiritual del pueblo y en honor a ella se erigió un monumento a 1.600 mts. De altura en un lugar llamado La Peña de la Virgen donde se dice que apreció la madre de Dios en 1570. Resulta que esta gran escultura mide 46.72 metros de altura, lo que la hace la pieza habitable más grande de América, superando por unos centímetros a la Estatua de la Libertad de Nueva York. Pero, ¿Qué pasa que no se habla de ella como de la dama estadounidense? ¿Por qué es uno de los monumentos contemporáneos menos visitados del país? Tal vez se deba al carácter tranquilo de los habitantes de este estado y por supuesto a la poca promoción turística que por años ha dejado de recibir este suelo.
Sin embargo, el sitio inaugurado durante el gobierno de Luis Herrera Campins si tiene unas cuantas visitas. El ingreso cuesta tan sólo 10 bs y una vez chequean el ticket se puede comenzar el ascenso por la estructura de 1.200 toneladas. Antes tenía un ascensor que llevaba a la gente hasta el tercer piso. El aparato se dañó y ahora hay que hacer todo el recorrido a pie. Cada cierto tiempo hay una estación con un mirador y al final una angosta escalera conduce a una troja que se encuentra a la altura de los ojos. Dicen que si el día está claro se logra ver el Lago de Maracaibo. Sin embargo, lo que si se aprecia desde allí son las casitas esparcidas que representan a Trujillo y el parque que adorna los espacios del monumento, mucho pino, mucho verde, algunas caminerías y gente de un lado a otro desfrutando del lugar","9.jpg"),
		array("Parque Nacional Mochima","Dentro del Parque Nacional Mochima, parque ubicado entre los estados venezolanos de Sucre y de Anzóategui, se encuentra la turística playa de Arapito. Esta playa, junto con otra gran cantidad de playas que presenta el parque, son ideales para distintos deportes náuticos tales como velerismo y submarinismo gracias a sus cálidas aguas pertenecientes al mar Caribe. Además los turistas pueden visitar una infinidad de islas pertenecientes al parque ya las que se puede acceder desde distintos embarcaderos, ya sea desde Puerto La Cruz, Guanta, Lechería y en Mochima. ","1.jpg")
		

		);

	for ($i=0; $i < count($registro); $i++) { 
	
		$panel = new Panel($i,$registro[$i][0],$registro[$i][1],$registro[$i][2]);
		$panel->show();
	}

	echo "</div>"."</div>"."<div id=pantalla></div>";
?>
	<script> window.oncontextmenu = function(){return false}</script>		
<?php

 	include('php/pie.php'); 
 ?>
