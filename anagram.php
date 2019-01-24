<?php

function checkAnagram($word1,$word2){
    if(count_chars($word1,2) == count_chars($word2,2)){
        echo "This words are anagram";
    } 
    else{
        echo "This words are not anagram";
    }
}

echo checkAnagram("word", "ward");
?>