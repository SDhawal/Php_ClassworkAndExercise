<?php

function goodNameThatRepresentsWhatIAmDoing(){
    echo "Dhawal";
}

/**
 * @param $someVariable
 * @return false|int|string
 */
function returningSomething($someVariable){
    switch ($someVariable){
        case 3:
            return 3;
            break;
        case "a":
            return "a";
            break;
        default:
            return false;

    }
}
echo returningSomething(3)."<br>";
echo returningSomething("a")."<br>";
echo returningSomething(true)."<br>";
goodNameThatRepresentsWhatIAmDoing();