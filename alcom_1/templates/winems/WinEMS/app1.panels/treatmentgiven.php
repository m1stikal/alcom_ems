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

					<div class=contentHeader>Treatment Given &nbsp;&nbsp;<a href="javascript:showMeds(1);">[Meds]</a> </div>
					<div class=contentTable style="width:100%;xheight:140px;border:0px solid black">			
								
						<table border=0 width=100%>
<!--
							<tr>
								<td>Treatment</td>
							</tr>
-->
							<tr>
								<td valign=top style="border:0px solid black">
									<table id="vitalTable" class=colTable width=100%>
									    <colgroup>
									      <col width=50%/>
									      <col width=50%/>
									    </colgroup>
<!--
									    <thead>
										<tr>
											<th>C1</th>									
											<th>C2</th>									
										</tr>
										</thead>
-->

										<tbody id="tbody">
										<tr>
											
											<td align=left xstyle="border:none">
												<div id="c1" class="columnList" style="width:100%;border:none">
	
													<span>Advanced Life Support (ALS)</span>

													<ul>

													<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>ET Tube</span></li>
													<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>NG Tube</span></li>
													<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Needle Cricothyroidotomy</span></li>

													<li><input class='ckBox' name='emsALS1' type='checkbox'/><span class='ckLabel'>EndoTracheal Tube (E/T)</span></input></li>

													<li><input class='ckBox' name='emsALS2' type='checkbox'/><span class='ckLabel'>EKG Monitored [Rythm(s):<input name="emsALS2V1" class="ckInputMedium" style="width:160px"/>]</span></li>


													<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Cardioversion No. Times&nbsp;<input id=defibNo class="ckInputTiny"/></span>
															<input class='ckBox ckControl' name='emsDefibType' type='radio'><span class='ckLabel'>Manual</span></input>
															<input class='ckBox ckControl' name='emsDefibType' type='radio'><span class='ckLabel'>Semi-auto.</span></input>
													</li>

													<li><input class='ckBox' name='emsALS3' type='checkbox'><span class='ckLabel'>Medication Administred</span></input></li>
													<li><input class='ckBox' name='emsALS4' type='checkbox'><span class='ckLabel'>IV Established Fluid&nbsp;<input id='emsALS4V1' class="ckInputMedium"/>&nbsp;Cath. Gauge:&nbsp;<input id='emsALS4V2a' class="ckInputTiny"/>:<input id='emsALS4V2b' class="ckInputTiny"/></span></li>

													<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>12 Lead</span></li>

													<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>I.V.&nbsp;&nbsp;<input id=iv class="ckInputMedium"/></span></li>
													<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>I.O.</span></li>
													<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Saline Lock</span></li>

													<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Monitor</span></li>


													<br/><br/><span>Basic Life Support (BLS)</span>

														<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Abdominal/Chest Thrust</span></li>
														<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>HyperExtension</span></li>
														<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Modified Jaw Thrust</span></li>

														<li><input class='ckBox' name='emsBLS1' type='checkbox'/><span class='ckLabel'>Airway Cleared</span></li>
														<li><input class='ckBox' name='emsBLS2' type='checkbox'/><span class='ckLabel'>Oral/Nasal Airway</span></li>
														<li><input class='ckBox' name='emsBLS3' type='checkbox'/><span class='ckLabel'>Esophageal Obturator/Gastric-Tube Airway (EOA/EGTAL)</span></li>
														<li><input class='ckBox' name='emsBLS4' type='checkbox'/><span class='ckLabel'>O2 Admin. @&nbsp;<input name="emsBLS4V1a" class="ckInputTiny"/>:<input name="emsBLS4V1b" class="ckInputTiny"/>&nbsp;L.P.M. Method:<input name="emsBLS4V2" class="ckInputMedium"/></span></li>

														<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Bag Valve Mask w/O2</span></li>
														<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Nasal Cannula</span></li>
														<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Nebulizer</span></li>

													</ul>
												</div>
											</td>
											
											<td align=left xstyle="border:none">
												<div id="c2" class="columnList" style="width:100%;border:none">
													<ul>

														<span>Basic Life Support (BLS)</span>
															
														<li><input class='ckBox' name='emsBLS5' type='checkbox'/><span class='ckLabel'>Suction Used</span></li>

														<li><input class='ckBox' name='emsBLS6' type='checkbox'/><span class='ckLabel'>Artificial Ventilation Method:<input name="emsBLS6V1" class="ckInputMedium" style="width:160px"/></span></li>
														<li><input class='ckBox' name='emsBLS7' type='checkbox'/><span class='ckLabel'>C.P.R. in progress on arrival by:<br/></span>
																<input class='ckBox ckControl' name='emsBLS7A' type='radio'><span class='ckLabel'>Citizen</span></input>
																<input class='ckBox ckControl' name='emsBLS7A' type='radio'><span class='ckLabel'>PD/FD/Other First Responder</span></input>
																<input class='ckBox ckControl' name='emsBLS7A' type='radio'><span class='ckLabel'>Other</span></input>
														</li>
														<li><input class='ckBox' name='emsBLS8' type='checkbox'/>
														<span class='ckLabel'>C.P.R. started @&nbsp;
														<input name="emsBLS8V1a" class="ckInputTiny"/>:<input name="emsBLS8V1b" class="ckInputTiny"/>&nbsp;&nbsp;Time from Arrest til CPR:&nbsp;<input name="emsBLS8V2a" class="ckInputTiny"/>:<input name="emsBLS8V2b" class="ckInputTiny"/>&nbsp;</span></li>

														<li><input class='ckBox' name='emsBLS9' type='checkbox'/><span class='ckLabel'>Defibrillation No. Times&nbsp;<input name="emsBLS9V1" class="ckInputTiny"/></span>
																<input class='ckBox ckControl' name='emsBLS9A' type='radio'><span class='ckLabel'>Manual</span></input>
																<input class='ckBox ckControl' name='emsBLS9A' type='radio'><span class='ckLabel'>Semi-auto.</span></input>
														</li>



														<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Epi-Pen</span></li>
														<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Insta-Glucose</span></li>
														<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Irrigation</span></li>

														<li><input class='ckBox' name='emsBLS10' type='checkbox'/><span class='ckLabel'>Mast Inflated @&nbsp;<input name="emsBLS10V1a" class="ckInputTiny"/>:<input name="emsBLS10V1b" class="ckInputTiny"/></span></li>
														<li><input class='ckBox' name='emsBLS11' type='checkbox'/><span class='ckLabel'>Bleeding/Hemorrhage Controlled (Method:&nbsp;<input name="emsBLS11V1" class="ckInputMedium"/>)</span></li>
														<li><input class='ckBox' name='emsBLS12' type='checkbox'/><span class='ckLabel'>Spinal Immobilization Neck and Back</span></li>
														<li><input class='ckBox' name='emsBLS13' type='checkbox'/><span class='ckLabel'>Limb Immobilized by&nbsp;</span>
																<input class='ckBox ckControl' name='emsBLS13A' type='radio'><span class='ckLabel'>Fixation</span></input>
																<input class='ckBox ckControl' name='emsBLS13A' type='radio'><span class='ckLabel'>Traction</span></input>
														</li>
														
														<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Backboard Immobil.:&nbsp;</span>
																<input class='ckBox ckControl' name='emsImmobType' type='radio'><span class='ckLabel'>Long</span></input>
																<input class='ckBox ckControl' name='emsImmobType' type='radio'><span class='ckLabel'>Short</span></input>
																<input class='ckBox ckControl' name='emsImmobType' type='radio'><span class='ckLabel'>Cervical Collar</span></input>
																<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																<input class='ckBox ckControl' name='emsImmobType' type='radio'><span class='ckLabel'>Head Immobilizer</span></input>
																<input class='ckBox ckControl' name='emsImmobType' type='radio'><span class='ckLabel'>KED</span></input>
																<input class='ckBox ckControl' name='emsImmobType' type='radio'><span class='ckLabel'>Pediatric Immobilizer</span></input>
														</li>

														<li><input class='ckBox' name='emsBLS14' type='checkbox'/><span class='ckLabel'>Heat or Cold Applied</span></li>
														<li><input class='ckBox' name='emsBLS15' type='checkbox'/><span class='ckLabel'>Vomiting Induced @&nbsp;<input name="emsBLS15V1a" class="ckInputTiny"/>:<input name="emsBLS15V1b" class="ckInputTiny"/>&nbsp;Method:&nbsp;<input name="emsBLS15V2" class="ckInputMedium"/></span></li>
														<li><input class='ckBox' name='emsBLS16' type='checkbox'/><span class='ckLabel'>Restraints Applied:&nbsp;<input name="emsBLS16V1" class="ckInputMeduim" style="width:200px"/></span></li>
														<li><input class='ckBox' name='emsBLS17' type='checkbox'/><span class='ckLabel'>Baby Delivered @&nbsp;<input name="emsBLS17V1a" class="ckInputTiny"/>:<input name="emsBLS17V1b" class="ckInputTiny"/>&nbsp;In County:&nbsp;<input name="emsBLS17V2" class="ckInputMedium"/></span><br/>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																<input class='ckBox ckControl' name='emsBLS17A' type='radio'><span class='ckLabel'>Alive</span></input>
																<input class='ckBox ckControl' name='emsBLS17A' type='radio'><span class='ckLabel'>Stillborn</span></input>

																<input class='ckBox ckControl' name='emsBLS17B' type='radio'><span class='ckLabel'>Male</span></input>
																<input class='ckBox ckControl' name='emsBLS17B' type='radio'><span class='ckLabel'>Female</span></input>
														</li>

														<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>AED; #shocks:<input id=shocks class="ckInputTiny"/></span></li>
														<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Bandaging</span></li>


														<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Other:<input id=other class="ckInputWide" style="width:250px"/></span></li>


													</ul>
												</div>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>

					</div>


