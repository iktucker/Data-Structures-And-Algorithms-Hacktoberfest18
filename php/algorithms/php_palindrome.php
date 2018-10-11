<?php
// Increments through the string (which is an array of characters)
// checking each character against the characters on the other end.
// If all match by middle of word, returns true.
function php_palindrome($string) {
        for ($i = 0; $i != ceil(strlen($string)/2); $i++) {
                if ($string[$i] != $string[strlen($string) - ($i + 1)]) {
                        return 0;
                }
        }

        return 1;
}

// Test feeds three words in and echos whether the word is a palindrome
$word_array = ['racecar', 'airplane', 'level'];
foreach ($word_array as $string) {
        switch(php_palindrome($string)) {
                case 0:
                        echo "$string is not a Palindrome\n";
                        break;
                case 1:
                        echo "$string is a Palindrome\n";
                        break;
        }
}
?>
