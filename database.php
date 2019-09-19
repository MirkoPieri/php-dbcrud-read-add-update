<?php

    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'ecommercedb';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn -> connect_error) {

      var_dump('error');
      var_dump($conn);
      die();
    }

    $query = "SELECT id, nome, marca, prezzo, scadenza FROM prodotti";
    $res = $conn -> query($query);

    if ($res && $res -> num_rows > 0) {
      $data = [];

      while($row = $res -> fetch_assoc()) {
          $data[] = [
              'id' => $row['id'],
              'nome' => $row['nome'],
              'marca' => $row['marca'],
              'prezzo' => $row['prezzo'],
              'scadenza' => $row['scadenza'],
            ];
      }

    }

    $conn->close();
?>
