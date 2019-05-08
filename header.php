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
				<a href="<?php echo site_url('/about');?>">About</a>
			</li>
			<li>
				<a href="<?php echo site_url('/management');?>">Management</a>
			</li>
			<li>
				<a href="<?php echo site_url('/advisory-board');?>">Advisory Board</a>
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
        </ul>
    </div>


    <nav>
        <div id="logo-img">
            <a href="<?php echo site_url('/');?>">
               <span id="logo-fade"> Kane Robotics </span>
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
			  <li>
				  <a href="<?php echo site_url('/about');?>">About</a>
			  </li>
            <li>
                <a href="<?php echo site_url('/products');?>">Products</a>
            </li>
            <li>
                <a href="<?php echo site_url('/services');?>">Services</a>
            </li>
			 	 <li>
				  <div class="dropdown">
					  <button class="dropbtn">Team
						  <i class="fas fa-angle-down"></i>
					  </button>
					  <div class="dropdown-content">
						  <a href="<?php echo site_url('/management');?>">Managemet</a>
						  <a href="<?php echo site_url('/advisory-board');?>">Advisory Board</a>
					  </div>
				  </div>
			 	 </li>
            <li>
                <a href="<?php echo site_url('/events');?>">Events</a>
            </li>
			<li>
                <a href="<?php echo site_url('/contact');?>">Contact</a>
            </li>
            <li>
                	<!--Don't delete this it is what the js file uses for the slideout menu  -->
                <div id="search-icon">	

                 </div>	
            </li>
           
        </ul>
    </nav>
 