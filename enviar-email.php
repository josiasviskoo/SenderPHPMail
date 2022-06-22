<?php include("fnc_email.php");

//PEGANDO OS DADOS DO FORMULÁRIO E GUARDANDO NAS VARIÁVEIS

$var_campo1 = $_GET['campo1'];
$var_campo2 = $_GET['campo2'];

$assunto = "Envio de e-mail pelo site tal";

$mensagem = "Mensagem do site:";
$mensagem .= "Campo 1: $var_campo1";
$mensagem .= "Campo 2: $var_campo2";

$emailpara = "contato@viskoo.com.br";

EnviarEmail($emailpara, $assunto, $mensagem);
?>

<script type="text/javascript">
  window.alert("Obrigado pelo envio da mensagem!");
  window.location.href("obrigado.php");
</script>
