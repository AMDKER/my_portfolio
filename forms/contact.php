<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'amadaeric1854@gmail.com';

  // if( file_exists($php_email_form = __DIR__ . '/../vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new $php_email_form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  // /*
  // $contact->smtp = array(
  //   'host' => 'example.com',
  //   'username' => 'example',
  //   'password' => 'pass',
  //   'port' => '587'
  // );
  // */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();

if (isset($_POST['message'])){
  $message = "ce message vous a ete envoye via la page contact de votre portfolio
  Nom : " . $_POST['name'] . "
  Email :" . $_POST['email'] . "
  Message :" . $_POST['message'] ;
  $retour = mail("dkertech3@gmail.com", $_POST['subject'], $message, "From:portfoliodker@exemplesite.fr" . "\r\n" . "Reply-To:".$_POST['email']);
  if ($retour) {
    echo "<p>Votre message a bien ete envoye !</p>";
  } else {
    echo "<P>Erreur dans l'envoi du message !</P>";
  }
}
?>
