<?php
 class config{
	  	const HOST="localhost";
	  	const USER="root";
	  	const PASS="";
	  	const DB="web_guru";

  }
class startup extends config{
static function connect(){
 	try{

	        $db = new PDO('mysql:host='.self::HOST.';dbname='.self::DB,self::USER,self::PASS);
         	//виставляємо роботу з помилками
         	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         	//встановлюємо кодування
         	$db->query("SET NAMES utf8");
			
			}
		catch(PDOException $e){
			die("Error: ".$e->getMessage());
	 }
	return $db;
  	}
  }

for($i=0;$i<10;$i++) {
		echo $i.'<br>';
		echo 'hello word!';	
	}
	$sdd=234;
	$dfg='fdsgabdfgh';
	
	echo $dfg;
	$w=13414;
	
?>
