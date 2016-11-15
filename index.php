
<?php
function __autoload($class){
    $pathToClassFile = __DIR__ . '/src/' .$class.'.php';
    if(file_exists($pathToClassFile)){
        require_once $pathToClassFile;
    }
}
//Price::show(123);
//echo Price::$CURRENCY;


$tire1 =new Tire("rosava",1.25,500,12,"175/65",13,"winter");
$disc1 = new Disc("BBS",1.15,100,20,"175/65",14,"Gamno");
$batt = new Battery("Boch",1.10,150,10,"porche",90,40,60);

$tireValidate = new TireValidate();
var_dump($tireValidate);

if($tireValidate->getValidate($tire1)){
    echo "Tire is VALID \n";
}else{
    echo "Tire is not VALID \n";
}
echo $tire1->getInfo();

var_dump($disc1);

$diskValide=new DiskValidate();
print_r($diskValide);
if($diskValide->getValidate($disc1)){
    echo "Disc is VALID \n";
}else{
    echo "Disc is not VALID \n";
}
echo $disc1->getInfo();
echo $batt->getInfo();


$collection=new Collection();
echo $collection->name;

