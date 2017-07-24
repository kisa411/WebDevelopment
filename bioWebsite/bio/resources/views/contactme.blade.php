<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Emily Koh</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <div class="title m-b-md">
                    Contact me! 
                </div>

                <div class="contact-me-form">
                    <form action="send_form.php" method="post" name="contact_me">
                        Name: <input type="text" name="name" required><br>
                        Email Address: <input type="text" name="email" required><br>
                        Message: <input type="text" name="message" required><br>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
