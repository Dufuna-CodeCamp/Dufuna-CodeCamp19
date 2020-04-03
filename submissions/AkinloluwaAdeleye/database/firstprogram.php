<?php
$temperature =  "20";

if ($temperature <= "20" ){
  echo "it is really cold today!";  
} else if ($temperature >= "20" && $temperature < 30){
    echo "The weather is just perfect!";
} else if ( $temperature >= 30 && $temperature < 40){
    echo "it is so hot today!";
} else {
    echo "Am i in the sahara";
}
?>
<?php
for ($x = 0; $x <=50; $x++) {
    if ($x % 2==0) {
        echo "This is the number: $x <br>";
    }    
}

?>
<?php
$age = array ("Volvo" => "35", "BMW" => "40", "Toyota" => "50");
foreach($age as $x => $x_value) {
    echo "key=" . $x . ", value=" . $x_value;
    echo "<br>";
} 
?>
<?php
$name = array ("Volvo" => "design" , "BMW" => "Racing", "Toyota" => "Flexibility");
foreach($name as $x => $x_value) {
    echo "My name is" . $x . ". I love" . $x_value;
    echo "<br>";
}
?>