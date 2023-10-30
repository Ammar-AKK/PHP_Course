<form action="array.php" method="GET">
    <input type="text" name="name">
    <input type="submit">
</form>

<?php

//$family = array("Father", "Mother", "Brother");
//      0         1          2    



$name = $_GET["name"];

$score = [
    "Ahmed" => [
        "Score" => "90",
        "Grade" => "A"
    ],
    "Hesham" => [
        "Score" => "80",
        "Grade" => "C"
    ],
    "Elias" => [
        "Score" => "40",
        "Grade" => "F"
    ]
];

echo "Score: " . $score[$name]["Score"];
echo "<br>";
echo "Grade: " . $score[$name]["Grade"];

?>



<?php
/*
//Associative Array
$family = [
"Designer" => "Nour", 
"Programmer" => "Ziad", 
"Gamer" => "Ammar"
];
echo $family[$xname];
*/
?>