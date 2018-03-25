<?php 

	require_once ('armando.php');

	class Banner extends Html
	{
		
		var $img; 

		function Banner($imagen){

			$this->img = $imagen; 
		}

		function show(){

			$this->cabeza();
			$this->getImagen($this->img);
			$this->pie();
		}

		private function cabeza(){

			$this->row();
			$this->container();
			$this->div("class=\"col-md-12 col-lg-12\""); 
		}

		private function getImagen($img){

			$this->img($img);

		}


		private function pie(){

			$this->autoCierre(array("/div","/div","/section"));
		}


	}


 ?>