<div id="MedsList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Medication Info</span> &nbsp;&nbsp&nbsp <span><a href="javascript:showMeds(0)">[close]</a></span></DIV>
<table border="1" cellspacing="0">
<colgroup>
  <col style="display:none"/>
  <col/>
  <col/>
  <col/>
  <col/>
  <col/>
  <col/>
  <col/>
  <col/>
  <col/>
</colgroup>
<tr valign="bottom">
  <th width="22" bgcolor="#B0B0B0"> </th>
  <th width="213" nowrap="nowrap" align="center" bgcolor="#B0B0B0"><b>Medications</b></th>
  <th width="65" nowrap="nowrap" align="center" bgcolor="#B0B0B0"><b>Dosage Options</b></th>
  <th width="55" nowrap="nowrap" align="center" ><b></b></th>
  <th width="58" nowrap="nowrap" align="center" ><b></b></th>
  <th width="55" nowrap="nowrap" align="center" ><b></b></th>
  <th width="31" nowrap="nowrap" align="center" ><b></b></th>
  <th width="37" nowrap="nowrap" align="center" ><b></b></th>
  <th width="21" nowrap="nowrap" align="center" ><b></b></th>
  <th width="147" nowrap="nowrap" align="center" bgcolor="#B0B0B0"><b>IV Fluids</b></th></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>2</b></th>
  <td nowrap="nowrap">Narcan (Naloxone)</td>
  <td nowrap="nowrap" bgcolor="#969696">2mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">Normal Saline (NS 0.9%)</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>3</b></th>
  <td nowrap="nowrap">Valium (Diazepam)</td>
  <td nowrap="nowrap" bgcolor="#969696">5mg</td>
  <td nowrap="nowrap" bgcolor="#969696">6mg</td>
  <td nowrap="nowrap" bgcolor="#969696">7mg</td>
  <td nowrap="nowrap" bgcolor="#969696">8mg</td>
  <td nowrap="nowrap" bgcolor="#969696">9mg</td>
  <td nowrap="nowrap" bgcolor="#969696">10mg</td>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">D5W</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>4</b></th>
  <td nowrap="nowrap">Versed (Midazolam)</td>
  <td nowrap="nowrap" bgcolor="#969696">1mg</td>
  <td nowrap="nowrap" bgcolor="#969696">2mg</td>
  <td nowrap="nowrap" bgcolor="#969696">10mgIM</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">Ringers Lactate</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>5</b></th>
  <td nowrap="nowrap">Etomidate</td>
  <td nowrap="nowrap" bgcolor="#969696">.3mg/kg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>6 </b></th>
  <td nowrap="nowrap">Vasopressin</td>
  <td nowrap="nowrap" bgcolor="#969696">40 
  U</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0"><b>IV catheter guage</b></td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>7</b></th>
  <td nowrap="nowrap">Epi 1:1000</td>
  <td nowrap="nowrap" bgcolor="#969696">0.3mg</td>
  <td nowrap="nowrap" bgcolor="#969696">2mg 
  (ET)</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">8g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>8</b></th>
  <td nowrap="nowrap">Epi 1:10,000</td>
  <td nowrap="nowrap" bgcolor="#969696">1mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">10g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>9</b></th>
  <td nowrap="nowrap">Epi Drip</td>
  <td nowrap="nowrap" bgcolor="#969696">1ug/min</td>
  <td nowrap="nowrap" bgcolor="#969696">2ug/min</td>
  <td nowrap="nowrap" bgcolor="#969696">3ug/min</td>
  <td nowrap="nowrap" bgcolor="#969696">4ug/min</td>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">14g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>10</b></th>
  <td nowrap="nowrap">Amiodarone</td>
  <td nowrap="nowrap" bgcolor="#969696">300mg</td>
  <td nowrap="nowrap" bgcolor="#969696">150mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">16g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>11</b></th>
  <td nowrap="nowrap">Sodium Bicarb</td>
  <td nowrap="nowrap" bgcolor="#969696">44meq</td>
  <td nowrap="nowrap" bgcolor="#969696">88meq</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0"18g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>12</b></th>
  <td nowrap="nowrap">Magnisium Sulfate</td>
  <td nowrap="nowrap" bgcolor="#969696">2gm</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">20g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>13</b></th>
  <td nowrap="nowrap">Calcium Chloride (CaCl2)</td>
  <td nowrap="nowrap" bgcolor="#969696">1gm</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">22g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>14</b></th>
  <td nowrap="nowrap">Atropine Sulfate</td>
  <td nowrap="nowrap" bgcolor="#969696">0.5mg</td>
  <td nowrap="nowrap" bgcolor="#969696">1mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">24g</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>15</b></th>
  <td nowrap="nowrap">NTG (nitroglycerin) 
  Tablets</td>
  <td nowrap="nowrap" bgcolor="#969696">1/150gr.</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>16 </b></th>
  <td nowrap="nowrap">NTG (nitroglycerin) 
  Spray</td>
  <td nowrap="nowrap" bgcolor="#969696">0.4mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0"><b>Positions</b></td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>17</b></th>
  <td nowrap="nowrap">Lidocaine</td>
  <td nowrap="nowrap" bgcolor="#969696">1.5mg/kg</td>
  <td nowrap="nowrap" bgcolor="#969696">75mg/kg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">Standing</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>18</b></th>
  <td nowrap="nowrap">Lidocaine Drip</td>
  <td nowrap="nowrap" bgcolor="#969696">1mg/min</td>
  <td nowrap="nowrap" bgcolor="#969696">2mg/min</td>
  <td nowrap="nowrap" bgcolor="#969696">3mg/min</td>
  <td nowrap="nowrap" bgcolor="#969696">4mg/min</td>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">Sitting</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>19</b></th>
  <td nowrap="nowrap">Dopamine</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">Supine</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>20</b></th>
  <td nowrap="nowrap">Adenosine</td>
  <td nowrap="nowrap" bgcolor="#969696">6mg</td>
  <td nowrap="nowrap" bgcolor="#969696">12mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">Prone</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>21</b></th>
  <td nowrap="nowrap">Cardizem (Diltiazem)</td>
  <td nowrap="nowrap" bgcolor="#969696">0.25mg/kg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td nowrap="nowrap" bgcolor="#B0B0B0">Left Latarel Recumbant</td></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>22</b></th>
  <td nowrap="nowrap">Lasix (Furosemide)</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>23 </b></th>
  <td nowrap="nowrap">Morphine Sulfate</td>
  <td nowrap="nowrap" bgcolor="#969696">2mg</td>
  <td nowrap="nowrap" bgcolor="#969696">3mg</td>
  <td nowrap="nowrap" bgcolor="#969696">4mg</td>
  <td nowrap="nowrap" bgcolor="#969696">5mg</td>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>24 </b></th>
  <td nowrap="nowrap">Albuterol Sulfate</td>
  <td nowrap="nowrap" bgcolor="#969696">00.08%</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>25 </b></th>
  <td nowrap="nowrap">Metaproterenol</td>
  <td nowrap="nowrap" bgcolor="#969696">05%</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>26 </b></th>
  <td nowrap="nowrap">Solumedrol (Methylprednisolone)</td>
  <td nowrap="nowrap" bgcolor="#969696">125mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>27 </b></th>
  <td nowrap="nowrap">Decadron (Dexamethazone)</td>
  <td nowrap="nowrap" bgcolor="#969696">12mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>28 </b></th>
  <td nowrap="nowrap">Benadryl (Diphenhydramine)</td>
  <td nowrap="nowrap" bgcolor="#969696">50mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>29 </b></th>
  <td nowrap="nowrap">Dextrose</td>
  <td nowrap="nowrap" bgcolor="#969696">25gm</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>30 </b></th>
  <td nowrap="nowrap">Thiamine</td>
  <td nowrap="nowrap" bgcolor="#969696">100mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>31 </b></th>
  <td nowrap="nowrap">Ativan (Lorazepam)</td>
  <td nowrap="nowrap" bgcolor="#969696">2mg</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0" height="12"><b>32 </b></th>
  <td nowrap="nowrap">Tetracaine (Proparacaine 
  Hcl) 0.5%</td>
  <td nowrap="nowrap" bgcolor="#969696">1gtt</td>
  <td nowrap="nowrap" bgcolor="#969696">2gtt</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
<tr valign="bottom"><th nowrap="nowrap" align="center" bgcolor="#B0B0B0"><b>33 </b></th>
  <td nowrap="nowrap">Oxytocin (Pitocin)</td>
  <td nowrap="nowrap" bgcolor="#969696">20U</td>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/>
  <td/></tr>
</table>
</div>



<div id="MedsList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Medication Info</span> &nbsp;&nbsp&nbsp <span><a href="javascript:showMeds(0)">[close]</a></span></DIV>
</div>


<div id="MedsList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Medication Info</span> &nbsp;&nbsp&nbsp <span><a href="javascript:showMeds(0)">[close]</a></span></DIV>
</div>



<div id="MedsList" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; display:none;">
<DIV><span class='listTitle'>Medication Info</span> &nbsp;&nbsp&nbsp <span><a href="javascript:showMeds(0)">[close]</a></span></DIV>
</div>



				</div>
				<!-- CONTENT: END   -->
