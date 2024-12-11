<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário dos Jogos Internos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <body>
        <img src="https://portal.ifrn.edu.br/static/images/logo.svg?da3b22901768" alt="logo do IF">
    <h2>Interclasse</h2>
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $nascimento = $_POST['nascimento'];
        $idade = $_POST['idade'];
        $numero = $_POST['numero'];
        $ident = $_POST['ident'];
        $genero = $_POST['gender'];


        $logo = $_POST['logo'];
        $cor = $_POST['cor'];
        $turma = $_POST['turma'];
        $notificacao = $_POST['notificacao'];
        ?>


    <h2>Nome:</h2>
    <?php echo $nome;?>
    <br>
    
    <h2>Email:</h2>
    <?php echo $email;?>
    <br>

    <h2>Nascimento:</h2>
    <?php echo $nascimento;?>
    <br>

    <h2>Idade:</h2>
    <?php echo $idade;?>
    <br>

    <h2>Número:</h2>
    <?php echo $numero;?>
    <br>

    <h2>Matricula:</h2>
    <?php echo $ident;?>
    <br>

    <h2>Gênero:</h2>
    <?php echo $genero;?>
    <br>

    

    <h2>Cor do Time:</h2>
    <?php echo $cor;?>
    <br>

    <h2>logo do Time:</h2>
    <?php echo $logo;?>
    <br>

    <h2>Turma:</h2>
    <?php echo $turma;?>
    <br>

    <h2>Notificação:</h2>
    <?php echo $notificacao;?>
    <br>
    
</body>
</html>
