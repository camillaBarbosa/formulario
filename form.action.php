<?php

require('conexao.php');
$TIPONF = "";
$TIPONF2 = "";
extract($_POST);

if($TIPONF2 != "") {
    $TIPONF = $TIPONF2;
}

if(mysqli_query($con, "INSERT INTO `ntb_formulario` 
(`EMAILL`,`RAMALL`, `NDESTI`, `SAPDES`, `SAPMAT`, `QUANTI`,`VLUNIT`,`TIPONF`,`TRANSP`,`OBSERV`, `PLIQUI`, `PBRUTO`, `VOLUME`, `ESPECI`, `DIAMES`, `HORA`,`TERMO`, `MOVIME`) 
VALUES ('$EMAILL','$RAMALL', '$NDESTI', '$SAPDES','$SAPMAT','$QUANTI','$VLUNIT','$TIPONF', '$TRANSP', '$OBSERV', '$PLIQUI', '$PBRUTO', '$VOLUME', '$ESPECI', '$DIAMES', '$HORA', '$TERMO','$MOVIME')")) {
    $msg = "Cadastro efetuado com sucesso!";
}else {
    $msg = "Erro ao cadastrar!";
}
    
session_start();
$_SESSION['msg'] = $msg;
header("location:form.php");
?>
