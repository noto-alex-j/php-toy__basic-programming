<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function filterNumbers($arr) {
	$little = array();
	foreach ($arr as $x) {
		if ($x < 10) {
			array_push($little, $x);
		}
	}
	return $little;
}


// Write your own "tests" below. Refer to the the examples from exercise #1.

echo "\nTesting whether array contains elements equal to or larger than 10.\n";
if (filterNumbers(array(1,3,6,9,10,15,24,45)) == array(1,3,6,9)) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting whether array contains elements equal to or larger than 10.\n";
if (filterNumbers(array(3,11,16,5,35,2)) == array(3,5,2)) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting whether array contains elements equal to or larger than 10.\n";
if (filterNumbers(array(10,23,106,2)) == array(2)) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>