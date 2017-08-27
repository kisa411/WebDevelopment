<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class SendFormController extends Controller
{
    /**
     * send a message to email
     *
     * @param  name  $name
     * @param  email address of sender  $email
     * @param  email subject  $subject
     * @param  email body  $msg
     */
    public function sendMessage($name, $email, $subject, $msg)
    {
        $mgClient = new Mailgun('key-9a8fee8b6f385d89c079a51815d301cf');
        // Enter domain which you find in Default Password
        $domain = "sandbox5fbbacde30104101874dab851b50ddff.mailgun.org";

        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            "from" => "$name <$email>",
            "to" => "Emily <kisa411@.$domain>",
            "subject" => "$subject",
            "text" => "$msg"
        ));

        echo "<script>alert('Thank you for your email!');</script>";
    }
}


// public function sendMessage() {
//     if (isset($_POST['submit'])) {
//         if (isset($_POST['name'], $_POST['email'], $_POST['subject'],$_POST['msg'])) {
//             $name=$_POST['name'];
//             $email = $_POST['email'];
//             $subject = $_POST['subject'];
//             $msg = $_POST['msg'];

//             $mgClient = new Mailgun('key-9a8fee8b6f385d89c079a51815d301cf');
//             // Enter domain which you find in Default Password
//             $domain = "sandbox5fbbacde30104101874dab851b50ddff.mailgun.org";

//             # Make the call to the client.
//             $result = $mgClient->sendMessage($domain, array(
//                 "from" => "$name <$email>",
//                 "to" => "Emily <kisa411@.$domain>",
//                 "subject" => "$subject",
//                 "text" => "$msg"
//             ));

//             echo "<script>alert('Thank you for your email!');</script>";
//         }
//         else {
//             echo "<script>alert('Please fill in all fields in the form.')</script>";
//         }
//     }
// }
?>