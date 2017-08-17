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
				
				<table border=0>
				<tr>
					<td><input class='ckBox' name='emsIsTrauma'   onclick='toggleTrauma(this)' type='checkbox'/><span class='ckLabel'>Trauma</input></span></td>
					<td><input class='ckBox' name='emsAlsOnScene' onclick='toggleALS(this)' type='checkbox'/><span class='ckLabel'>ALS On Scene</input></span></td>
				</tr>
				</table>
				
				<table id='emsComplaintTrauma' border=0 width=100%>
					<tr>
						<td>Chief Complaint - Trauma:</td>
					</tr>
					<tr>
						<td><textarea name="emsChiefComplaintTrauma" style="width:100%" rows=5></textarea></td>
					</tr>
				</table>
				
				<table id='emsComplaintMedical' border=0 width=100%>
					<tr>
						<td>Chief Complaint - Medical:</td>
					</tr>
					<tr>
						<td><textarea name="emsChiefComplaintMedical" style="width:100%" rows=5></textarea></td>
					</tr>
				</table>

				<table id='emsInjuryMechanism' border=0 width=100%>
					<tr>
						<td>Mechanism of Injury</td>
					</tr>
					<tr>
						<td valign=top style="xborder: solid thin rgb(0,0,0); border:1px solid black">
							<table width=100%>
								<tr>
								<td align=left>
									<input class='ckBox' name='emsMI1' type='checkbox'/><span class='ckLabel'>MVA</span></input></span>
									<input class='ckBox' name='emsMI5' type='checkbox'/><span class='ckLabel'>GSW</span></input></span>
									<input class='ckBox' name='emsMI6' type='checkbox'/><span class='ckLabel'>Knife</span></input></span>
									<input class='ckBox' name='emsMI4' type='checkbox'/><span class='ckLabel'>Unarmed Assault</input></span>
								</td>
								</tr>
								<tr>
								<td align=left>
									<input class='ckBox' name='emsMI2' type='checkbox'/><span class='ckLabel'>Struck By Vehicle</span></input></span>
									<input class='ckBox' name='emsMI7' type='checkbox'/><span class='ckLabel'>Machinery</input></span>
									<br/><input class='ckBox' name='emsMI3' type='checkbox'/><span class='ckLabel'>Fall of</input></span><input name="emsMI3V1" class="tinyInput" onkeyup="toCheck('emsMI3', this.value)" onchange="toCheck('emsMI7', this.value)"/><span class='ckLabel'>&nbsp;feet</input></span>
									<input class='ckBox' name='emsMI8' type='checkbox'/><span class='ckLabel'>Other:</input></span><input name="emsMI8V1" class="mediumInput" onkeyup="toCheck('emsMI8', this.value)" onchange="toCheck('emsMI8', this.value)"/><span class='ckLabel'></input></span>
								</td>
								</tr>
							</table>
						</td>

						<td  rowspan=1 valign=top style="border:1px solid black">
							<table width=100% height=100% >
								<tr>
								<td align=left>
									<input class='ckBox' name='emsMI9' type='checkbox'/><span class='ckLabel'>Extrication Req.</input></span><!--<input class="tinyInput"/><span class='ckLabel'>&nbsp;minutes</input></span>-->
								</td>
								</tr>
								<tr>
								<td align=left>
									<input name="emsMI9V1" class="tinyInput" onkeyup="toCheck('emsExtricationRequired', this.value)" onchange="toCheck('emsExtricationRequired', this.value)"/><span class='ckLabel'>&nbsp;minutes</input></span>
								</td>
								</tr>
							</table>
						</td>

						<td rowspan=1 valign=top style="border:1px solid black">
							<table width=100%>
								<tr>
								<td align=left>
									Seat Belt Used?&nbsp;&nbsp;
									<input class='ckBox' name='emsSeatBeltUsed' type='radio'><span class='ckLabel'>Yes</span></input>
									<input class='ckBox' name='emsSeatBeltUsed' type='radio'><span class='ckLabel'>No</span></input>
									<input class='ckBox' name='emsSeatBeltUsed' type='radio' checked><span class='ckLabel'>Unknown</span></input>
								</td>
								</tr>
								<tr>
								<td align=left>
									Belt Use Rep. By&nbsp;&nbsp;
									<input class='ckBox' name='emsMI11' type='checkbox'><span class='ckLabel'>Crew</span></input>
									<input class='ckBox' name='emsMI13' type='checkbox'><span class='ckLabel'>Patient</input></span>
									<input class='ckBox' name='emsMI12' type='checkbox'><span class='ckLabel'>Police</span></input>
									<input class='ckBox' name='emsMI14' type='checkbox'><span class='ckLabel'>Other</input></span>
								</td>
								</tr>
							</table>
						</td>

					</tr>

					<tr>
						<td>Presenting Problem</td>
					</tr>
					<tr>
						<td colspan=3 valign=top>
						<div id=presentingProblems name=presentingProblems style="width:100%;height:100px;border:0px solid black">

							<div class="columnList" style="width:9em">
								<ul>
										<li><input class='ckBox' name='emsPP1' type='checkbox'/><span class='ckLabel'>Airway&nbsp;Obstruction</span></input></span></li>
										<li><input class='ckBox' name='emsPP2' type='checkbox'/><span class='ckLabel'>Resp.&nbsp;Arrest</span></input></span></li>
										<li><input class='ckBox' name='emsPP3' type='checkbox'/><span class='ckLabel'>Resp.&nbsp;Distress</span></input></span></li>
										<li><input class='ckBox' name='emsPP4' type='checkbox'/><span class='ckLabel'>Cardiac&nbsp;Related</span></input></span></li>
										<li><input class='ckBox' name='emsPP5' type='checkbox'/><span class='ckLabel'>Cardiac&nbsp;Arrest</span></input></span></li>
								</ul>
							</div>

							<div class="columnList" style="width:8em">
								<ul>
										<li><input class='ckBox' name='emsPP6' type='checkbox'/><span class='ckLabel'>Alergic&nbsp;Reaction</span></input></span></li>
										<li><input class='ckBox' name='emsPP7' type='checkbox'/><span class='ckLabel'>Syncope</span></input></span></li>
										<li><input class='ckBox' name='emsPP8' type='checkbox'/><span class='ckLabel'>Stroke/CVA</span></input></span></li>
										<li><input class='ckBox' name='emsPP14' type='checkbox'/><span class='ckLabel'>Seizure</span></input></span></li>
										<li><input class='ckBox' name='emsPP18' type='checkbox'/><span class='ckLabel'>Shock</span></input></span></li>
								</ul>
							</div>
							<div class="columnList" style="width:8em">
								<ul>
										<li><input class='ckBox' name='emsPP9' type='checkbox'/><span class='ckLabel'>Gen.&nbsp;Illness/Malaise</span></input></span></li>
										<li><input class='ckBox' name='emsPP10' type='checkbox'/><span class='ckLabel'>Gastro.&nbsp;Distress</span></input></span></li>
										<li><input class='ckBox' name='emsPP11' type='checkbox'/><span class='ckLabel'>Diabetic&nbsp;Related</span></input></span></li>
										<li><input class='ckBox' name='emsPP13' type='checkbox'/><span class='ckLabel'>Uncons./Unresp.</span></input></span></li>
										<li><input class='ckBox' name='emsPP15' type='checkbox'/><span class='ckLabel'>Behavioral&nbsp;Disorder</span></input></span></li>
								</ul>
							</div>
							<div class="columnList" style="width:9em">
								<ul>
										<li><input class='ckBox' name='emsPP16' type='checkbox'/><span class='ckLabel'>Substance&nbsp;Abuse</span></input></span></li>
										<li><input class='ckBox' name='emsPP17' type='checkbox'/><span class='ckLabel'>Poisoning</span></input></span></li>
										<li><input class='ckBox' name='emsPP19' type='checkbox'/><span class='ckLabel'>Head&nbsp;Injury</span></input></span></li>
										<li><input class='ckBox' name='emsPP20' type='checkbox'/><span class='ckLabel'>Spinal&nbsp;Injury</span></input></span></li>
										<li><input class='ckBox' name='emsPP21' type='checkbox'/><span class='ckLabel'>Fracture/Disloc.</span></input></span></li>
								</ul>
							</div>
							<div class="columnList" style="width:9em">
								<ul>
										<li><input class='ckBox' name='emsPP22' type='checkbox'/><span class='ckLabel'>Amputation</span></input></span></li>
										<li><input class='ckBox' name='emsPP23' type='checkbox'/><span class='ckLabel'>Major&nbsp;Trauma:</span></input></span></li>
										<li><input class='ckBox' name='emsPP24' type='checkbox'/><span class='ckLabel'>-Blunt</span></input></span></li>
										<li><input class='ckBox' name='emsPP25' type='checkbox'/><span class='ckLabel'>-Penetrating</span></input></span></li>
										<li><input class='ckBox' name='emsPP26' type='checkbox'/><span class='ckLabel'>Soft&nbsp;Tissue&nbsp;Injury</span></input></span></li>
								</ul>
							</div>
							<div class="columnList" style="width:9em">
								<ul>
										<li><input class='ckBox' name='emsPP27' type='checkbox'/><span class='ckLabel'>Bleeding/Hemm.</span></input></span></li>
										<li><input class='ckBox' name='emsPP28' type='checkbox'/><span class='ckLabel'>OB/GYN</span></input></span></li>
										<li><input class='ckBox' id='emsBurnChk' name='emsBurnChk' type='checkbox'/><span class='ckLabel'>Burns:</span></input>
											<input class="narrowInput" id='emsBurnPct' name='emsBurnPct'></input>										
										</li>
										<li><input class='ckBox' name='emsPP34' type='checkbox'/><span class='ckLabel'>Other:</span></input></span></li>
										<li><input class="mediumInput" name="emsPP34V1" onkeyup="toCheck('emsOther', this.value)" onchange="toCheck('emsOther', this.value)"/></li>
								</ul>
							</div>
						</div>
						</td>
					</tr>
					
				</table>
				<div style="width:100%;clear:left">

