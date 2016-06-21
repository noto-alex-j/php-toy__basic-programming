<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function addUpNumbers($arr) {
  return array_sum($arr);
}

// Write your own "tests" below. Refer to the the examples from exercise #1.

echo "\nTesting that array elements are summed.\n";
if (addUpNumbers([10,20,30,40,50]) == 150) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that array elements are summed.\n";
if (addUpNumbers([0.5,1.5,3.0]) == 5.0) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>
