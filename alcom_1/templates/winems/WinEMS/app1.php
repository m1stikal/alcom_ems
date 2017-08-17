<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<!--
/**
 * WinEMS Suite
 * WinEMS Field Data Collection Tool
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
$uname = $_REQUEST['username'];
$pwd   = $_REQUEST['password'];
$cred  = $uname . $pwd;
if ($cred != 'demodemo')
  header( 'Location: relogin.htm' );
?>

<HTML>
<HEAD><TITLE>EMS Demo One</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">

<LINK media=all href="../rico/rico.css" type=text/css rel=Stylesheet>

<SCRIPT src="../rico/prototype.js" type=text/javascript></SCRIPT>
<SCRIPT src="../rico/rico112.js" type=text/javascript></SCRIPT>
<SCRIPT src="../rico/util.js" type=text/javascript></SCRIPT>


<LINK media=all href="../datepicker/datepicker.css" type=text/css rel=Stylesheet>
<script lang="javascript" src="../datepicker/datepicker.js"></script>


<META content="MSHTML 6.00.2800.1498" name=GENERATOR></HEAD>
<BODY onload=javascript:bodyOnLoad() style="background-color:linen">

<SCRIPT>
    // create array of all items to be initialized on load
	var onloads = new Array();
</SCRIPT>

<form id='pcrdata' target='_blank' action='' method='POST'>

<div class="roundNormal" style="PADDING-LEFT:0px; MARGIN-LEFT:0px; WIDTH: 100%; height:30px; BACKGROUND-COLOR: #1f669b;  COLOR: WHITE">
	<div class="header leftpadding">	
	EMS Field Data Collection 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Ambulance: 4330-101</div>
	<div class="leftpadding">(click on title bars to open/close)</div>
</div>
<div class="leftpadding;clear" style="margin-bottom: 12px; background-color: linen; width:100%">
<a class="button" href='javascript:openPanel(0)'><span>Dispatch</span></a>
<a class="button" href='javascript:openPanel(1)'><span>Demographics</span></a>
<a class="button" href='javascript:openPanel(2)'><span>Problem</span></a>
<a class="button" href='javascript:openPanel(3)'><span>Treatment</span></a>
<a class="button" href='javascript:openPanel(4)'><span>Disposition</span></a>
<a class="button" href='javascript:openPanel(5)'><span>Notes</span></a>

<a class="button" href='javascript:openPanel(6)'><span>Authorization</span></a>
<a class="button" href='javascript:openPanel(7)'><span>APCF</span></a>

<div style="xbackground-color:linen; FLOAT: left; MARGIN-LEFT: 2px; WIDTH: 10px; MARGIN-RIGHT: 4px; HEIGHT: 26px important"></div>

<a class="button" href="javascript:openPanels(1)"><span>Expand All</span></a> 
<a class="button" href="javascript:openPanels(2)"><span>Close All</span></a>

<div style="xbackground-color:linen; FLOAT: left; MARGIN-LEFT: 2px; WIDTH: 10px; MARGIN-RIGHT: 4px; HEIGHT: 26px important"></div>

<a class="button" href="javascript:saveRun(2)"><span>Generate PCR</span></a>

<div style="xbackground-color:linen; FLOAT: left; MARGIN-LEFT: 2px; WIDTH: 10px; MARGIN-RIGHT: 4px; HEIGHT: 26px important"></div>
<div style="xbackground-color:linen; FLOAT: left; MARGIN-LEFT: 2px; WIDTH: 10px; MARGIN-RIGHT: 4px; HEIGHT: 26px important"></div>

<a class="button" href='app1.knowledge\surgery\index.html' target=_blank><span>Reference</span></a>

</div>

<div  xstyle="height:550px;overflow:scroll;margin-top:-10px">
<TABLE WIDTH=100% BORDER=1>
  <TBODY>
  <TR>
    <TD>
	    <DIV id=accordionExample style="BORDER-TOP: 0px solid; MARGIN-TOP: 0px; WIDTH: 100%; xHEIGHT: 500px;">
    
	      	<!-- PANEL ONE -->
	      	<DIV id=panel1 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>D i s p a t c h</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content >
			<?php include 'app1.panels/dispatch.php' ?>
	      		</DIV>
	      	</DIV>
	      	
	      	<!-- PANEL TWO -->
	      	<DIV id=panel2 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>D e m o g r a p h i c s</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content>
			<?php include 'app1.panels/demographics.php' ?>
	      		</DIV>
	      	</DIV>

	      	<!-- PANEL THREE -->
	      	<DIV id=panel3 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>P r e s e n t i n g&nbsp;&nbsp;P r o b l e m</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content style="overflow:scroll">
			<?php include 'app1.panels/presentingproblemvitals.php' ?>
	      		</DIV>
	      	</DIV>





	      	<!-- PANEL SIX -->
	      	<DIV id=panel6 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>T r e a t m e n t&nbsp;&nbsp;G i v e n</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content >
			<?php include 'app1.panels/treatmentgiven.php' ?>
	      		</DIV>
	      	</DIV>



	      	<!-- PANEL SEVEN -->
	      	<DIV id=panel7 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>D i s p o s i t i o n</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content >
			<?php include 'app1.panels/disposition.php' ?>
	      		</DIV>
	      	</DIV>


	      	<!-- PANEL EIGHT -->
	      	<DIV id=panel8 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>N a r r a t i v e &nbsp;N o t e s</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content >
			<?php include 'app1.panels/narrativenotes.php' ?>
	      		</DIV>
	      	</DIV>

	      	<!-- PANEL NINE -->
	      	<DIV id=panel9 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>A u t h o r i z a t i o n</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content >
			<?php include 'app1.panels/authorization.php' ?>
	      		</DIV>
	      	</DIV>

	      	<!-- PANEL TEN -->
	      	<DIV id=panel10 tabHeight="auto">
	      		<DIV class=accordionTabTitleBar id=panel1Header>A. P. C. F.</DIV>
	      		<DIV class=accordionTabContentBox id=panel1Content >
			<?php include 'app1.panels/apcf.php' ?>
	      		</DIV>
	      	</DIV>

		</DIV>
		
    </TD>
  </TR>
  </TBODY>
</TABLE>
</div>    
<SCRIPT> 

    var totalBurns = 0;
    var c = $('emsDate')
	var today = new Date();
	var Year = today.getFullYear();
	var Month = leadingZero(today.getMonth()+1);
	var Day = leadingZero(today.getDate());
    c.value = Month + "/" + Day + "/" + Year  

	c = $('emsSequence')
	//c.innerHTML = newGuid()
	t = new Date()
	
	c.innerHTML = '4330' + '.' + '101' + '.' + t.getFullYear() + t.getMonth() + t.getDate() + '[' + t.getHours() + ':' + t.getMinutes() + ':' + t.getSeconds() + ']' + '.' + '0001'

	setAge($('emsAge'))

	var mouseX
	var mouseY
	var scrollX
	var scrollY
	document.onmousemove = getMouseXY;

	function getMouseXY(e) 
	{
	    mouseX = event.clientX
	    scrollX = document.body.scrollLeft
	    mouseY = event.clientY
	    scrollY = document.body.scrollTop
	}  
	
	function newGuid()
	{
	    var g = "";
	    for(var i = 0; i < 32; i++)
	    g += Math.floor(Math.random() * 0xF).toString(0xF) + (i == 8 || i == 12 || i == 16 || i == 20 ? "-" : "")
	    return g + "";
	}
	
	function leadingZero(nr)
	{
		if (nr < 10) nr = "0" + nr;
		return nr;
	}
	
	function toCheck(ctrl, currValue)
	{
		if (currValue.toString().length > 0)
			$(ctrl).checked = true
		else
			$(ctrl).checked = false
	}

	// register init for: accordian
	onloads.push( accord ); 
	
	var mainAccordion;
	
	function accord()
	{ 	
		mainAccordion = new Rico.Accordion( 'accordionExample', 
			{
				xpanelHeight:178, 
				xpanelHeights:[178,200,300], 
				onLoadShowTab:0 //2
			} ); 
	} 

	// register init for: rounding
	onloads.push( rounds );
	function rounds()
	{
		new Rico.Effect.Round( null, 'roundNormal' );
		new Rico.Effect.Round( null, 'roundCompact', {compact:true} );
	}

    // perform all necessary inits
	function bodyOnLoad() 
	{
	  for ( var i = 0 ; i < onloads.length ; i++ )
	     onloads[i]();
	}

	showMenuContext()    

    var boolCheckedDispatchMethod = false
    
    function calcMileage()
    {
    	var e = $('emsMileageEnd')
    	var b = $('emsMileageBegin')
    	e = e.value
    	b = b.value
    	   	   	
    	var t = e - b
    	if (t < 0)
    	  t = "##"
    	
    	c = $('calcMileage')
    	c.innerHTML = t
		
    	c = $('emsCalcMileage')
    	c.value = t
    }
    
    function gpsAddress()
    {
    	c = $('emsCallLocation')
    	c.value = "237 Route 59, Suffern, NY; 10901"
    }
    
    function locToDemog()
    {    	
    	c = $('emsAddress')
    	c.value = "237 Route 59, Suffern, NY; 10901"
    	c = $('emsCity')
    	c.value = "Suffern"
    	c = $('emsState')
    	c.value = "NY"
    	c = $('emsZip')
    	c.value = "10901"
    }
    
    function showOnCheck(chk, ctrlName, displayType)
    {
   		c = $(ctrlName)
   		//alert(c)
    	if (chk.checked == true)
    		c.style.display=displayType
		else
		    c.style.display="none"    	  
    }

    function showLocationCode(n)
    {
    	s = getOptionValue(n)
    	if (s != null)
    	{
    	  c = $('dspLocationCode')
    	  c.innerHTML = s
    	  c.style.display="block"
    	}
    	else
    	  c.style.display="none"
    }
    
    function checkDispatchMethod(n)
    {
    	if (getOption(n) == "Scheduled")
    	{
    		$(scheduledTransport).style.display="block"
    		if (!boolCheckedDispatchMethod)
    		{
    			alterTabHeight(0, 50)
    			boolCheckedDispatchMethod = true
    		}
    	}
    	else
    		$(scheduledTransport).style.display="none"
    }

	function setDisposition(n)
	{
    	s = getOptionValue(n)
    	if (s != null)
    	{
    	  c = $('dispCode')
    	  c.value = s
    	  c.style.display="inline"
    	}
	}
	
	function toggleInsurance(insDivName, isShow)
	{
		var insDiv = $(insDivName)
		if (insDiv.style.display == "none")
		{
			alterTabHeight(1, 200)
			insDiv.style.display="block"
		}
		else
		{
			alterTabHeight(1, -200)
			insDiv.style.display="none"
		}
	}

	function toggleTrauma(chk)
	{
   		var c1 = $('emsComplaintTrauma')
		var c2 = $('emsComplaintMedical')
		var c3 = $('emsInjuryMechanism')
		var c4 = $('emsBodyMaps')
		
    	if (chk.checked == true)
		{
    		c1.style.display="block"
			c2.style.display="none"
			c3.style.display="block"
			c4.style.display="block"
			alterTabHeight(2, 700)
		}
		else
		{
			c1.style.display="none"
			c2.style.display="block"
			c3.style.display="none"
			c4.style.display="none"
			alterTabHeight(2, -700)
		}
	}

	toggleTrauma($('emsIsTrauma'))



	function serializeNodeNames(serial, currentElement, depth)
	{
		if (currentElement)
		{
		    var j;
		    var tagName=currentElement.tagName;

			var tagID = nr.innerHTML.replace(/@/g, serial)

			
		    if (tagName == 'INPUT')
				alert(currentElement.innerHTML)
				
		    // Traverse the tree
		    var i=0;
		    var currentElementChild=currentElement.childNodes[i];
		    while (currentElementChild)
		    {
		      // Recursively traverse the tree structure of the child node
		      serializeNodeNames(serial, currentElementChild, depth+1);
		      i++;
		      currentElementChild=currentElement.childNodes[i];
		    }
		}
	}


	function setVitalTime(sectionID)
	{
		var txtHour = $("hour1." + sectionID)
		var txtMin  = $("minute1." + sectionID)
		
		var t = new Date();
		
		txtHour.value = leadingZero(t.getHours());
		txtMin.value  = leadingZero(t.getMinutes());

	}

	
	function addVitalRow()
	{
		var tb = $("vitalTable")
		var vb = $("vitalBody")
		var vr = vb.rows[0]
		var nr = vr.cloneNode(true)

		var sectionID = vb.rows.length
			
		vb.appendChild(nr)

		var allElements = nr.getElementsByTagName("input")
		for (var i = 0; i < allElements.length; i++)
		{
			var newHTML = allElements[i].outerHTML.replace(/@/g, sectionID)
			allElements[i].outerHTML = newHTML
		}
		
		var allElements = nr.getElementsByTagName("a")
		for (var i = 0; i < allElements.length; i++)
		{
			var newHTML = allElements[i].outerHTML.replace(/@/g, sectionID)
			allElements[i].outerHTML = newHTML
		}
		
		alterTabHeight(2, 100)

		}  

	function minusVitalRow()
	{
		var vb = $("vitalBody")
	    var dr = vb.rows.length-1
	    if (dr > 0)
	    {
			vb.deleteRow(dr)
			alterTabHeight(2, -100)
		}
	}  

	function alterTabHeight(tabNo, amount)
	{
		tab = mainAccordion.accordionTabs[tabNo]
		var newHeight = tab.tabHeight + amount
		tab.tabHeight = newHeight
		tab.content.style.height = newHeight + "px"
	}

	function applySelectText(selectCtrl, textCtrl)
	{
		var tc = $(textCtrl);
		tc.value = getOption(selectCtrl);
	}

	function getText(name)
	{
		var c = $(name)
		var r = c.value
	
		if (r == null)
			return ("<" + c.name + ">")
		else if (r.length == 0)
			return ("<" + c.name + ">")
		else
			return r
	}
	
	function getOption(name)
	{
		var c = $(name)
		if (c.selectedIndex == 0)
			return ("<" + c.name + ">")
		else
			return (c.options[c.selectedIndex].text)
	}
	
	function getOptionValue(name)
	{
		var c = $(name)
		if (c.selectedIndex == 0)
			return (null)
		else
			return (c.options[c.selectedIndex].value)
	}


	function getListOptionValue(name)
	{
		var c = $(name)
    	return (c.options[c.selectedIndex].value)
	}

	function getListOptionIndex(name)
	{
		var c = $(name)
    	return (c.selectedIndex)
	}

	function getRadioIndex(radioArray)
	{

		for (i=0; i<radioArray.length; i++)
			if (radioArray[i].checked == true)
				return(i);
		return(-1);
	}
	
	function setALS()
	{
		a = document.all.emsIsALS

		if ( (getOptionValue("alsList1") == null) && (getOptionValue("alsList2") == null) && (getOptionValue("alsList3") == null) )
		{
			//alert('off als')
			//off als
			a[0].checked = false
			a[1].checked = false
			if ( (getOptionValue("blsList1") == null) && (getOptionValue("blsList2") == null) && (getOptionValue("blsList3") == null) )
			{
				//alert('off bls')
				a[1].checked = false
			}
			else
			{
				//alert('on bls')
				a[1].checked = true
			}
		}
		else
		{
			//alert('on als')
			//force als
			a[0].checked = true
			a[1].checked = false
		}
	
	}
		
	function refreshNotes()
	{
		
	 	nn = $("narNotes")
		sCallType = getOptionValue("emsCallType")
		
		callIsALS = (sCallType == "1000" || sCallType == "1005" || sCallType == "1010") ? true : false
		a = document.all.emsIsALS
		diagIsALS = a[0].checked

		var s = ""
		var prefix = ""
	
		if ( callIsALS && !diagIsALS )
		  prefix = "C6 - "

		s = s + prefix
		s = s + "Call was received on "
		s = s + getText("emsDate") + ".\n"
		s = s + "u/a age in years\n"
		s = s + "gender\n"
		s = s + "found on/ in"
		
		nn.value = s
	
	}


	function openPanels(action)
	{
		tabs = mainAccordion.accordionTabs
		if (action == 1)
			for (i=0; i<tabs.length; i++)
				mainAccordion.showTab2(tabs[i], false)
		else if (action == 2)
			for (i=0; i<tabs.length; i++)
				mainAccordion.unShowTab2(tabs[i], false)
		else
			alert("?")
	}

	
	function openPanel(panelNumber)
	{
		openPanels(2) //close them all
		tabs = mainAccordion.accordionTabs
		mainAccordion.showTab2(tabs[panelNumber], false)
	}
	
	function showMedsPage(num)
	{
		for (t=1; t<=3; t++)
		{
			thePage = $("MedsPage" + t)
			if ( (t == num) || (num == 0) )
				thePage.style.display="inline"
			else
				thePage.style.display="none"
		}
	}

	function showConditionsPage(num)
	{
		for (t=1; t<=13; t++)
		{
			thePage = $("ConditionsPage" + t)
			if (t == num)
				thePage.style.display="inline"
			else
				thePage.style.display="none"
		}
	}


// [dFilter] - A Numerical Input Mask for JavaScript
// Written By Dwayne Forehand - March 27th, 2003
// Please reuse & redistribute while keeping this notice.

var dFilterStep

function dFilterStrip (dFilterTemp, dFilterMask)
{
    dFilterMask = replace(dFilterMask,'#','');
    for (dFilterStep = 0; dFilterStep < dFilterMask.length++; dFilterStep++)
		{
		    dFilterTemp = replace(dFilterTemp,dFilterMask.substring(dFilterStep,dFilterStep+1),'');
		}
		return dFilterTemp;
}

function dFilterMax (dFilterMask)
{
 		dFilterTemp = dFilterMask;
    for (dFilterStep = 0; dFilterStep < (dFilterMask.length+1); dFilterStep++)
		{
		 		if (dFilterMask.charAt(dFilterStep)!='#')
				{
		        dFilterTemp = replace(dFilterTemp,dFilterMask.charAt(dFilterStep),'');
				}
		}
		return dFilterTemp.length;
}

function dFilter (key, textbox, dFilterMask)
{
		dFilterNum = dFilterStrip(textbox.value, dFilterMask);
		

		if (key==9)
		{
		    return true;
		}
		else if (key==8&&dFilterNum.length!=0)
		{
		 	 	dFilterNum = dFilterNum.substring(0,dFilterNum.length-1);
		}
 	  else if ( ((key>47&&key<58)||(key>95&&key<106)) && dFilterNum.length<dFilterMax(dFilterMask) )
		{
        dFilterNum=dFilterNum+String.fromCharCode(key);
		}

		var dFilterFinal='';
    for (dFilterStep = 0; dFilterStep < dFilterMask.length; dFilterStep++)
		{
        if (dFilterMask.charAt(dFilterStep)=='#')
				{
					  if (dFilterNum.length!=0)
					  {
				        dFilterFinal = dFilterFinal + dFilterNum.charAt(0);
					      dFilterNum = dFilterNum.substring(1,dFilterNum.length);
					  }
				    else
				    {
				        dFilterFinal = dFilterFinal + "";
				    }
				}
		 		else if (dFilterMask.charAt(dFilterStep)!='#')
				{
				    dFilterFinal = dFilterFinal + dFilterMask.charAt(dFilterStep); 			
				}
//		    dFilterTemp = replace(dFilterTemp,dFilterMask.substring(dFilterStep,dFilterStep+1),'');
		}


		textbox.value = dFilterFinal;
    return false;
}

function replace(fullString,text,by) {
// Replaces text with by in string
    var strLength = fullString.length, txtLength = text.length;
    if ((strLength == 0) || (txtLength == 0)) return fullString;

    var i = fullString.indexOf(text);
    if ((!i) && (text != fullString.substring(0,txtLength))) return fullString;
    if (i == -1) return fullString;

    var newstr = fullString.substring(0,i) + by;

    if (i+txtLength < strLength)
        newstr += replace(fullString.substring(i+txtLength,strLength),text,by);

    return newstr;
}


function mapClearLists()
{
	$("headMapList").style.display="none"
	$("neckMapList").style.display="none"
	$("thoraxMapList").style.display="none"
	$("abdomenMapList").style.display="none"
	$("armMapList").style.display="none"
	$("legMapList").style.display="none"
	$("miscMapList").style.display="none"
	$("groinMapList").style.display="none"
}


function showMeds(s)
{
	win = $('MedsList')
	//win.style.width = w;
	//win.style.height = h;
	win.style.top =  10  //mouseY - scrollY;
	win.style.left = 10  //mouseX - scrollX;
	win.style.display= (s == 1) ? "" : "none";
}

function mapShow(listName)
{
	mapClearLists();

    var w, h, l, t;
    w = 120;
    h = 100;
    t = $("ron1").style.top + 350  //+ ($("ron1").style.bottom + $("ron1").style.top)/2;
    l = $("ron1").style.left + 150//+ ($("ron1").style.right + $("ron1").style.left)/2;

	win = $(listName)
	win.style.width = w;
	//win.style.height = h;
	win.style.top =  t  //mouseY - scrollY;
	win.style.left = l  //mouseX - scrollX;
	win.style.display="";
	
}

var generalModifier = ''

function mapSelect(listName, boxName, prefix)
{
	if (prefix == null)
	  prefix = ''
	  
	if (prefix == 'General: ')
	  prefix = generalModifier

	v = getListOptionValue(listName);
	c = $(boxName);
	s = c.value;
	if (v == "OTHER")
	{
	  generalModifier = prefix
	  mapShow('miscMapList')
	  // clear it out for next time
	  $(listName).selectedIndex = -1
	  return;
	}
	
	v = prefix + v
		  
	if ((s == null) || (s.length == 0))
	  s = v
	else
	  s = s + "\n" + v
	c.value = s
	mapClearLists();

    n = $(listName).selectedIndex
	
    if (n < 2)  // 0,1 = burns
    {
    	$('emsBurnChk').checked = true
		$('emsBurnPct').value = calcBurns(listName) + "%"
    }
    
    $(listName).selectedIndex = -1
}


function calcBurns(location)
{
	age = $('emsAge').value
	switch (location)
	{
		case 'headMapListBox':
		  totalBurns += (age < 18) ? 18 : 4.5
		  break;
		case 'neckMapListBox':
		  totalBurns += (age < 18) ? 2 : 1
		  break;
		case 'armMapListBox':
		  totalBurns += (age < 18) ? 9 : 5
		  break;
		case 'legMapListBox':
		  totalBurns += (age < 18) ? 13.5 : 9
		  break;
		case 'thoraxMapListBox':
		  totalBurns += (age < 18) ? 18 : 18
		  break;
		case 'abdomenMapListBox':
		  totalBurns += (age < 18) ? 18 : 18
		  break;
		case 'groinMapListBox':
		  totalBurns += (age < 18) ? 1 : 1
		  break;
		default:
		  totalBurns += 1
	}
	return totalBurns;
}

function setAge(ctrl)
{
	age = $(ctrl).value
	if (age < 18)
	{
	  $('ron2').style.display=''
	  $('ron1').style.display='none'
	}
	else
	{
	  $('ron1').style.display=''
	  $('ron2').style.display='none'
	}
	  
}

function wait(msecs)
{
	var start = new Date().getTime();
	var cur = start
	while(cur - start < msecs)
	{
		cur = new Date().getTime();
	}
}

function saveRun(saveType)
{

	// process remaining data...
	setTreatments();
	
	frm = $('pcrdata')
	seq = $('emsSequence')
	frm.action = "/saveRunRemote.php?st=" + saveType + "&xid=" + seq.innerHTML
	frm.submit()
	
	if (saveType == 7)
	{
		var w = window.open ("about:blank","PCR","menubar=1,resizable=1,width=1000,height=700");
		frm.target = "PCR"
		//wait(2000)
		//w.close()
	}
}

function leadingZero(nr)
{
	if (nr < 10) nr = "0" + nr;
	return nr;
}

function pullTime(theCtrl)
{
	t = new Date();
	theCtrl.value = leadingZero(t.getHours()) + ":" + leadingZero(t.getMinutes());
}

function refuselanguage(lang)
{

	var langset = $("refusetext")
	//alert(langset)
	
	var langdivs = langset.childNodes
	//alert(langdivs.length)
	
	for (var i = 0; i < langdivs.length; i++)
	{
		langdivs[i].style.display='none'
	}
	
	langdiv = $(lang)
	langdiv.style.display=''
	
}

function setPhone1(phone1)
{
	//alert(1);
	var phStr = phone1.value;
	//alert(phStr);

	//(555) 222-3333
	//alert(phStr.substring(1,4));
	//alert(phStr.substring(6,9));
	//alert(phStr.substring(10,14));

	$("emsPhone1a").value = phStr.substring(1,4);
	$("emsPhone1b").value = phStr.substring(6,9);
	$("emsPhone1c").value = phStr.substring(10);
	
}

function addHiddenValue(elName, elValue) 
{
  var frm = $('pcrdata');
  hv = $(elName);
  if (hv == null)
  {
	  var hv = document.createElement('input');
	  hv.setAttribute('name', elName);
	  hv.setAttribute('type', 'hidden');
	  hv.value = elValue;
	  frm.appendChild(hv);
  }
  else
	  hv.value = elValue;
}


function addHiddenCheck(elName, elSource)
{
  var frm = $('pcrdata');
  hv = $(elName);
  if (hv == null)
  {
	  var hv = document.createElement('input');
	  hv.setAttribute('name', elName);
	  hv.setAttribute('type', 'hidden');
	  hv.value = $(elSource).checked ? "Yes" : "Off";
	  frm.appendChild(hv);
  }
  else
  {
	  hv.value =  $(elSource).checked ? "Yes" : "Off";
  }
}


function pullTreatment(emsID, hiddenID)
{
	
	$(hiddenID).value = $(emsID).checked ? "Yes" : "Off";
}


function getCallType()
{
	var ct = getOptionValue("emsCallType");
	
	if ((ct == "995") || (ct == "1005"))
		return("0"); //emergency

	if ((ct == "B2") || (ct == "B3") || (ct == "001"))
		return("2"); //standby
		
	return("1"); //non emergency
}

function getSeatBelts()
{
	var su = getRadioIndex(document.all.emsSeatBeltUsed);
	if (su == 0)
		return ("Y");
	if (su == 1)
		return ("N");
	if (su == 2)
		return ("?");
}

function setTreatments()
{

	// (123) 678-0123
	addHiddenValue("emsPhone1a", $("emsPhone1").value.substring(1,4));
	addHiddenValue("emsPhone1b", $("emsPhone1").value.substring(6,9));
	addHiddenValue("emsPhone1c", $("emsPhone1").value.substring(10));

	// 01/34/6789
	addHiddenValue("emsDOBa", $("emsDOB").value.substring(0,2));
	addHiddenValue("emsDOBb", $("emsDOB").value.substring(3,5));
	addHiddenValue("emsDOBc", $("emsDOB").value.substring(6));

    addHiddenValue("callReceived", getCallType());
	
	//addHiddenValue("callLocation", getOptionValue("emsLocationType"));
	addHiddenValue("callLocation", $("emsLocationType").selectedIndex);

	addHiddenValue("emsChiefComplaint", $("emsIsTrauma").checked ? $("emsChiefComplaintTrauma").value : $("emsChiefComplaintMedical").value );

	addHiddenCheck("MI1", "emsMI1");
	addHiddenValue("MI1V1", getSeatBelts());

	addHiddenCheck("MI2", "emsMI2");

	addHiddenCheck("MI3", "emsMI3");
	addHiddenValue("MI3V1", $("emsMI3V1").value);

	addHiddenCheck("MI4", "emsMI4");

	addHiddenCheck("MI5", "emsMI5");

	addHiddenCheck("MI6", "emsMI6");

	addHiddenCheck("MI7", "emsMI7");

	addHiddenCheck("MI8", "emsMI8");
	addHiddenValue("MI8V1", $("emsMI8V1").value);

	addHiddenCheck("MI9", "emsMI9");
	addHiddenValue("MI9V1", $("emsMI9V1").value);

	addHiddenValue("MI10A", getRadioIndex(document.all.emsSeatBeltUsed));
	
	addHiddenCheck("MI11", "emsMI11");
	addHiddenCheck("MI12", "emsMI12");
	addHiddenCheck("MI13", "emsMI13");
	addHiddenCheck("MI14", "emsMI14");

	addHiddenCheck("CARE1", "emsCARE1");
	addHiddenCheck("CARE2", "emsCARE2");
	addHiddenCheck("CARE3", "emsCARE3");
	addHiddenCheck("CARE3V1", "emsCARE3V1");
	addHiddenCheck("CARE4", "emsCARE4");
	addHiddenCheck("CARE5", "emsCARE5");


	addHiddenCheck("PP1", "emsPP1");
	addHiddenCheck("PP2", "emsPP2");
	addHiddenCheck("PP3", "emsPP3");
	addHiddenCheck("PP4", "emsPP4");
	addHiddenCheck("PP5", "emsPP5");
	addHiddenCheck("PP6", "emsPP6");
	addHiddenCheck("PP7", "emsPP7");
	addHiddenCheck("PP8", "emsPP8");
	addHiddenCheck("PP9", "emsPP9");
	addHiddenCheck("PP10", "emsPP10");
	addHiddenCheck("PP11", "emsPP11");
	addHiddenCheck("PP13", "emsPP13");
	addHiddenCheck("PP14", "emsPP14");
	addHiddenCheck("PP15", "emsPP15");
	addHiddenCheck("PP16", "emsPP16");
	addHiddenCheck("PP17", "emsPP17");
	addHiddenCheck("PP18", "emsPP18");
	addHiddenCheck("PP19", "emsPP19");
	addHiddenCheck("PP20", "emsPP20");
	addHiddenCheck("PP21", "emsPP21");
	addHiddenCheck("PP22", "emsPP22");
	addHiddenCheck("PP23", "emsPP23");
	addHiddenCheck("PP24", "emsPP24");
	addHiddenCheck("PP25", "emsPP25");
	addHiddenCheck("PP26", "emsPP26");
	addHiddenCheck("PP27", "emsPP27");
	addHiddenCheck("PP28", "emsPP28");
	addHiddenCheck("PP29", "emsBurnChk");
	addHiddenValue("PP29V1", $("emsBurnChk").checked ? "(" + $("emsBurnPct").value + "%)" : "" );




	
	addHiddenCheck("ALS1", "emsALS1");

	addHiddenCheck("ALS2", "emsALS2");
	addHiddenValue("ALS2V1", $("emsALS2V1").value);

	addHiddenCheck("ALS3", "emsALS3");

	addHiddenCheck("ALS4", "emsALS4");
	addHiddenValue("ALS4V1", $("emsALS4V1").value);
	addHiddenValue("ALS4V2", $("emsALS4V2a").value + ":" + $("emsALS4V2b").value);

	addHiddenCheck("BLS1", "emsBLS1");
	
	addHiddenCheck("BLS2", "emsBLS2");
	
	addHiddenCheck("BLS3", "emsBLS3");

	addHiddenCheck("BLS4", "emsBLS4");
	addHiddenValue("BLS4V1", $("emsBLS4V1a").value + ":" + $("emsBLS4V1b").value);
	addHiddenValue("BLS4V2", $("emsBLS4V2").value);

	addHiddenCheck("BLS5", "emsBLS5");

	addHiddenCheck("BLS6", "emsBLS6");
	addHiddenValue("BLS6V1", $("emsBLS6V1").value);

	addHiddenCheck("BLS7", "emsBLS7");
	addHiddenValue("BLS7A", getRadioIndex(document.all.emsBLS7A));
	
	addHiddenCheck("BLS8", "emsBLS8");
	addHiddenValue("BLS8V1", $("emsBLS8V1a").value + ":" + $("emsBLS8V1b").value);
	addHiddenValue("BLS8V2", $("emsBLS8V2a").value + ":" + $("emsBLS8V2b").value);

	addHiddenCheck("BLS9", "emsBLS9");
	addHiddenValue("BLS9V1", $("emsBLS9V1").value);
	addHiddenValue("BLS9A", getRadioIndex(document.all.emsBLS9A));
	
	addHiddenCheck("BLS10", "emsBLS10");
	addHiddenValue("BLS10V1", $("emsBLS10V1a").value + ":" + $("emsBLS10V1b").value);

	addHiddenCheck("BLS11", "emsBLS11");
	addHiddenValue("BLS11V1", $("emsBLS11V1").value);

	addHiddenCheck("BLS12", "emsBLS12");

	addHiddenCheck("BLS13", "emsBLS13");
	addHiddenValue("BLS13A", getRadioIndex(document.all.emsBLS13A));

	addHiddenCheck("BLS14", "emsBLS14");

	addHiddenCheck("BLS15", "emsBLS15");
	addHiddenValue("BLS15V1", $("emsBLS15V1a").value + ":" + $("emsBLS15V1b").value);
	addHiddenValue("BLS15V2", $("emsBLS15V2").value);

	addHiddenCheck("BLS16", "emsBLS16");

	addHiddenCheck("BLS17", "emsBLS17");
	addHiddenValue("BLS17V1", $("emsBLS17V1a").value + ":" + $("emsBLS17V1b").value);
	addHiddenValue("BLS17V2", $("emsBLS17V2").value);
	addHiddenValue("BLS17A", getRadioIndex(document.all.emsBLS17A));
	addHiddenValue("BLS17B", getRadioIndex(document.all.emsBLS17B));

	addHiddenCheck("TRANS1", "emsTRANS1");

	addHiddenCheck("TRANS2", "emsTRANS2");

	addHiddenCheck("TRANS3", "emsTRANS3");

	addHiddenCheck("TRANS4", "emsTRANS4");

	addHiddenCheck("TRANS5", "emsTRANS5");

	addHiddenCheck("TRANS6", "emsTRANS6");

	addHiddenCheck("TRANS7", "emsTRANS7");
	addHiddenValue("TRANS7V1", $("emsTRANS7V1").value);
	
}

</SCRIPT>

</SCRIPT>


<div id="floatwindow" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;"> 
</form>   
</BODY>

</HTML>

