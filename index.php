<!-- Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60 -->
<?php

$matches = [
   '01-05' =>[
      'squadre' => [
         'casa' => 'Milano',
         'ospite' => 'Cantu',
      ],
      'punti' =>[
         'casa' => 160,
         'ospite' => 80,
      ]
   ],
   '28-04' =>[
      'squadre' => [
         'casa' => 'chiavenna',
         'ospite' => 'Sondrio',
      ],
      'punti' =>[
         'casa' => 90,
         'ospite' => 110,
      ]
   ],
   '22-04' =>[
      'squadre' => [
         'casa' => 'Lugano',
         'ospite' => 'Lecco',
      ],
      'punti' =>[
         'casa' => 68,
         'ospite' => 44,
      ]
   ],
];

foreach ($matches as $key => $value){
 echo "$key {$value["squadre"]["casa"]} - {$value["squadre"]["ospite"]} |  {$value["punti"]["casa"]} - {$value["punti"]["ospite"]} <br> ";
}

?>