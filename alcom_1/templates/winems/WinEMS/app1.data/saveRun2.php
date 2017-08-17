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
	
	foreach($_REQUEST as $key => $value)
	{
		$s = $value;
		$s = str_replace("<", "[", $s);
		$s = str_replace(">", "]", $s);
		
		$search[] = '{'.$key.'}';
		$replace[] = $s;
	} 
	$search[] = '{xmlfile}';
	$replace[] = $fileout;

	$search[] = '{emsMMDDYY}';
	$replace[] = date("mdy", strtotime($_REQUEST['emsDate']));

	$search[] = '{emsRUN}';
	$replace[] = '000001';
	
	$st = $_REQUEST['st'];
	
	file_replace($search, $replace, "templates/pcrvalues.xml", "runs/" . $fileout . ".xml");
	file_replace($search, $replace, "templates/pcrvalues.fdf", "runs/" . $fileout . ".fdf");


	
	if ($st == 1)
	{
		header ("Content-Type: text/xml");
		$result = "runs/" . $fileout . ".xml";
		$output = file_get_contents($result);
		print $output;
	}
	elseif ($st == 2)
	{
		header ("Content-Type: text/html");
		$result = "runs/" . $fileout . ".fdf";
		print "<html><body onload='launchfdf();'>";
		print "<script language='javascript'>";
		print "function launchfdf()";
		print "{";
		print "	document.location.href = '" . $result . "';";
		print " window.close();";
		print "}";
		print "</script>";
		print "</body>";
		print "</html>";
	}
	elseif ($st == 3)
	{	
		header ("Content-Type: application/vnd.fdf");
		header ("Content-Disposition: inline");
		$result = "runs/" . $fileout . ".fdf";
		$caption = "The PCR Form has been generated in PDF format and must be opened in a suitable viewer such as <a href='http://www.adobe.com/products/acrobat/readstep2.html'>Adobe Acrobat</a> or <a href='http://blog.kowalczyk.info/software/sumatrapdf/'>Sumatra</a>.";
		$output = file_get_contents($result);
		print $output;
	}
	else
	{
		$output = "<h2>Run Saved: </h2> <a href='runs/" . $fileout . ".xml'>View XML</a>  <a href='runs/" . $fileout . ".fdf'>View PDF</a>";
		print $output;
	}
	
?>
