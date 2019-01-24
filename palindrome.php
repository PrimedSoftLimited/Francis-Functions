<?php 

function checkPolindrome($word){
    if($word == strrev($word)){
        echo "This word is a palindrome";
    } else {
        echo "This word is not a palindrome";
    }
}

echo checkPolindrome("madam");
?>