<?php

  // Recoge las variables del post de la vista
  $registro = json_decode(file_get_contents('php://input'), true);

  //conexion importa
  include '../conn.php';

  //datos recibidos
  $dni = $registro['dni'];
  $correo = $registro['correo'];
  $password = $registro['password'];
  $nombres = $registro['nombres'];
  $celular = $registro['celular'];
  $dni_patrocinador = $registro['dni_patrocinador'];


  // insercion
  $sql = "INSERT INTO usuarios (dni,correo,password,nombre,celular,arbol_padre) VALUES ('$dni','$correo','$password','$nombres','$celular','$dni_patrocinador ')";

  if ($conn->query($sql) === TRUE) {
    echo "ok";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();


  //echo json_encode($registro['dni']);



?>
