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

				<table border=0 width=100%>
					<colgroup>
						<col width="10%"/>
						<col width="10%"/>
						<col width="10%"/>
						<col width="5%"/>
						<col width="5%"/>
						<col width="5%"/>
						<col width="5%"/>
						<col width="5%"/>
						<col width="5%"/>
						<col width="5%"/>
					</colgroup>
				    <tr style="display:none">
				    	<td>1</td> <td>2</td>
				    	<td>3</td> <td>4</td>
				    	<td>5</td> <td>6</td>			    	
				    	<td>7</td> <td>8</td>
				    	<td>9</td> <td>10</td>
				    </tr>

					<tr>
						<td colspan=1>First Name</td>	<td colspan=2><input name='emsFirstName' class='wideInput'/></td>  
						<td colspan=1>MI</td>	<td colspan=1><input name='emsMI' class='narrowInput'/></td>  
						<td colspan=2 align=right>Last Name</td>	<td colspan=4><input name='emsLastName'  class='wideInput'  style='width:70%'/></td>  
						<td/>
					</tr>
					
					<tr>
						<td colspan=1>Address &nbsp;&nbsp;&nbsp;<a href="javascript:locToDemog()">[Same]</a></td>		
						<td colspan=8><input id='emsAddress' name='emsAddress' class='wideInput' style='width:100%'/></td>  
						<td/>
					</tr>
					<tr>
						<td colspan=1>Apt/Unit #</td>	<td colspan=2><input name='emsApt'   class='wideInput'/></td>  
						<td/>
						<td colspan=1>Phone#1</td>	<td colspan=1>
						<input name='emsPhone1' id='emsPhone1' onKeyDown="javascript:return dFilter (event.keyCode, this, '(###)-###-####');" class='mediumInput'/></td>  
						<td/>
						<td colspan=1>Phone#2</td>	<td colspan=1>
						<input name='emsPhone2' onKeyDown="javascript:return dFilter (event.keyCode, this, '(###)-###-####');" class='mediumInput'/></td>  
						<td/>
					</tr>
					<tr>
						<td colspan=1>City</td>			<td colspan=2><input id='emsCity' name='emsCity' class='wideInput'/></td>  
						<td/>
						<td colspan=1>State</td>		
						<td colspan=1>
														<select id='emsState' name='emsState'>
															<option>&lt;Select&gt;</option>
															<OPTION VALUE="AL">Alabama</OPTION>
															<OPTION VALUE="AK">Alaska</OPTION>
															<OPTION VALUE="AZ">Arizona</OPTION>
															<OPTION VALUE="AR">Arkansas</OPTION>
															<OPTION VALUE="CA">California</OPTION>
															<OPTION VALUE="CO">Colorado</OPTION>
															<OPTION VALUE="CT">Connecticut</OPTION>
															<OPTION VALUE="DE">Delaware</OPTION>
															<OPTION VALUE="DC">District of Columbia</OPTION>
															<OPTION VALUE="FL">Florida</OPTION>
															<OPTION VALUE="GA">Georgia</OPTION>
															<OPTION VALUE="HI">Hawaii</OPTION>
															<OPTION VALUE="ID">Idaho</OPTION>
															<OPTION VALUE="IL">Illinois</OPTION>
															<OPTION VALUE="IN">Indiana</OPTION>
															<OPTION VALUE="IA">Iowa</OPTION>
															<OPTION VALUE="KS">Kansas</OPTION>
															<OPTION VALUE="KY">Kentucky</OPTION>
															<OPTION VALUE="LA">Louisiana</OPTION>
															<OPTION VALUE="ME">Maine</OPTION>
															<OPTION VALUE="MD">Maryland</OPTION>
															<OPTION VALUE="MA">Massachusetts</OPTION>
															<OPTION VALUE="MI">Michigan</OPTION>
															<OPTION VALUE="MN">Minnesota</OPTION>
															<OPTION VALUE="MS">Mississippi</OPTION>
															<OPTION VALUE="MO">Missouri</OPTION>
															<OPTION VALUE="MT">Montana</OPTION>
															<OPTION VALUE="NE">Nebraska</OPTION>
															<OPTION VALUE="NV">Nevada</OPTION>
															<OPTION VALUE="NH">New Hampshire</OPTION>
															<OPTION VALUE="NJ">New Jersey</OPTION>
															<OPTION VALUE="NM">New Mexico</OPTION>
															<OPTION VALUE="NY" selected>New York</OPTION>
															<OPTION VALUE="NC">North Carolina</OPTION>
															<OPTION VALUE="ND">North Dakota</OPTION>
															<OPTION VALUE="OH">Ohio</OPTION>
															<OPTION VALUE="OK">Oklahoma</OPTION>
															<OPTION VALUE="OR">Oregon</OPTION>
															<OPTION VALUE="PA">Pennsylvania</OPTION>
															<OPTION VALUE="PR">Puerto Rico</OPTION>
															<OPTION VALUE="RI">Rhode Island</OPTION>
															<OPTION VALUE="SC">South Carolina</OPTION>
															<OPTION VALUE="SD">South Dakota</OPTION>
															<OPTION VALUE="TN">Tennessee</OPTION>
															<OPTION VALUE="TX">Texas</OPTION>
															<OPTION VALUE="UT">Utah</OPTION>
															<OPTION VALUE="VT">Vermont</OPTION>
															<OPTION VALUE="VA">Virginia</OPTION>
															<OPTION VALUE="WA">Washington</OPTION>
															<OPTION VALUE="WV">West Virginia</OPTION>
															<OPTION VALUE="WI">Wisconsin</OPTION>
															<OPTION VALUE="WY">Wyoming</OPTION>
															<OPTION VALUE="VI">Virgin Islands</OPTION>
															<OPTION VALUE="AS">American Samoa</OPTION>
															<OPTION VALUE="GU">Guam</OPTION>
														</select>
						</td>
						<td/>
						<td colspan=1>Zip</td>			<td colspan=2><input id='emsZip' name='emsZip' onKeyDown="javascript:return dFilter (event.keyCode, this, '#####-####');"	 class='mediumInput'/></td>

					</tr>

					<tr>
						<td colspan=1>DOB</td>	<td colspan=1><input name='emsDOB' onKeyDown="javascript:return dFilter (event.keyCode, this, '##/##/####');"    class='date'/></td>
						<td>Age &nbsp; &nbsp <input name='emsAge' class='narrowInput' onchange='setAge(this)'/></td>
						<td/>
						<td colspan=1>Gender</td>			
						<td colspan=1>
														<select name='emsGender'>
															<option>&lt;Select&gt;</option>
															<option value="0">Female</option>
															<option value="1">Male</option>
															<option value="3">Unknown</option>
														</select>
						</td>
						<td/>
						<td colspan=1>SS#</td>				<td colspan=1><input name='emsSS'  onKeyDown="javascript:return dFilter (event.keyCode, this, '###-##-####');" 	  class='mediumInput'/></td>
						<td/>
					</tr>

					<tr>
						<td colspan=2>Emergency Contact</td>		<td colspan=5><input id='emsEmergencyContact' name='emsEmergencyContact' class='wideInput' style='width:100%'/></td>
																	<td colspan=1>Phone#</td>	<td colspan=1><input name='emsEmergencyPhone' onKeyDown="javascript:return dFilter (event.keyCode, this, '(###)-###-####');" class='mediumInput'/></td>  
						<td/>
					</tr>

					<tr>
						<td colspan=2>Physician Contact</td>		<td colspan=5><input name='emsPhysicianContact'  class='wideInput' style='width:100%'/></td>  
																	<td colspan=1>Phone#</td>	<td colspan=1><input name='emsPhysicianPhone' onKeyDown="javascript:return dFilter (event.keyCode, this, '(###)-###-####');" class='mediumInput'/></td>  
						<td/>
					</tr>


				</table>

				<a href="javascript:toggleInsurance('emsInsuranceInfo')">Insurance Information</a>
				
				<div id='emsInsuranceInfo' style="display:none">
					<hr/>

					<table border=0 width=100%>
					<colgroup>
						<col width="50%"/>
						<col width="50%"/>
					</colgroup>
					<tr>
						<td>Primary Insurance Policy</td>  <td>Secondary Insurance Policy</td>
					</tr>
					<tr>
						<td>
							<select name='emsPrimaryInsuranceType'>
								<option>&lt;Select&gt;</option>
								<option>Auto Insurance</option>
								<option>Commercial</option>
								<option>Group</option>
								<option>Health Maintenance Organization</option>
								<option>Individual</option>
								<option>Litigation</option>
								<option>Long-term Disability</option>
								<option>Medicaid</option>
								<option>Medicare Conditionally Primary</option>
								<option>Medicare Part B</option>
								<option>Medicare Primary</option>
								<option>Medicare Sec. Black Lung</option>
								<option>Medicare Sec. Disabled Ben. Under Age 65 w/large Grp Plan</option>
								<option>Medicare Sec. End Stage renal Disease</option>
								<option>Medicare Sec. No-Fault Ins. Incl. Auto is Primary</option>
								<option>Medicare Sec. Other Liability Insurance is Primary</option>
								<option>Medicare Sec. Pub. Health Svc. (PHS) or Other Fed. Agency</option>
								<option>Medicare Sec. Veterans Administration</option>
								<option>Medicare Sec. Workers Compensation</option>
								<option>Medicare Sec. Working Age Beneficiary</option>
								<option>Medigap (3051)</option>
								<option>Medigap Part B</option>
								<option>Personal Payment (Cash – No Insurance)</option>
								<option>Supplemental</option>
								<option>Workers Compensation (3051)</option>
								<option>Other</option>
							</select>						
						</td>
						<td>
							<select name='emsSecondaryInsuranceType'>
								<option>&lt;Select&gt;</option>
								<option>Auto Insurance</option>
								<option>Commercial</option>
								<option>Group</option>
								<option>Health Maintenance Organization</option>
								<option>Individual</option>
								<option>Litigation</option>
								<option>Long-term Disability</option>
								<option>Medicaid</option>
								<option>Medicare Conditionally Primary</option>
								<option>Medicare Part B</option>
								<option>Medicare Primary</option>
								<option>Medicare Sec. Black Lung</option>
								<option>Medicare Sec. Disabled Ben. Under Age 65 w/large Grp Plan</option>
								<option>Medicare Sec. End Stage renal Disease</option>
								<option>Medicare Sec. No-Fault Ins. Incl. Auto is Primary</option>
								<option>Medicare Sec. Other Liability Insurance is Primary</option>
								<option>Medicare Sec. Pub. Health Svc. (PHS) or Other Fed. Agency</option>
								<option>Medicare Sec. Veterans Administration</option>
								<option>Medicare Sec. Workers Compensation</option>
								<option>Medicare Sec. Working Age Beneficiary</option>
								<option>Medigap (3051)</option>
								<option>Medigap Part B</option>
								<option>Personal Payment (Cash – No Insurance)</option>
								<option>Supplemental</option>
								<option>Workers Compensation (3051)</option>
								<option>Other</option>
							</select>						
						</td>
					</tr>
					<tr>
						<td>
								<div class="contentHeader">
								 	<span class="inputLabel" style="width:8em">Company:&nbsp;&nbsp;</span>
									<input class='wideInput' name='emsPrimaryInsCompany'/>

								 	<span class="inputLabel" style="width:8em">Address:&nbsp;&nbsp;</span>
									<input class='widiumInput' name='emsPrimaryInsCompany'/><br/>

								 	<span class="inputLabel" style="width:4em">Phone:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany' onKeyDown="javascript:return dFilter (event.keyCode, this, '(###)-###-####');"/>

								 	<span class="inputLabel" style="width:4em">Group#:&nbsp</span>
									<input class='mediumInput' name='emsPrimaryInsCompany'/><br/>

								 	<span class="inputLabel" style="width:4em">Policy:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany'/>

								 	<span class="inputLabel" style="width:8em">Policy Holder:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany'/>

								 	<span class="inputLabel" style="width:4em">SS#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany' onKeyDown="javascript:return dFilter (event.keyCode, this, '###-##-####');"/>

								 	<span class="inputLabel" style="width:4em">DOB:&nbsp;&nbsp;</span>
									<input name='emsPICDOB'  class="date" onclick="displayDatePicker(this.name, this);"/><br/>

								 	<span class="inputLabel" style="width:4em">Medicare#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsMedicare'/>

								 	<span class="inputLabel" style="width:4em">Medicaid#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsMedicaid'/>

								 	<span class="inputLabel" style="width:4em">Claim#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsClaim'/>							
								</div>					
						</td>
						
						<td>
								<div class="contentHeader">
								 	<span class="inputLabel" style="width:8em">Company:&nbsp;&nbsp;</span>
									<input class='wideInput' name='emsPrimaryInsCompany'/>

								 	<span class="inputLabel" style="width:8em">Address:&nbsp;&nbsp;</span>
									<input class='widiumInput' name='emsPrimaryInsCompany'/><br/>

								 	<span class="inputLabel" style="width:4em">Phone:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany' onKeyDown="javascript:return dFilter (event.keyCode, this, '(###)-###-####');"/>

								 	<span class="inputLabel" style="width:4em">Group#:&nbsp</span>
									<input class='mediumInput' name='emsPrimaryInsCompany'/><br/>

								 	<span class="inputLabel" style="width:4em">Policy:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany'/>

								 	<span class="inputLabel" style="width:8em">Policy Holder:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany'/>

								 	<span class="inputLabel" style="width:4em">SS#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsCompany' onKeyDown="javascript:return dFilter (event.keyCode, this, '###-##-####');"/>

								 	<span class="inputLabel" style="width:4em">DOB:&nbsp;&nbsp;</span>
									<input name='emsPICDOB'  class="date" onclick="displayDatePicker(this.name, this);"/><br/>

								 	<span class="inputLabel" style="width:4em">Medicare#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsMedicare'/>

								 	<span class="inputLabel" style="width:4em">Medicaid#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsMedicaid'/>

								 	<span class="inputLabel" style="width:4em">Claim#:&nbsp;&nbsp;</span>
									<input class='mediumInput' name='emsPrimaryInsClaim'/>							
								</div>					
						</td>
					</tr>
					
					</table>
				</div>
				
<br/><br/>



				<!-- CONTENT: END   -->
