<?php

use App\Libraries\Phpmailer_library;

if (!function_exists('kirim_email')) {
    function kirim_email($email_pengirim = '', $email_penerima = '', $alias_pengirim = '', $subject = '', $pesan = '', $user = '', $pass = '')
    {

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
        if (!$mail->send()) {
            return false;
            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            return true;
        }
    }
}

if (!function_exists('send_email')) {
    function send_email($to = '', $subject = '', $message = '', $cc = null)
    {
        $email = \Config\Services::email();
        $from = 'diskominfo.kabmgl@gmail.com';
        $config['protocol']     = 'smtp';
        $config['mailPath']     = '/usr/sbin/sendmail';
        $config['charset']      = 'UTF-8';
        $config['SMTPHost']     = 'smtp.gmail.com';
        $config['SMTPUser']     = $from;
        $config['SMTPPass']     = 'b0r0budurdiskominfo';
        $config['SMTPPort']     = 465;
        $config['SMTPCrypto']   = 'ssl';
        $config['SMTPTimeout']  = 15;
        $config['mailType']     = 'html';
        $config['validate']     = true;

        $email->initialize($config);

        $email->setFrom($from, 'e-Pikir | BAPPEDA & LITBANGDA Kabupaten Magelang');
        $email->setTo($to);
        if ($cc != null) {
            $email->setCC($cc);
        }

        $email->setSubject($subject);
        $email->setMessage($message);

        if (!$email->send()) {
            return false;
        } else {
            return true;
        }
    }
}
