<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> layout responsivo </title>
    
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="celular.css">
        <link rel="stylesheet" type="text/css" href="formato.css">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

       <style type="text/css">

    
    @media screen and (max-width: 576px) {
            #azul{
              height: 50px;
            }
             img#logocabecalho {

              display: none;
            }
            #topo{
              left: 10%;
            }
            #topo2{
              left: 20%;
            }
            #topo3{
              left: 33%
            }
            #topo4{
              left: 45%;
              font-size :12px;
            }
            img#bandeira{
              left: 80%;
              width: 28px;
              height: 28px;
            }
            .btn1{
              left: 35%;
              width:100px;
              height: 32px; 
              font-size: 12px;
            }
            #vermelho{
              height: 450px;
              left: -8px;
            }
            #artigo1{
              left: 0%;	
              top:195px;
            }

            
            #imagem1{
            	height: 45%;
            }
            #cinza{
              height: 450px;
              left: -8px;
            }
            #cinzaImg{
            	top:15%;
            	left: 22px;
            	height: 350px;
            	width: 70%;
            }
            #cinzaImagem1{
            	height: 180px;
            	left: 10px;
            }
            #textoImagem{
            	top: 55%;
            	width: 90%;
            }
            #verde{
              height: 450px;
              left: -8px;
            }
            #verdeImg{
            	top:15%;
            	left: 22px;
            	height: 350px;
            	width: 70%;
            }
            #verdeImagem1{
            	height: 180px;
            	left: 10px;
            }
            #textoImagemVerde{
            	top: 65%;
            	width: 90%;
            }
            #laranja{
            	height: 180px;
            }
            #laranjaImg{
            	position: absolute;
            	top: 15%;
            	left: 0%;
            	height: 80%;
            }
            #roxo{
            	height: 300px;
            }

            h1#texto04{
            	position: absolute;
            	border-top: -0px; 
            }
            #marrom{
            	height: 262px;
            	
            }
            #marromImg{
            	position: absolute;
            	top: 10%;
            	left: 1%;
            }
            #preto{
            	height: 245px;
            	
            }
            #ultimoTxt{
            	position: absolute;
                top: 5%;
            	}
           
            .botao2{
            	left: 28%;
            }

            #sumiu{
            	display: block;
            	position: absolute;
			      	left: 35%;
		        	top: -130px;
            }

            #logoRodape{
              left: 8%;
              top: 4%;
              height:67px;
            }

            #rodape1 {
              height: 130px;

            }
            #rodape2 {
              height: 130px;

            }
            #rodape3 {
              height: 130px;

            }
            #rodape4 {
              height: 130px;

            }

            p#cinza3{
              left: 10%;
            }
            p#cinza4{
              top: 75%;
              left: 10%;
            }

            h3#negrito{
              left: 10%;
            }
            p#cinza5{
              top: 35%;
              left: 10%;
             }
             p#cinza6{
              top: 55%;
              left: 10%;
             }
             p#cinza7{
              top: 75%;
              left: 10%;
             }

           

          

           }
  

      
     
   </style>
  
  </head>
<body>
  <div class="container-fluid">
      <div id="azul" class="col-12">
           <img id="logocabecalho" src="https://www.myddev.com/images/myd.png"/>
           <nav>
            <div id="topo"><a href="#home1"><p id="pMenu"> inicio</p> </a></div>
            <div id="topo2"><a href="#servi??os"><p id="pMenu"> servi??os</p></a></div>            
            <div id="topo3"><a href="#hello"><p id="pMenu"> sobre</p> </a></div>            
            <div id="topo4"><a href="#contato"><button id="topo4" class="btn btn-primary"> Contato </button></a></div>
       
              <a href="index.php">  <img id="bandeira" src="https://www.myddev.com/images/en-us.png" /></a>
          
      </div>
     



    <div class="row">
        <div id="vermelho" class="col-sm-6 col-xs-12"> <a name="home1"><p>oi</p></a>
            <div id="artigo1" class="col-sm-10 col-xs-10" >
             <h1 id="artigo01">Fa??a Seus Sonhos Desenvolver</h1>
              <br/>
                <p>Ajudamos voc?? a navegar no cen??rio tecnol??gico cada vez mais complexo. Ao enfrentar os projetos mais desafiadores, garantindo uma solu????o confi??vel, extremamente r??pida, sua empresa poder?? atingir objetivos ambiciosos.</p>

                 <section class="botao1"><a href=""><button class="btn1 btn-primary"> Criar projeto </button></a></section>
                  <img id="sumiu" src="https://www.myddev.com/images/myd.png" height="120px" >
            </div>
        </div>
         
        <div id="rosa" class="col-sm-6 col-xs-12 d-none d-sm-block"> 
            <div id="imagem" >
          
              <img class="imagem1" src="https://www.myddev.com/images/home.svg" width="90%" height="90%">
          
            </div>                                  
        </div>
    </div>
       <div class="row">
          <div id="cinza" class="col-sm-6 col-xs-12"><a name="servi??os"><p></p></a>
           <div id="cinzaImg" class="col-sm-6 col-xs-12">
             <img id="cinzaImagem1" class="col-sm-10 col-xs-12" src="https://www.myddev.com/images/project.svg" height="55%" >
             <div id="textoImagem" class="col-sm-11 col-xs-12">
               <h3>Tornamos a Tecnologia Simples</h1>
               	<p id="cinzaa">Temos experi??ncia em tecnologias de ponta:

