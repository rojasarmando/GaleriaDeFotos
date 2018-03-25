<?php 
	require_once('iconos.php');
	require_once('armando.php');

	class Modal extends Html{

		var $titulo; 
		var $foto; 
		var $parrafo; 

		public function Modal($titulo,$parrafo,$foto){

			$this->titulo = $titulo;
			$this->foto = $foto;
			$this->parrafo = $parrafo; 

		}

		public function show(){

			$this->cabeza($this->titulo);
			$this->cuerpo($this->parrafo,$this->foto); 
			$this->pie();  
		}


		private function cabeza($titulo){
			
			$I = new IconosBootstrap; 

			echo "<div class=modal fade  id=ventanaEmergente>"; 
			echo "<div class=modal-dialog >";
			echo "<div class=modal-content >";
			echo "<div class=modal-header >";
			echo "<div class=modal-title > ";
			echo "<h2 class=\"text-danger  text-center\">" ;
			echo $titulo; 	 
			$I->generar("fire");   
			echo "</h2>"."</div>"."</div>";
		}

		private function cuerpo($parrafo,$foto){
			
			$I = new IconosBootstrap; 

			echo "<div class=modal-body>"; 
			echo "<div class=\"panel \">"; 
			echo "<div class=panel-body>"; 
			echo "<blockquote class=\"bg-primary\">"; 

			$this->img($foto); 

			echo "<div class=\"well text-muted\">".$parrafo."</div>"; 
			echo "</blockquote>"; 


			echo "<button type=\"button\" class=\"btn btn-lg btn-primary btn-group-justified \">";   
			echo "OK";
			 $I->generar("eject"); 

			echo "</button>"."</div>"."</div>"."</div>"; 
		}

		private function pie(){

			echo "</div>"."</div>"."</div>";

			echo "<script>"; 
			echo "$(document).ready(function(){";
			echo "$(\"#ventanaEmergente\").modal('show');";
			echo "$(\"button\").click(function(){";
			echo "$(\"#ventanaEmergente\").modal('hide');";
			echo "});"."});"."</script>";
		}
	}

 ?>