<?php
/**
由xiwangly编写，用于访问该接口快速运算一些值，请保留著作权，还在不断改进中……
教程：https://www.lolichan.vip/threads/qrspeed-6.53/
http://域名/math.php?x=x的值&y=y的值&z=z的值&m=计算方式
*/
$x=$_GET["x"];
$y=$_GET["y"];
$z=$_GET["z"];
$m=$_GET["m"];
$d1=$_GET["d1"];
$d2=$_GET["d2"];
$d3=$_GET["d3"];
$d4=$_GET["d4"];
$d5=$_GET["d5"];
$d6=$_GET["d6"];
$d7=$_GET["d7"];
$d8=$_GET["d8"];
$d9=$_GET["d9"];
function sa($x,$y)
{
	$total=$x + $y;
	return $total;
}
function ss($x,$y)
{
	$total=$x - $y;
	return $total;
}
function sm($x,$y)
{
	$total=$x * $y;
	return $total;
}
function sd($x,$y)
{
	$total=$x / $y;
	return $total;
}
function sr($x,$y)
{
	$total=$x % $y;
	return $total;
}
function s($x,$y)
{
	$total=$x . $y;
	return $total;
}
if($x == ""&$y == ""&$z == ""&$m == "")
{
	$url="https://www.lolichan.vip/threads/qrspeed-6.53/";
	header("Location: $url");
}
elseif($m == "a")
{
	echo sa($x,$y);
}
elseif($m == "s")
{
	echo ss($x,$y);
}
elseif($m == "m")
{
	echo sm($x,$y);
}
elseif($m == "d")
{
	echo sd($x,$y);
}
elseif($m == "r")
{
	echo sr($x,$y);
}
elseif($m == "ss")
{
	$and_sss=$x . $y . $z;
	echo $and_sss;
}
elseif($m == "pow")
{
	echo pow($x,$y);
}
elseif($m == "abs")
{
	echo abs($x);
}
elseif($m == "acos")
{
	echo acos($x);
}
elseif($m == "acosh")
{
	echo acosh($x);
}
elseif($m == "asin")
{
	echo asin($x);
}
elseif($m == "asinh")
{
	echo asinh($x);
}
elseif($m == "atan")
{
	echo atan($x);
}
elseif($m == "atan2")
{
	echo atan2($x,$y);
}
elseif($m == "atanh")
{
	echo atanh($x);
}
elseif($m == "base")
{
	echo base_convert($x,$y,$z);
}
elseif($m == "bindec")
{
	echo bindec($x);
}
elseif($m == "ceil")
{
	echo ceil($x);
}
elseif($m == "cos")
{
	$x=floatval($x);
	echo cos($x);
}
elseif($m == "cosh")
{
	$x=floatval($x);
	echo cosh($x);
}
elseif($m == "decbin")
{
	echo decbin($x);
}
elseif($m == "dechex")
{
	echo dechex($x);
}
elseif($m == "decoct")
{
	echo decoct($x);
}
elseif($m == "deg2rad")
{
	echo deg2rad($x);
}
elseif($m == "exp")
{
	echo exp($x);
}
elseif($m == "expm1")
{
	echo expm1($x);
}
elseif($m == "floor")
{
	echo floor($x);
}
elseif($m == "fmod")
{
	echo fmod($x,$y);
}
elseif($m == "getrandmax")
{
	echo rand($x,getrandmax());
}
elseif($m == "hexdec")
{
	echo hexdec($x);
}
elseif($m == "hypot")
{
	echo hypot($x,$y);
}
elseif($m == "finite")
{
	echo is_finite($x);
}
elseif($m == "infinite")
{
	echo is_infinite($x);
}
elseif($m == "nan")
{
	echo is_nan($x);
}
elseif($m == "lcg")
{
	echo lcg_value();
}
elseif($m == "log"&$y == "")
{
	echo log($x);
}
elseif($m == "log")
{
	echo log($x,$y);
}
elseif($m == "log10")
{
	echo log10($x);
}
elseif($m == "log1p")
{
	echo log1p($x);
}
elseif($m == "max"&$z == "")
{
	echo max($x,$y);
}
elseif($m == "max")
{
	echo max($x,$y,$z);
}
elseif($m == "min"&$z == "")
{
	echo min($x,$y);
}
elseif($m == "min")
{
	echo min($x,$y,$z);
}
elseif($m == "mtgetrandmax")
{
	echo mt_rand($x,mt_getrandmax());
}
elseif($m == "mtrand")
{
	echo mt_rand($x,$y);
}
elseif($m == "mtsrand")
{
	echo mt_srand($x);
}
elseif($m == "octdec")
{
	echo octdec($x);
}
elseif($m == "pi")
{
	echo (pi());
}
elseif($m == "rad2deg")
{
	echo rad2deg($x);
}
elseif($m == "rand")
{
	echo rand($x,$y);
}
elseif($m == "round")
{
	echo round($x);
}
elseif($m == "sin")
{
	$x=floatval($x);
	echo sin($x);
}
elseif($m == "sinh")
{
	$x=floatval($x);
	echo sinh($x);
}
elseif($m == "sqrt")
{
	echo sqrt($x);
}
elseif($m == "srand")
{
	echo srand($x);
}
elseif($m == "tan")
{
	$x=floatval($x);
	echo tan($x);
}
elseif($m == "tanh")
{
	$x=floatval($x);
	echo tanh($x);
}
elseif($m == "incremental")
{
	echo cos($x);
}
elseif($m == "aa")
{
	echo (++$x);
}
elseif($m == "rr")
{
	echo (--$x);
}
elseif($m == "echox")
{
	echo ($x);
}
elseif($m == "echoy")
{
	echo ($y);
}
elseif($m == "echoz")
{
	echo ($z);
}
elseif($m == "e")
{
	echo (M_E);
}
elseif($m == "euler")
{
	echo (M_EULER);
}
elseif($m == "url")
{
	header("Location: $x");
}
elseif($m == "time")
{
	echo time();
}
elseif($m == "date")
{
	echo date($x);
}
elseif($m == "md5"&$y == "true")
{
	echo md5($x,TRUE);
}
elseif($m == "md5")
{
	echo md5($x);
}
elseif($m == "uniqid"&$y == "true")
{
	echo uniqid($x,TRUE);
}
elseif($m == "uniqid")
{
	echo uniqid($x);
}
elseif($m == "tf")
{
	$tf=mt_rand(0,1);
	if($tf == "1")
	{
		echo "true";
	}
	elseif($tf == "0")
	{
		echo "false";
	}
}

else
{
	echo "未知的表达";
}
?>