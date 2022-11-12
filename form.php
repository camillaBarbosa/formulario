<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.26/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href=" sweetalert2/package/dist /sweetalert2.min.css">
    <script scr="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.26/dist/sweetalert2.all.min.js"></script>
    <script src="sweetalert2/package/dist /sweetalert2.min.js"></script>
    <link href="estilo.css" rel="stylesheet">
    <title>formulario</title>
</head>
<body>
    <form method="post" action="form.action.php">


            <div class="respostas" id="resp">
            <div class="teste">   
            <div class="sup">
                <p>&nbsp;</p>
                </div>
                <h1> Solicitações de NFe.</h1>
                <p id="pp">Seu e-mail será registrado quando você enviar este formulário.</p>
                <?php
                    session_start();
                    if(isset($_SESSION['msg'])) {
                    echo "<p class='mensagem'>$_SESSION[msg]</p>";
                    unset($_SESSION['msg']);
                    }
                ?>
                </div>
                <div class="teste">
                <h2 for="name"> E-mail: </h2>
                <input type="email" name="EMAILL" id="caixa" class='caixa' size="40" placeholder="Digite seu e-mail aqui." required></br>
                </div>

                <div class="teste">
                    <h2 for = "name"> Ramal: </h2>
                    <input type="number" name="RAMALL" id="caixa" class='caixa' size="40" placeholder="Digite seu ramal aqui." required></br>
                </div>
                        
                <div class="teste">
                    <h2> Nome do Destinatario: </h2>
                    <input type="tetx" name="NDESTI" id="caixa" class='caixa' size="40" placeholder="Digite o destinatario aqui." required></br>
                </div>

                <div class="teste">
                    <h2> Código SAP do Destinatario: </h2>
                    <input type="number" name="SAPDES" id="caixa" class='caixa' size="40" placeholder="Digite o codigo do SAP aqui." required></br>
                </div>

                <div class="teste">
                    <h2> Código SAP do Material: </h2>
                    <p>Informar apenas o código do material.</p>
                    <textArea name = "SAPMAT" id="caixa" class='caixa' class='caixa' size = "60" placeholder = "caso tenha mas de um intem, separar por linha." required></textArea></br>
                </div>

                <div class="teste">
                    <h2> Quantidade: </h2>
                    <p>Informar apenas a quantidade.</p>
                    <textArea  name="QUANTI" id="caixa" class='caixa' size="40" placeholder="caso tenha mais de um item, separar por linha." required></textArea></br>  
                </div>

                <div class="teste">
                    <h2> Valor Unitário: </h2>
                    <p>Informar apenas o valor unitário, sem símbolos (R$). </p>
                    <textArea name="VLUNIT" id="caixa" class='caixa' size="40" placeholder="caso tenha mais de um item, separar por linha."  required></textArea></br>
                </div>

                <div class="teste">
                    <h2> Tipo de NF: </h2>
                    <input type="radio" id="um" name="TIPONF" value="Amostra grátis" ><abbr title ="(itens enviados não retorna para a U-Shin)">Amostra Grátis</abbr><br>
                    <input type="radio" id="um" name="TIPONF" value="Concerto" ><abbr title="(Mercadorias ou bens p/ concerto ou reparo. itens enviados produtivos ou uso e consumo)">Conserto</abbr><br>
                    <input type="radio" id="um" name="TIPONF" value="Devolução" ><abbr title="(Devoluções que modifique a natureza, o funcionamento, o acabamento, a apresentação ou a finalidade do produto)">Devolução </abbr><br>
                    <input type="radio" id="um" name="TIPONF" value="Industrialização" ><abbr title="(Operação que modifique a atureza, o funcionamento, o acabamento, a apresentação ou a finalidade do produto)">Industrialização</abbr><br>
                    <input type="radio" id="um" name="TIPONF" value="Teste Com Retorno" ><abrr title="(itens enviados retornam para a U-Shin)">Teste com retorno</abbr><br>
                    Outros: <input type="text" name="TIPONF2" size="30" placeholder="Digite o Outro tipo de NF aqui." maxlength="30"></br>
                </div>
                
                <div class="teste">
                    <h2> Trasportadora: </h2>
                    <input type="text" name="TRANSP" id="caixa" class='caixa' size="40" placeholder="Digite a transportadora aqui."  required></br>
                </div>

                <div class="teste">
                    <h2> Observações: </h2>
                    <textArea  name="OBSERV" id="caixa" size="40" placeholder="Digite as observações aqui."></textArea></br>
                </div>

                <div class="teste">
                    <h2> Peso Líquido: </h2>
                    <p>Qual é o peso do Material (em Kg)?</p>
                    <input type="text" name="PLIQUI" id="caixa" size="40" placeholder="Digite o peso aqui."></br>
                </div>

                <div class="teste">
                    <h2> Peso Bruto: </h2>
                    <p>Qual é o peso do material em (em Kg)?</p>
                    <input type="text" name="PBRUTO" id="caixa" size="40" placeholder="Digite o peso aqui."></br>
                </div>

                <div class="teste">
                    <h2> Volume: </h2>
                    <p>Preencher em caso de Exportação.</p>
                    <input type="text" name="VOLUME" id="caixa" size="40" placeholder="Digite o Volume aqui."></br>
                </div>

                <div class="teste">
                    <div class="caixas">
                        <h2>Espécie:</h2>
                        <p>Preencher em caso de Exportação.</p>
                        <select name="ESPECI">
                            <option value="caixa" id="select" size="40"> Caixa </option>
                            <option value="saco" id="select" size="40"> Saco </option>
                            <option value="tambor" id="select" size="40"> Tambor </option>
                            <option value="peca" id="select" size="40"> Peça </option>
                        </select>
                    </div>
                </div>

                <div class="teste">
                    <div class="data">
                        <h2>Quando a nota sairá da Empresa?</h2>
                        <input id="date" type="date" name="DIAMES" required>
                        <input type="time" id="hour" name="HORA" required> 
                    </div>
                </div>

                <div class="teste">
                    <div class="termo">
                        <h2>Termo.</h2>
                        <p>A nota fiscal só será emitida no DIA em que a mercadoria sair da empresa.Informar o departamento fiscal.</p>
                        <input type="radio" id="termo" name="TERMO" value="Eu concordo"  required> Eu concordo! <br>

                    </div>
                </div>
            
                <div class="teste">
                    <div class="movimentacao">
                        <h2>Movimentar Estoque?</h2>
                        <p id="pSim"><input type="radio" id="radioSim" name="MOVIME"  required>Sim</p><input class='input' name="MOVIME" size="30" placeholder="Digite onde ira movimentar.">
                        <p id="pNao"><input type="radio" id="radioNao" value="Não" name="MOVIME" >Não.</p>
                    </div>
                </div>

                <div align="center">
                    <div class="button" onClick="return mensagem()">
                    <p><input class="botao" id = "btnSubmit" type="submit" name="Enviar"></p>
                    </div>
                </div>

            
    </form>
</body>
<script src="script.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>
