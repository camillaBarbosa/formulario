<?php
        require('conexao.php');

        //$sql = "SELECT id, EMAILL, RAMALL, NDESTI, SAPDES, SAPMAT, QUANTI, VLUNIT, TIPONF, TRANSP, OBSERV, PLIQUI, PBRUTO, VOLUME, ESPECI, DIAMES, HORA, TERMO, MOVIME FROM MyGuests";
        //$result = $conn->query($sql);

        extract($_GET);

        if(mysqli_query($con, "SELECT * FROM  `ntb_formulario` 
        (`EMAILL`,`RAMALL`, `NDESTI`, `SAPDES`, `SAPMAT`, `QUANTI`,`VLUNIT`,`TIPONF`,`TRANSP`,`OBSERV`, `PLIQUI`, `PBRUTO`, `VOLUME`, `ESPECI`, `DIAMES`, `HORA`,`TERMO`, `MOVIME`) 
        VALUES ('$EMAILL','$RAMALL', '$NDESTI', '$SAPDES','$SAPMAT','$QUANTI','$VLUNIT','$TIPONF', '$TRANSP', '$OBSERV', '$PLIQUI', '$PBRUTO', '$VOLUME', '$ESPECI', '$DIAMES', '$HORA', '$TERMO','$MOVIME')")) {
            $msg = "Itens encontrados!";
        }else {
            $msg = "Não há itens!";
        }

        //$conn->close();    

        session_start();
        $_SESSION['msg'] = $msg;
        header("location:conexao.php");
        
        ?>
