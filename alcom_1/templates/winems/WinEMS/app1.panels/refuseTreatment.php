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
				<!-- CONTENT: BEGIN -->
				<div style="width:100%;border:0px solid black">

					<div class=contentHeader></div>
					<div class=contentTable style="width:100%;height:50px;border:1px solid black">						
						<div style="width:100%;">
							<input type=button id=refreshNotes onclick="refreshNotes()" value="Refresh Notes"/>
							<input type=button id=refreshNotes onclick="alert('development is in progress')" value="Clear Signature"/>
							<textarea id=narNotes style="width:100%" rows=10></textarea>
						</div>
						<div style="width:100%">Signature:</div>
						<div style="width:100%;border:1px solid black;padding:2px;margin:2px">
							<!-- begin Flash code -->
							<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="flash_object" width="100%" height="111">
								<param id="movieName" name="movie" value="../media/drawing.swf">
								<param name="quality" value="high">
								<param name="scale" value="noborder">
								<param name="bgcolor" value="#ffffff">
								<embed src="../media/drawing.swf" quality="high" scale="noborder" bgcolor="#ffffff" width="400" height="100" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed> 
							</object>
							<!-- end Flash code -->
						</div>
					</div>

				</div>
				<!-- CONTENT: END   -->
