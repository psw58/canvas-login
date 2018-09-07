<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/images/cornell/favicon.ico" type="image/vnd.microsoft.icon">
	<title>Cornell at Canvas</title>
	
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,700i|Lato:300,400" rel="stylesheet">
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="fonts/font-awesome.min.css" rel="stylesheet">
	<link href="fonts/material-design-iconic-font.min.css" rel="stylesheet">
	<link href="fonts/cornell-custom.css" rel="stylesheet">	
	
	<link href="css/base.css" rel="stylesheet">
	<link href="css/cornell.css" rel="stylesheet">
	<link href="css/cti.css" rel="stylesheet">
	<link href="css/cwd_slider.css" rel="stylesheet">
	<link href="css/cwd_utilities.css" rel="stylesheet">	
	<link href="css/canvas.css" rel="stylesheet">

	<!-- polyfills for html imports -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/polymer/0.3.3/platform.js"></script>
	<link rel="import" href="imports/showcase.html">

	<style>
		/* test your styles here */

	</style>

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body class="cu-seal home">
	<div id="skipnav"><a href="#main">Skip to main content</a></div>
	<div id="cu-search" class="cu-search">
		<div class="container-fluid">
			<form id="cu-search-form" role="search" action="http://www.cornell.edu/search/">
				<label for="cu-search-query" class="sr-only">Search:</label>
				<input type="text" id="cu-search-query" name="s" value="" size="30">
				<button name="btnG" id="cu-search-submit" type="submit" value="go"><span class="sr-only">Submit Search</span></button>

				<div class="search-filters">
					<h2 class="sr-only">Search Filters:</h2>
					<input type="radio" id="cu-search-filter1" name="sitesearch" value="thissite" checked="checked">
					<label for="cu-search-filter1"><span class="sr-only">Search </span>This Site</label> 
					<input type="radio" id="cu-search-filter2" name="sitesearch" value="cornell">
					<label for="cu-search-filter2"><span class="sr-only">Search </span>Cornell</label> 
				</div>
			</form>
		</div>
	</div>
	
	<div id="brand" class="band">
		<header id="cu-header">
			<div class="cu45-helper"></div>
			<div class="container-fluid cu-brand">
				<h1 class="cu-logo"><a href="http://www.cornell.edu"><img class="sr-only" src="images/cornell/bold_cornell_logo_simple_b31b1b.svg" alt="Cornell University" width="245" height="62"></a></h1>
				<div class="cu-unit">
					<h2><a href="/">Welcome to Canvas at Cornell University</a></h2>
				</div>
				<div class="buttons">
					<button class="mobile-button" id="mobile-nav">Main Menu</button>
					<button class="mobile-button" id="cu-search-button">Search</button>
					<nav id="utility-navigation" aria-label="Supplementary Navigation">
						<ul class="list-menu links">
							<li><a href="#">About Us</a></li>
							<li><a href="mailto:canvas@cornell.edu">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
			<div class="flex banner-flex">
                <div id='notification' class="container-fluid">
            </div>                
                
				<div class="band">
					<div class="container-fluid sidebar sidebar-right">
						<div class="row flex">
					
							<div class="primary">
                            <h2 class='h1'>Log Into <em>Canvas</em></h2>
                            <p>
                                <a class='link-button' href='https://cornell.instructure.com/login/saml/1'>Cornell NetID</a>
							</p>
                            <p>
                                <a class='link-button' href='https://cornell.instructure.com/login/saml/2'>Weill ID</a>
                            </p>							
                            <p>
                                <a class='link-button' href='https://cornell.instructure.com/login/canvas'>Guest</a>
                            </p>
                            </p>
                                Help logging in
                                <a href='#'>Canvas Terms of Use FAQ</a>
                            </p>
							</div>
						
							<!--div class="secondary">
								<div class="quote">
									<h2 class="-sr-and-mobile-only">Cornell University Copyright Notification</h2>
                                    <p>The University expects that users of these services will in good faith post material in compliance with copyright laws. If you have questions about the use of any material, please send mail to copyright@cornell.edu.</p>
									<p>To the best of my knowledge, I assert that all the copyrighted material that I will post on this site will be used in a manner consistent with copyright law. I either have permission to use the material or believe, after performing a "fair use" assessment, that it falls within the "fair use" exception to the requirement of getting permission.</p>
									<p><a href='http://www.cornell.edu/copyright.cfm'>Copyright</a></p>
									<h2 class="-sr-and-mobile-only">Cornell University Copyright Notification</h2>
                                    <p>The University expects that users of these services will in good faith post material in compliance with copyright laws. If you have questions about the use of any material, please send mail to copyright@cornell.edu.</p>
									<p>To the best of my knowledge, I assert that all the copyrighted material that I will post on this site will be used in a manner consistent with copyright law. I either have permission to use the material or believe, after performing a "fair use" assessment, that it falls within the "fair use" exception to the requirement of getting permission.</p>
                                	<p><a href='http://www.cornell.edu/copyright.cfm'>Copyright</a></p>									
								</div>
					
							</div-->
							<div id="sidebar-top" class="secondary">
					
							<nav class="secondary-navigation mobile-expander" aria-label="Section Navigation"><a href="#" aria-hidden="true" class="mobile-expander-heading mobile-only"><span class="zmdi zmdi-menu"></span>More in this Section</a>
								<div class="mobile"><div class="">
									<ul class="menu">
										<li class="current-menu-ancestor current-menu-parent"><a href="#">Learning Technologies</a>
											<ul class="sub-menu">
												<li class="menu-item menu-item--collapsed"><a href="https://teaching.cornell.edu/">Center for Teaching Innovation</a></li>
												<li class="menu-item"><a href="https://it.cornell.edu/canvas/">Blackboard to Canvas Migration</a></li>
												<li class="menu-item"><a href="https://www.instructure.com/">About Canvas</a>
												<li class="menu-item menu-item--expanded current-menu-item"><a href="#">Help & Support links</a>
													<ul class="sub-menu">
														<li class="menu-item"><a href="https://community.canvaslms.com/community/answers/guides/">Search the Canvas Guides</a></li>
														<li class="menu-item"><a href="mailto:support@instructure.com">support@instructure.com</a></li>
													</ul>											
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</nav>
							
						</div>							
						</div>
					</div>
				</div>
			</div>
	</div>

	<div id="main-content" class="band">
		<main id="main" class="container-fluid aria-target" tabindex="-1">
			<div class="row">
				<div id="sidebar-top" class="secondary">
					<!--html imports rendered here -->
					<div id='spotlight' class="showcase">
						
					</div><!--end of showcase -->
				</div>
			</div>
		</main>
	</div>
	
	<footer>
		<div class="main-footer">
			<div class="container-fluid sidebar-left">
				<div class="row">
					<div class="primary">
						<div class="one-col padded footer-links">
                        <div>
								<h3 class="h6">Additional Resources</h3>
								<ul class="list-menu vertical">
							        <li>If you have a disability and are having trouble accessing information on this website or need materials in an alternate format,<br> Contact <a href="mailto:web-accessibility@cornell.edu">web-accessibility@cornell.edu</a> for assistance.</li>
								</ul>
							</div>                            
						</div>

					</div>
					<div class="secondary">
						<h2 class="h4">Canvas at Cornell</h2>
						<p>Cornell University<br>Ithaca, NY 14853-6601</p>
						<p><a class="link-block" href="mailto:canvas@cornell.edu">Contact Us</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
			<div class="container-fluid sidebar-left">
				<div class="row">
					<div class="secondary">
						<a href="https://www.cornell.edu">Cornell University &copy;2018</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<!-- jQuery and Contrib Components -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	<!-- Render Notification Banner -->
	<script src="js/notifications.js"></script>
	<!-- render HTML imports -->
    <script src="js/loadImports.js"></script>
    <!--CWD required for search -->
	<script src="js/cwd.js"></script>
	<script src="js/cwd_utilities.js"></script>    
	<!-- mobile slider -->
	<script src="js/contrib/modernizr.js"></script>
	<script src="js/cwd_slider.js"></script>	
</body>
</html>