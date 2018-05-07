<?php
/**
 * Created by PhpStorm.
 * User: Florian Bogendorfer
 */


require_once "ball.php";
require_once "ballInterface.php";

require_once "fußball.php";
require_once "basketball.php";
require_once "volleyball.php";

$profiFußball = new Fußball("Profifußball",38,"Leder");
$kinderFußball = new Fußball("Kinderfußball",28,"Kunststoff");

$profiBasketall = new Basketball("Profibasketball",42,"Leder");
$kinderBasketall = new Fußball("Kinderbasketball",32,"Kunststoff");

$profiVolleyball = new Volleyball("Profivolleyball",35,"Leder");
$kinderVolleyball = new Volleyball("Kindervolleyball",25,"Kunststoff");


$balls = ["profiFußball" => $profiFußball,
    "kinderFußball" => $kinderFußball,
    "profiBasketball" => $profiBasketall,
    "kinderBasketall" =>$kinderBasketall,
    "profiVolleyball" => $profiVolleyball,
    "kinderVolleyball" => $kinderVolleyball];



echo"<form method='post'>";
echo"<select name='format'>";
echo"<option selected value='''></option>";
echo"<option value='json'>JSON</option>";
echo"<option value='xml'>XML</option>";
echo"<option value='html'>HTML</option>";
echo"</select>";


echo"<select name='ball'>";
echo"<option selected value='''></option>";
foreach ($balls as $key => $ball){
    echo"<p>" . $key . "</p>";
    echo "<option value='" . $key . "'>" . $key . "</option>";
}
echo "<option value='Kunststoff'>Kunststoffbaelle</option>";
echo "<option value='Leder'>Lederbaelle</option>";
echo "</select>";



echo"<input type='submit' name='submit' value='Submit'/>";
echo "</form>";

if (isset($_POST['submit'])) {
    if($_POST['ball'] == "Leder"){
        foreach ($balls as $it){
            if($it->getMaterial() <=> "Leder"){
                $it->printData($_POST['format']);
            }
            if($it->getMaterial() <=> "Kunststoff"){
                $it->printData($_POST['format']);
            }
        }
    }else{
        $balls[$_POST['ball']]->printData($_POST['format']);
    }
}

