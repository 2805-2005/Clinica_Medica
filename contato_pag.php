<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "/ClinicaMedica/contato_style.css"  rel = "stylesheet"> 
    
    
    <title>Contato</title>
</head>

<body>
<hr>
<header> 
<div id = "title">
    <h1> Clínica</h1>
    <h1> Médica</h1>
</div>

<ul>
<a class = "aa" href = "pag_principal.php" ><li> Home </li></a>
<a class = "aa"href = "quemsomos_pag.php" ><li> Quem somos? </li></a>
<a class = "aa"href = "prontuario_pag.php" ><li> Prontuário   </li></a>

<a class = "aa"href = "localização_pag.php" ><li> Localização  </li></a>
</ul>

</header>
<hr>


<main>

    <div class="container">
        <div class="form-image">
        <h3><ion-icon name="navigate-outline"></ion-icon>Endereço: Monte Castelo, 1004</h3> 

        <h3><ion-icon name="call-outline"></ion-icon>Telefone: (88) 9885-5545 ou (88) 9864-1221</h3>  

        <h3><ion-icon name="mail-outline"></ion-icon>Email: vivermais@email.com.br</h3>
                
        </div> 
        <div class="form">

            <form action="agendar.php"  method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1 id = "h11" >Nos envie uma mensagem! </h1>
                    </div>
                
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label>Nome: </label>
                        <input  type="varchar" name="nome" placeholder="Insira seu nome completo" >
                    </div>

                    <div class="input-box">
                        <label> Email: </label>
                        <input  type="text" name="email" placeholder=" Insira seu email:" >
                    </div>

                    <div class="input-box">
                        <label> Sua mensagem:  </label>
                        <input  type="text" name="mensagem"   placeholder = "Sugestões ou elogios" >
                    </div>

                    <div class="input-box">
                        <label> Rede Social: </label>
                        <input  type="text" name="rede"   placeholder = "Insira qualquer rede social" >
                    </div>
                
                   </div>

                <div class="continue-button">
                    <button>Continuar </button>
                </div>
            </form>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</main></head>
</body>

           
          

  