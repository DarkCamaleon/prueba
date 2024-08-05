<?php
  $usuario = $_POST['dato2'];
  $rut = $_POST['dato3'];
  echo json_encode(array(
            'resp' => $usuario,
            'resp2' => $rut,
            'status' => 'success'

        ));
?>