function check_brackets($str) {
	static $brackets = array(
	')' => '(',
	']' => '[',
	'}' => '{',
	'>' => '<'
	);
    $len = strlen($str);
    $stack = array();
    for ($i = 0; $i < $len; $i++) {
        switch ($str[$i]) {
        
		case '(':
		case '[':
		case '{':
	        case '<': array_push($stack, $str[$i]); break;			
            	case ')': 
            	case ']': 
		case '}': 
            	case '>': if ($brackets[$str[$i]] !== array_pop($stack)) return FALSE;    break;
 
           
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