<div id="miscMapList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: General</span></DIV>
<select size="20" id="miscMapListBox" onchange="mapSelect('miscMapListBox','traumaMapItems', 'General: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="ABN CLINICAL FINDING NEC">ABN CLINICAL FINDING NEC</option>
					<option value="ALCOHOL ABUSE*">ALCOHOL ABUSE*</option>
					<option value="ANAPHYLACTIC SHOCK">ANAPHYLACTIC SHOCK</option>
					<option value="BACTERIAL INFECTION NOS">BACTERIAL INFECTION NOS</option>
					<option value="CVA">CVA</option>
					<option value="DERMATITIS NOS">DERMATITIS NOS</option>
					<option value="DROWNING/NONFATAL SUBMER">DROWNING/NONFATAL SUBMER</option>
					<option value="EFFECT REDUCED TEMP NOS">EFFECT REDUCED TEMP NOS</option>
					<option value="EFFECTS ELECTRIC CURRENT">EFFECTS ELECTRIC CURRENT</option>
					<option value="EFFECTS OF LIGHTNING">EFFECTS OF LIGHTNING</option>
					<option value="FRACTURE NOS-CLOSED">FRACTURE NOS-CLOSED</option>
					<option value="HEAT CRAMPS">HEAT CRAMPS</option>
					<option value="HEAT EXHAUSTION NOS">HEAT EXHAUSTION NOS</option>
					<option value="HEMORRHAGE NOS">HEMORRHAGE NOS</option>
					<option value="HYPERHIDROSIS">HYPERHIDROSIS</option>
					<option value="HYPOTHERMIA">HYPOTHERMIA</option>
					<option value="IMPAIRED FASTING GLUCOSE">IMPAIRED FASTING GLUCOSE</option>
					<option value="INJURY MLT SITE/SITE NEC">INJURY MLT SITE/SITE NEC</option>
					<option value="JOINT PAIN-MULT JTS">JOINT PAIN-MULT JTS</option>
					<option value="JOINT PAIN-PELVIS">JOINT PAIN-PELVIS</option>
					<option value="LATE EFF SPINAL CORD INJ">LATE EFF SPINAL CORD INJ</option>
					<option value="MALFUNC CARD DEV/GRF NOS">MALFUNC CARD DEV/GRF NOS</option>
					<option value="MALFUNC GU DEV/GRAFT NOS">MALFUNC GU DEV/GRAFT NOS</option>
					<option value="OPEN WOUND SITE NOS">OPEN WOUND SITE NOS</option>
					<option value="OTHER CONVULSIONS">OTHER CONVULSIONS</option>
					<option value="OTHER GENERAL SYMPTOMS">OTHER GENERAL SYMPTOMS</option>
					<option value="POISON-ALCOHOL DETERRENT">POISON-ALCOHOL DETERRENT</option>
					<option value="POST TRAUM PULM INSUFFIC">POST TRAUM PULM INSUFFIC</option>
					<option value="SECONDARY/RECUR HEMORR">SECONDARY/RECUR HEMORR</option>
					<option value="SEPTICEMIA NOS">SEPTICEMIA NOS</option>
					<option value="SEXUAL ASSAULT">SEXUAL ASSAULT</option>
					<option value="SURGICAL COMPLICAT NOS">SURGICAL COMPLICAT NOS</option>
					<option value="TOXIC EFF GAS/VAPOR NOS">TOXIC EFF GAS/VAPOR NOS</option>
					<option value="TOXIC EFFECT VENOM">TOXIC EFFECT VENOM</option>
					<option value="UNSPECIFIED DRUG OR MEDICINAL SUBSTANCE">UNSPEC. DRUG OR MED. SUBSTANCE</option>
