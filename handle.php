<?php
  $items = Array('Rock','Paper','Scissors');
  $randomChoice = $items[array_rand($items)];
  $choice = $_POST['choice'];

  echo "<em>You Chose: </em>$choice</br>";
  echo "<em>The Computer Chose: </em>$randomChoice</br>";
  if ($choice == $randomChoice) {
    echo "Its a draw!";
  } elseif ($choice == 'Paper' && $randomChoice == 'Scissors'){
     echo "You loose to the pc!";
}
