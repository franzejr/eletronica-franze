<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "eletronicafranze@gmail.com";
 
    $email_subject = "Mensagem do site";
     
 
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $subject = $_POST['subject']; // not required
    
    $message = $_POST['message']; // required
 
     
 
    $error_message = "";
 
 
 
    $email_message = "Detalhes Abaixo.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
 
    $email_message .= "Nome: ".clean_string($name)."\n";
 
    $email_message .= "E-mail: ".clean_string($email_from)."\n";
 
    $email_message .= "Telefone: ".clean_string($telephone)."\n";
    
    $email_message .= "Assunto: ".clean_string($subject)."\n";
 
    $email_message .= "Mensagem: ".clean_string($message)."\n";
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
 
 Obrigado por nos contatar. Entraremos em contato o mais breve possivel.
 
<?php
 
}
 
?>
