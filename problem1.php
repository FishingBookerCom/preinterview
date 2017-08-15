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

echo 'Here’s what we have to offer: '.$offer->variation0;
echo 'Here’s what we have to offer: '.$offer->variation1;
echo 'Here’s what we have to offer: '.$offer->variation2;
echo 'Here’s what we have to offer: '.$offer->variation3;
echo 'Here’s what we have to offer: '.$offer->variation4;
echo 'Here’s what we have to offer: '.$offer->variation5;
echo 'Here’s what we have to offer: '.$offer->variation6;
echo 'Here’s what we have to offer: '.$offer->variation7;
echo 'Here’s what we have to offer: '.$offer->variation8;
echo 'Here’s what we have to offer: '.$offer->variation9;

/* Naglaseno mi je da umesto php-a mogu da koristim jezik koji mi je najzgodniji. Izabrao sam JavaScript, ali se slicno moze uraditi i u php-u. Dovoljno je proci kroz sve kljuceve objekta petljom, i dohvatiti vrednost */

let offer = {}
offer.variation0 = 'a';
offer.variation1 = 'b';
offer.variation2 = 'c';
offer.variation3 = 'd';
offer.variation4 = 'e';
offer.variation5 = 'f';
offer.variation6 = 'g';
offer.variation7 = 'h';
offer.variation8 = 'i';
offer.variation9 = 'j';

Object.keys(offer).forEach(key => {
  console.log(`Here\`s what we have to offer: ${offer[key]}`)
})

