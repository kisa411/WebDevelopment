<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Me</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                Contact me! 
            </div>

            <div class="contact-me-form input-group">
                <form action="send_form.php" method="post" name="contact_me">
                    <span class="input-group-addon" id="basic-addon1">Name</span>
                    <input type="text" name="name" placeholder="Jane Doe" required><br>
                    <span class="input-group-addon" id="basic-addon1">Email</span>
                    <input type="text" name="email" placeholder="janedoe@email.com" required><br>
                    <span class="input-group-addon" id="basic-addon1">Message</span>
                    <input type="text" name="message" required><br>
                </form>
            </div>
        </div>
    </body>
</html>
