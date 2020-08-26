<php?

$nome = $_POST['tNome'];
$email = $_POST['tEmail'];
$novidades = $_POST['novidades'];
$sexo = $_POST['Sexo'];
$urgencia = $_POST['tUrg'];
$mensagem = $_POST['tMsg'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

// É necessário indicar que o formato do e-mail é html

$header = 'From: ' . $mail . "\r\n";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: $nome <$email>'

//$headers .= "Bcc: $EmailPadrao\r\n";


// monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Email: " . $novidades . "\n";
$body = $body . "Email: " . $sexo . "\n";
$body = $body . "Email: " . $urgencia . "\n";
$body = $body . "Mensagem: " .$_POST["tMsg"] . "\r\n";
$body = "Enviado em : " . date("d/m/y"  , time());
$body = $body . "===================================" . "\n";

$destinatario = "edm.estatistica@gmail.com";


// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:contato.html");


?>
