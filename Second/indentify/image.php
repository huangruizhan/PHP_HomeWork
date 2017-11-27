<?php
header ('Content-type: image/png');
$size = 50;
$angle_f = rand(0,90);
$angle_s = rand(0,90);
$angle_t = rand(0,90);
$angle_fo = rand(0,90);
$font = 'D:\wamp64\www\wampthemes\modern\fonts\HelveticaNeueLTPro-Bd.otf';
//颜色随机值啊
$r = rand(0,255);
$g = rand(0,255);
$b = rand(0,255);
//随机字符：
$first = chr(rand(48,57));
$second = chr(rand(65,90));
$third = chr(rand(65,90));
$forth = chr(rand(97,122));
//随机颜色
$image = imagecreate(300,300);
//随机位置
//1
$fx = rand(30,70);
$fy = rand(150,200);
//2
$sx = rand(70,140);
$sy = rand(150,200);
//3
$tx = rand(140,210);
$ty = rand(150,200);
//4
$fox = rand(210,300);
$foy = rand(150,170);
//线：
$x1 = rand(0,300);
$x2 = rand(0,300);
$y1 = rand(0,300);
$y2 = rand(0,300);


//背景色
$white = imagecolorallocate($image,255,255,255);
//字体颜色：
$f_randcolor = imagecolorallocate($image, $r, $g, $b);
$s_randcolor = imagecolorallocate($image, $b, $g, $r);
$t_randcolor = imagecolorallocate($image, $r, $b, $g);
$fo_randcolor = imagecolorallocate($image, $g, $r, $b);
//$clo = imagecolorallocate($image, 233, 14, 91);
//干扰线：

$color1 = imagecolorallocate($image, $g, $r, $b);
$color2 = imagecolorallocate($image, $g, $g, $b);
$color3 = imagecolorallocate($image, $g, $r, $r);
$color4 = imagecolorallocate($image, $b, $r, $b);
$color5 = imagecolorallocate($image, $g, $b, $b);

imageline ($image ,$x1 ,$y1 ,$x2 ,$y2,$color1 );
imageline ($image ,$x1 ,$y2 ,$y2 ,$x2,$color2 );
imageline ($image ,$x2 ,$y1 ,$x2 ,$y2,$color3 );
imageline ($image ,$y1 ,$y1 ,$x1 ,$y2,$color4 );
imageline ($image ,$x1 ,$x2 ,$y1 ,$y2,$color5 );

//干扰点：
/*
for($i = 0 ; $i <= 10 ;$i++)
{

  imagesetpixel($image, 0, 4, $color1);

}*/
$red = imagecolorallocate($image, 255, 0, 0);
$bg = imagecolorallocate($image, 204, 204, 204);
$style = array($red, $red, $red, $red, $red, $bg, $bg, $bg, $bg);
imagesetstyle($image, $style);

//第一个字符；
//$ima = imagestring($image, 5, $fx, $fy, $first, $f_randcolor);
$ima = imagettftext($image ,$size ,$angle_f ,$fx,$fy ,$f_randcolor,$font,$first);
//第二个字符；
//$imb =imagestring($image, 5, $sx, $sy, $second, $s_randcolor);
$ima = imagettftext($image ,$size ,$angle_s,$sx,$sy ,$s_randcolor,$font,$second);
//第三个字符；
//$imc =imagestring($image, 5, $tx, $ty, $third, $t_randcolor);
$ima = imagettftext($image ,$size ,$angle_t ,$tx,$ty ,$t_randcolor,$font,$third);
//第四个字符；
//$imd =imagestring($image, 5, $fox, $foy, $forth, $fo_randcolor);
$ima = imagettftext($image ,$size ,$angle_fo ,$fox,$foy ,$fo_randcolor,$font,$forth);
imagepng($image);

?>
