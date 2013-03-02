<?php
function PrintImg($hpath, $lpath, $doc_path)
{
	$d=@opendir($lpath);
	while ($f=readdir($d))
	{
		$s = basename($f);
		if (($s!=".") & ($s!=".."))
		{
			$a[] = $s;
		}
	}
	sort($a);
	$count = count($a);
	$fin = (($count-($count%6))/6)+1;
	$doc_name = file($doc_path);
	$doc_cnt = count($doc_name);
	for ($i = 0; $i < $doc_cnt; $i++)
	{
		$doc_name[$i] = trim($doc_name[$i]);
	}
	for ($i=0; $i<$fin; $i++)
	{
		echo "<tr>\n";
		$final = ($i*6)+6;
		if ($final>$count) { $final = $count; }
		for ($j=($i*6); $j<$final; $j++)
		{
			if (!file_exists($hpath."/".$a[$j]))
			{
				$q = explode(".", $a[$j]);
				$s = $q[0].".PDF";
			}
			else { $s = $a[$j]; }
			//echo "<td><div align=\"center\"><a href=\"".$hpath."/".$s."\" target=\"_blank\"><img src=\"".$lpath."/".$a[$j]."\" width=\"100\" height=\"137px\" alt=\"".$a[$j]."\"></a></div></td>\n";
			//echo "<td><div align=\"center\"><p><a href=\"".$hpath."/".$s."\" target=\"_blank\"><img src=\"".$lpath."/".$a[$j]."\" align = \"bottom\" hspace = \"20\" width=\"100\" height=\"137px\" alt=\"".$a[$j]."\"></a>".$doc_name[$j]."</p></div></td>\n";
			echo "<td width=\"270\"><div align=\"center\"><a href=\"".$hpath."/".$s."\" target=\"_blank\"><img src=\"".$lpath."/".$a[$j]."\" width=\"100\" height=\"137px\" alt=\"".$a[$j]."\"></a></div></td>\n";
		}
		echo "</tr>\n";
		echo "<tr valign=\"top\" align=\"center\">\n";
		for ($j=($i*6); $j<$final; $j++)
		{
			echo "<td width=\"270\">".$doc_name[$j]."<br>&nbsp;</td>\n";
		}
		echo "</tr>\n";
	}
}
function GetAmount($path)
{
	$d=@opendir($path); $k = 0;
	while ($f=readdir($d))
	{
		$k++;
	}	
	return($k-2);
}
?>