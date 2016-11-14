
<?php

function __autoload($class){
    $pathToClassFile = __DIR__ . '/src/' .$class.'.php';
    if(file_exists($pathToClassFile)){
        require_once $pathToClassFile;
    }
}

$tire1 =new Tire("rosava","rashka",500,12,"175/65",13);
$disc1 = new Disc("BBS","China",100,20,50,"Gamno");
$batt = new Battery("Boch","Germany",150,10,"porche",90,40,60);

$tireValidate = new TireValidate();

if($tireValidate->getValidate($tire1)){
    echo "Tire is VALID \n";           //// Why is not valid????!
}else{
    echo "Tire is not VALID \n";
}


echo $tire1->getInfo();
//echo "<hr>";
echo $disc1->getInfo();
echo $batt->getInfo();


