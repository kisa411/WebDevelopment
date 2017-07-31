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
        <script type="text/javascript" src="{{ asset('js/contactme.js') }}"></script>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                Contact me! 
            </div>

            <div class="contact-me-form">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

                <div class="form-group">
                    {!! Form::label('Your Name') !!}
                    {!! Form::text('name', null, 
                        array('required', 
                            'class'=>'form-control', 
                            'placeholder'=>'Your name')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Your E-mail Address') !!}
                    {!! Form::text('email', null, 
                        array('required', 
                            'class'=>'form-control', 
                            'placeholder'=>'Your e-mail address')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Your Message') !!}
                    {!! Form::textarea('message', null, 
                        array('required', 
                            'class'=>'form-control', 
                            'placeholder'=>'Your message')) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Contact Us!', 
                    array('class'=>'btn btn-primary')) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </body>
</html>
