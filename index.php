<?php
$N = 1;
$N_MAX = 0;
$card = 0;
$point_A = 0;
$point_B = 0;

// Players
$A = [];
$B = [];

// Max rounds defined
$N_MAX = rand(10, 100);

// Distribute the cards
for($i = 0; $i <= $N_MAX; $i++){
  array_push($A, rand(1, 10));
  array_push($B, rand(1, 10));
  $card += 1;
}

// Basic display
for ($i=0; $i < count($A); $i++) {
  for ($i=0; $i < count($B); $i++) {
    echo "Round n° " . $N . "<br>";
    echo $A[$i] . " " . $B[$i] . "<br>";

// test and give the points
    if($A[$i] < $B[$i]){
      $point_B += 1;
      $N += 1;
    }else if($A[$i] > $B[$i]){
      $point_A += 1;
      $N += 1;
    }else{
      $point_A += 1;
      $point_B += 1;
      $N += 1;
    }
  }
}

// Final score and display the winner
echo "<br>";
echo "A = " . $point_A . "<br>" . "B = " . $point_B . "<br>";
if($point_A < $point_B){
  echo "B" . "<br>";
  echo "<br>";
}else if($point_A > $point_B){
  echo "A" . "<br>";
  echo "<br>";
}else{
  echo "null";
  echo "<br>";
};