</select>
</div>

<div id="headMapList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: Head</span></DIV>
<select size="16" id="headMapListBox" onchange="mapSelect('headMapListBox','traumaMapItems', 'Head: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="ACUTE DELIRIUM">ACUTE DELIRIUM</option>
					<option value="CEREBROVASC DISEASE NOS">CEREBROVASC DISEASE NOS</option>
					<option value="COMA">COMA</option>
					<option value="CONTUSION OF EYE NOS">CONTUSION OF EYE NOS</option>
					<option value="DRUG MENTAL DISORDER NOS">DRUG MENTAL DISORDER NOS</option>
					<option value="EYE DISORDER NOS">EYE DISORDER NOS</option>
					<option value="LACK OF COORDINATION">LACK OF COORDINATION</option>
					<option value="MENINGOCOCCAL INFECT NOS">MENINGOCOCCAL INFECT NOS</option>
					<option value="PSYCHOSIS NOS">PSYCHOSIS NOS</option>
					<option value="PSYCHOSIS NOS">PSYCHOSIS NOS</option>
					<option value="REACT PSYCHOSIS NEC/NOS">REACT PSYCHOSIS NEC/NOS</option>
					<option value="SUBACUTE DELIRIUM">SUBACUTE DELIRIUM</option>
					<option value="TRANS ALTER AWARENESS">TRANS ALTER AWARENESS</option>
					<OPTION value="OTHER">OTHER...</OPTION>
