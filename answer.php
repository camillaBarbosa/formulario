<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Answer</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    <form method = "get" action = "awnser.action.php"> 
        
    <?php

    require('conexao.php');

    session_start();
    if(isset($_SESSION['msg'])) {
    echo "<p class='mensagem'>$_SESSION[msg]</p>";
    unset($_SESSION['msg']);
    }
   
    $selectAll = "SELECT * FROM ntb_formulario";
    $execAll = mysqli_query($con, $selectAll);

    
    
    while($fetchAll = mysqli_fetch_array($execAll)) {
      echo "$fetchAll[EMAILL] | $fetchAll[RAMALL] | $fetchAll[NDESTI] | $fetchAll[SAPDES] | $fetchAll[SAPMAT] | $fetchAll[QUANTI] | $fetchAll[VLUNIT] | $fetchAll[TIPONF] | $fetchAll[TRANSP] | $fetchAll[OBSERV] | $fetchAll[PLIQUI] | $fetchAll[PBRUTO] | $fetchAll[VOLUME] | $fetchAll[ESPECI] | $fetchAll[DIAMES] | $fetchAll[HORA] | $fetchAll[TERMO] | $fetchAll[MOVIME]";
      echo "<br>";
    }
        
    
    
    
    
    ?>
    </form>
    </html>
    
