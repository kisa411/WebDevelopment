<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Professional Info</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <!-- Styles  -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/career.css') }}">
        
        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/career.js') }}"></script>

    </head>
    <body>
        <div class="resume">
            <div class="resume-header">
                Emily Koh<br>
                <span class="subtitle">Application Developer at Call Box</span>
            </div>

            <div class="short-bio">
                Experienced in developing, testing, and debugging code, enthusiastic about learning and mastering new technologies, successful working in both team and self-motivated settings. Willing to relocate for the right opportunity.
            </div>

            <div class="education section-header">
                <p>
                    2012-2016<br>
                    <strong>Bachelor of Science</strong>, <em>University of Notre Dame</em>, Notre Dame, IN. Major: Science-Computing<br>
                    GPA: 3.7/4.0<br>
                    Dean’s List (Fall 2012, Spring 2014, Spring 2015, Fall 2015)<br>
                </p>
                <p>
                    Fall 2014<br>
                    <strong>Bachelor of Science</strong>, <em>National University of Singapore</em>, Singapore. Study Abroad, College of Science<br>
                </p>
            </div>

            <div class="experience section-header">
                <div class="work-experience">
                    Work Experience
                    <p>
                        September 2016 - Present<br>
                        <strong>Application Developer</strong>, <em>Call Box</em>, Dallas, TX.<br>
                        <ul class="description">
                            <li>Assist with the development and testing of new software features in customer-facing products and internal tools.</li>
                            <li>Investigate software issues and implement timely fixes.</li>
                            <li>Utilize external libraries and APIs to successfully complete projects and solve software problems.</li>
                        </ul>
                    </p>
                </div>
                <div class="relevant-experience">
                    Relevant Experience 
                    <p>
                        Summer 2015 - Spring 2016<br>
                        <strong>Undergraduate Research Assistant</strong>, <em>iCeNSA (Interdisciplinary Center for Network Science &amp; Applications)</em>, Notre Dame, IN.<br>
                        <ul class="description">
                            <li>Collaborated with one graduate student to investigate the impact of digitalized healthcare on the wellness of the senior population.</li>
                            <li>Analyzed data obtained from a small-scale implementation of mobile application using Python for data analysis.</li>
                        </ul><br>

                        Fall 2015<br>
                        <strong>Hackathon Participant</strong>, <em>AT&amp;T Mobile App Hackathon</em>, Notre Dame, IN.<br>
                        <ul class="description">
                            <li>Developed an healthcare-focused app for diabetic users where they can keep track of blood sugar levels and food intake, calculate amount of insulin to administer, and call for help if necessary.</li>
                            <li>Implemented the use of AT&amp;T Digital Life APIs with help button function so that when button is pressed the app sends an alarm to paramedics while simultaneously unlocking the front door.</li>
                        </ul>
                    </p>
                </div>
            </div>

            <div class="technical-skills section-header">
                <p>
                    Languages: HTML, CSS, Javascript, Coldfusion, PHP, SQL, Node.js, Python, C, C++, Java
                </p>
                <p>
                    Applications: Visual Studio Code, Sublime, SQL Server, Tableau
                </p>
                <p>
                    Frameworks: Laravel, Vue.js
                </p>
                <p>
                    Operating Systems: Windows, Unix, Linux
                </p>
            </div>

            <div class="contact-information section-header">
                <p>
                    Phone: (949) 702-9525
                </p>
                <p>
                    Email: ykoh1@alumni.nd.edu
                </p>
            </div>
        </div>
        <br>

        <div class="links">
            <span class="links-header">Relevant Links</span><br>
            <a href="https://www.linkedin.com/in/emilykoh94/"><img alt="linkedin profile" width="200" height="50" title="Connect with me on LinkedIn!" src="{{URL::asset('/images/linkedin.png')}}"></a>
            <a href="https://github.com/kisa411"><img alt="github profile" width="150" height="50" title="Check out my Github Profile!" src="{{URL::asset('/images/github.png')}}"></a>
        </div>

        <div class="project-links">
            
        </div>

    </body>
</html>
