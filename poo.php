<?php

class Triangulo
{

    public $base;
    public $altura;

    function __construct()
    {
        /* $this->base = $base;
        $this->altura = $altura; */
    }
    function getBase()
    {

        return $this->base;
    }
    function setBase($base)
    {
        $this->base = $base;
    }

    function getAltura()
    {
        return $this->altura;
    }

    function setAltura($altura)
    {

        $this->altura = $altura;
    }

    function calcularArea($base, $altura)
    {
        $area = ($base * $altura) / 2;
        return $area;
    }
}
?>
<body bgcolor="F7F76C">
<h3>
    <center>Area de un triangulo con OOP<small>(valores fijos)</small></center>
</h3>
<?php

$equilatero = new Triangulo();
echo "<center><li> Base: 12 </center></li><br>";
echo "<center><li> Altura: 13 </center></li> <br>";
echo "<center>El AREA del triangulo es: ", $equilatero->calcularArea(12, 13), "</center>";

/* 
$equilatero = new Triangulo();
$equilatero->setBase(12);
$equilatero->setAltura(13);
echo "La base del triangulo es: ", $equilatero->getBase(), "<br>";
echo "La altura del triangulo es: ", $equilatero->getAltura(), "<br>";
echo "El AREA del triangulo es: ", $equilatero->calcularArea($equilatero->getBase(), $equilatero->getAltura()), "<br>";
echo "El AREA del triangulo es: ", $equilatero->calcularArea("E","R"); ---->da cero */


?>