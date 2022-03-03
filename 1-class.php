<?php
/*
//Concatenando variáveis com strings;
  $x = 50;
  $y = 30;
  echo 'My first variable is '.$x.' and my second is '.$y;
*/

/*
//Mostrando itens do array
  $carros = ['Palio', 'Jetta', 'Gol', 'Cobalt'];
  echo $carros[0];
*/

/*
//IF Conditional
  $name = '';
  
  if($name != ''){
    echo 'Login succesfully!';
  }else{
    echo 'Please, type anything to login';
  }
*/

/*
//Switch Conditional
  $payment_methods = 'a';
  switch($payment_methods){
    case 'credit_card';
      echo 'Payment make by Credit Card';
      break;

    case 'debit';
      echo 'Payment by Debit Card';
      break;

    default:
      echo 'Try again, please!';
      break;
  }
*/

/*
//While
  $clients = 30;  
  $boletos_gerados = 1;
  while($boletos_gerados <= $clients){
    echo 'O boleto número '.$boletos_gerados.' está sendo gerado <br><br>';
    //$boletos_gerados = $boletos_gerados + 1;
    $boletos_gerados++;
}
*/

/*
//For
  for ($hits=1; $hits <= 20; $hits++){ 
    echo 'Essa é a '.$hits.'ª vez que eu executei o código <br>'; 
  }
*/

/*
//Foreach
  $cars = ['Gol', 'Pálio', 'Clio', 'Siena'];

  foreach ($cars as $index => $car) {
    echo $index.') Nome do Carro: '.$car.'<br>';

  }
*/
?>