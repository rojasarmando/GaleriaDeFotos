<?php 
	
	require ('armando.php');


	class Carousel extends Html{

		var $fotos; 

		public function Carousel($foto){

			if(is_array($foto) == true) $this->fotos = $foto; 
		}

		public function show(){

			$this->cabezera();
			$this->item(count($this->fotos)); 
			$this->imagenes($this->fotos); 
			$this->pie();
		}


		private function cabezera(){

			$this->etiqueta("section","0"," class=row ");
			$this->div("class=container");
			$this->div("id=contenedor class=\"col-md-12\"");
			echo "<div id=myCarousel class=\"carousel slide\" align=center >"; 

		}

		private function pie(){
			

			echo "</div>"; 
    		echo " <!-- Carousel nav -->";
      		echo "<a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>"; 
      		echo "<a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>"; 
      		echo "</div>";
			echo "</div>"."</div>"."</section>"; 
		}

		private function item($contador){
			 echo "<ol class=carousel-indicators >"; 

			 echo  "<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>"; 

			 	for ($i=1; $i < $contador; $i++) 
			 		
			 		echo "<li data-target=\"#myCarousel\" data-slide-to=\"".$i."\"></li>"; 

			  $this->etiquet("/ol"); 

		}

	
		
		private function imagenes($foto){


        echo   " <!-- Carousel items --> "; 

        if (is_array($foto) == true ){

        	$this->div("class=carousel-inner");
       
        	$this->div("class=\"active item\"");
     	 	echo " <img  src=img/".$foto[0]." alt=banner1 />"; 
			echo "</div>"; 

			for ($i=1; $i < count($foto); $i++) { 
				$this->div("class=item");
     	 		echo " <img  src=img/".$foto[$i]." alt=banner".$i." />"; 
				echo "</div>"; 

			}

        }
     		
			
		}
		
	}


 ?>