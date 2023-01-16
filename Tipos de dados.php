<?php
// ***************Escalares-***************/
//String
$nome = "Olá mundo";
var_dump($nome); 
if(is_string($nome)):
    echo "É uma string";
else:
    echo "nao é uma string";
endif;

echo "<hr>";

//Inteiro
$idade = 45;
var_dump($idade);
if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "Nao é um inteiro";
endif;

echo "<hr>";

//Float
$altura = 1.77;
var_dump($altura);
if(is_float($altura)):
    echo "É uma altura";
else:
    echo "Nao é uma altura";
endif;

echo "<hr>";

//Boolean
$admin = True;
var_dump($admin);
if(is_bool($admin)):
    echo "É um booleano";
else:
    echo "Nao é um booleano";
endif;

echo "<hr>";

/************** Compostos ******************* */
$carros = array (56,"Audi",1.85,False);
var_dump($carros);
if(is_array($carros)):
    echo "É um array";
else:
    echo "Nao é um array";
endif;

echo "<hr>";

/*********** Object ************************** */
class cliente{
    public $nome;
    public function atribuirNome($nome){
        $this->$nome=$nome;

    }
}
$cliente = new cliente();
$cliente -> atribuirNome ("Rodrigo");
var_dump($cliente);

if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Nao é um objeto";
endif;

echo "<hr>";

/*********** Especiais  ***********************/
//NULL
$cidade= NULL;
var_dump($cidade);

//Resource

?>
