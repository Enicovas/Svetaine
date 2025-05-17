<?php
$email_in=$_POST['Email'];

$vardas_in=$_POST['Vardas'];
$tel_nr_in=$_POST['Tel_nr'];

$massage_in=$_POST['Massage'];

$to='enricavase@gmail.com';
$subject='jkm žinute';
 echo $massage_in;


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$massage_in,$headers);


/*
$to = 'enricavase@gmail.com';
$subject = 'PHP Mail() testas';
$message = 'Sveiki! Tai yra testinis laiškas iš PHP serverio.';
$headers = 'From: testas@example.com' . "\r\n" .
           'Reply-To: testas@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Laiškas išsiųstas sėkmingai.';
} else {
    echo 'Laiško išsiųsti nepavyko.';
}

*/
//phpinfo();
?>