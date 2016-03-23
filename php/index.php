<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nathan Oldfield</title>
    <meta charset="utf-8">
    <!--to ensure proper mobile rendering and touch zooming-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="swipebox/css/swipebox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
  </head>
  <body>

  	<div class="center-div">
<!--________________________________________________________________________-->
<!--______________________________Navigation bar: __________________________-->
    <div class="row">
  		<div class="row" id="navBar">
  			<a name="workAnchor"></a>
  			<div class="col-sm-4"><h3 id="homebtn">Home</h3></div>
  			<div class="col-sm-4"><h3 id="wrkbtn"><a href="#workAnchor" style="text-decoration:none; color: white;">Work</a></h3></div>
  			<div class="col-sm-4"><h3 id="cntctbtn">Contact</h3></div>
  		</div>
<!--________________________________________________________________________-->
<!--______________________________Home div: ________________________________-->
	    <div class="row page" id="home">
	    	<div class="col-sm-6" id="basicInfo">
	    		<h1>Nathan Oldfield</h1>
	    		<p>Computer Science Student</p>
	    	</div>
			<div class="col-sm-6" id="imageBox">
				<img src="images/nath.jpg" class="pull-right" width="100%">
			</div>
  	    </div>
<!--________________________________________________________________________-->
<!--______________________________Work div: ________________________________-->
  	    <div class="row page" id="work" style="display: none;">
	    	<div class="col-sm-12">

			    <h2>Profile</h2>
			    <p>Degree: Bachelor of Science in Computer Science @ University of Manchester</p>
			    <form method="get" action="Nathan_Oldfield_Cv.pdf">
				<button type="submit" class="btn btn-primary center-block">Download a CV</button>
			    </form>

			    <h2>Projects</h2>
	    	    
	    		<h3>Velim</h3>
	    		<hr class="horizontal">
	    		<div class="row">
	    			<div class="col-sm-4">
			    		<a href="images/Velim_screencap.png" class="swipebox" title="Velim">
						<img src="images/Velim_screencap.png" width="100%" id="holla">
						</a>
				    </div>
				    <div class="col-sm-4">
						<a href="images/Velim_screencap2.png" class="swipebox" title="Velim">
						<img src="images/Velim_screencap2.png" width="100%" id="holla">
						</a>
				    </div>
					<div class="col-sm-4">
						<a href="images/Velim_screencap3.png" class="swipebox" title="Velim">
						<img src="images/Velim_screencap3.png" width="100%" id="holla">
						</a>
				    </div>
				</div>
				<hr class="horizontal">

				<p>Web application built using the LAMP stack. Movie search engine which queries a large MySQL database using a wide variety of user filled fields. The MySQL database has been filled using BASH scripts which scrape JSON data from IMDB.com. Implements fuzzy matching for text fields.</p>

				<h3>Writing Portfolio</h3>
	    		<hr class="horizontal">
	    		<div class="row">
	    			<div class="col-sm-4"></div>
				    <div class="col-sm-4">
						<a href="images/teegSite.png" class="swipebox" title="Portfolio">
						<img src="images/teegSite.png" width="100%" id="holla">
						</a>
				    </div>
					<div class="col-sm-4"></div>
				</div>
				<hr class="horizontal">

				<p>Basic static online writing portfolio. Includes a contact section and a work showcase. Banner made with photoshop CS6.</p>

				<h3>Raspberry Pi Home Server</h3>
				<hr class="horizontal">
				<p>Managed house torrents and media, remotely controllable and allowed streaming of media to any computer on the home network. More info to come soon...</p>

	    	</div>
  	    </div>
<!--________________________________________________________________________-->
<!--______________________________Contact div: _____________________________-->
  	    <div class="row page" id="contact" style="display: none;">
	    	<div class="col-sm-12">
	    		<h2>Contact</h2>
	    		<form role="form" method="post" action="index.php">
				    <div class="form-group">
				        <label for="name">Name:</label>
				        <div>
				            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="">
				        </div>
				    </div>
				    <div class="form-group">
				        <label for="email">Email:</label>
				        <div>
				            <input type="email" class="form-control" id="email" name="email" placeholder="bla@bla.com" value="">
				        </div>
				    </div>
				    <div class="form-group">
				        <label for="message">Message:</label>
				        <div>
				            <textarea class="form-control" rows="4" name="message"></textarea>
				        </div>
				    </div>
				    <div class="form-group">
				        <label for="human">2 + 3 = ?:</label>
				        <div>
				            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
				        </div>
				    </div>
				    <div class="form-group">
				        <div>
				        	<br>
				            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary center-block">
				            <br>
				        </div>
				    </div>
				</form>
	    	</div>
  	    </div>
    <br>
  	<br>
  	</div>
    

    <script src="nathScripts.js"></script>
    <script src="swipebox/js/jquery.swipebox.js"></script>
    <script type="text/javascript">
	;( function( $ ) {

		$( '.swipebox' ).swipebox();

	} )( jQuery );
	</script>
  </body>


</html>