NodeJS | Golang | Elixir | Ruby on Rails | ReactJS | React Native | Android | iOS

AWS | Google Cloud | Docker | Kubernetes</p>
             </div>
           </div>	
          </div>
          <div id="verde" class="col-sm-6 col-xs-12">
            	<div id="verdeImg" class="col-sm-6 col-xs-12">
              <img id="verdeImg1" class="col-sm-12 col-xs-12" src="https://www.myddev.com/images/consultancy.svg" height="75%" >	
          	 <div id="textoImagemVerde" class="col-sm-12 col-xs-12">
          	 	<h2>Somos o Seu Parceiro de Tecnologia</h2>
          	 	<p id="textoVerde">Voc?? est?? tendo problemas com a falta de m??o de obra em sua equipe? Voc?? pode ter um desenvolvedor full-stack para trabalhar com sua equipe!</p>
          	 </div>
            </div>
          </div>
      </div>

     <div class="row">   
          <div id="laranja" class="col-sm-6 col-xs-12">
                     <img id="laranjaImg" class="col-sm-11 col-xs-10" src="https://www.myddev.com/images/technologies.png"   >
          </div>
          <div id="roxo" class="col-sm-6 col-xs-12"><a name="hello"><p></p></a>

          	
		          <h1 id="texto04">	N??s somos especialistas em Backend, Frontend, Mobile and Cloud Native.</h1>

		            <p id="cinza2"> Temos uma equipe altamente qualificada, com mais de 20 anos no setor de tecnologia, fornecendo aplicativos altamente dispon??veis e escal??veis para criar seu projeto com experi??ncia.</p>
		     
          </div>
      </div>
      <div class="row">
        <div id="marrom" class="col-sm-6 col-xs-12">
          	<img class="col-sm-12 col-xs-12" id="marromImg" src="https://www.myddev.com/images/contact.svg">
        </div>
        <div id="preto" class="col-sm-6 col-xs-12"> <a name="contato"><p></p></a>
          	<div id="ultimoTxt" class="col-sm-12 col-xs-12" >
          	   <h1 id="ultimo"> Vamos Conversar?</h1>
            <div id="ultomoTxt1" class="col-sm-12 col-xs-12">
          	  <p id="cinza2" > Esperamos ansiosamente suas id??ias. Clique no bot??o abaixo que entraremos em contato com voc?? hoje.</p>

                <section class="botao2"><a name="" href="indexFormulario.php"><button class="btn1 btn-primary"> Criar projeto</button></a></section>
           </div>
          </div>
        </div>
    </div>
    <div class="row" id="ouro">
      
      	<div id="rodape1" class="col-sm-3 col-xs-12">
      		<img src="https://www.myddev.com/images/myd.png" id="logoRodape" height="35%">

          <p id="cinza3"> Desenvolvemos solu????es tecnol??gicas inovadoras para alavancar seus neg??cios.</p>
          <p id="cinza4"> ?? 2020 MYDDev. todos os direitos reservados.</p>

        </div>
        <div id="rodape2" class="col-sm-3 col-xs-12">
        	 <h3 id="negrito"> Navega??ao </h3>
        	 <p id="cinza5">inicio</p>
        	 <p id="cinza6">Servi??os</p>
        	 <p id="cinza7">sobre</p>

        </div>  
        <div id="rodape3" class="col-sm-3 col-xs-12">
          <h3 id="negrito">Localiza????o</h3>
          <p id="cinza5">S??o Paulo</p>
          <p id="cinza6">Brasil</p>
        </div>	
        <div id="rodape4" class="col-sm-3 col-xs-12">
          <h3 id="negrito">Contact</h3>
          <p id="cinza8">contact@myddev.com</p>
        </div>
    </div>    

    
  </div>
    

</body>
</html>