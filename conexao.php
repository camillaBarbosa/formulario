<?php

if(@!$con = mysqli_connect('localhost', 'root', '', 'bd_formulario')) {
    echo "Erro de conexão.";
}    

mysqli_query($con, 'SET NAME to utf8');


?>
