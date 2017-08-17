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

										<tbody id="tbody">
										<tr>
											
											<td colspan=2 align=left xstyle="border:none">
												<div id="c1" class="columnList" style="width:100%;border:none">
	
													<div>Scheduled Appointment For:</div>

													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Radiation Tx</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Dialysis Tx</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>MRI Scan</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>CT Scan</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Endoscopy</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Angiography</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Out-Patient / Ambulatory Surgery</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Caridac Catheterization</span>
													<br/>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Lymphatic / Venous Procedures</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Wound Care</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Other:</span><input id=other class="ckInputWide"/>

													<br/>
													<hr/>
													
													<div>Physicians Certification Statement -&nbsp;</span><span style="font-weight:normal; font-style:italic">Required by 42 CFR 410.40 (D) for all Non-Emergent transports.</div>
													<div style="font-weight:normal; font-style:normal">In my professional opinion, this patient's medical condition requires transport by Ambulance and the level of care that implies and other means of transport are contraindicated based on the patient's health and safety.</div>

													<br/>
													<input class='ckBox' type='checkbox'/><span style="font-weight:normal; font-style:normal"><b>&nbsp;Patient Bed Confined</b>&nbspand is Unable to get up or out of bed without assistance <b>AND</b> Unable to ambulate <b>AND</b> Unable to sit in a Wheel chair or chair because:
													<br/>

													<div style="padding-left:15px;font-weight:normal;font-style:normal">Note: The term applies to individuals who are unable to tolerate any activity out of bed.  This term is <b><i>not</i></b> synonymous with "Bed Rest", or "Non-Ambulatory", or "Stretcher Bound".  All three components <b><i>must</i></b> be met in order for the patient to meet the requirements of the definition of "Bed Confined".</div>

													<hr/>

													<table>
														<colgroup>
														  <col width=50%/>
														  <col width=50%/>
														</colgroup>
														<tr>
															<td valign="top" style="border:none">
																	<div style="border:none">Requires an Ambulance because:</div>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Unable to hold self in w/c due to:</span><input id=other class="ckInputMedium"/>
																	<br/>

																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Bilateral AKA</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>AKA and opposite BKA</span>
																	<br/>
																	
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Unable to sit for duration of transport due to:</span><input id=other class="ckInputMedium"/>
																	<br/>

																	<br/>
																	<span><b>Decubitus Ulcer of:</b></span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Sacrum</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Buttocks</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Coccyx</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Hip</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Lower Extremity</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Other:</span><input id=other class="ckInputMedium"/>
																	<br/>
																	
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel' style="font-weight:bold">Overall Wasting, too weak to sit up due to:</span><input id=other class="ckInputMedium"/>
																	<br/>
																	
																	<br/>
																	<span><b>Paralysis:</b></span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Hemi</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Semi</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Quadriplegic</span>
																	<br/>
																	
																	<br/>
																	<span><b>Fracture of:</b></span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Neck</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Spine</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Hip</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Leg</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Knee</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Other Fracture:</span><input id=other class="ckInputMedium"/>
																	<br/>

																	<br/>
																	<span><b>Contractures or Abnormal Stiffness or Rigidity of:</b></span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Upper R/L</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Lower R/L Extremities</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Severe Pain due to:</span><input id=other class="ckInputMedium"/>
																	<br/>
																	
																	<br/>
																	<span><b>Psychiatric Issues:</b></span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Danger to Self</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Danger to Others</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Flight Risk</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Chemical or Physical Restraints</span>
																	
																</td>

															<td valign="top" style="border:none">
																	<div style="border:none">Patient Requires Medical Monitoring:</div>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Airway / Suctioning</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Ventilator Dependent</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Seizure Precautions</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>IV / Rx Infusion</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Cardiac Monitoring</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Unable to self-administer Oxygen needed</span>
																	<br/>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Comatose / LOC</span>
																	<br/>
																	
																	<br/>
																	<div style="border:none">Isolation due to:</div>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>MRSA</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>VRE</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>C-DIFF</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>TB</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Meningitis</span>
																	<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Other:</span><input id=other class="ckInputMedium"/>

																	<br/>
																	<br/>
																	<div style="border:none">Other (Describe what or why):</div>
																	<textarea id=narNotes style="width:100%" rows=4></textarea>

															</td>
														</tr>
													</table>
													
													<hr/>
													
													<div style="border:none"><span style="font-weight:normal">I certify the above information is true and correct based on my evaluation of this patient.  I understand that the information herin shall be used by the Department of Health and Human Services to support the determination of Medical Necessity for Ambulance transportation.  This does not guarantee or assure payment shall be made for services rendered to your patient.</span>

													<div><b>Physician or Designee Name (print):</b><input class='ckInputWide' style='width:25%'/>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>MD</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>PA</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>RN</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>SW</span>
													<input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>DP</span>
													</div>
									
													
													<div style="float:left"><b>Physician or Designee Signature:</b></div>
													<div style="float:right">Date:<input class='date'/></div>

													<br/><br/>
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

													<div><b>Senior Care Emergency Medical Services Inc EMT Name:</b><input class='ckInputWide' style='width:25%'/>
													
												</div>
											</td>
										</tr>
									</table>
									
								</td>
							</tr>
						</table>

					</div>

				</div>
				<!-- CONTENT: END   -->
