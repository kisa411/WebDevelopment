<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About Me</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <!-- Styles  -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/aboutme.css') }}">
        
        <!-- Scripts -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/aboutme.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    </head>
    <body>
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="/">Home</a>
                    <a class="nav-item nav-link active" href="aboutme">About Me</a>
                    <a class="nav-item nav-link" href="career">Professional Information</a>
                    <a class="nav-item nav-link" href="projects">Projects</a>
                    <!-- <a class="nav-item nav-link" href="contactme">Contact Me</a> -->
                </div>
            </div>
        </nav>

        <div class="main-banner">
            <div class="header-name">
                <h3>Nice to meet you!</h3>
            </div>
        </div>

        <div class="personal-bio">
            <p>
            Hello, and welcome to my website! My name's Emily Koh and I'm an aspiring full-stack developer currently residing in Dallas, Texas. I was born in Seoul, South Korea, but since then have moved around and lived in many different places. My international background has really contributed to my passion for traveling, and I love visiting and exploring new places! Some of my other hobbies include reading (mostly fantasy, science fiction, mystery, historical fiction, and comedy), listening to podcasts (they're a really great way to learn about new topics that I usually don't hear of or think about), and spending time with my guinea pig Spuddy :)  
            </p>

            <p>
            In the future my long-term goal is to use my skills and talents to do work that is either meaningful to me or can serve a meaningful purpose in other peoples' lives. My professional interests include companies that are based in travel, environmental causes/issues, education, and social impact industries.
            </p>

            <p>
            My secondary goal is to become a more well-rounded developer, and I am working towards achieving this goal by actively learning new languages/technologies and also developing more experience with subjects I am already familiar with. Right now my current interest is learning more about web development (Javascript, web frameworks).
            </p>
        </div>

    </body>
</html>