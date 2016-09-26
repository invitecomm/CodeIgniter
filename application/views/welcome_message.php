<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Dynamic CodeIgniter Multi-Environment Page</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
		<a href="https://github.com/invitecomm/CodeIgniter/blob/3.1-invite/README.MD">Back</a>

		<p>The CodeIgniter system ENVIRONMENT setting is:</p>
		<code><?=strtoupper($me_env)?></code>

		<p>The base_url found in /application/config/<?=$me_env?>/config.php:</p>
		<code><?=$me_url?></code>
		
		<p><?=$cu_name?></p>
		<p>Uses data in /application/config/<?=$me_env?>/custom.php or /application/config/custom.php:</p>
		<code><?=$cu_string?></code>

<h2>.htaccess</h2>
		<p>The .htacess files is configured to use wildcards.  www.example.com, www.web7.example.com, www.dev.example.com, even www.dev33.example.com.  This will work with any domain, you just need to adjust the subdomain settings.</p>
		<code>
<pre>
SetEnvIf Host (.*).(.*).(.*)$ CI_ENV=production
SetEnvIf Host (.*).web(.*).(.*).(.*)$ CI_ENV=testing
SetEnvIf Host (.*).dev(.*).(.*).(.*)$ CI_ENV=development
</pre>
		</code>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>