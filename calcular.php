<?php 
 
   
  require_once 'Sumar.php';
  require_once 'Resta.php';
  
  $objsuma = new sumar();
  $objResta = new Resta();
     
  $numero1 = $_POST["txtnumero1"];
  $numero2 = $_POST["txtnumero2"];
  
  if(isset($_POST["btnsumar"])){
      $objsuma->setNumero1($numero1);
      $objsuma->setNumero2($numero2);
      echo $objsuma->sumar();
    }


    if(isset($_POST["btnrestar"])){
        $objResta->setNumero1($numero1);
        $objResta->setNumero2($numero2);
        echo $objResta->restar();
      }

  
?>