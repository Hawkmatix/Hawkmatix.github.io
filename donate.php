<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<head>
	<title>Donate | Hawkmatix</title>
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
				We are proud to release analysis tools that are transparent and accessible to all.
				If you would like to be a part of our continued growth and success, consider donating.
			</p>

			<div align="center">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="LTL6WEKW3WZ5J">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
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