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
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script type="text/javascript" src="{{ asset('js/career.js') }}"></script>
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
                     <a class="nav-item nav-link" href="aboutme">About Me</a>
                     <a class="nav-item nav-link active" href="career">Professional Information</a>
                     <a class="nav-item nav-link" href="contactme">Contact Me</a>
                 </div>
             </div>
         </nav>
 
         <div class="main-banner">
             <div class="header-name">
                 <h3>Professional Information</h3>
             </div>
         </div>
         <div class="resume">
             <div class="resume-header section-header">
                 Application Developer at <a href="http://callbox.com/" target="_blank">Call Box</a>
             </div>
 
             <div class="short-bio">
                 Experienced in developing, testing, and debugging code, enthusiastic about learning and mastering new technologies, successful working in both team and self-motivated settings. Willing to relocate for the right opportunity.
             </div><br>
 
             <div class="education section-header">
                 Education
             </div>
             <div class="education">
                 <p>
                     2012-2016<br>
                     <strong>Bachelor of Science</strong>, <em>University of Notre Dame</em>, Notre Dame, IN. Major: <a href="http://science.nd.edu/undergraduate/majors/collegiate-sequence/" target="_blank">Science-Computing</a><br>
                     GPA: 3.7/4.0<br>
                     Dean’s List (Fall 2012, Spring 2014, Spring 2015, Fall 2015)<br>
                 </p>
                 <p>
                     Fall 2014<br>
                     <strong>Bachelor of Science</strong>, <em>National University of Singapore</em>, Singapore. Study Abroad, College of Science<br>
                 </p>
             </div>
 
             <div class="work-experience section-header">
                 Work Experience
             </div>
             <div class="work-experience">
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
             <div class="relevant-experience section-header">
                 Relevant Experience
             </div>
             <div class="relevant-experience">
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
 
             <div class="technical-skills section-header">
                 Technical Skills
             </div>
             <div class="technical-skills">
                 <p>
                     Languages: HTML, CSS, Javascript, Coldfusion, PHP, SQL, Node.js, Python, C, C++, Java<br>
                     Applications: Visual Studio Code, Sublime, SQL Server, Tableau<br>
                     Frameworks: Laravel, Vue.js<br>
                     Operating Systems: Windows, Unix, Linux<br>
                 </p>
             </div>
 
             <div class="contact-information section-header">
                 Contact Information
             </div>
             <div class="contact-information">
                 <p>
                     Phone: (949) 702-9525<br>
                     Email: <a href="mailto:ykoh1@alumni.nd.edu">ykoh1@alumni.nd.edu</a>
                 </p>
             </div>
         </div>
         <br>
 
         <div class="links section-header">
             <span class="links-header">Relevant Links</span><br>
             <a href="https://www.linkedin.com/in/emilykoh94/"><img alt="linkedin profile" width="200" height="50" title="Connect with me on LinkedIn!" src="{{URL::asset('/images/linkedin.png')}}"></a>
             <a href="https://github.com/kisa411"><img alt="github profile" width="150" height="50" title="Check out my Github Profile!" src="{{URL::asset('/images/github.png')}}"></a>
         </div>
 
         <div class="project-links">
             
         </div>
 
     </body>
 </html>