<!DOCTYPE html>

<html lang="en">

<head>
    <title>oleh tarasenko | notes</title>
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
	.header {
		position: fixed;
		right: 0;
		left: 0;
		width: 100%;
	}

	.navbar-default {
		border: 0.5px solid #fff;
		box-shadow: 5px 5px 10px 5px rgba(0,0,0,.2);
		background: #fff;
		background-image: url('tria.png');
		background-size: cover;
		border-radius:3px;
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
		padding: 20px 20px;
	    font-size: 1.1em;
	    letter-spacing: 1px;
	   	text-decoration: none;
	    text-transform: uppercase;
	}

	.navbar-default .navbar-nav>li>a {
		color:#fff;
	}

	.navbar-default .navbar-nav>li>a:hover {
		color:#fff;
		background: rgba(0,0,0,.35);
	}

	h1 {

	    color:#383838;
		font-size:42px;
		font-family: 'Ubuntu Condensed', sans-serif;
		text-align: center;
	  	margin-top: 5px;
	  	margin-bottom: 2.5px;
	}

	h2 {
	   	color:#404040;
	   	font-size:25px;
	   	text-align:center;
	   	font-family: 'Ubuntu Condensed', sans-serif;
	   	margin-top: 2.5px;
	   	margin-bottom: 5px;
	}

	h3 {
	   	color:#202020;
	   	font-size:24px;
	   	text-align:center;
	   	font-family: 'Poiret One', cursive;
	   	padding-bottom: 10px;
	}

	h4 {
		color: ;
		font-size: 18px;
		text-align: center;
	    font-family: 'Lobster', cursive;
	    margin-bottom: 10px;
	    margin-top: 3px;
	}

	p {
	    font-family: 'Comfortaa', cursive;
	    font-size: 15px !important;
		line-height:30px;
		color:#202020; 
		padding-top: 10px; 	
	  	padding-bottom:20px;
	  	margin-right:auto;
	  	margin-left:auto;		
	}

	a {
		color: #1e90ff; 
	}

	a:hover {
		color: #1e90ff;
		text-decoration: underline;
	}

	.main-border {
		margin-top: 215px;
	}

	.border {
		margin-top: 30px;
	}

	.trian {
		text-align: center;
	}

	.footer {
		font-family: 'Merriweather', sans-serif;
		position:static;
		bottom:0;
		font-size: 12px;
		text-align: center;
	}

	.container {
		width:  75%;
		margin-right: auto;
		margin-left: auto;
	}

	.jumbotron {
		background: rgba(223, 223, 223, 0.5);
	}

	.container .jumbotron {
		border-radius: 0;
	}

	.jumbotron p {
	  	margin-bottom: 0px;
	  	font-weight: 200;
	}

	.jumbotron, .container-fluid .jumbotron {
  		padding: 0; 
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

<nav class="navbar navbar-default navbar-fixed-top" >
    <div class="container">
    <h1>Oleh Tarasenko</h1>
  	<h2>IT SPECIALIST</h2>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                   </div>
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="notes.php">Notes</a></li>
                <li><a data-toggle="modal" data-target="#basicModal">Contact</a></li>
                <li class="active"><a class="bluengreen" href="ru.php" >RU</a></li>
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
		<h3>Не Линукс</h3>
		<h4>~Работа с FreeBSD~</h4>
		<p>После установки операционной системы, задаемся вопросом, что делать дальше. Допустим вы как и я решили помучаться и поставить FreeBSD в качестве второй десктоп ОС.<br><br>
		Возможно вы забыли выставить автоконфигурацию хоста и нет доступа к сети Интернет, пишем команду <code>#dhclient re0</code>, где “re0” название вашего сетевого интерфейса. Узнать его можно командой <code>#ifconfig</code>.</p>
		<p class="text-warning">Справедливо только если на обратной стороне настроен DHCP-сервер. Если же адрес назначен статически, читаем <a href="https://www.freebsd.org/doc/ru/books/handbook/network-communication.html">мануал</a>.</p>
		<p>Во FreeBSD есть два способа загружать дополнительные приложения, собирать с портов <strong>/usr/ports</strong>, или загружать пакеты <strong>pkg</strong>. 
		Первый способ более длительный, второй требует меньше времени, но у вас не будет возможности повлиять на установку приложения. Лично я предпочитаю второй способ он проще и не заставляет долго ждать.<br><br>
		Если вы решите работать с портами, тогда для начала их необходимо установить. Делаем все по учебнику:</p>
		<ol>
  		<li><code>#portsnap fetch</code></li>
  		<li><code>#portsnap extract</code></li>
  		<li><code>#portsnap fetch</code></li>
  		<li><code>#portsnap update</code></li>
		</ol>
		<p>Дальше просто ищем необходимое приложение командой <code>#whereis</code> <strong>[названние]</strong>, прописываем путь и делаем <code>#make install</code>.
		Во время установки создаются временные файли необходимые для компиляции приложения, почистить их можно командой <code>#make clean</code> сразу после установки.
		Или просто всё ставить командой <code>#make install clean</code>.<br><br>
		И так установка с пакетов. Для начала нам нужна графическая оболочка для удобного взаимодействия со всеми приложениями, выбираем <strong>xfce</strong>. 
		Но для начала нужно поставить <a href="https://en.wikipedia.org/wiki/X.Org_Server">xorg</a>.<br><br>
		Пишем <code>#pkg install xorg</code>, и правим <strong>/etc/rc.conf</strong>, добавляем <em>hald_enable=”YES”</em> и <em>dbus_enable=”YES”</em>.<br>
		Стартуем демонов <code>/usr/local/etc/rc.d/hald start</code> и <code>/usr/local/etc/rc.d/dbus start</code> соответственно.<br>
		Устанавливаем xfce4 <code>#pkg install xfce</code><br>
		Запускаем <code>#startxfce4</code><br>
		Можно работать.<br><br>
		Для последующего запуска xfce с помощью <code>#startx</code> пишем <code>echo "exec /usr/local/bin/startxfce4" > ~/.xinitrc</code><br><br>
		Рекомендую поставить, следующие приложения для работы с xfce.
		<br><strong>.xfce4-mixer</strong> – звук;
		<br><strong>.xfce4-taskmanager</strong> – диспетчер задач;
		<br><strong>.xfce4-power-manager</strong> – электропитание;
		<br><strong>.file-roller</strong> – архиватор;
		<br><strong>.wifimgv</strong> –беспроводное подключение.
		</p>
			</div>
		</div>
	</div>
			<div class="footer">

		<div style="padding-top:25px; display:block">
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="105px" height="105px" viewBox="0 0 400 400" enable-background="new 0 0 400 400" xml:space="preserve">
<polygon fill="#9D9E9E" points="381.78,292.573 381.78,310.576 368.82,301.576 "/>
<g>
	<path fill="#5A9999" d="M80.626,9.227"/>
	<path fill="#5A9999" d="M28.904,84.839c0,0,19.923,15.842,19.202,16.321c-0.719,0.48,29.522-17.28,29.522-17.28L28.904,84.839z"/>
	<polygon fill="#81B2B2" points="82.427,30.598 28.904,84.839 77.628,83.88 	"/>
	<polyline fill="#5A9999" points="83.388,29.877 98.508,17.987 79.787,9.717 82.427,30.598 	"/>
	<polyline fill="#71A8A8" points="99.588,18.469 129.229,34.437 131.87,1.796 98.387,18.229 	"/>
	<polygon fill="#71A8A8" points="129.949,22.79 160.911,15.956 152.75,32.997 	"/>
	<polygon fill="#5E9C9C" points="129.229,34.437 152.75,32.997 129.949,22.79 	"/>
	<polygon fill="#B1DBDA" points="160.911,15.956 178.672,33.478 152.75,32.997 	"/>
	<polygon fill="#C2E3E2" points="152.75,32.997 172.19,47.158 201.952,43.317 177.471,32.997 	"/>
	<polygon fill="#569797" points="77.628,83.88 104.508,79.798 129.229,34.437 82.427,30.598 	"/>
	<polygon fill="#488E8E" points="104.508,79.798 94.908,134.521 152.029,69.718 129.229,34.437 	"/>
	<polygon fill="#388585" points="152.029,69.718 152.75,32.997 129.229,34.437 	"/>
	<polygon fill="#4DACAA" points="152.75,32.997 172.19,47.158 152.029,70.919 	"/>
	<polygon fill="#3E8888" points="152.029,70.919 170.75,72.598 172.19,47.158 	"/>
	<polygon fill="#8ABAB8" points="172.19,47.158 202.912,65.878 170.75,72.598 	"/>
	<polygon fill="#6EA6A6" points="94.908,134.521 155.63,162.012 152.029,69.718 	"/>
	<polygon fill="#83C5C4" points="152.029,70.919 187.553,126.122 155.391,161.404 	"/>
	<polygon fill="#509393" points="170.75,72.598 187.553,126.122 152.029,70.919 	"/>
	<polygon fill="#D1E9E9" points="193.021,86.692 222.773,115.284 187.012,126.567 	"/>
	<polygon fill="#99C1C1" points="94.908,134.521 92.507,190.441 155.27,161.652 	"/>
	<polyline fill="#64A0A0" points="83.028,144.97 94.908,134.521 92.507,190.441 82.907,145.321 	"/>
	<polygon fill="#62B6B4" points="92.507,190.441 120.11,220.434 155.391,161.404 	"/>
	<polygon fill="#66A1A1" points="53.626,193.246 45.226,241.782 58.425,250.66 62.746,228.818 65.387,213.941 58.425,214.657 	"/>
	<polyline fill="#5E9C9C" points="69.707,209.38 89.387,215.614 108.108,207.216 92.626,189.87 69.707,209.38 66.346,208.66 
		65.387,213.941 55.545,216.34 52.665,184.91 91.907,189.632 92.626,189.87 	"/>
	<polygon fill="#2C4E50" points="119.869,219.688 83.147,243.212 62.267,229.771 89.387,215.614 108.108,207.216 	"/>
	<polygon fill="#227D7A" points="83.147,243.212 92.987,265.292 69.946,262.893 41.385,238.65 62.267,229.771 	"/>
	<polygon fill="#39595B" points="69.946,262.893 95.388,285.689 92.987,265.292 	"/>
	<polygon fill="#509393" points="92.987,265.292 106.668,261.927 119.389,282.809 95.388,285.689 	"/>
	<polyline fill="#267B79" points="120.11,220.434 153.47,226.171 155.873,160.985 119.869,219.688 	"/>
	<polygon fill="#77ACAC" points="187.553,126.122 211.072,148.168 154.43,162.234 	"/>
	<polygon fill="#8CC9C8" points="211.133,147.653 186.652,222.536 155.391,161.404 	"/>
	<polyline fill="#95C1BF" points="189.473,126.934 224.994,138.182 211.072,148.168 187.012,126.567 193.792,86.854 170.391,72.573 
		186.952,125.383 	"/>
	<polygon fill="#A9CACA" points="153.015,226.271 198.892,244.316 155.63,162.012 	"/>
	<polyline fill="#CDE0E0" points="211.432,148.193 240.277,167.141 186.638,222.027 211.357,146.91 	"/>
	<polygon fill="#CDE0E0" points="240.277,167.141 237.475,211.281 186.473,221.816 	"/>
	<polygon fill="#9FC4C4" points="186.473,221.816 198.892,244.316 237.475,211.281 	"/>
	<polygon fill="#BFD8D8" points="240.277,167.141 289.314,176.24 237.643,211.759 	"/>
	<polygon fill="#ABCCCC" points="289.314,176.24 323.366,211.157 236.762,211.979 	"/>
	<polyline fill="#87B6B6" points="322.438,211.281 236.275,211.764 198.892,244.316 239.395,251.361 323.638,211.764 	"/>
	<polygon fill="#87B6B6" points="289.314,176.24 329.638,203.122 332.759,211.521 322.918,211.195 	"/>
	<polygon fill="#73A9A9" points="323.638,211.764 326.758,249.441 239.395,251.361 	"/>
	<polygon fill="#AFDAD9" points="326.758,249.441 287.396,296.241 239.395,251.361 	"/>
	<polygon fill="#96CECD" points="326.758,249.441 314.757,288.33 287.396,296.241 	"/>
	<polygon fill="#C6E5E4" points="314.757,288.33 334.678,313.775 320.758,320.018 287.396,296.241 	"/>
	<polygon fill="#92CCCB" points="320.758,320.018 316.438,347.152 334.678,313.775 	"/>
	<polygon fill="#C6E5E4" points="334.678,313.775 331.797,366.591 316.677,346.188 	"/>
	<polygon fill="#A9CACA" points="316.677,346.188 292.916,396.124 331.797,366.591 	"/>
	<polygon fill="#71BCBB" points="292.916,396.124 318.36,394.447 326.04,370.672 	"/>
	<polyline fill="#39595B" points="239.395,251.361 239.385,252.111 239.154,274.432 286.195,294.592 	"/>
	<polygon fill="#49AAA8" points="285.238,294.111 287.396,330.594 267.236,326.034 239.154,274.432 	"/>
	<polyline fill="#2E9D9B" points="267.957,327 258.115,361.083 241.555,352.682 267.236,326.034 	"/>
	<polygon fill="#5A9999" points="287.396,330.594 259.314,362.279 243.715,392.285 223.073,394.205 241.555,352.682 
		257.636,360.354 267.236,326.034 	"/>
	<polygon fill="#A1C5C5" points="329.039,202.916 360.539,212.996 345.779,221.639 332.759,211.521 	"/>
	<polyline fill="#8DB9B9" points="359.821,213.535 359.626,214.297 354.688,233.854 342.899,280.499 381.78,292.738 
		360.539,212.996 	"/>
	<polygon fill="#0E6C6A" points="322.918,211.195 340.918,224.876 342.899,279.779 354.059,236.037 359.821,213.535 
		346.499,221.275 332.759,211.521 	"/>
	<path fill="#8DB9B9" d="M354.419,216.596"/>
	<polygon fill="#6CA4A4" points="342.899,280.499 381.78,292.738 368.82,301.74 	"/>
	<path fill="#5A9999" d="M127.551,34.208"/>
	<polygon fill="#81B2B2" points="129.229,34.437 98.508,17.987 82.427,30.598 	"/>
</g>
</svg>
		</div>
            <div style="font-size:19; padding-top:15px">Feel free to copy &copy 2015</div>
    </div>
</body>
</html>