<?php

class View{
	
	//buat view dengan parameter
	public static function createView($view,$param){
		foreach ($param as $key => $value) {
			$$key = $value;
		}

		ob_start();
		include 'view/'.$view;
		$content = ob_get_contents();
		ob_end_clean();
		
		ob_start();
		include 'view/halaman/layout.php';
		$include = ob_get_contents();
		ob_end_clean();
		return $include;
	}

	//buat view tanpa parameter
	public static function createView2($view){
		ob_start();
		include 'view/'.$view;
		$content = ob_get_contents();
		ob_end_clean();
		
		ob_start();
		include 'view/halaman/layout.php';
		$include = ob_get_contents();
		ob_end_clean();
		return $include;
	}

	//buat view tanpa layout
	public static function createView3($view, $param){
		foreach ($param as $key => $value) {
			$$key = $value;
		}

		ob_start();
		include 'view/'.$view;
		$content = ob_get_contents();
		ob_end_clean();
		
		return $content;
	}
	
		//buat view tanpa layout dan parameter
	public static function createView4($view){
		ob_start();
		include 'view/'.$view;
		$content = ob_get_contents();
		ob_end_clean();
		
		return $content;
	}
}
?>
