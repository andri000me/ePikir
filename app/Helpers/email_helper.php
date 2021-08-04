<?php 
    use App\Libraries\Phpmailer_library;
    if (!function_exists('kirim_email')) {
        function kirim_email($email_pengirim='', $email_penerima='', $alias_pengirim='', $subject='', $pesan='', $user='', $pass=''){
            
            $libMail = new Phpmailer_library();

            // Load PHPMailer library
            // $CI->load->library('phpmailer_library');
            
            // PHPMailer object
            $mail = $libMail->load();
            
            // SMTP configuration
            $mail->isSMTP();
            $mail->Host         = 'ssl://smtp.gmail.com';
            $mail->SMTPAuth     = true;
            $mail->Username     = $user;
            $mail->Password     = $pass;
            $mail->From         = $email_pengirim;
            $mail->SMTPSecure   = 'ssl';
            $mail->Port         = 465;
            
            $mail->setFrom($email_pengirim, $alias_pengirim);
            $mail->addReplyTo($email_pengirim, $alias_pengirim);
            
            // penerima
            $mail->addAddress($email_penerima);
            
            // Email subject
            $mail->Subject = $subject;
            
            // Set email format to HTML
            $mail->isHTML(true);
            
            // Email body content
            $mailContent = $pesan;
            $mail->Body = $mailContent;
            
            // Send email
            if(!$mail->send()){
                return false;
                // echo 'Message could not be sent.';
                // echo 'Mailer Error: ' . $mail->ErrorInfo;
            }else{
                return true;
            }
        }
    }
    
?>