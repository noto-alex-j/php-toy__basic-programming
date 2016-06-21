<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function uppercasesAllLetters($str) {
  return strtoupper($str);
}

// Write your own "tests" below. Refer to the the examples from exercise #1.

echo "\nTesting that string is now in uppercase.\n";
if (uppercasesAllLetters("lowercase") == "LOWERCASE") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that string is now in uppercase.\n";
if (uppercasesAllLetters("Omaha Code School") == "OMAHA CODE SCHOOL") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>
