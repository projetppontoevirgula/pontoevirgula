<?php
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require_once("PHPMailer-master/class.phpmailer.php");
require("PHPMailer-master/PHPMailerAutoload.php");

//variaveis padrão
$nome = $_POST['nome'];
$para = $_POST['email'];
$mensagem =  $_POST['mensagem'];
$assunto = 'colocar aqui'; //colocar assunto
$de = ''; // email que tá enviando
$user = ''; //login email
$pass = ''; //senha do email


// Inicia a classe PHPMailer,pega os bang do php mailer e joga na var mail
$mail = new PHPMailer();
// Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP
$mail->Username = $user; // Usuário do servidor SMTP
$mail->Password = $pass; // Senha do servidor SMTP
$mail->Port = 587; //porta
$mail->SMTPSecure = "tls";
// Define o remetente
$mail->From = $de; // email
$mail->FromName = $nome; // nome ff
// Define os destinatário
$mail->AddAddress($para); //ff
// Define os dados técnicos da Mensagem
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem 
$mail->Subject  = $assunto ; // Assunto da mensagem //ff
$mail->MsgHTML($mensagem);


$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
// Exibe uma mensagem de resultado
if ($enviado) {
  echo "E-mail enviado com sucesso!";
} else {
  echo "Não foi possível enviar o e-mail.";
  echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
}
?>


