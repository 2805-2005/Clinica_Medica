<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Formulário</title>
</head>

<body>



<h1> Lista de Agendamentos </h1>

<table class="table table-light table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col"> Nome do Paciente </th>
            <th scope="col"> Exame</th>  
            <th scope="col"> Data da Consulta </th>  
            <th scope="col"> Data da Nascimento </th> 
            <th scope="col"> CPF </th> 
            <th scope="col"> contato </th> 
            <th scope="col">Ação</th>
          </tr>
</thead>

<?php
        include 'conexao_cadastro.php';
        $sql = "SELECT * FROM cliente";
        $busca = mysqli_query($conexao, $sql);
        while($array = mysqli_fetch_array($busca)){
          $id = $array['id'];
          $nome = $array['nome'];
          $exame = $array['exame'];
          $data_consulta = $array['data_consulta'];
          $data_nascimento = $array['data_nascimento'];
          $cpf = $array['cpf'];
          $contato = $array['Contato'];
          
          
          ?>
           <tr>
            <td><?php echo $nome?></td>
            <td><?php echo $exame?></td>
            <td><?php echo $data_consulta?></td>
            <td><?php echo $data_nascimento?></td>
            <td><?php echo $cpf?></td>
            <td><?php echo $contato?></td>
            
            


            <td class="d-flex justify-content-end">
             <a href="editar_categoria.php?id=<?php echo $id?>" class="btn btn-warning btn-sm text-white" role="button"><img src="img/editar.png" alt="imagem de editar" width="20" height="23">Editar</a>
             <a href="deletar_categoria.php?id=<?php echo $id?>" class="btn btn-danger btn-sm text-white ml-2" role="button"><img src="img/lixo.png" alt="imagem de lexeira" width="20" height="23">Remover</a>

           
             <?php 
           } 
          ?>
         </td>
       </tr>
     </table><!--table-->
     <div class="d-flex justify-content-end ">
      <a href="agendamento_pag.php" class="btn btn-primary mr-2">
        Voltar
      </a>
    </div><!--d-flex justify-content-end-->  
  </div><!--jumbotron-->
</div><!--container-->
<!-- Optional JavaScript; -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js" ></script>



</body>

</html>