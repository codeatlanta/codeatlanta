<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>CodeAtlanta | Learn to Code | Atlanta | Code For Free | Job Skills</title>
        <meta name="description" content="Codeatlanta.org A place to come learn to code locally with help from local developers, designers, and other IT people.">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href='http://fonts.googleapis.com/css?family=Raleway:200,400' rel='stylesheet' type='text/css'>
        {{ HTML::style('/css/bootstrap.min.css'); }}
        {{ HTML::style('/css/codeatlantastyles.css'); }}
        {{ HTML::script('/js/jquery-1.11.1.min.js'); }}
    </head>
    <body>
        <header>
            <div class="header-wrap">
                <h1>{{ HTML::link('/', 'Code Atlanta') }}</h1>
                <nav>
                    <ul>
                        <li>{{ HTML::link('/events', 'Events') }}</li>
                        <li>{{ HTML::link('/about', 'About') }}</li>
                        <li>{{ HTML::link('/join', 'Join Us') }}</li>
                        <li>{{ HTML::link('/sponsors', 'Sponsors') }}</li>
                        <li>{{ HTML::link('/contact', 'Contact') }}</li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="content">
            @yield('content')
        </div>
        <footer>
            <div class="footer-wrap">
                <div class="footer-about">
                    <h3>About Code Atlanta</h3>
                    <p>Code Atlanta is a non-profit organization with the goal of creating a network of professional software developers, graphic designers and other technological professions and helping persons in the Atlanta area get started with these professions to jumpstart their new careers.
                </div>
                <div class="footer-social">
                    <h3>Stay Connected with Code Atlanta</h3>
                    <ul>
                        <li><a href="http://www.reddit.com/r/codeatlanta" target="_blank">Reddit</a></li>
                        <li><a href="#" target="_blank">Facebook</a></li>
                        <li><a href="#" target="_blank">Twitter</a></li>
                        <li><a href="https://github.com/codeatlanta" target="_blank">GitHub</a></li>
                        <li><a href="#" target="_blank">Linked In</a></li>
                    </ul>
                </div>
                <div class="footer-copy">
                    <p>&copy; 2014 CodeAtlanta.org | <a href="#">Privacy Policy</a></p>
                </div>
            </div>
		</footer>
    </body>
</html>
