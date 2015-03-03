function price_of($ingredients, $prices) {
	$sum = 0;
    foreach ($ingredients as $i) {
	$sum += $prices[$i['name']]*$i['amount'];
	}
	return $sum;
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
