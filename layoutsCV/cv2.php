<?php
error_reporting(0);
$conn = mysql_connect("localhost", "root", ""); 
$db = mysql_select_db("cvmaker", $conn); 
if(isset($_POST["sub"]))
{
if($_POST["name"] !== "")
{
$name = $_POST["name"];
}
if($_POST["city"] !== "")
{
$city = $_POST["city"];
}
if($_POST["email"] !== "")
{
$email = $_POST["email"];
}
if($_POST["street"] !== "")
{
$street = $_POST["street"];
}
if($_POST["phone"] !== "")
{
$phone = $_POST["phone"];
}
if($_POST["cap"] !== "")
{
$cap = $_POST["cap"];
}
if($_POST["object"] !== "")
{
$object = $_POST["object"];
}
if($_POST["ed1"] !== "")
{
$ed1 = $_POST["ed1"];
}	
if($_POST["ed2"] !== "")
{
$ed2 = $_POST["ed2"];
}
if($_POST["ed3"] !== "")
{
$ed3 = $_POST["ed3"];
}
if($_POST["ed4"] !== "")
{
$ed4 = $_POST["ed4"];
}
if($_POST["ed5"] !== "")
{
$ed5 = $_POST["ed5"];
}
if($_POST["ski"] !== "")
{
$ski = $_POST["ski"];
}
if($_POST["ski2"] !== "")
{
$ski2 = $_POST["ski2"];
}
if($_POST["ski3"] !== "")
{
$ski3 = $_POST["ski3"];
}
if($_POST["tit_ex"] !== "")
{
$tit_ex = $_POST["tit_ex"];
}
if($_POST["desc_ex"] !== "")
{
$desc_ex = $_POST["desc_ex"];
}
if(isset($_POST["tit_ex2"]))
{
$tit_ex2 = $_POST["tit_ex2"];
}
if(isset($_POST["desc_ex2"]))
{
$desc_ex2 = $_POST["desc_ex2"];
}
if(isset($_POST["tit_ex3"]))
{
$tit_ex3 = $_POST["tit_ex3"];
}
if(isset($_POST["desc_ex3"]))
{
$desc_ex3 = $_POST["desc_ex3"];
}
if(isset($_POST["tit_ex4"]))
{
$tit_ex4 = $_POST["tit_ex4"];
}
if(isset($_POST["desc_ex4"]))
{
$desc_ex4 = $_POST["desc_ex4"];
}
if(isset($_POST["tit_ex5"]))
{
$tit_ex5 = $_POST["tit_ex5"];
}
if(isset($_POST["desc_ex5"]))
{
$desc_ex5 = $_POST["desc_ex5"];
}
$file = fopen("cv.doc","w");
$cv = "MIME-Version: 1.0
Content-Transfer-Encoding: quoted-printable
Content-Type: text/html; charset=\"us-ascii\"

<html>

<head>
<meta http-equiv=3DContent-Type content=3D\"text/html; charset=3Dus-ascii\">
<meta name=3DProgId content=3DWord.Document>
<link rel=3DFile-List href=3D\"cvu.files/filelist.xml\">";
if(isset($name))
{
$cv .= "<title>".$name."</title>";
}


if(isset($name))
{


$cv .= "<div style=3D'mso-element:para-border-div;background-color: #33a4c9;align:center;border:none;border-bottom:solid #=
0099CC 2.25pt;font-family:Tempus Sans ITC;
padding:0cm 0cm 1.0pt 0cm'><p class=3DMsoNormal style=3D'margin-bottom:6.0pt;border:none;mso-border-bo=
ttom-alt:
solid #0099CC 2.25pt;padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><b
style=3D'mso-bidi-font-weight:normal'><span lang=3DEN-US style=3D'font-size=
:30.0pt;font-family:Tempus Sans ITC;
color:#444;mso-ansi-language:EN-US'>Curriculum Vitae:.<br>".$name."</span></b></p>
</div>";
}
$cv .= "<p class=3DMsoNormal>";
if(isset($street))
{
$cv .= "<span lang=3DEN-US style=3D'font-size:11.0pt;mso-bidi-=
font-family:Tempus Sans ITC;color:#999999;mso-ansi-language:EN-US'><strong>Address :</strong>".$street."</span>";
}
if(isset($city))
{
$cv .= "<span
lang=3DEN-US style=3D'font-size:11.0pt;mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;color:#=
6FA8DC;
mso-ansi-language:EN-US'> &#8226; </span><st1:place w:st=3D\"on\"><st1:State =
w:st=3D\"on\"><span lang=3DEN-US style=3D'font-size:11.0pt;mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;color=
:#999999;
  mso-ansi-language:EN-US'>".$city."</span></st1:State></st1:place>";
}
if(isset($cap))
{
$cv .= "<span
lang=3DEN-US style=3D'font-size:11.0pt;mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;color:#=
999999;
mso-ansi-language:EN-US'>, State</span><span lang=3DEN-US style=3D'font-siz=
e:11.0pt;
mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;color:#6FA8DC;mso-ansi-language:EN-US'> &#8226=
; </span><span
lang=3DEN-US style=3D'font-size:11.0pt;mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;color:#=
999999;
mso-ansi-language:EN-US'>".$cap."</span>";
}
if(isset($phone))
{
$cv .= "<span lang=3DEN-US style=3D'font-size=
:11.0pt;;
mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;color:#6FA8DC;mso-ansi-language:EN-US'> &#8226=
;</span><span
lang=3DEN-US style=3D'font-size:11.0pt;mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;color:#=
999999;
mso-ansi-language:EN-US'> </span><b><span lang=3DEN-US style=3D'font-size:1=
1.0pt;
mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;color:#666666;mso-ansi-language:EN-US'>Cell: </s=
pan></b><span
lang=3DEN-US style=3D'font-size:11.0pt;mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;color:#=
6FA8DC;
mso-ansi-language:EN-US'> </span><span lang=3DEN-US style=3D'font-size:11.0=
pt;
mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;color:#999999;mso-ansi-language:EN-US'>".$phone." </span>";
}
if(isset($email))
{
$cv .= "<span lang=3DEN-US style=3D'font-size:11.0pt;mso-bidi-font-=
family:
Calibri;color:#6FA8DC;mso-ansi-language:EN-US'>&#8226;</span><span lang=3DE=
N-US
style=3D'font-size:11.0pt;mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;color:#999999;mso-an=
si-language:
EN-US'> </span><b><span lang=3DEN-US style=3D'font-size:11.0pt;mso-bidi-fon=
t-family:
Calibri;font-family:Tempus Sans ITC;color:#666666;mso-ansi-language:EN-US'>E-mail: </span></b><span
lang=3DEN-US style=3D'font-size:11.0pt;mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;color:#=
999999;
mso-ansi-language:EN-US'>".$email."</span>";
}
$cv .= "</p>";
if(isset($ed1))
{
$cv .= "<p class=3DMsoNormal><span lang=3DEN-US style=3D'font-size:11.0pt;mso-bidi-=
font-family:
Calibri;color:#999999;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>

<div style=3D'mso-element:para-border-div;text-align:center;background-color:#cccccc;border:none;border-bottom:solid s=
ilver 1.0pt;
mso-border-bottom-alt:solid silver .5pt;padding:0cm 0cm 1.0pt 0cm'>

<p class=3DMsoNormal style=3D'margin-top:25.0pt;text-align:center;margin-right:0cm;margin-bot=
tom:
12.0pt;margin-left:0cm;border:none;text-align:center;background-color:#cccccc;mso-border-bottom-alt:solid silver .5pt;
padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><b style=3D'mso-bidi-font-we=
ight:
normal'><span lang=3DEN-US style=3D'mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;color:#006=
699;background-color:#cccccc;text-align:center;
mso-ansi-language:EN-US'>Objective</span></b></p>

</div>

<p class=3Da style=3D'margin-top:18.0pt;mso-add-space:auto;text-indent:-18.=
0pt;
mso-list:l0 level1 lfo1'><![if !supportLists]><span lang=3DEN-US
style=3D'font-size:12.0pt;line-height:115%;font-family:Symbol;mso-fareast-f=
ont-family:
Symbol;mso-bidi-font-family:Symbol;font-family:Tempus Sans ITC;color:#404040;mso-ansi-language:EN-US'><=
span
style=3D'mso-list:Ignore'>&middot;<span style=3D'font:7.0pt \"Times New Roma=
n\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=3DEN-US style=3D'font-size:12.0pt;
line-height:115%;font-family:\"Tempus Sans ITC\";color:#404040;mso-ansi-langu=
age:
EN-US'>".$object."</span></p>
";
}
if(isset($ed1))
{
$cv .= "<div style=3D'mso-element:para-border-div;border:none;border-bottom:solid s=
ilver 1.0pt;background-color:#cccccc;align:center;
mso-border-bottom-alt:solid silver .5pt;padding:0cm 0cm 1.0pt 0cm'>

<p class=3DMsoNormal style=3D'margin-top:12.0pt;margin-right:0cm;margin-bot=
tom:
12.0pt;margin-left:0cm;border:none;mso-border-bottom-alt:solid silver .5pt;
padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><b style=3D'mso-bidi-font-we=
ight:
normal'><span lang=3DEN-US style=3D'mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;color:#006=
699;
mso-ansi-language:EN-US'>Education</span></b></p>

</div><p class=3DaCxSpFirst style=3D'margin-top:0cm;margin-right:0cm;margin-botto=
m:0cm;
margin-left:35.7pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:-17=
.85pt;
mso-list:l0 level1 lfo1'><![if !supportLists]><span lang=3DEN-US
style=3D'font-size:12.0pt;line-height:115%;font-family:Symbol;mso-fareast-f=
ont-family:
Symbol;mso-bidi-font-family:Symbol;font-family:Tempus Sans ITC;color:#404040;mso-ansi-language:EN-US'><=
span
style=3D'mso-list:Ignore'>&middot;<span style=3D'font:7.0pt \"Times New Roma=
n\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=3DEN-US style=3D'font-size:12.0pt;
line-height:115%;font-family:\"Tempus Sans ITC\";color:#404040;mso-ansi-langu=
age:
EN-US'>".$ed1."</span></p>";
}
if(isset($ed2))
{
$cv .= "<p class=3DaCxSpFirst style=3D'margin-top:0cm;margin-right:0cm;margin-botto=
m:0cm;
margin-left:35.7pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:-17=
.85pt;
mso-list:l0 level1 lfo1'><![if !supportLists]><span lang=3DEN-US
style=3D'font-size:12.0pt;line-height:115%;font-family:Symbol;mso-fareast-f=
ont-family:
Symbol;mso-bidi-font-family:Symbol;font-family:Tempus Sans ITC;color:#404040;mso-ansi-language:EN-US'><=
span
style=3D'mso-list:Ignore'>&middot;<span style=3D'font:7.0pt \"Times New Roma=
n\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=3DEN-US style=3D'font-size:12.0pt;
line-height:115%;font-family:\"Tempus Sans ITC\";color:#404040;mso-ansi-langu=
age:
EN-US'>".$ed2."</span></p>";
}
if(isset($ed3))
{
$cv .= "<p class=3DaCxSpFirst style=3D'margin-top:0cm;margin-right:0cm;margin-botto=
m:0cm;
margin-left:35.7pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:-17=
.85pt;
mso-list:l0 level1 lfo1'><![if !supportLists]><span lang=3DEN-US
style=3D'font-size:12.0pt;line-height:115%;font-family:Symbol;mso-fareast-f=
ont-family:
Symbol;mso-bidi-font-family:Symbol;font-family:Tempus Sans ITC;color:#404040;mso-ansi-language:EN-US'><=
span
style=3D'mso-list:Ignore'>&middot;<span style=3D'font:7.0pt \"Times New Roma=
n\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=3DEN-US style=3D'font-size:12.0pt;
line-height:115%;font-family:\"Tempus Sans ITC\";color:#404040;mso-ansi-langu=
age:
EN-US'>".$ed3."</span></p>";
}
if(isset($ed4))
{
$cv .= "<p class=3DaCxSpFirst style=3D'margin-top:0cm;margin-right:0cm;margin-botto=
m:0cm;
margin-left:35.7pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:-17=
.85pt;
mso-list:l0 level1 lfo1'><![if !supportLists]><span lang=3DEN-US
style=3D'font-size:12.0pt;line-height:115%;font-family:Symbol;mso-fareast-f=
ont-family:
Symbol;mso-bidi-font-family:Symbol;font-family:Tempus Sans ITC;color:#404040;mso-ansi-language:EN-US'><=
span
style=3D'mso-list:Ignore'>&middot;<span style=3D'font:7.0pt \"Times New Roma=
n\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=3DEN-US style=3D'font-size:12.0pt;
line-height:115%;font-family:\"Tempus Sans ITC\";color:#404040;mso-ansi-langu=
age:
EN-US'>".$ed4."</span></p>";
}
if(isset($ed5))
{
$cv .= "<p class=3DaCxSpFirst style=3D'margin-top:0cm;margin-right:0cm;margin-botto=
m:0cm;
margin-left:35.7pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:-17=
.85pt;
mso-list:l0 level1 lfo1'><![if !supportLists]><span lang=3DEN-US
style=3D'font-size:12.0pt;line-height:115%;font-family:Symbol;mso-fareast-f=
ont-family:
Symbol;mso-bidi-font-family:Symbol;font-family:Tempus Sans ITC;color:#404040;mso-ansi-language:EN-US'><=
span
style=3D'mso-list:Ignore'>&middot;<span style=3D'font:7.0pt \"Times New Roma=
n\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=3DEN-US style=3D'font-size:12.0pt;
line-height:115%;font-family:\"Tempus Sans ITC\";color:#404040;mso-ansi-langu=
age:
EN-US'>".$ed5."</span></p>";
}
if(isset($ski))
{
$cv .= "<p class=3DMsoNormal><span lang=3DEN-US style=3D'font-size:11.0pt;mso-bidi-=
font-family:
Calibri;color:#999999;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>

<div style=3D'mso-element:para-border-div;border:none;border-bottom:solid s=
ilver 1.0pt;
mso-border-bottom-alt:solid silver .5pt;padding:0cm 0cm 1.0pt 0cm'>

<p class=3Da style=3D'margin-top:12.0pt;background-color:#cccccc;text-align:center;margin-right:0cm;margin-bottom:12.0=
pt;
margin-left:0cm;mso-add-space:auto;border:none;mso-border-bottom-alt:solid =
silver .5pt;
padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><b style=3D'mso-bidi-font-we=
ight:
normal'><span lang=3DEN-US style=3D'font-size:12.0pt;line-height:115%;background-color:#cccccc;text-align:center;font-=
family:
\"Tempus Sans ITC\";background-color:#cccccc;text-align:center;color:#006699;mso-ansi-language:EN-US'>Skills &amp; Abilities</span></b></p></div>";
$cv .= "<ol style=3D'margin-top:0cm' type=3Ddisc>
 <li class=3DMsoNormal style=3D'color:#333333;mso-list:l1 level1 lfo2;tab-s=
tops:
     list 36.0pt'><span class=3DSpellE><span lang=3DEN-US style=3D'font-siz=
e:11.0pt;
     mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;mso-ansi-language:EN-US'>".$ski."</span></li>
</ol>";
}
if(isset($ski2))
{
$cv .= "<ol style=3D'margin-top:0cm' type=3Ddisc>
 <li class=3DMsoNormal style=3D'color:#333333;mso-list:l1 level1 lfo2;tab-s=
tops:
     list 36.0pt'><span class=3DSpellE><span lang=3DEN-US style=3D'font-siz=
e:11.0pt;
     mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;mso-ansi-language:EN-US'>".$ski2."</span></li>
</ol>";
}
if(isset($ski3))
{
$cv .= "<ol style=3D'margin-top:0cm' type=3Ddisc>
 <li class=3DMsoNormal style=3D'color:#333333;mso-list:l1 level1 lfo2;tab-s=
tops:
     list 36.0pt'><span class=3DSpellE><span lang=3DEN-US style=3D'font-siz=
e:11.0pt;
     mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;mso-ansi-language:EN-US'>".$ski3."</span></li>
</ol>";
}
if(isset($tit_ex))
{
$cv .= "<p class=3DMsoNormal><span lang=3DEN-US style=3D'font-size:11.0pt;mso-bidi-=
font-family:
Calibri;color:#333333;mso-ansi-language:EN-US'></span></p>

<div style=3D'mso-element:para-border-div;border:none;border-bottom:solid s=
ilver 1.0pt;
mso-border-bottom-alt:solid silver .5pt;padding:0cm 0cm 1.0pt 0cm'>

<p class=3DMsoNormal style=3D'margin-top:12.0pt;background-color:#cccccc;text-align:center;margin-right:0cm;margin-bot=
tom:
12.0pt;margin-left:0cm;border:none;mso-border-bottom-alt:solid silver .5pt;
padding:0cm;mso-padding-alt:0cm 0cm 1.0pt 0cm'><b style=3D'mso-bidi-font-we=
ight:
normal'><span lang=3DEN-US style=3D'mso-bidi-font-family:Calibri;font-family:Tempus Sans ITC;background-color:#cccccc;text-align:center;color:#006=
699;
mso-ansi-language:EN-US'>Work Experience</span></b></p></div>";
$cv .= "<p class=3DMsoNormal style=3D'margin-top:18.0pt'><b style=3D'mso-bidi-font-=
weight:
normal'><span lang=3DEN-US style=3D'color:#404040;mso-ansi-language:EN-US'>
".$tit_ex."</span></b></p>

<p class=3Da style=3D'margin-top:18.0pt;mso-add-space:auto;text-indent:-18.=
0pt;
mso-list:l2 level1 lfo3'><![if !supportLists]><span lang=3DEN-US
style=3D'font-size:12.0pt;line-height:115%;font-family:Symbol;mso-fareast-f=
ont-family:
Symbol;mso-bidi-font-family:Symbol;font-family:Tempus Sans ITC;color:#404040;mso-ansi-language:EN-US'><=
span
style=3D'mso-list:Ignore'>&middot;<span style=3D'font:7.0pt \"Times New Roma=
n\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=3DIT style=3D'font-size:12.0pt;
line-height:115%;font-family:\"Tempus Sans ITC\";color:#404040;mso-ansi-langu=
age:
IT'>".$desc_ex."</span></p>";
}
if(isset($tit_ex2))
{
$cv .= "<p class=3DMsoNormal style=3D'margin-top:18.0pt'><b style=3D'mso-bidi-font-=
weight:
normal'><span lang=3DEN-US style=3D'color:#404040;mso-ansi-language:EN-US'>
".$tit_ex2."</span></b></p>

<p class=3Da style=3D'margin-top:18.0pt;mso-add-space:auto;text-indent:-18.=
0pt;
mso-list:l2 level1 lfo3'><![if !supportLists]><span lang=3DEN-US
style=3D'font-size:12.0pt;line-height:115%;font-family:Symbol;mso-fareast-f=
ont-family:
Symbol;mso-bidi-font-family:Symbol;font-family:Tempus Sans ITC;color:#404040;mso-ansi-language:EN-US'><=
span
style=3D'mso-list:Ignore'>&middot;<span style=3D'font:7.0pt \"Times New Roma=
n\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=3DIT style=3D'font-size:12.0pt;
line-height:115%;font-family:\"Tempus Sans ITC\";color:#404040;mso-ansi-langu=
age:
IT'>".$desc_ex2."</span></p>";
}
if(isset($tit_ex3))
{
$cv .= "<p class=3DMsoNormal style=3D'margin-top:18.0pt'><b style=3D'mso-bidi-font-=
weight:
normal'><span lang=3DEN-US style=3D'color:#404040;mso-ansi-language:EN-US'>
".$tit_ex3."</span></b></p>

<p class=3Da style=3D'margin-top:18.0pt;mso-add-space:auto;text-indent:-18.=
0pt;
mso-list:l2 level1 lfo3'><![if !supportLists]><span lang=3DEN-US
style=3D'font-size:12.0pt;line-height:115%;font-family:Symbol;mso-fareast-f=
ont-family:
Symbol;mso-bidi-font-family:Symbol;font-family:Tempus Sans ITC;color:#404040;mso-ansi-language:EN-US'><=
span
style=3D'mso-list:Ignore'>&middot;<span style=3D'font:7.0pt \"Times New Roma=
n\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=3DIT style=3D'font-size:12.0pt;
line-height:115%;font-family:\"Tempus Sans ITC\";color:#404040;mso-ansi-langu=
age:
IT'>".$desc_ex3."</span></p>";
}
if(isset($tit_ex4))
{
$cv .= "<p class=3DMsoNormal style=3D'margin-top:18.0pt'><b style=3D'mso-bidi-font-=
weight:
normal'><span lang=3DEN-US style=3D'color:#404040;mso-ansi-language:EN-US'>
".$tit_ex4."</span></b></p>

<p class=3Da style=3D'margin-top:18.0pt;mso-add-space:auto;text-indent:-18.=
0pt;
mso-list:l2 level1 lfo3'><![if !supportLists]><span lang=3DEN-US
style=3D'font-size:12.0pt;line-height:115%;font-family:Symbol;mso-fareast-f=
ont-family:
Symbol;mso-bidi-font-family:Symbol;font-family:Tempus Sans ITC;color:#404040;mso-ansi-language:EN-US'><=
span
style=3D'mso-list:Ignore'>&middot;<span style=3D'font:7.0pt \"Times New Roma=
n\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=3DIT style=3D'font-size:12.0pt;
line-height:115%;font-family:\"Tempus Sans ITC\";color:#404040;mso-ansi-langu=
age:
IT'>".$desc_ex4."</span></p>";
}
if(isset($tit_ex5))
{
$cv .= "<p class=3DMsoNormal style=3D'margin-top:18.0pt'><b style=3D'mso-bidi-font-=
weight:
normal'><span lang=3DEN-US style=3D'color:#404040;mso-ansi-language:EN-US'>
".$tit_ex5."</span></b></p>

<p class=3Da style=3D'margin-top:18.0pt;mso-add-space:auto;text-indent:-18.=
0pt;
mso-list:l2 level1 lfo3'><![if !supportLists]><span lang=3DEN-US
style=3D'font-size:12.0pt;line-height:115%;font-family:Symbol;mso-fareast-f=
ont-family:
Symbol;mso-bidi-font-family:Symbol;font-family:Tempus Sans ITC;color:#404040;mso-ansi-language:EN-US'><=
span
style=3D'mso-list:Ignore'>&middot;<span style=3D'font:7.0pt \"Times New Roma=
n\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=3DIT style=3D'font-size:12.0pt;
line-height:115%;font-family:\"Tempus Sans ITC\";color:#404040;mso-ansi-langu=
age:
IT'>".$desc_ex5."</span></p>";
}
$cv .= "<p class=3DMsoNormal><span lang=3DEN-US style=3D'font-size:11.0pt;mso-bidi-=
font-family:
Calibri;color:#999999;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>
</div>
</body>
</html>";
fwrite($file,$cv);
}
?>
<html>
<head>
<title>CV Maker</title>
<style>
body{
background-image:url(bg.png);
}
#bod{
width:800px;
height:1490px;
background: rgba(255,255,255,0.45);
border-radius:5px;
margin:auto;
margin-top:20px;
}
#bo{
width:780px;
height:1470px;
margin-top:10px;
position:absolute;
margin-left:10px;
border-radius:5px;
}
#bod10{
width:800px;
height:290px;
background: rgba(255,255,255,0.45);
border-radius:5px;
margin:auto;
margin-top:20px;
}
#bo11{
width:780px;
height:270px;
margin-top:10px;
position:absolute;
margin-left:10px;
border-radius:5px;
}
#titl{
width:780px;
height:30px;
margin-top:10px;
color:#666666;
font-size:24px;
text-align:center;
font-weight:900;
}
#box1{
margin-top:20px;
border-top:1px solid #ccc;
width:760px;
height:190px;
margin-left:10px;
}
#box1_l{
width:370px;
height:150px;
float:left;
}
#box1_r{
width:370px;
height:150px;
float:right;
}
#in{
width:370px;
height:40px;
margin-top:20px;
border-radius:5px;
padding:5px;
background: rgba(255,255,255,0.45);
border:1px solid #CCCCCC;
font-size:16px;
}
#box1_g{
width:760px;
height:150px;
}
#in2{
width:760px;
height:40px;
margin-top:20px;
border-radius:5px;
padding:5px;
background: rgba(255,255,255,0.45);
border:1px solid #CCCCCC;
font-size:16px;
}
#box2{
margin-top:20px;
border-top:1px solid #ccc;
width:760px;
height:310px;
margin-left:10px;
}
#box1_g2{
width:760px;
height:250px;
}
#box1_l3{
width:270px;
height:250px;
float:left;
}
#box1_r3{
width:480px;
height:250px;
float:right;
}
#in4{
width:260px;
height:40px;
margin-top:20px;
border-radius:5px;
padding:5px;
background: rgba(255,255,255,0.45);
border:1px solid #CCCCCC;
font-size:16px;
}
#in5{
width:480px;
height:40px;
margin-top:20px;
border-radius:5px;
padding:5px;
background: rgba(255,255,255,0.45);
border:1px solid #CCCCCC;
font-size:16px;
}
#box3{
margin-top:20px;
border-top:1px solid #ccc;
width:760px;
height:60px;
margin-left:10px;
}
#sub{
width:180px;
height:40px;
margin-top:20px;
border-radius:5px;
padding:10px;
background: rgba(255,255,255,0.25);
border:1px solid #CCCCCC;
font-size:16px;
color:#666666;
font-weight:bold;
}
</style>
</head>
<body>
<?php 
if(isset($_POST["sub"]))
{
?>
<div id="bod10">
<div id="bo11">
<div id="titl">CV MAKER</div>
<div id="box3" align="center">
<br />
<br />
<a href="cv.doc">Download your CV</a>
</div>
<?php
}
else
{
?>
<div id="bod">
<div id="bo">
<div id="titl">CV MAKER</div>
<form action="" method="post">
<div id="box1">
<div id="box1_l" align="center">
<input name="name" placeholder="First and Last name" id="in" type="text" />
<input name="city" placeholder="Insert Your State Here" id="in" type="text" />
<input name="street" placeholder="Insert your address" id="in" type="text" />
</div>
<div id="box1_r" align="center">
<input name="phone" placeholder="Phone number" id="in" type="text" />
<input name="email" placeholder="E-mail Address" id="in" type="text" />
<input name="cap" placeholder="Local Code" id="in" type="text" />
</div>
</div>
<div id="box3" align="center">
<input name="object" placeholder="Objective" id="in2" type="text" />
</div>
<div id="box2">
<div id="box1_g2" align="center">
<input name="ed1" placeholder="Education" id="in2" type="text" />
<input name="ed2" placeholder="Education" id="in2" type="text" />
<input name="ed3" placeholder="Education" id="in2" type="text" />
<input name="ed4" placeholder="Education" id="in2" type="text" />
<input name="ed5" placeholder="Education" id="in2" type="text" />
</div>
</div>
<div id="box1">
<div id="box1_g" align="center">
<input name="ski" placeholder="Skills & Abilities" id="in2" type="text" />
<input name="ski2" placeholder="Skills & Abilities" id="in2" type="text" />
<input name="ski3" placeholder="Skills & Abilities" id="in2" type="text" />
</div>
</div>
<div id="box2">
<div id="box1_l3">
<input name="tit_ex" placeholder="Work Title" id="in4" type="text" />
<input name="tit_ex2" placeholder="Work Title" id="in4" type="text" />
<input name="tit_ex3" placeholder="Work Title" id="in4" type="text" />
<input name="tit_ex4" placeholder="Work Title" id="in4" type="text" />
<input name="tit_ex5" placeholder="Work Title" id="in4" type="text" />
</div>
<div id="box1_r3">
<input name="desc_ex" placeholder="Work Description" id="in5" type="text" />
<input name="desc_ex2" placeholder="Work Description" id="in5" type="text" />
<input name="desc_ex3" placeholder="Work Description" id="in5" type="text" />
<input name="desc_ex4" placeholder="Work Description" id="in5" type="text" />
<input name="desc_ex5" placeholder="Work Description" id="in5" type="text" />
</div>
</div>
<div id="box3"  align="center">
<input name="sub" type="submit" id="sub" value="Create your CV" />
</div>
</form>
<?php 
}
?>
</div>
</div>
</body>
</html>

