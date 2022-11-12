onkeydown="return EvitaEnter(event);"
 
    const caixaTexto = document.querySelector('.input');
    const radioSim = document.getElementById('pSim');
    const radioNao = document.getElementById('pNao');
    const botao = document.getElementById('submit');
    const caixa = document.getElementById('caixa');
    const classCaixa = document.querySelectorAll('.caixa');
    const campos = {'listaCampos':document.querySelectorAll('.caixa')}
    let camposVazios = true;
 
    /*abre a caixa no movimentação*/
    const retirarCaixa = () => {
       caixaTexto.style.display = 'none';
    }
 
    const adicionarCaixa = () => {
       caixaTexto.style.display = 'block';
    }
      /*final da caixa em movimentação*/   
      
      /*envia mensagem de sucesso*/ 
    //const mensagem = () => {
     // Swal.fire(
       //  'Enviado!',
      //   'Formulario enviado!',
     //    'success'
     //  )
 // }
   /*fim da mensagem de sucesso*/

   const habilitaBtn = () => {
    campos.listaCampos.forEach ((n)=> {n.value == ''? camposVazios=false:camposVazios=true}) //ArrowFunction onde é o if e else simplificado. n é o nosso parametro do For, o ? faz o if : faz o else

  } 


let timerInterval

   document.getElementById("btnSubmit").addEventListener("click", exibeMensagem);
   function exibeMensagem(){
    if(camposVazios==false){
      Swal.fire( 
       'success', 
        'Enviado!', 
       'Formulario enviado!',
        Swal.toggleTimer(50000)
       )//nome da mensagem que vc quer
      } else {
        Swal.fire ( 
         'Oops!', 
         'Preencha todos os campos obrigatórios!', 
         'warning'
         )
      }
    };
     
 
   const botaoEnter = () => {
      caixa
   }
 
    radioSim.addEventListener('click', adicionarCaixa)
    radioNao.addEventListener('click', retirarCaixa)
    botao.addEventListener('click', exibeMensagem)
