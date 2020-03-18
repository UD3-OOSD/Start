<?php

  //connect to SQLIitaDatabase
  $conn = mysqli_connect('localhost','nipdep','test1234','Project_1');

  if(!$conn){
    echo 'Connection error:'.mysqli_connect_error;
  }
