<?php
include_once('markdown.php');
$source = $_POST['markdown'];
$render = Markdown($source);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Markkdown Extra Web Dingus</title>

        <link  href="https://hub.yourtech.us/tools/res/prettify/styles/sons-of-obsidian.css" rel="stylesheet" type="text/css"/>
	<script src="https://hub.yourtech.us/tools/res/prettify/src/prettify.js" type='text/javascript'/>

	<style type="text/css">
	/*
		Basic layout courtesy of InkNoise's very nifty Layout-o-matic:
		http://www.inknoise.com/experimental/layoutomatic.php
	*/

	#sidebar h1 {	
		font-size: 1.5em;
		font-weight: bold;
	}
	#sidebar h2 {	
		font-size: 1.2em;
		font-weight: bold;
		margin-bottom: -.5em;
	}
	#sidebar h3 {	
		font-size: 1em;
		font-weight: bold;
		text-transform: none;
		margin-bottom: .25em;
		margin-top: 1.5em;
	}
	#sidebar code {	
		font-family: Monaco, ProFont, "Andale Mono", "Lucida Console", Courier, monospace;
		font-size: 10px;
	}
	#sidebar pre {	
		line-height: 12px;
		margin-top: 0;
		background-color: #f5f5f5;
		border: 1px solid #ccc;
		padding: 4px;
	}
	#sidebar p {	
		margin-top: 0;
		margin-bottom: 0;
	}
	
	body {	
		background-color: #eee;
		font-family: "Lucida Grande", Verdana, sans-serif;
		font-size: 11px;
		line-height: 1.6em;
	}
	.renderbox {	
		background: white;
		font-family: Georgia, serif;
		font-size: 13px;
		border: 1px #888 solid;
		padding: 0 5px;
		width: 97%;
	}
	.label {
		margin-bottom: 4px;
	}

	#container {	
		border: 0px solid gray;
		margin: 10px;
		margin-left: auto;
		margin-right: auto;
		padding: 0px;
		min-width: 750px;
		
		/* Serve up some shit for Win/IE: */
		width:expression("800px" );
		margin-left:expression("0");
	}

	#banner {
		padding: 0;
		margin-bottom: 5px;
		background-color: transparent;
	}

	#app {	
		padding: 0 10px 0 10px;
		margin-right: 270px;
		background-color: transparent;
		border-right: 0px solid #bbb;
	}

	#sidebar {
		float: right;
		width: 250px;
		margin: 0;
		margin-right: 10px;
		padding: 0;
		background-color: transparent;
	}

	.footer {
		margin-top: 100px;
	}

	#buttonrow {	
		margin-top: 10px;
		margin-bottom: 60px;
	}
	.actionbutton {
		width: 7em;
		margin-left:20px;
	}

	textarea[name="markdown"], textarea[name="xhtml"] {
	/* WinIE is fucking retarded. Thanks to Sam Ruby for the workaround:
		http://www.intertwingly.net/blog/1432.html */ 	
		width: 98%;
	}	
	
	#ProjectSubmenu {
		list-style: none outside;
		padding: 0;
		margin: 2em 0 1em 0;
		height: 4em; /* Setting a height makes it act like a block */
		border: 0px dotted gray;
	}
	
	#ProjectSubmenu li {
		display: inline;
		padding: 0;
		margin: 0;
	}
	
	
	#ProjectSubmenu li a,
	#ProjectSubmenu li a:link,
	#ProjectSubmenu li a:visited {
		text-decoration: none;
		text-align: center;
		float: left;
		display: block;
		min-width: 35px;
		padding: 1px 3px 2px 3px;
		margin: 0;
		margin-right: -1px;
		background: transparent;
		color: black;
		border-color: #999;
		border-width: 1px;
		border-style: solid;
	}
	
	#ProjectSubmenu li a.selected,
	#ProjectSubmenu li a.selected:hover {
		background: #999;
		color: white;
	}
	
	#ProjectSubmenu li a:hover {
		background-color: #ccc;
	}
	
	#ProjectSubmenu li a:active {
		color: #eee;
		background: #bbb;
	}
	
	</style>
	<script src="/mint/?js" type="text/javascript"></script>
</head>
<body onload="prettyPrint()">

<div id="container">

<!-- <div id="banner"> -->
<!-- </div> -->

<div id="sidebar">
<h1>PHP Markdown Extra: Dingus</h1>
<P>
<a href="http://daringfireball.net/projects/markdown/syntax" target="daring">Markdown Syntax<a/><br />
<a href="http://michelf.ca/projects/php-markdown/extra/" target="extra">Extra Syntax</a>
</p>
</div> <!-- sidebar -->

<div id="app">
	<form action="" method="post">
<div>
<p class="label">Markdown Source:</p>
<textarea rows="25" cols="80" style="font-family: Monaco, ProFont, monospace; font-size: 10px;" name="markdown">
<?php echo $source; ?>
</textarea>

<div id="buttonrow">
<div style="float:left">
Filter:&nbsp;<select name="filter" style="font-size: 11px; margin-right: 2em;">
<option value='markdown'>Markdown</option>
<option value='smartypants'>SmartyPants</option>
<option value='both'>Both</option>
</select>

Results:&nbsp;<select name="view" style="font-size: 11px; margin-right: 2em;">
<option value='source'>Source</option>
<option value='preview'>Preview</option>
<option value='both' selected='selected'>Source &amp; Preview</option>
</select>
</div>

<input type="submit" name="convert" value="Convert" class="actionbutton" />
</div> <!--buttonrow-->

</div>
</form>
<p class="label">HTML Source:</p>
<div>
<textarea name="xhtml" rows="25" cols="80" readonly="readonly" style="font-family: Monaco, ProFont, monospace; font-size: 10px;">
<?php echo $render; ?>
</textarea>
</div>

<p class="label">HTML Source Enhanced:</p>
<div>
<textarea name="xhtml" rows="25" cols="80" readonly="readonly" style="font-family: Monaco, ProFont, monospace; font-size: 10px;">
<?php 
$render2 = str_replace("<pre>", "<pre class=\"prettyprint linenums\">", $render);
echo $render2;
 ?>
</textarea>
</div>



<p class="label">HTML Preview:</p>
<div class="renderbox"><h1>Markdown Extra: Dingus</h1>
<?php echo $render2; ?>
</div>
<p class='footer'>
Dingus html source stolen from <a href="http://daringfireball.net/projects/markdown/dingus">John Gruber</a>
Modified to use <a href="http://michelf.ca/projects/php-markdown/extra/">MarkDown Extra</a>
<div style="margin: 50px 0 0 0;">
<script type="text/javascript">
//<![CDATA[
(function(id) {
 document.write('<script type="text/javascript" src="' +
   'http://connect.decknetwork.net/deck' + id + '_js.php?' +
   (new Date().getTime()) + '"></' + 'script>');
})("DF");
//]]>
</script>
</div>

</div> <!-- app -->
</div> <!-- container -->

</body>
</html>



