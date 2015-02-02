<?php
require_once('simpletest/autorun.php');
include ('computadora.php');
include ('listado.php');

class TestOfLogging extends UnitTestCase {
    function testFirstLogMessagesCreatesFileIfNonexistent() {
    }
}

class pruebaComputadora extends UnitTestCase {
	function testDibujarTabla(){
	$prueba = new Computadora("https://aga-osl.herokuapp.com/stock/1.json");
	$this->assertEqual('OK', $prueba->dibujaTabla());}
}

class pruebaListado extends UnitTestCase {
	function testDibujarListado(){
	$prueba2 = new Listado("https://aga-osl.herokuapp.com/stock.json");
	$this->assertEqual('OK', $prueba2->dibujaListado());}
}


?>