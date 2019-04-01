<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
    <title>Kane Robotics</title>
</head>

<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="<?php echo site_url('#');?>">Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/events');?>">Events</a>
            </li>
            <li>
                <a href="<?php echo site_url('/services');?>">Services</a>
            </li>
            <li>
                <a href="<?php echo site_url('/team');?>">Team</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about');?>">About</a>
            </li>
            <li>
                <a href="<?php echo site_url('/contact');?>">Contact</a>
            </li>
        </ul>
    </div>

    <nav>
        <div id="logo-img">
            <a href="#">
               <span id="logo-fade"> Kane Robotics </span>
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="<?php echo site_url('#');?>">Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/events');?>">Events</a>
            </li>
            <li>
                <a href="<?php echo site_url('/services');?>">Services</a>
            </li>
            <li>
                <a href="<?php echo site_url('/team');?>">Team</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about');?>">About</a>
            </li>
            <li>
                <a href="<?php echo site_url('/contact');?>">Contact</a>
            </li>
           
            <li>
                <div id="search-icon">
    
                </div>
            </li>
        </ul>
    </nav>

    <div id="searchbox">
        <input type="text" placeholder="Search Here">
    </div>