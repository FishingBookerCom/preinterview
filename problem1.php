/* Prepraviti postojeći kod tako da se smanji ponavljanje koda. Ne treba podrazumevati ništa o sadržaju “varijacija ponuda”. */

/* NE MENJATI */
$offer = new stdClass();
$offer->variation0 = 'a';
$offer->variation1 = 'b';
$offer->variation2 = 'c';
$offer->variation3 = 'd';
$offer->variation4 = 'e';
$offer->variation5 = 'f';
$offer->variation6 = 'g';
$offer->variation7 = 'h';
$offer->variation8 = 'i';
$offer->variation9 = 'j';
/* NE MENJATI */


foreach($offer as $key) {
    print "Here’s what we have to offer: $key";
}

