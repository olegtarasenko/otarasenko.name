<!DOCTYPE html>

<html lang="en">

<head>
    <title>oleg tarasenko | home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed|Merriweather|Raleway' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="email/validation.js" type="text/javascript"></script>
    <link rel="stylesheet" href="socicons.css">
    <link rel="stylesheet" href="contact.css">
</head>

<body>
<style type="text/css">

	.navbar-default {
		border: 0px solid #fff;
		box-shadow: 5px 5px 10px 5px rgba(0,0,0,.2);
		background: #fff;
		background-image: url('tria.png');
		background-size: cover;
		border-radius:0px;
	}

	.navbar .navbar-nav {
		display: inline-block;
		float: none;
		vertical-align: top;
	}

	.navbar .navbar-collapse {
		text-align: center;
	}

	.navbar-nav li a {
		padding: 22px 22px;
	    font-size: 14px;
	    letter-spacing: 1px;
	    text-decoration: none;
	    text-transform: uppercase;
	}

	.navbar-default .navbar-nav>li>a {
		color: #fff;
	}

	.navbar-default .navbar-nav>li>a:hover {
		color: #fff;
		background: rgba(0,0,0,.35);
	}

	h1 {
	    color: #383838;
		font-size: 42px;
		font-family: 'Ubuntu Condensed', sans-serif;
		text-align: center;
	  	margin-top: 5px;
	  	margin-bottom: 2.5px;
	}

	h2 {
	   color: #404040;
	   font-size: 25px;
	   text-align:center;
	   font-family: 'Ubuntu Condensed', sans-serif;
	   margin-top: 2.5px;
	   margin-bottom: 5px;
	}

	h3 {
	   color: #202020;
	   font-size: 21px;
	   text-align:center;
	   font-family: 'Raleway', serif;
	   padding-bottom: 10px;
	}

	h4 {
		font-size: 18px;
		text-align: center;
	    font-family: 'Raleway', serif;
	    margin-bottom: 10px;
	    margin-top: 3px;
	}

	p {
	    font-family: 'Merriweather', serif;
	    font-size: 15px !important;
		line-height: 30px;
		color: #202020; 
		padding-top: 0px; 	
	  	padding-bottom: 0px !important;
	  	margin-right:auto;
	  	margin-left:auto;
	}

	a {
		color: #1e90ff; 
	}

	a:hover {
		color:#202020 ;
		text-decoration: underline;

	}

	.my-photo {
		text-align: center;
	}

	.main-border {
		margin-top: 100px;

	}

	.footer {
		font-family: 'Raleway', serif;
		position:static;
		margin-bottom: 10px;
		font-size: 10px;
		text-align: center;
	}

	.jumbotron {
		background: rgba(223, 223, 223, 0.5);
		margin-bottom: 35px;
	}

	.container .jumbotron {
		border-radius: 0px;
	}

	.jumbotron, .container-fluid .jumbotron {
  		padding-top: 10px;
  		padding-bottom: 7px;
	}

	.socialbuttons {
		float: right;
	}

	.socicons {
		text-align: right;
	}

</style>

<div class="header" style="background-image:url(tria.png); opacity:0.7; filter: alpha(opacity=70);"></div>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
    <!-- <h1>Oleh Tarasenko</h1> -->
  	<!-- <h2>IT SPECIALIST</h2> -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                  </div>
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="notes.php">Notes</a></li>
                <li><a data-toggle="modal" data-target="#basicModal">Contact</a></li>
                <li><a href="ru.php" >RU</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="basicModal" tabindex="-1" role="dialog">
     <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
             <h3 class="modal-title" id="myModalLabel">Contact me</h3>
          </div>
        <div class="modal-body">
          <form name="enq" method="post" action="email/" onsubmit="return validation();">
				<fieldset>
			<div class="inputname">
				<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Name" />
			</div>
			<div class="inputemail">
				<input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
			</div>
			<div class="textareap">
				<textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments"></textarea>
				</div>
   <div class="modal-footer"><div class="actions"><input type="submit" value="Send" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
   <button class="btn btn-default" type="button" data-dismiss="modal">Close</button></div></div>
			</fieldset>
				</form> 
      				</div>
    	</div>
  	</div>
</div>

	<div class="main-border">
		<div class="container">
		<?php /*echo $_GET['msg']; */ ?>
			<div class="jumbotron">
<h3>Hello and welcome</h3>
<h4>~Nice to see you!~</h4>
<p class="my-photo"><object type="image/png" width="135px" height="135px" data="my.png"></object></p>
<p>Glad to see you on my page in the global web, if you are an <code>IT recruiter</code> and you need a veeery good specialist with excellent skills, and in generally just a great guy, and to all a very humble, please download my <a href="http://otarasenko.name/oleg_tarasenko_cv.pdf">CV</a>.<br><br>

If you're an IT, you can read my notes about setting up FreeBSD, plus I'm planning to shares more interesting instructions about network security configuration, and Linux shell in the future, so please follow me.<br><br>

And if you got here by mistake, you can get acquainted with me more closer just by clicking on the social links down below.<br><br>

I like snowboarding, mountains, ocean, swimming, speed, motorcycles (love to ride), of course my wife and technologies.</p>

	<div class="socicons">
	    <ul class="soc">
	    <li><a class="soc-linkedin" href="https://ua.linkedin.com/in/oleg-tarasenko-46822a88/en"></a></li>
	    <li><a class="soc-facebook" href="https://www.facebook.com/OlehTarasenko"></a></li>
	    <li><a class="soc-twitter" href="https://twitter.com/OlegTarasenko"></a></li>
	    <li><a class="soc-instagram" href="https://instagram.com/olegtarasenko/"></a></li>
	    <li><a class="soc-email1 soc-icon-last" href="mailto:contact.tarasenko@gmail.com"></a></li>
	</ul>
	  </div>
		</div>
		</div>
	</div>
	
	<div class="footer">
			<object type="image/svg+xml" width="68px" height="68px" data="caballo.svg">
	</object>
            <div>otarasenko &copy 2015</div>
    </div>
</body>
</html>