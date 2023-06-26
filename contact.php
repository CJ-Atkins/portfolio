<?php
require 'includes/header.php';
require './config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

$name = '';
$email = '';
$subject = '';
$message = '';
$sent = false;




if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   $errors = [];

   if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      $errors[] = 'Please enter a valid email address';
   };

   if ($name == '') {
      $errors[] = 'Please enter a name';
   };

   if ($subject == '') {
      $errors[] = 'Please enter a subject';
   };

   if ($message == '') {
      $errors[] = 'Please enter a message';
   };

   if (empty($errors)) {
      try {
         $mail->isSMTP();
         $mail->Host = SMTP_HOST;
         $mail->SMTPAuth = true;
         $mail->Username = SMTP_USER;
         $mail->Password = SMTP_PASS;
         $mail->SMTPSecure = 'ssl';
         $mail->Port = 465;

         $mail->setFrom('contact@connoratkins.co.uk', 'Portfolio Contact Form');
         $mail->addAddress('connoratkins@hotmail.co.uk', 'Portfolio Contact Form');
         $mail->addReplyTo($email);
         $mail->Subject = $subject;
         $mail->Body = 'From: ' . $name . '<br><br>' . $message . '<br><br>' . 'Reply to: ' . $email;
         $mail->AltBody = 'From: ' . $name . 'Message: ' . $message . ' Reply to: ' . $email;
         $mail->isHTML(true);

         $mail->send();

         $sent = true;
      } catch (Exception $e) {
         echo 'Message not sent:', $mail->ErrorInfo;
         $errors[] = $mail->ErrorInfo;
      };
   };
}



if ($sent) : ?>
   <h2 class="message_sent">Message sent!</h2>
<?php endif;
?>

<div class="contact_form">
   <form method="post" id="formContact">
      <div class="form-group-name-email">
         <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="name" name="name" id="name" required>
         </div>
         <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" id="email" required>
         </div>
      </div>
      <div class="form-group">
         <label for="subject">Subject:</label>
         <input class="form-control" name="subject" id="subject" required>
      </div>
      <div class="form-group">
         <label for="message">Message:</label>
         <textarea class="form-control" name="message" id="message" required></textarea>
      </div>
      <button type="submit">Send <i class="fa-solid fa-paper-plane fa-sm"></i></button>
   </form>
</div>

<?php
require 'includes/footer.php'; ?>