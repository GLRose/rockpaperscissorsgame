<?php
  $items = Array('Rock','Paper','Scissors');
  $randomChoice = $items[array_rand($items)];
  $userChoice = $_POST['userChoice'];

  echo "<em>You Chose: </em>$userChoice</br>";
  echo "<em>The Computer Chose: </em>$randomChoice</br>";
  //Draw condition
  if ($userChoice == $randomChoice) {
    echo "Its a draw!</br></br>RE-DIRECTING in 3 seconds";
    header( "refresh:3;url=index.html" );
  } elseif ($userChoice == 'Paper' && $randomChoice == 'Scissors'){
     echo "You lose to the pc!";
     header( "refresh:3;url=index.html" );
   } elseif ($userChoice == 'Scissors' && $randomChoice == 'Paper'){
      echo "You Win!";
      header( "refresh:3;url=index.html" );
    } elseif ($userChoice == 'Rock' && $randomChoice == 'Paper'){
       echo "You lose to the pc!";
       header( "refresh:3;url=index.html" );
     } elseif ($userChoice == 'Paper' && $randomChoice == 'Rock'){
        echo "You Win!";
        header( "refresh:3;url=index.html" );
      } elseif ($userChoice == 'Rock' && $randomChoice == 'Scissors'){
         echo "You Win!";
         header( "refresh:3;url=index.html" );
       } else {
          echo "You lose to the pc!";
          header( "refresh:3;url=index.html" );
        }
