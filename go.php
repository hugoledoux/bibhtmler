<?php
	include('bibhtmler.php');
	$bibhtmler = new bibhtmler(array('groupby' => 'year'));
?>
<?php echo($bibhtmler->process('/Users/hugo/Dropbox/references/hugomyown.bib')) ?>