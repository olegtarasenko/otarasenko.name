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
		<h3>Не Линукс. Работа с FreeBSD</h3>
		<h4>~Что дальше?~</h4>
		<p>После установки операционной системы, задаемся вопросом, что делать дальше. Допустим вы как и я решили помучаться и поставить FreeBSD в качестве второй десктоп ОС.<br><br>
		Возможно вы забыли выставить автоконфигурацию хоста и нет доступа к сети Интернет, пишем команду <code>dhclient re0</code>, где “re0” название вашего сетевого интерфейса. Узнать его можно командой <code>ifconfig</code>.</p>
		<p class="text-warning">Справедливо только если на обратной стороне настроен DHCP-сервер. Если же адрес назначен статически, читаем <a href="https://www.freebsd.org/doc/ru/books/handbook/network-communication.html">мануал</a>.</p>
		<p>Во FreeBSD есть два способа загружать дополнительные приложения, собирать с портов <strong>/usr/ports</strong>, или загружать пакеты <strong>pkg</strong>. 
		Первый способ более длительный, второй требует меньше времени, но у вас не будет возможности повлиять на установку приложения. Лично я предпочитаю второй способ он проще и не заставляет долго ждать.<br><br>
		Если вы решите работать с портами, тогда для начала их необходимо установить. Делаем все по учебнику:</p>
		<ol>
  		<li><code>portsnap fetch</code></li>
  		<li><code>portsnap extract</code></li>
  		<li><code>portsnap fetch</code></li>
  		<li><code>portsnap update</code></li>
		</ol>
		<p>Дальше просто ищем необходимое приложение командой <code>whereis</code> <strong>[названние]</strong>, прописываем путь и делаем <code>make install</code>.
		Во время установки создаются временные файли необходимые для компиляции приложения, почистить их можно командой <code>make clean</code> сразу после установки.
		Или просто всё ставить командой <code>make install clean</code>.<br><br>
		И так установка с пакетов. Для начала нам нужна графическая оболочка для удобного взаимодействия со всеми приложениями, выбираем <strong>xfce</strong>. 
		Но для начала нужно поставить <a href="https://en.wikipedia.org/wiki/X.Org_Server">xorg</a>.<br><br>
		Пишем <code>pkg install xorg</code>, и правим <strong>/etc/rc.conf</strong>, добавляем <em>hald_enable=”YES”</em> и <em>dbus_enable=”YES”</em>.<br>
		Стартуем демонов <code>/usr/local/etc/rc.d/hald start</code> и <code>/usr/local/etc/rc.d/dbus start</code> соответственно.<br>
		Устанавливаем xfce4 <code>pkg install xfce</code><br>
		Запускаем <code>startxfce4</code><br>
		Можно работать.<br><br>
		Для последующего запуска xfce с помощью <code>startx</code> пишем <code>echo "exec /usr/local/bin/startxfce4" > ~/.xinitrc</code><br><br>
		Рекомендую поставить, следующие приложения для работы с xfce.
		<br><strong>.xfce4-mixer</strong> – звук;
		<br><strong>.xfce4-taskmanager</strong> – диспетчер задач;
		<br><strong>.xfce4-power-manager</strong> – электропитание;
		<br><strong>.file-roller</strong> – архиватор;
		<br><strong>.wifimgv</strong> – беспроводное подключение.
		</p>

		<h4>~Монтируем USB~</h4>
		<p>Для работы с флэш-носителями, FreeBSD использует <em>umass</em> драйвер. Для того чтобы смонтировать любое
		устройство, для начала нужно найти какой SCSI для этого используеться, узнать это можно с помощью команды <code>ls /dev/da*</code> она выведит список всех устройств, в моем случае это <em>da1s4</em>. Теперь
		можно монтровать <code>mount_msdosfs /dev/da1s4 /mnt</code>, также можно отредактировать <strong>/etc/fstab</strong> добавив в него <em>/dev/da*  /mnt  msdosfs  rw  0  0</em>, теперь все что нужно это ввести 
		<code>mount /mnt</code>.<br> 
		Чтобы стартануть его после следущей загрузки, добавьте <em>umass_load="YES"</em> в <strong>/boot/loader.conf</strong>.</p>

		<p class="text-warning">Стоит учесть что для монтирования я использовал флэшку отформатированную под FAT32. Если вы чувствуете что что-то пропустили, 
		воспользуйтесь встроенным справочником <a href="https://www.freebsd.org/doc/handbook/basics-more-information.html">man</a>, для примера <code>man umass</code> или <code>man da</code>.</p>
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