/* Implementiraj funkciju koja proverava da li su zagrade unutar datog stringa ispravno uparene. */

function check_brackets($str) {
    $brackets = array('(' => ')', '{' => '}', '[' => ']');
    $stackArray = array();
    $str = preg_replace("/[a-zA-Z0-9]/", "", $str);
    $strLength = strlen($str);
    if($str != '' && $strLength >= 2){
        for ($i=0; $i < $strLength; $i++) {
            $currentStr = $str[$i];
            if($brackets[end($stackArray)] == $currentStr){
                array_pop($stackArray);
            }else{
                array_push($stackArray, $currentStr);
            }
        }
    }
    return !count($stackArray);
}

assert(check_brackets('asd') === TRUE);
assert(check_brackets('(asd)') === TRUE);
assert(check_brackets('(asd))') === FALSE);
assert(check_brackets('(asd()') === FALSE);
assert(check_brackets('a(s[d]fg)h{}jk') === TRUE);
assert(check_brackets('[{]]') === FALSE);
