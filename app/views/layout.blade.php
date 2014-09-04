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
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			    <div class="container">
				    <div class="navbar-header">
					    <h1>{{ HTML::link('/', 'Code Atlanta') }}</h1>
				    </div>
				    <div class="collapse navbar-collapse" id="navbar-collapse-main">
					    <ul class="navbar-right nav navbar-nav">
                            <li>{{ HTML::link('/about', 'About') }}</li>
                            <li>{{ HTML::link('/join', 'Join Us') }}</li>
                            <li>{{ HTML::link('/sponsors', 'Sponsors') }}</li>
                            <li>{{ HTML::link('/contact', 'Contact') }}</li>
					    </ul>
				    </div>
			    </div>
		    </nav>
        </header>
        @yield('content')
        <footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<ul id="socialmedia">
							<li>Facebook</li>
							<li>Twitter</li>
							<li>Github</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<p class="text-center"> &copy; 2014 Codeatlanta.org </p>
						<p class="text-center"> This will be a completely open source project. If you want to contribute, please check out our github repo.</p>
					</div>
					<div class="col-lg-3">
					</p>
				</div>
			</div>
		</footer>
    </body>
</html>
