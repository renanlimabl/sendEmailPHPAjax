<?php
if(isset($_POST['email']))
{

$email = $_POST['email'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$subject = 'Novo integrante';
$message = '<html><body>';
$message.='<table border="0" width="600px" style="font-size:14px; text-align:center">';
$message.='<tr style="background: #1eaace; color:#FFFFFF; height: 50px;"><td colspan="2">Novo integrante</td></tr>';
$message.='<tr style="background: #1eaace; color:#FFFFFF; height: 50px;"><td>Nome</td><td>'.strip_tags($nome).'</td></tr>';
$message.='<tr style="background: #1eaace; color:#FFFFFF; height: 50px;"><td>Email</td><td>'.strip_tags($email).'</td></tr>';
$message.='<tr style="background: #1eaace; color:#FFFFFF; height: 50px;"><td>Telefone</td><td>'.strip_tags($telefone).'</td></tr>';
$message.='<tr style="background: #1eaace; color:#FFFFFF; height: 50px;"><td>Assunto</td><td>'.strip_tags($subject).'</td></tr>';
$message.='</table>';
$message.='</body></html>';


$to='contato.felippecinelli@gmail.com';
$from='contato.felippecinelli@gmail.com';
$subject='Novo e-mail!';
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$retval = mail ($to,$subject,$message,$headers);
  if($retval==true)
  {
    echo "Message Send Successfully";
  }
  else
  {
    echo "failed";
  }
}
 ?>