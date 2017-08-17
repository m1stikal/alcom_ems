<!--
/**
 * WinEMS
 * Copyright (C) 2006, 2007, 2008, 2009 WinEMS
 * 
 * WinEMS is licensed under the GNU General Public License
 * and the Apache License, Version 2.0, as follows:
 *
 * This program is free software; you can redistribute it and/or 
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed WITHOUT ANY WARRANTY; without even the 
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 * See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
-->
<?php
	
	function file_erase($filenameOut)
	{
		//echo unlink($filenameOut);
	}
	
	function file_replace ($search, $replace, $filenameIn, $filenameOut) 
	{
	   if (file_exists($filenameIn)) {
	       $cnt = file_get_contents($filenameIn);
	       $cnt = str_replace($search, $replace, $cnt);
	       return file_put_contents($filenameOut, $cnt);
	   }
	   return false;
	}
	
	
	function file_put_contents($n,$d) 
	{
		$f=@fopen($n,"w");
		if (!$f) {
		  return false;
		} else {
		  fwrite($f,$d);
		  fclose($f);
		  return true;
		}
	}
	
	$search = array();
	$replace = array();
	$fileout = '~'.$_REQUEST['xid'];
    $fileout = str_replace("[", "_", $fileout);
    $fileout = str_replace("]", "", $fileout);
    $fileout = str_replace(":", ".", $fileout);
	
	$guid = "." . uniqid($fileout);
	
	$xmlfile = "runs/" . $fileout . $guid . ".xml";
	$fdffile = "runs/" . $fileout . $guid . ".fdf";
	
	file_erase($xmlfile);
	file_erase($fdffile);
	
	foreach($_REQUEST as $key => $value)
	{
		$s = $value;
		$s = str_replace("<", "[", $s);
		$s = str_replace(">", "]", $s);
		
		$search[] = '{'.$key.'}';
		$replace[] = $s;
		
		//echo "<hr/>";
		//echo $key;
		//echo " -> ";
		//echo urlencode($value);
		
	} 
	$search[] = '{xmlfile}';
	$replace[] = $fileout;

	$search[] = '{emsMMDDYY}';
	$replace[] = date("mdy", strtotime($_REQUEST['emsDate']));

	$search[] = '{emsRUN}';
	$replace[] = '000001';
	
	$st = $_REQUEST['st'];
	
	file_replace($search, $replace, "templates/pcrvalues.xml", $xmlfile);
	file_replace($search, $replace, "templates/pcrvalues.fdf", $fdffile);
	
?>
<html>
<body onload="window.resizeTo(480,300);setTimeout(showFile, 2300);" style="background-color:linen">

<script language=javascript>
function wait(msecs)
{
	var start = new Date().getTime();
	var cur = start
	while(cur - start < msecs)
	{
		cur = new Date().getTime();
	}
}
function showFile()
{
	document.all.work.style.display='none'
	document.all.filemsg.style.display=''
}
</script>

<div id="work">
<center>
<img src="../../img/progressbar.gif">
<div style="margin-top:-70"><h2>Generating PCR</h2></div>
</center>
</div>


<div id="filemsg" style="border:0px solid black;display:none">
<center>
<h2>PCR Generation Complete</h2>
</center>
<hr/>
The following items have been generated for this run:
<br/>
<a target="_blank" href='<? echo $xmlfile ?>'> 1. NEMSIS XML Data File</a>
<br/>
<a href='<? echo $fdffile ?>'> 2. Completed New York State PCR Report (Version 5)</a>
<br/>

</div>

</body> 
</html>
