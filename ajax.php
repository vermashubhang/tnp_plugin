<?php
header("Access-Control-Allow-Origin: *");
include('dom.php');
/*
function getUrl($url)
{
    $ch = curl_init(); 
    $timeout = 5; // set to zero for no timeout 
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 
    curl_setopt ($ch, CURLOPT_URL, $url); 
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_PROXY, "http://144.16.192.245"); //your proxy url
    curl_setopt($ch, CURLOPT_PROXYPORT, "8080"); // your proxy port number 
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "username:pass"); //username:pass 
    $file_contents = curl_exec($ch); 
    curl_close($ch); 
    return $file_contents;
}
*/
//echo  getUrl("http://tp.iitkgp.ernet.in/notice/");
$html = file_get_html("http://tp.iitkgp.ernet.in/notice/index.php?page=1");
$name = "class";
$z=1;
$z1=1;
$myurl="http://localhost/redirect.php?pass=";
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
								//$z1=$z/2;
								$relurl = $myurl.$k->href;
								//echo $k->href;
								//onclick="loadXMLDoc()";
								$z1=$z/2;
								echo "<li>"."<i><button id=\"".$z1."\"      style=\"background-color:transparent\" >".$k->plaintext."</button></i><br></li>";
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
//echo $html;
//$html = file_get_html(getUrl("http://tp.iitkgp.ernet.in/notice/"));
//print "hi";
?>