<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Template - Cornell CSS Framework</title>
	
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,700i|Lato:300,400" rel="stylesheet">
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="css/base.css" rel="stylesheet">
	<link href="css/cornell.css" rel="stylesheet">
    <link href="css/cti.css" rel="stylesheet">
    <style>
        #site-header > div > div.band > div > div > div.primary > h2 > em{
            color: #b31b1b;
        } 
        #site-header > div > div.container-fluid > div{
            margin-bottom: 20px;
        }

        .flex{
            display: flex;

        }

        #site-header > div > div.band > div > div > div.primary{
            background: #cce0e6;
            text-align: center;
            padding: 30px;
            padding-left: 50px;
            background-size: contain;                  
            background-image: url('./images/cti/canvas transparentlogo3.png');
            background-repeat:   no-repeat;
            background-position: -200px;              
        }      
        #site-header > div > div.band > div > div > div.secondary{
            /*padding: 0px 0px 0px 30px;*/
        }

        a.link-button{
            font-size: 24px;
            padding: 0.5em 1em;
		} 
		a.link-button:active, a.link-button:hover, a.link-button:focus{background: #315163;color:#fff;}	
        
        .quote p {
            text-indent: 0em;
        }

       @media (min-width: 1200px){
        .banner-flex:before {
            } 
        }


        @media (min-width: 768px){
            #site-header > div > div.band > div > div > div.primary{
                width: 50%;
            }
            #site-header > div > div.band > div > div > div.secondary{
            width: 50%;
            }       
        } 

        #notification > div > p > i  {
            padding-right: 5px;
            font-size: 1.2em;
        }

    </style>
	<!-- import polyfills -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/polymer/0.3.3/platform.js"></script>
	<link rel="import" href="imports/spotlight.html">

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
					<h2><a href="/">Canvas at Cornell</a></h2>
				</div>
				<div class="buttons">
					<button class="mobile-button" id="mobile-nav">Main Menu</button>
					<button class="mobile-button" id="cu-search-button">Search</button>
					<nav id="utility-navigation" aria-label="Supplementary Navigation">
						<ul class="list-menu links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		<header id="site-header">
			<div class="flex banner-flex">
            <div id='notification' class="container-fluid">
            </div>                
                
				<div class="band">
					<div class="container-fluid sidebar sidebar-right">
						<div class="row flex">
					
							<div class="primary">
                            <h2 class='h1'>Log Into <em>Canvas</em></h2>
                            <p>
                                <a class='link-button'>NetID</a>
                            </p>
                            <p>
                                <a class='link-button'>Guest</a>
                            </p>
                            </p>
                                Help logging in
                                <a href='#'>Canvas Terms of Use FAQ</a>
                            </p>
							</div>
						
							<div class="secondary">
								<div class="quote">
									<h2 class="-sr-and-mobile-only">Copyright Statement</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et mollis nisi. Sed nec finibus justo. Vivamus hendrerit tellus id enim ornare fringilla. Ut justo arcu, sagittis et ligula et, commodo varius elit. Aenean feugiat tempor dui vel pharetra. Nullam ut massa ultricies, semper magna nec, placerat mi. Nulla in nibh quis dui tempor tempus vitae ut augue. Nullam ut vehicula purus. Quisque bibendum venenatis tincidunt.</p>
<p>Sed blandit viverra consectetur. Nam vel dignissim orci. Ut elementum turpis ac porttitor sollicitudin. Morbi ullamcorper justo ante, a aliquam lacus facilisis imperdiet. Nam volutpat, tellus ut gravida maximus, augue velit sodales enim, ultrices. Aenean. In et diam congue, placerat nunc ut, condimentum risus.</p>
                                <p><a href='http://www.cornell.edu/copyright.cfm'>Copyright</a></p>
								</div>
								<!-- <p><a class="link-button faculty-button" href="#"><span class="icon icon-info-news"></span><span class="deco">New Faculty</span></a></p> -->
							</div>
					
						</div>
					</div>
				</div>
			</div>
		
		</header>
	</div>

	<div id="main-content" class="band">
		<main id="main" class="container-fluid aria-target" tabindex="-1">
		
			<div class="row">
				<div id="sidebar-top" class="secondary">
					
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
						<!--h2 class="h3 sr-and-mobile-only">Quick Links</h2-->
						<!-- <p>Cornell has a variety of resources to help you navigate everything from application to graduation.</p> -->
						<div class="one-col padded footer-links">
                        <div>
								<h3 class="h6">Additional Resources</h3>
								<ul class="list-menu vertical">
							        <!-- <li><a href="#">Intranet</a></li> -->
							        <li>If you have a disability and are having trouble accessing information on this website or need materials in an alternate format,<br> Contact <a href="mailto:web-accessibility@cornell.edu">web-accessibility@cornell.edu</a> for assistance.</li>
								</ul>
							</div>                            
							<!--div>
								<h3 class="h6"></h3>
								<ul class="list-menu vertical">
                                <a href="https://www.cornell.edu">Cornell University</a> &copy;2018
								</ul>
							</div-->
						</div>

					</div>
					<div class="secondary">
						<h2 class="h4">Canvas at Cornell</h2>
						<p>Cornell University<br>Ithaca, NY 14853-6601</p>
						<p><a class="link-block" href="#">Contact Us</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
			<div class="container-fluid sidebar-left">
				<div class="row">
					<!--div class="primary">
						<ul class="list-menu">
                            <li><a href="mailto:web-accessibility@cornell.edu">Web Accessibility Help</a></li>
							< <li><a href="#">Intranet</a></li>>
							<li>If you have a disability and are having trouble accessing information on this website or need materials in an alternate format,<br> Contact <a href="mailto:web-accessibility@cornell.edu">web-accessibility@cornell.edu</a> for assistance.</li>
						</ul>
					</div-->
					<div class="secondary">
						<a href="https://www.cornell.edu">Cornell University &copy;2018</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<!-- jQuery and Contrib Components -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
    <!-- CWD Components -->
    <script src="js/loadImports.js"></script>
    <!--required for search -->
	<script src="js/cwd.js"></script>
	<script src="js/cwd_utilities.js"></script>    

</body>
</html>