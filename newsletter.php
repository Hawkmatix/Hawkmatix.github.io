<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<head>
	<title>Newsletter | Hawkmatix</title>
	<link rel="stylesheet" type="text/css" href="hawkmatix.css" />
</head>
<body>
	<div id="container">
		<div id="logo">
			<p>
				<span id="logo-text">Hawkmatix</span>
				<img border="0" src="logos/hawkmatix-logo.png" alt="Hawkmatix Logo" />
			</p>
		</div>

		<div id="nav-box">
			<div id="nav-button">
				<div id="nav-item">
					<a href="index.html">Home</a>
				</div>
			</div>

			<div id="nav-button">
				<div id="nav-item">
					<a href="projects.html">Projects</a>
				</div>
			</div>

			<div id="nav-button">
				<div id="nav-item">
					<a href="partners.html">Partners</a>
				</div>
			</div>

			<div id="nav-button">
				<div id="nav-item">
					<a href="support.html">Support</a>
				</div>
			</div>

			<div id="nav-button">
				<div id="nav-item">
					<a href="about.html">About</a>
				</div>
			</div>
		</div>

		<div id="content">
			<div id="page-title">Thank you for downloading</div>
			<iframe width="1" height="1" frameborder="0" src="projects/<?=$_GET["file"]?>/<?=$_GET["file"]?>.zip"></iframe>

			<p>
				<small>
					If the download doesn't start in a few seconds, please
					<a href="projects/<?=$_GET["file"]?>/<?=$_GET["file"]?>.zip">click here</a> to start the download.
				</small>
			</p>

			<p>
				Stay up to date!<br>
				Sign up for the <strong>Hawkmatix Newsletter</strong>.
			</p>

			<link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
			<div id="mc_embed_signup">
				<form action="http://hawkmatix.us7.list-manage.com/subscribe/post?u=2ab4b4261c71cf2e33943652b&amp;id=35cb21178d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
					<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				</form>
			</div>

		</div>

		<div id="footer">
			<p>
				<a href="http://www.gnu.org/licenses/lgpl.html" target="_blank">
					<img src="logos/lgpl-logo.png" height="30" border=0 />
				</a>
				<a href="http://www.gnu.org/licenses/fdl.html" target="_blank">
					<img src="logos/gfdl-logo.png" height="30" border=0 />
				</a>
				<br />
				Software is licensed under a <a href="http://www.gnu.org/licenses/lgpl.html" target="_blank">
				GNU Lesser General Public License</a>. |
				Documentation is licensed under a <a href="http://www.gnu.org/licenses/fdl.html" target="_blank">
				GNU Free Documentation License</a>. | <a href="terms.html">Terms of Use</a>
			</p>

			<p>
				Copyright &copy; 2013 Andrew C. Hawkins
			</p>
		</div>
	</div>
</body>
</html>