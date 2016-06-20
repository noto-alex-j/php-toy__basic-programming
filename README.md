# Toy Problem - PHP

## Basic Programming

### Objectives

1. Practice using higher order functions in PHP.

This exercise includes a few basic programming questions. Solve them in any order you like, but know that they more-or-less increase in difficulty.

### Getting Started

Fork this repo and open it in your development environment (e.g. Cloud9, or on your computer if it's been set up for development). That's about it for setup.

Your work belongs in the files in the **lib/** directory. To run a file, simply execute `php path/to/file.php` in a terminal. E.g. `php lib/1_is_greater_than_five.php` will run that file.

Do not change the name of the functions. Simply alter the body of the function to get the tests passing.

There is no `bin/check` script. You should write your own tests, as the examples indicate in the first exercise.

### Problem Details

There are four programming problems in this set of exercises. Each is described below:

#### is_greater_than_five($num)

This function should return either `true` or `false`, depending on whether `$num` is greater than `5` or not.

You can safely assume that `$num` will always be some valid integer.

#### uppercases_all_letters($str)

This function should return a string of all capital letters--specifically it should convert `$str` into all-caps. So it the inputted `$str` is `"dog"`, then this function would return `"DOG"`.

You can safely assume that `$str` will always be some valid string.

#### add_up_numbers($arr)

This function should add up all of the numbers in `$arr` and return the sum. The inputted `$arr` will always be an array/list like `[5, 10, 2]`. With this example, the function would return `17`.

#### filter_numbers($arr)

This function should return an array/list with all numbers **10 or greater** removed. That is, it should go through `$arr`, which might be something like `[30, 5, 9, 10, 11]`, and remove the numbers 10 or greater. In this case, it would return `[5, 9]`.

You can safely assume `$arr` will always be some array/list of numbers.