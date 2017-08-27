<?php
//composer require mailgun/mailgun-php:~1.7.2
# Include the Autoloader (see "Libraries" for install instructions)
require '../vendor/autoload.php';
use Mailgun\Mailgun;
?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Me</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <!-- Styles  -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/contactme.css') }}">
        
        <!-- Scripts -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    </head>
    <body>
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="">Home</a>
                    <a class="nav-item nav-link" href="aboutme">About Me</a>
                    <a class="nav-item nav-link" href="career">Professional Information</a>
                    <a class="nav-item nav-link active" href="contactme">Contact Me</a>
                </div>
            </div>
        </nav>

        <div class="main-banner">
            <div class="header-name">
                <h3>Contact Me!</h3>
            </div>
        </div>

        <div class="contact-form">
            <form action="contactme" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label class="form-field">Name:</label>
            <input type="text" name="name" id="to" placeholder="John Doe"/><br>
            <label class="form-field">Email Address:</label>
            <input type="text" name="email" id="to" placeholder="johndoe@gmail.com"/><br>
            <label class="form-field">Subject:</label>
            <input type="text" name="subject" id="subject" placeholder="Hello!" required /><br>
            <label class="form-field">Message:</label>
            <textarea type="text" name="msg" id="msg" placeholder="Enter your message here" required ></textarea><br>
            <input type="submit" value="Send" name="submit"/>
            </form>
        </div>
    </body>
</html>

<?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['name'], $_POST['email'], $_POST['subject'],$_POST['msg'])) {
            $name=$_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $msg = $_POST['msg'];

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

            var_dump($name);
            var_dump($email);
            var_dump($subject);
            var_dump($msg);

            echo "<script>alert('Thank you for your email!');</script>";
        }
        else {
            echo "<script>alert('Please fill in all fields in the form.')</script>";
        }
    }
?>
