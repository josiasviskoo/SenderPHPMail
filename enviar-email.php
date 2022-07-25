<?php include("fnc_email.php");

//PEGANDO OS DADOS DO FORMULÁRIO E GUARDANDO NAS VARIÁVEIS

$var_campo1 = $_POST['campo1'];
$var_campo2 = $_POST['campo2'];

$assunto = "Envio de e-mail pelo site tal";

$mensagem = "Mensagem do site:/n";
$mensagem .= "Campo 1: $var_campo1/n";
$mensagem .= "Campo 2: $var_campo2/n";

$emailpara = "contato@viskoo.com.br";

EnviarEmail("contato@viskoo.com.br", $assunto, $mensagem);
EnviarEmail("josias@viskoo.com.br", $assunto, $mensagem);
?>

<script type="text/javascript">
  window.alert("Obrigado pelo envio da mensagem!");
  window.location.href("obrigado.php");
</script>
