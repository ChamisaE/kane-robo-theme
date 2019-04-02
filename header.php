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
				  <a href="<?php echo site_url('/home');?>">Home</a>
			  </li>
			  <li>
				  <a href="<?php echo site_url('/about');?>">About</a>
			  </li>
			  <li>
				  <a href="<?php echo site_url('/advisory-board');?>">Advisory Board</a>
			  </li>
			  <li>
				  <a href="<?php echo site_url('/management');?>">Management</a>
			  </li>
            <li>
                <a href="<?php echo site_url('/events');?>">Events</a>
            </li>
            <li>
                <a href="<?php echo site_url('/Products');?>">Products</a>
            </li>
            <li>
                <a href="<?php echo site_url('/services');?>">Services</a>
            </li>
            <li>
                <a href="<?php echo site_url('/contact');?>">Contact</a>
            </li>
        </ul>
    </div>


    <nav>
        <div id="logo-img">
            <a href="<?php get_site_url('/home'); ?>">
               <span id="logo-fade"> Kane Robotics </span>
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
			  <li>
				  <a href="<?php echo site_url('/home');?>">Home</a>
			  </li>
			  <li>
				  <a href="<?php echo site_url('/about');?>">About</a>
			  </li>
			  <li>
				  <div class="dropdown">
					  <button class="dropbtn">Team
						  <i class="fas fa-angle-down"></i>
					  </button>
					  <div class="dropdown-content">
						  <a href="<?php echo site_url('/advisory-board');?>">Advisory Board</a>
						  <a href="<?php echo site_url('/management');?>">Management</a>
					  </div>
				  </div>
			  </li>
            <li>
                <a href="<?php echo site_url('/events');?>">Events</a>
            </li>
            <li>
                <a href="<?php echo site_url('/products');?>">Products</a>
            </li>
            <li>
                <a href="<?php echo site_url('/services');?>">Services</a>
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
