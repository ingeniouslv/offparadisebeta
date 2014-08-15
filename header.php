<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
<!--
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/media.css">
        <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,400italic|Old+Standard+TT:700,400' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
-->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="content" class="index hidden-while-loading">
        
        	<header class="global">
        		<h1>OFF⋅PARADISE</h1>
        		<nav class="hidden-phone">
        			<ul class="global">
        				<li class="archive">Previously</li>
        				<li class="contributors">Contributors</li>
        				<li class="contact">Contact</li>
        			</ul>
        			<ul class="share">
        				<li class="facebook">
        					<a href="http://facebook.com/#">
        						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="16px" viewBox="0 0 18 16" enable-background="new 0 0 18 16" xml:space="preserve">
					                <path d="M12.154,3.572c-0.588,0-1.225,0-1.526,0s-0.606,0.316-0.606,0.55c0,0.235,0,1.569,0,1.569s1.886,0,2.13,0
					                c-0.086,1.204-0.263,2.305-0.263,2.305H10.01v6.821H7.209V7.996H5.845V5.701h1.364c0,0,0-1.535,0-1.878
					                c0-0.342-0.069-2.641,2.871-2.641c0.393,0,1.288,0,2.075,0C12.154,2.181,12.154,3.26,12.154,3.572z"></path>
				                </svg>
        					</a>
        				</li>
        				<li class="twitter">
        					<a href="http://twitter.com/#">
        						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="16px" viewBox="0 0 18 16" enable-background="new 0 0 18 16" xml:space="preserve">
			                <path d="M17.015,3.028c-0.588,0.263-1.223,0.438-1.889,0.518c0.68-0.408,1.202-1.052,1.447-1.82c-0.636,0.376-1.34,0.651-2.09,0.799
				                c-0.6-0.641-1.453-1.04-2.399-1.04c-1.817,0-3.288,1.472-3.288,3.289c0,0.258,0.028,0.508,0.085,0.749
				                C6.147,5.387,3.723,4.078,2.102,2.088c-0.283,0.486-0.446,1.05-0.446,1.652c0,1.142,0.581,2.15,1.464,2.737
				                C2.58,6.461,2.072,6.313,1.629,6.067c0,0.015,0,0.027,0,0.042c0,1.594,1.133,2.922,2.639,3.226C3.991,9.41,3.701,9.449,3.4,9.449
				                c-0.212,0-0.417-0.02-0.619-0.058c0.419,1.307,1.634,2.256,3.073,2.282c-1.126,0.882-2.544,1.409-4.085,1.409
				                c-0.266,0-0.527-0.017-0.784-0.046c1.455,0.933,3.185,1.477,5.042,1.477c6.048,0,9.356-5.011,9.356-9.357
				                c0-0.143-0.003-0.285-0.01-0.425C16.017,4.268,16.574,3.687,17.015,3.028z"></path>
			                </svg>
        					</a>
        				</li>
        				<li class="google">
        					<a href="http://plus.google.com/#">
        						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="16px" viewBox="0 0 18 16" enable-background="new 0 0 18 16" xml:space="preserve">
               						 	<g>
					                	<path d="M9,0.033C4.601,0.033,1.034,3.6,1.034,8c0,3.263,1.961,6.064,4.769,7.297
						                c-0.022-0.557-0.003-1.224,0.139-1.829c0.154-0.646,1.025-4.342,1.025-4.342s-0.254-0.509-0.254-1.26
						                c0-1.181,0.684-2.062,1.536-2.062c0.725,0,1.075,0.544,1.075,1.196c0,0.729-0.464,1.817-0.704,2.828
						                C8.42,10.672,9.043,11.36,9.877,11.36c1.509,0,2.525-1.938,2.525-4.234c0-1.746-1.176-3.053-3.315-3.053
						                c-2.416,0-3.922,1.802-3.922,3.815c0,0.694,0.205,1.184,0.525,1.562c0.147,0.174,0.168,0.244,0.114,0.443
						                c-0.038,0.146-0.125,0.501-0.162,0.641c-0.053,0.202-0.216,0.272-0.399,0.198C4.131,10.278,3.613,9.06,3.613,7.69
						                c0-2.263,1.908-4.977,5.693-4.977c3.042,0,5.043,2.202,5.043,4.563c0,3.125-1.736,5.461-4.299,5.461
						                c-0.86,0-1.668-0.466-1.945-0.993c0,0-0.462,1.835-0.561,2.188c-0.168,0.614-0.499,1.229-0.802,1.708
						                c0.717,0.21,1.474,0.326,2.258,0.326c4.4,0,7.966-3.567,7.966-7.967C16.967,3.6,13.4,0.033,9,0.033z"></path>
				                </g>
				                </svg>
        					</a>
        				</li>
        			</ul>
        		</nav>
        		
        		<nav class="visible-phone">
        			<select>
        				<optgroup label="- Navigate -">
	        				<option>Home</option>
	        				<option>Previously</option>
	        				<option>Contributors</option>
	        				<option>Contact</option>
        				</optgroup>
        				<optgroup label="- Social -">
        					<option>Facebook</option>
        					<option>Twitter</option>
        					<option>Google +</option>
        				</optgroup>	
        			</select>
        		</nav>
        	</header>
        
        	<div class="page theme-light">
