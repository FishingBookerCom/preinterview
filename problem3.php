/* Dino je gladan i odlazi u Agi pastu da uzme svoje omiljene "Funghi Fusilli" */
/* Implementirati funkciju koja za zadati niz sastojaka i niz cena pojedinačnih sastojaka vraća ukupnu cenu sastojaka. */

function price_of($ingredients, $prices) {
    return FALSE;
}

assert(
   price_of(
       array(
           array('name' => 'Fusili',                    'amount' => 3),
           array('name' => 'Pavlaka',                   'amount' => 2),
           array('name' => 'Šampinjoni',                'amount' => 2),
           array('name' => 'Devičansko maslinovo ulje', 'amount' => 1),
           array('name' => 'Bosiljak',                  'amount' => 1),
           array('name' => 'Parmezan',                  'amount' => 1)
       ),
       array(
           'Fusili'                    => 20,
           'Pavlaka'                   => 20,
           'Šampinjoni'                => 25,
           'Devičansko maslinovo ulje' => 20,
           'Bosiljak'                  => 25,
           'Parmezan'                  => 35
       )
   ) === (3*20 + 2*20 + 2*25 + 1*20 + 1*25 + 1*35) // === 230
);


/* Napisan ekvivalent u JavaScriptu, s tim sto je pretpostavljeno da je drugi niz objekat, posto ne postoje asocijativni nizovi. U slucaju da se koristi niz objekata za cene, samo bi trebalo umesto direktnog dohvatanja `prices[curr.name], pronaci objekat u nizu koji ima kljuc trazenog imena, i vratiti vrednost za taj kljuc */


function price_of(ingredients, prices) {
  let cost = ingredients.reduce((acc, curr) => {
    return acc + curr["amount"] * prices[curr.name];
  }, 0);
  
  console.log(cost);
  
}

price_of(
  [
    {'name': 'Fusili', 'amount': 3},
    {'name': 'Sampinjoni', 'amount': 2},
    {'name': 'Pavlaka', 'amount': 2},
    {'name': 'Devičansko maslinovo ulje', 'amount': 1},
    {'name': 'Bosiljak', 'amount': 1},
    {'name': 'Parmezan', 'amount': 1}
  ],
  {
    'Fusili': 20 ,
    'Pavlaka': 20 ,
    'Sampinjoni': 25,
    'Devičansko maslinovo ulje': 20,
    'Bosiljak' : 25 ,
    'Parmezan' : 35
  }
)
 
