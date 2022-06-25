
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "/ClinicaMedica/agendamento_style.css"  rel = "stylesheet"> 
    
    
    <title>Formulário</title>
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
<a class = "aa"href = "quemsomos.php" ><li> Quem somos? </li></a>
<a class = "aa"href = "prontuario_pag.php" ><li> Agendamentos   </li></a>
<a class = "aa"href = "contato_pag.php" ><li> Contato     </li></a>
<a class = "aa"href = "localização_pag.php" ><li> Localização  </li></a>
</ul>

</header>
<hr>


<main>

    <div class="container">
        <div class="form-image">
         <img src="./img/logo.png" alt="imagem da logomarca" min-width="1000px" height="500px"> 
        </div> 
        <div class="form">

            <form action="agendar.php"  method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1 id = "h11" >Agende sua Consulta</h1>
                    </div>
                
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label>Nome Completo: </label>
                        <input  type="varchar" name="nome" placeholder="Insira seu nome completo" >
                    </div>

                    <div class="input-box">
                        <label> Exame: </label>
                        <input  type="text" name="exame" placeholder=" EX: Endoscopia" >
                    </div>

                    <div class="input-box">
                        <label> Data da Consulta: </label>
                        <input  type="text" name="data_consulta"   placeholder = "Insira a data da consulta" >
                    </div>

                    <div class="input-box">
                        <label> Data de Nascimento </label>
                        <input  type="text" name="data_nascimento" placeholder = "Insira a data de nascimento" >
                    </div>

                    <div class="input-box">
                        <label> CPF:</label>
                        <input  type="text" name="cpf" placeholder = "Insira seu CPF" >
                    </div>

                    <div class="input-box">
                        <label> Contato </label>
                        <input  type="text" name="Contato" placeholder = "Insira seu número residencial" >
                    </div>
                
                   </div>

                <div class="continue-button">
                    <button>Continuar </button>
                </div>
            </form>
        </div>

    </div>

</main></head>
</body>
</html>