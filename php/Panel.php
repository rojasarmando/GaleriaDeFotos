<?php 
	require_once ('armando.php');

	class Panel extends Html{

		var $titulo;
		var $parrafo;
		var $img;
		var $id;

		public function Panel($id,$titulo,$parrafo,$img){

			$this->id = $id;
			$this->titulo = $titulo;
			$this->parrafo = $parrafo;
			$this->img = $img;
		}

		public function show(){
			
			$this->cabeza($this->titulo);


			$this->cuerpo($this->img,$this->id);


			$this->pie($this->id,$this->titulo,$this->img,$this->parrafo); 	
		}

		private function pie($id,$t,$img,$parrafo){

				echo "<script>"; 
				echo "$('#ft".$id."').click(function() {"; 
				echo "$.post('php/mensaje.php',{";
				echo "titulo: '".$t."',";
				echo "foto: '".$img."',";
				echo "parrafo: '".$parrafo."'";
				echo "}, function(data) {";
				echo "$(\"#pantalla\").html(data);"; 
				echo "});"."});"."</script>"; 
		}

		private function cuerpo($img,$id){

			$this->div("class=panel-body");
			echo "<a id=ft".$id.">";
			$this->img($img);
			echo "</a>";
				
			for ($i=0; $i < 5; $i++) echo "</div>"; 

		}

		private function cabeza($t){

			echo "<div class=\"col-md-6 col-lg-6\">";
			$this->div("class=panel"); 
			$this->div("class=panel-collapse"); 
			$this->div("class=\"panel-heading text-danger \""); 
			$this->div("class=\"panel-title text-center \""); 
			$this->etiqueta("h3",$t);
			echo "</div>";

		}
	}

 ?>