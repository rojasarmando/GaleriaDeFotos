<?php 

class Html{

	//etiqueta BASE
	public function etiqueta($t1, $t2 = "0",$t3=0){
		#t1 etiqueta
		#t2 texto 
		#t3 elementos extra

		echo "<$t1 $t3>"; 

		if($t2 != "0"){
			echo $t2; 
			echo "</$t1>";
		}

	}// etiqueta base

	public function cierre($t1){

		echo "</".$t1.">";
	}

	public function row(){

		echo "<section class=row>"; 

	}

	public function container(){ 

		echo "<div class=container>";
	}

	public function rowC(){

		echo "</section>"; 

	}

	public function autoCierre($arreglo){

		for ($i=0; $i < count($arreglo) ; $i++) 
		$this->etiqueta("/".$texto[$i]);
	

	}



	//Etiqueta automatica div=error
	public function error(){
		$this->etiqueta("div id=error style=\"visibility:hidden \" "," ");
	}

	//etiqueta <p>, es autocerrable

	public function p($texto){
		echo "<p>".$texto."</p>"; 
	}

	//etiqueta <div>

	public function div($texto){
		$this->etiqueta("div $texto "); 
	}

	//etiqueta <input>

	public function input($texto){
		$this->etiqueta("input $texto"); 
	}

	//<br>

	public function salto($n){
		if($n > 0)
			for ($i=0; $i < $n; $i++) 
				echo "<br>";
			
	}

	public function select($registro){
		$this->etiqueta("select");
		foreach ($registro as  $t) $this->etiqueta("option",$t); 
		$this->etiqueta("/select"); 
	}



	public function validacion($n){
		if($n == 1) return " onkeypress=\"return validar_usuario(event)\" "; 
		else if($n == 2) return " onkeypress=\"return validar_clave(event)\" ";
		else if($n == 3) return " onkeyup=\"return this.value = this.value.toUpperCase() \" ";
		else if($n == 4 ) return " onkeypress=\"return validar_numero(event)\" ";
	}

	public function img($texto){
		$this->etiqueta("img  class=img-responsive src=img/$texto "); 
	}


}// clase para hacer las etiquetas Html



?>