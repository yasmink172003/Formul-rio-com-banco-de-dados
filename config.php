<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formularios';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";

    }
    else
    {
        echo "Conexão realizada com sucesso";
    }
?>

<?php

if(isset($_POST['submit']))
{
    // print_r('nome:' . $_POST['nome']);
    // print_r('<br>');
    // print_r('email:' .$_POST['email']);
    // print_r('<br>');
    // print_r('telefone:' .$_POST['telefone']);
    // print_r('<br>');
    // print_r('Sexo:' .$_POST['genero']);
    // print_r('<br>');
    // print_r('Data de nascimento:' .$_POST['data_nascimento']);
    // print_r('<br>');
    // print_r('Cidade:' .$_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado:' .$_POST['estado']);
    // print_r('<br>');
    // print_r('Endereço:' .$_POST['endereco']);
    
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco)
    VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
}

?>