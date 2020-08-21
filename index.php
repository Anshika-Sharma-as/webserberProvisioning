
<body bgcolor='aqua'>
 <h1> Welcome to this integration </h1>
 <img src="https://d1f82gi6qn2ums.cloudfront.net/logo.jpg"></img> 
<pre>

<?php
  $cloudfront_url = `head -n1 mydesti.txt`;
  $img_path = "https://".$cloudfront_url."/logo.jpg";
  echo "<br>";
  echo "<img src='{$img_path}' width=100 height=100>";
?>

</pre>

