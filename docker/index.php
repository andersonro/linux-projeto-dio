<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exemplo PHP</title>
  </head>
  <body>
    <?php
    ini_set("display_errors", 1);
    echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

    $servername = "999.999.999.99";
    $username = "USER";
    $password = "PASSWORD";
    $database = "NM_BANCO";

    // Criar conexão


    $link = new mysqli($servername, $username, $password, $database);

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $id =  rand(1, 999);
    $descricao = strtoupper(substr(bin2hex(random_bytes(4)), 1));
    $qtd = 1;
    $valor = 1.99;
    $host_name = gethostname();


    $query = "INSERT INTO vendas (id, descricao, qtd, valor, host) VALUES ('$id' , '$descricao', '$qtd', '$valor', '$host_name')";


    if ($link->query($query) === TRUE) {
      echo "Salved successfully";
    } else {
      echo "Error: " . $link->error;
    }

    ?>
  </body>
</html>
