<?php

  function Calculator($numberOne, $numberTwo, $operator){
      switch ($operator) {
        case '+':
          echo 'Soma = '.$numberOne + $numberTwo;
          break;
        case '-':
          echo 'Subtração = '.$numberOne - $numberTwo;
          break;
        case '*':
          echo 'Multiplicação = '.$numberOne * $numberTwo;
          break;
        case '/':
          echo 'Divisão = '.$numberOne / $numberTwo;
          break;
        default:
          echo 'Try another item';
          break;
      }
  }
  $numberOne = 10;
  $numberTwo = 5;
  $operator = '/';

  calculator($numberOne, $numberTwo, $operator);
?>