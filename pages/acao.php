<!--ENVIO JA USADO-->
<?php
    if (isset($_POST["acao"])){
    echo "<script>alert('Formulário Foi enviado pelo método POST')</script>";
    }
?>
<?php
    if (isset($_POST["acao"])){
    echo "<script>alert('Formulário Foi enviado pelo método POST')</script>";
    }
?>
<?php
    if (isset($_POST["acao"])){
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $sexo=$_POST["sexo"];
        $msg=$_POST["mensagem"];
 
        echo "<p>Olá, ".$nome."</p>";
        echo "<p>Seu email é: ".$email."</p>";
     
     if ($radio=="masc"){
            echo "<p>Você é do sexo masculino</p>";
        }elseif ($radio=="fem") {
            echo "<p>Você é do sexo feminino</p>";
        }
        echo "<p>Sua mensagem é:<br/>".$msg."</p>";
    }
?>