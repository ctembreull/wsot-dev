<?php
include('lib/core.php');

$page = array('title' => 'Welcome');

$header = new h2o('templates/header.html');
echo $header->render(compact('page'));
?>


  <div id="container">
    <div id="main">
	
		<div style="text-align: center;">
			<img src="/img/splash.jpg" style="width: 600px;">
		</div>
		
		<div style="margin: 0 auto; width: 600px;">
			<div style="float: left; width: 49%;">
				<?php
				$login_mode = $_PREFS->getLogin();
				if ($login_mode == "open") {
					include('format/login/splash/open.php');
				} else {
					include('format/login/splash/closed.php');
				}
				?>
			</div>
			<div style="float: right; width: 49%;">
				<?php
				$registration_mode = $_PREFS->getRegistration();
				if ($registration_mode == "open") {
					include('format/registration/splash/open.php');
				} else if ($registration_mode == "invite") {
					include('format/registration/splash/invite.php');
				} else if ($registration_mode == "closed") {
					include('format/registration/splash/closed.php');
				}
				?>
			</div>
			<div style="clear: both;"></div>
		</div>
	
    </div>
    
    <footer>

    </footer>
  </div> <!--! end of #container -->
<?php
$footer = new h2o('templates/footer.html');
echo $footer->render(compact('page'));
?>