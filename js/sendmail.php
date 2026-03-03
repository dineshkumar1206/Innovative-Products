<?php
if(isset($_POST['submit'])){
		$name = $_POST['name'];
        $email = $_POST['email'];
		$subject = $_POST['subject'];
		$PhoneNo = $_POST['PhoneNo'];
		$message = $_POST['message'];

$to = "bookings@honeyvacations.com"; // Change to the recipient's email
$subject = "New Contact Form Submission";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: $email" . "\r\n";

$email_template = "
<!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Contact Form Submission</title>
        <style>
            body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
            .container { max-width: 600px; margin: 0 auto; background: #ffffff; padding: 10px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
            .header { background: #fe6601; color: #ffffff; text-align: center; padding: 10px; border-radius: 8px 8px 0 0; }
            .content { padding: 20px; font-size: 15px; color: #333;border: 1px solid #fe6601;border-radius:0px 0px 8px 8px; }
            .label { font-weight: bold; color: #555; }
            .t-head{width: 10%;}
            table,tr,th,td{border: 1px solid #000; border-collapse: collapse; padding: 10px;width:100%;}.content_top{padding: 20px 10px;}
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Contact Form Submission</h2>
            </div>
           
            <div class='content'>
                 <div class='content_top'>
                Hey, innovativeecs you have got new contact submission from your website, Details are given below.
            </div>
                <table>
                <tr>
                    <th class='t-head'>Name</th>
                    <td>$name</td>
                </tr>
                <tr>
                    <th class='t-head'>Phone</th>
                    <td>$PhoneNo</td>
                </tr>
                <tr>
                    <th class='t-head'>Email</th>
                    <td>$email</td>
                </tr>
                <tr>
                    <th class='t-head'>Subject</th>
                    <td>$subject</td>
                </tr>
                <tr>
                    <th class='t-head'>Message</th>
                    <td>$message</td>
                </tr>
                </table>
            </div>
        </div>
    </body>
    </html>";

if (mail($to, $subject, $email_template, $headers)) {
    header('Location: contact.php');
} else {
    echo "Failed to send email.";
}
}
?>
