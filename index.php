<?php
if(!isset($_REQUEST['f'])) {
	$_REQUEST['f'] = '\int\limits_{10}^{13} x^2';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>mimetex</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
	<!--
	$(document).ready(function() {
		$('#f').bind('input propertychange', function() {
			$('#formulabox').css('height', $('#formula').height() + 'px');
			var text = $('#f').val().trim();
			if(text != '') {
				$('#formulabox').html('<img src="/cgi-bin/mimetex.cgi?' + encodeURIComponent(text) + '" alt="" id="formula" />');
				$('#formulabox').css('height', '');

				$('#permalink1').attr('href', '/mimetex/?f=' + encodeURIComponent(text));
				$('#permalink2').attr('href', '/cgi-bin/mimetex.cgi?' + encodeURIComponent(text));
			}
		});
	});
	// -->
	</script>
</head>
<body>
	<h1>mimetex</h1>
	<div>
		On this page, formulas in <img src="/cgi-bin/mimetex.cgi?\LaTeX" alt="LaTeX" /> syntax can be rendered into images. Insert any formula you would put into a Math environment in a LaTeX document and an image will be rendered. A link for this page showing the formula you entered as well as a link for the image itself will be provided.
		<br /><br />
		For rendering the images, <a href="http://www.forkosh.com/mimetex.html">mimetex</a> is used.
		<br /><br />
		The mimetex installation on this page is used for rendering formulae at <a href="http://www.informatik-forum.at/">informatik-forum.at</a>.
	</div>
	<hr />
	<div style="text-align: center;" id="formulabox">
		<?php if(isset($_REQUEST['f'])): ?>
			<img src="/cgi-bin/mimetex.cgi?<?php echo rawurlencode($_REQUEST['f']) ?>" alt="" id="formula" />
		<?php endif; ?>
	</div>
	<div style="text-align: center; padding-top: 10px;">
		Permalinks:
		<a id="permalink1" href="/mimetex/?f=<?php if(isset($_REQUEST['f'])) echo rawurlencode($_REQUEST['f']) ?>">Page</a>
		<a id="permalink2" href="/cgi-bin/mimetex.cgi?<?php if(isset($_REQUEST['f'])) echo rawurlencode($_REQUEST['f']) ?>">Image</a>
	</div>
	<hr />
	<div style="text-align: center;">
		<form method="get" action="/mimetex/">
			<div>
				<textarea rows="10" cols="80" style="width: 800px; height: 300px;" name="f" id="f"><?php if(isset($_REQUEST['f'])) echo htmlentities($_REQUEST['f'], ENT_QUOTES, 'UTF-8'); ?></textarea>
				<br />
				<input type="submit" value="Submit" />
			</div>
		</form>
	</div>
	<hr />
	<div>
		<a href="http://validator.w3.org/check?uri=referer" style="text-decoration: none;">
			<img src="valid-xhtml11-blue.png" alt="Valid XHTML 1.1" height="31" width="88" />
		</a>

		<br /><br />
		<i><a href="mailto:paulchen@rueckgr.at">Paul Staroch</a></i> &ndash; <a href="//rueckgr.at/">rueckgr.at</a>
	</div>	
</body>
</html>
