/* Implementiraj funkciju koja proverava da li su zagrade unutar datog stringa ispravno uparene. */

function check_brackets($str) {
    return FALSE;
}

assert(check_brackets('asd') === TRUE);
assert(check_brackets('(asd)') === TRUE);
assert(check_brackets('(asd))') === FALSE);
assert(check_brackets('(asd()') === FALSE);
assert(check_brackets('a(s[d]fg)h{}jk') === TRUE);
assert(check_brackets('[{]]') === FALSE);


/* JavaScript */

function check_brackets(str){
  let stack = [];
  for(let i = 0; i< str.length ; i++){
    
    let c = str[i];
    if (
        c === '(' ||
        c === '[' ||
        c === '{' 
       ) {
      stack.push(c);
      continue;
    }

    if( c === ')' ) {
      if(stack.pop() === '(') continue;
      return false;
    }
    
    if( c === ']' ) {
      if(stack.pop() === '[') continue;
      return false;
    }
    
    if( c === '}' ) {
      if(stack.pop() === '{') continue;
      return false;
    }
    
  }
  
  return stack.length === 0 ? true: false;
}
