/* Implementiraj funkciju koja proverava da li su zagrade unutar datog stringa ispravno uparene. */

function check_brackets($str) {
    $len = strlen($str);
    $stack = array();
    for ($i = 0; $i < $len; $i++) {
        switch ($str[$i]) {
			case '(':
			case '[':
			case '{':
            case '<': array_push($stack, $str[$i]); break;			
            case ')': if (array_pop($stack) !== '(') return FALSE;  break;
            case ']': if (array_pop($stack) !== '[') return FALSE;  break;
			case '}': if (array_pop($stack) !== '{') return FALSE;  break;
            case '>': if (array_pop($stack) !== '<') return FALSE;  break;
 
           
            default: break;
        }
    }
    return empty($stack);
}

assert(check_brackets('asd') === TRUE);
assert(check_brackets('(asd)') === TRUE);
assert(check_brackets('(asd))') === FALSE);
assert(check_brackets('(asd()') === FALSE);
assert(check_brackets('a(s[d]fg)h{}jk') === TRUE);
assert(check_brackets('[{]]') === FALSE);
