<!DOCTYPE html>

<html lang="en">

<head>
    <title>oleg tarasenko | notes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed|Merriweather|Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster|Comfortaa|Forum&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
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
	   font-size: 22px;
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
	    font-family: 'Merriweather', sans-serif;
	    font-size: 15px !important;
		line-height: 30px;
		color: #202020; 
		padding-top: 10px; 	
	  	padding-bottom: 20px;
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

	.border {
		margin-top: 30px;
	}

	.trian {
		text-align: center;
	}

</style>

<div class="header" style="background-image:url(tria.png); opacity:0.7; filter: alpha(opacity=70);"></div>
<nav class="navbar navbar-default navbar-fixed-top" >
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
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="notes.php">Notes</a></li>
                <li><a data-toggle="modal" data-target="#basicModal">Contact</a></li>
                <li><a class="bluengreen" href="ru.php" >RU</a></li>
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
   <div class="modal-footer"><div class="actions"><input type="submit" value="Send" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" /><button class="btn btn-default" type="button" data-dismiss="modal">Close</button></div></div>
			</fieldset>
			</form> 
        </div>
    </div>
  </div>
</div>
	<div class="main-border">
		<div class="container">
			<div class="jumbotron">
	<h3>First note</h3>
	<h4>~About creation of the home page~</h4>
<p>At the moment, this is the first website, written by me without use of any CMS-engines, themes and plugins. 
It is very simple, with no special "tricks" and the newcomer will not make much effort to create something similar, if not better.
So, I took stylesheet package <a href="http://getbootstrap.com/">Bootstrap</a> for the basis, first of all because it has a large amount of ready-made solutions that help to save time, effort and nerves. 
Second and the key reason is the presence of rules for the correct display of webpages on mobile devices.<br><br>
I should also mention a large number of sites and guidlines for web design. <a href="http://stackoverflow.com/">Stackoverflow</a> is the one I personaly like, but you can also use <a href="http://bootsnipp.com/">bootsnipp</a> as well.<br><br>
And of course it hasn’t been done without extra services, such as <a href="http://qrohlf.com/trianglify/">trianglify</a> – for creating beatiful navbar background, <a href="http://perfecticons.com/">perfecticons</a> – helps generate and customize social icons, 
<a href="http://www.cssmatic.com/">cssmatic</a> – can be used for gradient creation (I don't have one)
and <a href="https://www.google.com/fonts">google fonts</a> – for searching a perfect font.<br><br>
<a href="http://www.freepik.com/free-photos-vectors/logo">Logo vector designed by Freepik</a>.<br><br>
I hope that I didn’t forget anyone.</p>
			</div>
		</div>
	</div>
	<div class="trian">
	<object type="image/svg+xml" width="100px" height="100px" data="triangles.svg">
	</object>
	</div>
<div class="border">
		<div class="container">
			<div class="jumbotron">
	<h3>Not Linux. Working with FreeBSD</h3>
	<h4>~Post-installation~</h4>
	<p>	Post-installation, you're maybe wondering what should you do next. Let's say you and I both decided to make FreeBSD a second desktop OS.<br><br>

		If you forget to select host auto configuration and don't have access to the Internet, write command <code>dhclient re0</code>, where "re0" the name of your network interface. You can see your interfaces with <code>ifconfig</code>.</p>
		<p class="text-warning">It is true if you're using DHCP server. If the address is assigned statically read the <a href="https://www.freebsd.org/doc/en_US.ISO8859-1/books/handbook/network-communication.html">manual</a>.</p>
		<p>In FreeBSD there are two ways to download additional applications, first to collect from the ports <strong>/usr/ports</strong>, second upload packages <strong>pkg</strong>. 
		The first way is much longer, the second requires less time, but you will not be able to influence to the installation process of the application. 
		Personally, I prefer the second method it is easier and doesn't take to long to wait.<br><br>

		If you decide to work with the ports, then you would need to start their set. Here we will follow a book:</p>
		<ol><li><code>portsnap fetch</code></li>
		<li><code>portsnap extract</code></li>
		<li><code>portsnap fetch</code></li>
		<li><code>portsnap update</code></li></ol>
		<p>Then just look for the desired application path<code>whereis</code> <strong>[name]</strong>, set the path and do <code>make install</code>. 
		During installation, OS creates temporary files needed to compile the application, you can clean them with <code>make clean</code> immediately after installation. Or simply do <code>make install clean</code>.<br><br>

		And so with the installation package. First of all, we need a desktop environment for easy interaction with all applications I choose xfce. But first you need a <a href="https://en.wikipedia.org/wiki/X.Org_Server">xorg</a>.<br><br>

		Write <code>pkg install xorg</code>, and edit <strong>/etc/rc.conf</strong>, add <em>hald_enable = "YES"</em> and <em>dbus_enable = "YES"</em>.<br>
		Start demons <code>/usr/local/etc/rc.d/hald start</code> and <code>/usr/local/etc/rc.d/dbus start</code>.
		Set xfce4 <code>pkg install xfce</code><br>
		Run <code>startxfce4</code><br>
		Now you can work.<br><br>

		To start using xfce with <code>startx</code> write <code>echo "exec /usr/local/bin/startxfce4" > ~/.xinitrc</code><br><br>

		I recommend to install the following applications for easy work with xfce.
		<br><strong>.xfce4-mixer</strong> - sound;
		<br><strong>.xfce4-taskmanager</strong> - task manager;
		<br><strong>.xfce4-power-manager</strong> - power supply;
		<br><strong>.file-roller</strong> - archiver;
		<br><strong>.wifimgv</strong> - wireless connection.</p>

		<h4>~USB mount~</h4>
		<p>To work with flash devices, FreeBSD use <em>umass</em> driver. To mount any
		device, we need to find which SCSI does it use, to do it make command <code>ls /dev/da*</code> it will show you full list of all yours devices, in my case it was <em>da1s4</em>. Now we can
		mount <code>mount_msdosfs /dev/da1s4 /mnt</code>, plus you can edit <strong>/etc/fstab</strong> and add <em>/dev/da*  /mnt  msdosfs  rw  0  0</em> for automounting, now you only need is 
		<code>mount /mnt</code>.<br>
		To load it after next boot add <em>umass_load="YES"</em> into <strong>/boot/loader.conf</strong>.</p>
		<p class="text-warning">For mounting I was using FAT32 usb flash. If you feel that you're missing something you can read manual anytime, just use command <a href="https://www.freebsd.org/doc/handbook/basics-more-information.html">man</a>, for instance <code>man umass</code> or <code>man da</code>.</p>
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