</select>
</div>

<div id="neckMapList" style="position:absolute; z-index:10; PADDING-RIGHT:1px; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: Neck</span></DIV>
<select size="5" id="neckMapListBox" onchange="mapSelect('neckMapListBox','traumaMapItems', 'Neck: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="CHR AIRWAY OBSTRUCT NEC">CHR AIRWAY OBSTRUCT NEC</option>
					<option value="SYMP INVOL HEAD/NECK NEC">SYMP INVOL HEAD/NECK NEC</option>
					<OPTION value="OTHER">OTHER...</OPTION>
</select>
</div>

<div id="thoraxMapList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: Thorax</span></DIV>
<select size="19" id="thoraxMapListBox" onchange="mapSelect('thoraxMapListBox','traumaMapItems', 'Thorax: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="BACK DISORDER NOS">BACK DISORDER NOS</option>
					<option value="BACKACHE NOS">BACKACHE NOS</option>
					<option value="CARDIAC ARREST">CARDIAC ARREST</option>
					<option value="CARDIAC DYSRHYTHMIA NOS">CARDIAC DYSRHYTHMIA NOS</option>
					<option value="CHEST PAIN NOS">CHEST PAIN NOS</option>
					<option value="EMPHYSEMA NEC">EMPHYSEMA NEC</option>
					<option value="HEART FAILURE NOS">HEART FAILURE NOS</option>
					<option value="INTERNAL INJ NOS-CLOSED">INTERNAL INJ NOS-CLOSED</option>
					<option value="INTERNAL INJURY NOS-OPEN">INTERNAL INJURY NOS-OPEN</option>
					<option value="OTHER LUNG DISEASE NEC">OTHER LUNG DISEASE NEC</option>
					<option value="PALPITATIONS">PALPITATIONS</option>
					<option value="PERSISTENT VOMITING">PERSISTENT VOMITING</option>
					<option value="RESPIRATORY ABNORM NEC">RESPIRATORY ABNORM NEC</option>
					<option value="RESPIRATORY ARREST">RESPIRATORY ARREST</option>
					<option value="RESPIRATORY FAILURE">RESPIRATORY FAILURE</option>
					<option value="SHORTNESS OF BREATH">SHORTNESS OF BREATH</option>
					<OPTION value="OTHER">OTHER...</OPTION>
</select>
</div>

<div id="abdomenMapList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: Abdomen</span></DIV>
<select size="7" id="abdomenMapListBox" onchange="mapSelect('abdomenMapListBox','traumaMapItems', 'Abdomen: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="ABDMNAL PAIN UNSPCF SITE">ABDMNAL PAIN UNSPCF SITE</option>
					<option value="GASTRITIS/DUODENITIS NOS*">GASTRITIS/DUODENITIS NOS*</option>
					<option value="NAUSEA WITH VOMITING">NAUSEA WITH VOMITING</option>
					<option value="NORMAL DELIVERY">NORMAL DELIVERY</option>
					<OPTION value="OTHER">OTHER...</OPTION>
</select>
</div>

