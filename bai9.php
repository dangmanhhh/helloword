<?php
/* First method to create array. */
$numbers = array( 1, 2, 3, 4, 5);

foreach( $numbers as $value ) {
    echo "Value is $value <br />";
}


/* Second method to create array. */
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

foreach( $numbers as $value ) {
    echo "Value is $value <br />";
}



?>
<div>
<?php
/* First method to associate create array. */
$salaries = array(
    "mohammad" => 2000,
    "qadir" => 1000,
    "zara" => 500
);

echo "Salary of mohammad is ". $salaries['mohammad'] . "<br ?>";
?>
</div>

<div>
<?php
$array =[5, 4, 3, 2, 1];
sort($array); //TRUE
print_r($array);
// output: Array ( [0] => 1 [1] =>n 2 [2] => 3 [3] => 4 [4] => 5 )
?> 
</div>