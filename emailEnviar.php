<?php
$to = "destinatario@example.com";
$subject = "Assunto do E-mail";
$message = "Conteúdo do E-mail";

$headers = "From: remetente@example.com\r\n";
$headers .= "Reply-To: remetente@example.com\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "E-mail enviado com sucesso!";
} else {
    echo "Falha ao enviar o e-mail.";
}
?>
