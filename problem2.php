/* Implementiraj funkciju koja proverava da li su zagrade unutar datog stringa ispravno uparene. */

function check_brackets($str) {
	$bracket0 = 0;
	$bracket1 = 0;
	$bracket2 = 0;
	for($i=0; $i<strlen($str); $i++){
		if($str[$i]=='(')
			$bracket0++;
		if($str[$i]==')')
			$bracket0--;
		if($str[$i]=='[')
			$bracket1++;
		if($str[$i]==']')
			$bracket1--;
		if($str[$i]=='{')
			$bracket2++;
		if($str[$i]=='}')
			$bracket2--;
	}
	$ret = $bracket0==0 && $bracket1==0 && $bracket2==0;
    return $ret;
}

assert(check_brackets('asd') === TRUE);
assert(check_brackets('(asd)') === TRUE);
assert(check_brackets('(asd))') === FALSE);
assert(check_brackets('(asd()') === FALSE);
assert(check_brackets('a(s[d]fg)h{}jk') === TRUE);
assert(check_brackets('[{]]') === FALSE);