<div id="groinMapList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: Groin</span></DIV>
<select size="7" id="groinMapListBox" onchange="mapSelect('groinMapListBox','traumaMapItems', 'Groin: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="ABDMNAL PAIN UNSPCF SITE">ABDMNAL PAIN UNSPCF SITE</option>
					<option value="GASTRITIS/DUODENITIS NOS*">GASTRITIS/DUODENITIS NOS*</option>
					<option value="NAUSEA WITH VOMITING">NAUSEA WITH VOMITING</option>
					<option value="NORMAL DELIVERY">NORMAL DELIVERY</option>
					<OPTION value="OTHER">OTHER...</OPTION>
</select>
</div>

<div id="armMapList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: Arm</span></DIV>
<select size="6" id="armMapListBox" onchange="mapSelect('armMapListBox','traumaMapItems', 'Arm: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="AMPUTAT">AMPUTAT</option>
					<option value="AMPUTATION FINGER">AMPUTATION FINGER</option>
					<option value="OPEN WOUND OF SHOULDER">OPEN WOUND OF SHOULDER</option>
					<OPTION value="OTHER">OTHER...</OPTION>
</select>
</div>

<div id="legMapList" style="position:absolute; z-index:10; left:350px; top:160px; width:900px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Selection: Leg</span></DIV>
<select size="5" id="legMapListBox" onchange="mapSelect('legMapListBox','traumaMapItems', 'Leg: ')">
					<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
					<option value="AMPUTAT LEG UNILAT NOS">AMPUTAT LEG UNILAT NOS</option>
					<option value="AMPUTATION TOE">AMPUTATION TOE</option>
					<OPTION value="OTHER">OTHER...</OPTION>
