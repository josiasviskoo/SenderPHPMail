<?php
function EnviarEmail($emailpara, $assunto, $mensagem){
      require_once('class.phpmailer.php');
      $mailer = new PHPMailer();
      $mailer->IsSMTP();
      $mailer->IsHTML();
      $mailer->SMTPDebug = 1;
      $mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails
      $mailer->Host = 'smtp.grampola.com.br'; //smtp.dominio.com.br
      $mailer->SMTPAuth = true; //define se haverá ou não autenticação no SMTP
      $mailer->Username = 'app@grampola.com.br'; //Informe o e-mai o completo
      $mailer->Password = 'Qwerty@1234567.'; //Senha da caixa postal
      $mailer->FromName = $assunto; //Nome que será exibido para o destinatário
      $mailer->From = 'app@grampola.com.br'; //Obrigatório ser a mesma caixa postal indicada em "username"
      $mailer->AddAddress($emailpara); //Destinatários
      $mailer->Subject = $assunto;
      $mailer->Body = $mensagem;
      $mailer->Send();
      //print "Mensagem enviada com sucesso!";
}
?>
