<?php
header("Access-Control-Allow-Origin: *");
include('dom.php');
if(isset($_GET['id']))
{
	//echo $_GET['id'];
	$findnotice = $_GET['id'];
	$baseurl = "http://tp.iitkgp.ernet.in/notice/";
	$html = file_get_html("http://tp.iitkgp.ernet.in/notice/index.php?page=1");
$name = "class";
$z=1;
$z1=1;
//$myurl="http://localhost/redirect.php?pass=";
$relurl="";
echo "<ul>";
foreach($html->find('TABLE') as $e)//TABLE
{ 
    foreach($e->children as $f)//TR
	{ 
		foreach($f->children as $g)//table
		{ 
			foreach($g->children as $h)//td
			{ 
				foreach($h->children as $i)//a
				{	
					foreach($i->children as $j)
					{	
						foreach($j->children as $k)
						{
							if($z%2==0&&$z<=30)
							{
								$z1=$z/2;
								if($z1==$findnotice)
								{
									$html1 = file_get_html($baseurl.$k->href);
									echo $html1;
								}
								//$relurl = $myurl.$k->href;
								//echo $k->href;
								//onclick="loadXMLDoc()";
								//$z1=$z/2;
								//echo "<li>"."<i><button id=\"".$z1."\">".$k->plaintext."</button></i><br></li>";
							}
							$z=$z+1;
						}
						//$z=$z+1;
					}
				}
			}
		}
	}
}
echo "</ul>";
}
?>