</select>
</div>

				<table id='emsBodyMaps' border=1>
				<tr> 
					<td rowspan=4>
						<img style="display:none" onclick="mapClearLists()" id="ron1" usemap="#ronmap1" alt="Image Map" ismap src="../media/ron1.gif"/>
						<img style="display:none" onclick="mapClearLists()" id="ron2" usemap="#ronmap2" alt="Image Map" ismap src="../media/ron2.gif"/>
					</td> 
					<td rowspan=4 valign=top><textarea onclick="mapClearLists()" style="width:250px" id=traumaMapItems  rows=33></textarea></td>
				</tr>
				</table>
				</div>

				<map name="ronmap1">
				  <area name="head" shape="circle" coords="117,50,35" href="javascript:mapShow('headMapList')"  alt="Head" OnMouseOver="window.status='Head'; return true" OnMouseOut="window.status=''; return true">
				  <area name="head" shape="circle" coords="369,36,31" href="javascript:mapShow('headMapList')"  alt="Head" OnMouseOver="window.status='Head'; return true" OnMouseOut="window.status=''; return true">
				  <area name="neck" shape="rect" coords="89,79,144,98" href="javascript:mapShow('neckMapList')"  alt="Neck" OnMouseOver="window.status='Neck'; return true" OnMouseOut="window.status=''; return true">
				  <area name="neck" shape="rect" coords="349,62,390,81" href="javascript:mapShow('neckMapList')"  alt="Neck" OnMouseOver="window.status='Neck'; return true" OnMouseOut="window.status=''; return true">
				  <area name="thorax" shape="poly" coords="89,94,69,102,77,120,78,138,83,159,151,159,155,141,156,116,160,99,134,91" href="javascript:mapShow('thoraxMapList')"  alt="Thorax" OnMouseOver="window.status='Thorax'; return true" OnMouseOut="window.status=''; return true">
				  <area name="thorax" shape="poly" coords="350,79,338,90,324,97,329,131,336,157,400,157,406,136,410,101,413,92,385,80" href="javascript:mapShow('thoraxMapList')"  alt="Thorax" OnMouseOver="window.status='Thorax'; return true" OnMouseOut="window.status=''; return true">
				  <area name="abdomen" shape="poly" coords="337,156,338,170,330,192,330,206,404,206,403,189,397,171,400,157" href="javascript:mapShow('abdomenMapList')"  alt="Abdomen" OnMouseOver="window.status='Abdomen'; return true" OnMouseOut="window.status=''; return true">
				  <area name="arm" shape="poly" coords="66,103,58,113,54,136,52,161,42,181,34,206,29,224,2,235,16,237,5,257,14,251,9,267,21,258,19,270,27,258,31,265,39,233,71,184,76,145" href="javascript:mapShow('armMapList')"  alt="Arm" OnMouseOver="window.status='Arm'; return true" OnMouseOut="window.status=''; return true">
				  <area name="arm" shape="poly" coords="164,101,177,127,184,167,198,198,215,224,235,234,222,237,238,257,223,253,229,268,212,258,207,266,199,232,163,185,155,148,155,145" href="javascript:mapShow('armMapList')"  alt="Arm" OnMouseOver="window.status='Arm'; return true" OnMouseOut="window.status=''; return true">
				  <area name="arm" shape="poly" coords="320,97,311,114,307,150,294,182,281,216,267,222,253,233,265,234,252,255,268,249,265,262,277,259,280,249,285,257,292,229,321,184,331,146" href="javascript:mapShow('armMapList')"  alt="Arm" OnMouseOver="window.status='Arm'; return true" OnMouseOut="window.status=''; return true">
				  <area name="arm" shape="poly" coords="415,94,429,134,430,157,446,197,456,223,478,235,471,238,480,256,468,253,474,267,465,267,458,254,452,270,442,230,418,188,403,142" href="javascript:mapShow('armMapList')"  alt="Arm" OnMouseOver="window.status='Arm'; return true" OnMouseOut="window.status=''; return true">
				  <area name="leg" shape="poly" coords="75,219,79,294,82,310,77,350,79,399,74,434,72,445,85,458,94,447,96,413,99,380,105,357,105,337,116,250,103,224,103,223" href="javascript:mapShow('legMapList')"  alt="Leg" OnMouseOver="window.status='Leg'; return true" OnMouseOut="window.status=''; return true">
				  <area name="leg" shape="poly" coords="125,254,132,321,138,336,136,358,141,388,140,420,143,445,165,444,159,416,161,351,160,297,163,265,155,213,134,222" href="javascript:mapShow('legMapList')"  alt="Leg" OnMouseOver="window.status='Leg'; return true" OnMouseOut="window.status=''; return true">
				  <area name="abdomen" shape="poly" coords="82,159,84,180,77,217,91,217,104,224,130,222,133,222,156,212,149,187,152,160" href="javascript:mapShow('abdomenMapList')"  alt="Abdomen" OnMouseOver="window.status='Abdomen'; return true" OnMouseOut="window.status=''; return true">
				  <area name="groin" shape="poly" coords="111,224,134,220,127,252,116,253,105,227" href="javascript:mapShow('groinMapList')"  alt="Groin" OnMouseOver="window.status='Groin'; return true" OnMouseOut="window.status=''; return true">
				  <area name="leg" shape="poly" coords="331,207,324,233,326,264,330,293,333,312,331,334,326,349,332,387,329,426,327,445,342,457,351,443,347,427,352,414,348,403,358,332,368,246,370,241,386,329,387,369,391,411,397,433,403,460,423,443,409,407,415,352,407,319,409,276,410,231,405,207" href="javascript:mapShow('legMapList')"  alt="Leg" OnMouseOver="window.status='Leg'; return true" OnMouseOut="window.status=''; return true">
				</map>


				<map name="ronmap2">
				  <area name="head" shape="poly" coords="264,16,288,41,291,79,285,103,260,117,218,104,182,97,168,87,173,69,179,37,205,11,242,9,268,18" href="javascript:mapShow('headMapList')"  alt="Head" OnMouseOver="window.status='Head'; return true" OnMouseOut="window.status=''; return true">
				  <area name="thorax" shape="poly" coords="186,99,186,120,258,127,254,114,189,97" href="javascript:mapShow('thoraxMapList')"  alt="Thorax" OnMouseOver="window.status='Thorax'; return true" OnMouseOut="window.status=''; return true">
				  <area name="arm" shape="poly" coords="184,114,172,114,110,138,61,134,41,121,22,128,26,153,56,154,110,166,150,154,167,136,186,119" href="javascript:mapShow('armMapList')"  alt="Arm" OnMouseOver="window.status='Arm'; return true" OnMouseOut="window.status=''; return true">
				  <area name="arm" shape="poly" coords="263,122,279,134,317,186,353,205,384,203,401,217,386,234,361,229,356,224,299,207,271,178,267,151,258,125" href="javascript:mapShow('armMapList')"  alt="Arm" OnMouseOver="window.status='Arm'; return true" OnMouseOut="window.status=''; return true">
				  <area name="leg" shape="poly" coords="153,245,143,267,96,315,102,383,101,397,69,413,91,429,112,418,132,414,129,394,135,334,132,327,173,306,154,246" href="javascript:mapShow('legMapList')"  alt="Leg" OnMouseOver="window.status='Leg'; return true" OnMouseOut="window.status=''; return true">
				  <area name="thorax" shape="poly" coords="187,122,150,155,142,203,265,220,271,180,263,141,255,125,186,119" href="javascript:mapShow('thoraxMapList')"  alt="Thorax" OnMouseOver="window.status='Thorax'; return true" OnMouseOut="window.status=''; return true">
				  <area name="abdomen" shape="poly" coords="144,202,263,219,257,242,245,257,205,300,199,280,187,277,178,280,171,286,169,298,154,248,144,217,143,202,143,203" href="javascript:mapShow('abdomenMapList')"  alt="Abdomen" OnMouseOver="window.status='Abdomen'; return true" OnMouseOut="window.status=''; return true">
				  <area name="groin" shape="circle" coords="188,296,16" href="javascript:mapShow('groinMapList')"  alt="Groin" OnMouseOver="window.status='Groin'; return true" OnMouseOut="window.status=''; return true">
				  <area name="leg" shape="poly" coords="247,269,258,305,255,337,255,358,221,413,237,437,229,443,201,430,189,422,198,398,207,365,218,354,211,320,196,301,245,262" href="javascript:mapShow('legMapList')"  alt="Leg" OnMouseOver="window.status='Leg'; return true" OnMouseOut="window.status=''; return true">
				</map>
				
				<!-- CONTENT: END   -->

				
				
								<!-- CONTENT: BEGIN -->

				<div style="width:100%;border:0px solid black">



					<div class=contentHeader>Past Medical History</div>
					<div class=contentTable style="width:95%;height:50px;border:1px solid black">						
						<div style="width:100%;">
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>None</span></input></span>
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>Hypertension</span></input></span>
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>Seizures</input></span>
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>Stroke</input></span>
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>Diabetes</input></span>
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>COPD</input></span>
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>Cardiac</input></span>
													<input class='ckBox' name='ems' type='checkbox'/><span class='ckLabel'>Asthma</input></span>
						</div>

					<br/><span class='ckLabel'>Medications: </span><textarea id=currMeds style="width:100%" rows=3></textarea>

						<div style="width:100%;">
													<input class='ckBox' id='emsAllergicTo' type='checkbox'/><span class='ckLabel'>Allergy to:</span></input></span><input class="mediumInput" onkeyup="toCheck('emsAllergicTo', this.value)" onchange="toCheck('emsAllergicTo', this.value)"/>
													<input class='ckBox' id='emsOther' type='checkbox'/><span class='ckLabel'>Other:</input></span></input></span><input class="wideInput" onkeyup="toCheck('emsOther', this.value)" onchange="toCheck('emsOther', this.value)"/>
						</div>
					</div>

					<div class=contentTable style="width:80%;xheight:140px;border:0px solid black">			
								
						<table border=0 width=100%>
							<tr>
								<td>Vital Signs <span class="hrefButton"><a href="javascript:addVitalRow()">[add]</a><a href="javascript:minusVitalRow()">[drop]</a></span></td>
							</tr>
							<tr>
								<td valign=top style="border:1px solid black">
									<table id="vitalTable" class=colTable width=100%>
									    <colgroup>
									      <col width=5%/>
									      <col width=10%/>
									      <col width=5%/>
									      <col width=7%/>
									      <col width=10%/>
									      <col width=10%/>
									      <col width=3%/>
									    </colgroup>
									    <thead>
										<tr>
											<th>Time</th>									
											<th>Respiration</th>									
											<th>Pulse/BP</th>									
											<th>Level of Conscousness</th>									
											<th>Pupils</th>									
											<th>Skin</th>									
											<th>Status</th>									
										</tr>
										</thead>





										<tbody id="vitalBody">
										<!------>
										<tr>
											<td align=left valign=top>
												<div class="columnList" style="width:6em;border:none">
													<input id=hour1.@ class="tinyInput"/>:<input id=minute1.@ class="tinyInput"/>
													<br/>
													<center><a href="javascript:setVitalTime('@')">[Now]</a></center>
												</div>
											</td>
											
											<td align=left>
												<div id="resp" class="columnList" style="width:7em;border:none">
													<ul>
														<li>Rate:<input class="tinyInput"/></li>
														<li><input class='ckBox' id='a' name='emsResp1.@' type='radio' checked><span class='ckLabel'>Regular</span></input></li>
														<li><input class='ckBox' id='b' name='emsResp1.@' type='radio'><span class='ckLabel'>Shallow</span></input></li>
														<li><input class='ckBox' id='c' name='emsResp1.@' type='radio'><span class='ckLabel'>Labored</span></input></li>
														<li>SP02:<input class="tinyInput"/></li>
													</ul>
												</div>
											</td>
											
											<td align=left>
												<div id="pulse" class="columnList" style="width:9em;border:none">
													<ul>
														<li>Rate:<input class="tinyInput"/></li>
														<li><input class='ckBox' id='a' name='emsResp2.@' type='radio' checked><span class='ckLabel'>Regular</span></input></li>
														<li><input class='ckBox' id='b' name='emsResp2.@' type='radio'><span class='ckLabel'>Irregular</span></input></li>
														<li/>
														<li>BP:<input class="tinyInput" name='emsResp2'/>/<input class="tinyInput"/></li>
													</ul>
												</div>
											</td>
											
											<td align=left>
												<div id="consciousness" class="columnList" style="width:8em;border:none;margin-top:10px">
													<ul>
														<li><input class='ckBox' id='a' name='emsResp3.@' type='radio' checked><span class='ckLabel'>Alert</span></input></li>
														<li><input class='ckBox' id='b' name='emsResp3.@' type='radio'><span class='ckLabel'>Voice</span></input></li>
														<li><input class='ckBox' id='c' name='emsResp3.@' type='radio'><span class='ckLabel'>Pain</span></input></li>
														<li><input class='ckBox' id='d' name='emsResp3.@' type='radio'><span class='ckLabel'>Unresponsive</span></input></li>
													</ul>
												</div>
											</td>
	
											<td align=left>
												<div id="pupils" class="columnList" style="width:10em;border:none">
													<ul style="text-align:center;">
														<li>Right<span class='ckLabel' style="border:0px solid black;width:30px"></span> Left
														<li><input class='ckBox' id='a' name='emsResp4a.@' type='radio' checked ></input>	<span class='ckLabel' style="border:0px solid black;width:70px">Normal</span> 	    	<input class='ckBox' id='a' name='emsResp4b.@' type='radio' checked ></input></li>
														<li><input class='ckBox' id='b' name='emsResp4a.@' type='radio'></input>			<span class='ckLabel' style="border:0px solid black;width:70px">Dilated</span>			<input class='ckBox' id='b' name='emsResp4b.@' type='radio'></input></li>
														<li><input class='ckBox' id='c' name='emsResp4a.@' type='radio'></input>			<span class='ckLabel' style="border:0px solid black;width:70px">Constricted</span>		<input class='ckBox' id='c' name='emsResp4b.@' type='radio' /></li>
														<li><input class='ckBox' id='d' name='emsResp4a.@' type='radio'></input>			<span class='ckLabel' style="border:0px solid black;width:70px">Sluggish</span>			<input class='ckBox' id='d' name='emsResp4b.@' type='radio' /></li>
														<li><input class='ckBox' id='e' name='emsResp4a.@' type='radio'></input>			<span class='ckLabel' style="border:0px solid black;width:70px">No Reaction</span>		<input class='ckBox' id='e' name='emsResp4b.@' type='radio' /></li>
													</ul>
												</div>
											</td>
	
											<td align=left>
												<div id="skin" class="columnList" style="width:12em;border:none">
													<div style="text-align:center"><input class='ckBox' name='emsResp5.@' type='radio' checked></input><span class='ckLabel'>Unremarkable</span></div>
													<ul>
	
														<li>
															<input class='ckBox' id='a' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel' style="border:0px solid black;width:40px">Cool</span>
															<input class='ckBox' id='b' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel'>Pale</span>
														</li>
														<li>
															<input class='ckBox' id='c' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel' style="border:0px solid black;width:40px">Warm</span>
															<input class='ckBox' id='d' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel'>Cyanotic</span>
														</li>
														<li>
															<input class='ckBox' id='e' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel' style="border:0px solid black;width:40px">Moist</span>
															<input class='ckBox' id='f' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel'>Flushed</span>
														</li>
														<li>
															<input class='ckBox' id='g' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel' style="border:0px solid black;width:40px">Dry</span>
															<input class='ckBox' id='h' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel'>Jaund.</span>
														</li>
	
													</ul>
												</div>
											</td>
	
											<td align=left>
												<div id="status" class="columnList" style="width:5em;border:none">
													<ul>
														<li><input class='ckBox' id='a' name='emsResp6.@' type='radio'><span class='ckLabel'>C</span></input></li>
														<li><input class='ckBox' id='b' name='emsResp6.@' type='radio'><span class='ckLabel'>U</span></input></li>
														<li><input class='ckBox' id='c' name='emsResp6.@' type='radio'><span class='ckLabel'>P</span></input></li>
														<li><input class='ckBox' id='d' name='emsResp6.@' type='radio'><span class='ckLabel'>S</span></input></li>
													</ul>
												</div>
											</td>
										</tr>
									</tbody>
									<!------>



	
									</table>
								</td>
							</tr>
						</table>				
					</div>

				</div>




				<!-- CONTENT: END   -->
