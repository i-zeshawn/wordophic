<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    echo $email;
    $to = "behloleaqil@gmail.com";
    $subject = "newsletter subscription";
    $from = "admin@admin.com";
    $message = "
    <html>
    <body>
    <table style='width:600px'>
    <tr>
    <td style='width:150px'>
            Subscriber Email
     </td>

    </tr>
     <tr>
    <td style='width:150px'>
            {{$email}}
     </td>
     
    </tr>
    </table>
    </body>
    </html>

    ";
    $header = "MIME=Version 1.0 " . "\r\n";
    $header .= "Content-type:text/html:charset:UTF=8" . "\r\n";
    //Email sending
    $header .= "From: Admin <admin@admin.com>" . "\r\n";
    $header .= "Cc :Admin <admin@admin.com>" . "\r\n";
    $header .= "B Cc :Admin <admin@admin.com>" . "\r\n";
    if (mail($to, $subject, $message, $header)) {
        echo "
        <script>
        alert('mail has been sent successfully');
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Error');
        </script>
        ";
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}