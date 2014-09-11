@extends('layout')

@section('content')
    <div class="home-panel">
        <h2>Let's Get Coding Atlanta!</h2>
        <p>Code Atlanta is Atlanta's largest community of software developers, graphic designers and IT professionals. We are a diverse group of professionals dedicated to building up of the Atlanta technical-jobs market and educating future technology job applicants with online our courses, meetup events and conferences.</p>
        <p>With over 30 million STEM field jobs opening up within the next 4 years, Atlanta has a unique opportunity to stand out as a growing market for technical professionals. Whether you are curious about getting started in a technical profession, or are already a professional in the Atlanta area, our resources will help you to reach the career of your dreams.</p>
    </div>
    <div class="home-panel">
        <div class="triple-panel">
            <img src="/img/desktop-wireframe.png" alt="Design" />
            <h3>Design</h3>
        </div>
        <div class="triple-panel">
            <img src="/img/keyboard-mouse.png" alt="Develop" />
            <h3>Develop</h3>
        </div>
        <div class="triple-panel">
            <img src="/img/busy-web-portal.png" alt="Discover" />
            <h3>Discover</h3>
        </div>
        <p>With our online instruction courses, in-person guided quick-builds, hack-a-thons, and technology conferences, you can get started in a new career, network with people in the Atlanta technical industry, and have fun all at the same time. Find out how you can get started learning new the new skills for the jobs of tomorrow.</p>
        {{ HTML::link('/about', 'Learn More', array('class' => 'button')) }}
    </div>
    <div class="home-panel">
        <h2>Upcoming Events</h2>
        <p>There are no scheduled, upcoming events.</p>
    </div>
    <div class="home-panel">
        <h2>How You Can Help!</h2>
        <p>As we continue growing, we are looking forward to bring classes with the help of online resources to people all over the Atlanta area. We are currently in need of donations for hosted-server time, physical computer assets, and event and conference spaces. To see our current accepted donations, please see the <a href="#">Get Involved</a> page. Our goal is get people placed in software, graphics design and information technology positions after having demostrated the skills required for the profession. Your voluntary donations of time, resources and financial support all work to help the Atlanta community grow.</p>
    </div>
@stop