<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class ContactpageController extends Controller
{
    public function index()
    {
    
        return view('visitor-page.contact-page');
    }

    function sendMail(Request $request){
        
        $subject = "Contact dari " . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
           // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
           $mail = new PHPMailer();                                 // create a new object
           $mail->IsSMTP();                                         // enable SMTP
           $mail->SMTPAuth = true;        
           $mail->Username = "joyboyonepiece1997@gmail.com"; 
           $mail->Password = "xWywc6CkwbN8";                           // authentication enabled
           $mail->SMTPSecure = "tls";                               // secure transfer enabled REQUIRED for Gmail
           $mail->Host = "smtp.gmail.com";
           $mail->Port = 587;                                       // or 587

            // Siapa yang mengirim email
            $mail->setFrom("riskirian1996@gmail.com", "Riski Rian Putra");

            // Siapa yang akan menerima email
            $mail->addAddress('joyboyonepiece1997@gmail.com', 'IYang');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);
            
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            return view('visitor-page.contact-page');

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }
}
