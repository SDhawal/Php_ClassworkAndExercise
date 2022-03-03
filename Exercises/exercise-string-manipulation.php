<?php
const SENTENCE = 'A sentence to be displayed by putting one word per line';
function showTitle($title)
{
    echo "<br/><b>&#9830; $title </b><br/>";
}


showTitle('Exercise 1: Display 1 word per line.');
$piece = explode(" ", SENTENCE);
for ($position = 0; $position < count($piece); $position++) {
    echo $piece[$position];
    echo "<br>";
}
echo '<hr/>';
showTitle('Exercise 2: Reverse display 1 word per line.');
$reverse = array_reverse($piece);
for ($position = 0; $position < count($reverse); $position++) {
    echo $reverse[$position];
    echo "<br>";
}

echo '<hr/>';
showTitle('Exercise 3: Display number of Words in Sentence.');
echo "Number of words in the sentence are : " . str_word_count(SENTENCE);
echo '<hr/>';
showTitle('Exercise 4: Display number of characters in sentence.');
echo "Number of letters in the sentence are : " . strlen(SENTENCE);
echo '<hr/>';
showTitle('Exercise 5: Display number of characters excluding spaces');
$cloneSentence = SENTENCE;
$excludeSpaces = str_replace(" ", "", $cloneSentence);
echo "Number of characters excluding spaces are : " . strlen($excludeSpaces);
echo '<hr/>';
showTitle('Exercise 6: Display sentence with all characters UPPERCASE');
echo strtoupper(SENTENCE);
echo '<hr/>';
showTitle('Exercise 7: Display sentence with each word first letter Capitalized');
echo ucfirst(SENTENCE);
echo '<hr/>';
showTitle('Exercise 8: Display sentence with all characters lowercase');
echo strtolower(SENTENCE);
