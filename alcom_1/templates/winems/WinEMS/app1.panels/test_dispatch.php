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
<html>

<form name='one'>
<?php include 'dispatch.php' ?>
</form>

<input type="button" value="data" onclick="doForms('save', 'one')"></input>

<script language='javascript'>

function doForms() {  

	var mode = doForms.arguments[0];

	//alert(mode)

	for(f=1; f< doForms.arguments.length; f++) {

		formName = doForms.arguments[f];

		

		if(mode == 'open') {	

			cookieValue = GetCookie('saved_'+formName);

			if(cookieValue != null) {

				var cookieArray = cookieValue.split('#cf#');

				

				if(cookieArray.length == document[formName].elements.length) {

					for(i=0; i<document[formName].elements.length; i++) {

					

						if(cookieArray[i].substring(0,6) == 'select') { document[formName].elements[i].options.selectedIndex = cookieArray[i].substring(7, cookieArray[i].length-1); }

						else if((cookieArray[i] == 'cbtrue') || (cookieArray[i] == 'rbtrue')) { document[formName].elements[i].checked = true; }

						else if((cookieArray[i] == 'cbfalse') || (cookieArray[i] == 'rbfalse')) { document[formName].elements[i].checked = false; }

						else { document[formName].elements[i].value = (cookieArray[i]) ? cookieArray[i] : ''; }

					}

				}

			}

		}

				

		if(mode == 'save') {	

			cookieValue = '';

			for(i=0; i<document[formName].elements.length; i++) {

				fieldType = document[formName].elements[i].type;
				fieldName = document[formName].elements[i].name;

				

				if(fieldType == 'password') { passValue = ''; }

				else if(fieldType == 'checkbox') { passValue = 'cb'+document[formName].elements[i].checked; }

				else if(fieldType == 'radio') { passValue = 'rb'+document[formName].elements[i].checked; }

				else if(fieldType == 'select-one') { passValue = 'select'+document[formName].elements[i].options.selectedIndex; }

				else { passValue = document[formName].elements[i].value; }

			

				cookieValue = cookieValue + fieldName + "=" + passValue + ';';

			}

			cookieValue = cookieValue.substring(0, cookieValue.length-4); // Remove last delimiter

			

			alert(cookieValue)

		}	

	}

}

</script>

</html>