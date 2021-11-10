<?php
    require_once("ConexionFabrica.php");

    $fabrica = new ConexionFabrica();

    $cx1 = $fabrica->getConexion("MySql");
    $cx1->Conectar();
    echo "<br>";
    $cx1->Desconectar();
    echo "<br>";
    echo "<br>";
    $cx2 = $fabrica->getConexion("Oracle");
    $cx2->Conectar();
    echo "<br>";
    $cx2->Desconectar();
    echo "<br>";
    echo "<br>";
    $cx3 = $fabrica->getConexion("SqlServer");
    $cx3->Conectar();
    echo "<br>";
    $cx3->Desconectar();
    echo "<br>";
    echo "<br>";
    $cx4 = $fabrica->getConexion("sss");
    $cx4->Conectar();
    echo "<br>";
    $cx4->Desconectar();
    echo "<br>";
    echo "<br>";



?>