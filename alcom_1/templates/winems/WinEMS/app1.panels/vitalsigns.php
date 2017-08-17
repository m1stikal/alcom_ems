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

				<table border=0 width=100%>
					<tr>
						<td>Chief Complaint - Medical:</td>
					</tr>
					<tr>
						<td><textarea id=chiefComplaintMedical style="width:95%" rows=5></textarea></td>
					</tr>
				</table>


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

				<div style="width:100%;clear:left">
				<table border=1>
				<tr><td><input class='ckBox' name='emsIsALS' id='emsIsALS' type='radio' value=1><span class='ckLabel' style="FONT-SIZE: 100%">ALS Diagnosis:</span></td></tr>
				<tr><td>
				<select name="alsList1" onchange="setALS()">
					<option>&lt;Select&gt;</option>
					<optgroup label="Head">
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
					</optgroup>
					<optgroup label="Neck">
					<option value="CHR AIRWAY OBSTRUCT NEC">CHR AIRWAY OBSTRUCT NEC</option>
					<option value="SYMP INVOL HEAD/NECK NEC">SYMP INVOL HEAD/NECK NEC</option>
					</optgroup>
					<optgroup label="Thorax">
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
					</optgroup>
					<optgroup label="Abdomen">
					<option value="ABDMNAL PAIN UNSPCF SITE">ABDMNAL PAIN UNSPCF SITE</option>
					<option value="GASTRITIS/DUODENITIS NOS*">GASTRITIS/DUODENITIS NOS*</option>
					<option value="NAUSEA WITH VOMITING">NAUSEA WITH VOMITING</option>
					<option value="NORMAL DELIVERY">NORMAL DELIVERY</option>
					</optgroup>
					<optgroup label="Upper Extremeties">
					<option value="AMPUTAT">AMPUTAT</option>
					<option value="AMPUTATION FINGER">AMPUTATION FINGER</option>
					<option value="OPEN WOUND OF SHOULDER">OPEN WOUND OF SHOULDER</option>
					</optgroup>
					<optgroup label="Lower Extremeties">
					<option value="AMPUTAT LEG UNILAT NOS">AMPUTAT LEG UNILAT NOS</option>
					<option value="AMPUTATION TOE">AMPUTATION TOE</option>
					</optgroup>
					<optgroup label="Skin">
					<option value="HYPERHIDROSIS">HYPERHIDROSIS</option>
					</optgroup>
					<optgroup label="General">
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
				</td>
				<td>
				<select name="alsList2" onchange="setALS()">
					<option>&lt;Select&gt;</option>
					<optgroup label="Head" class="inputLabel">
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
					</optgroup>
					<optgroup label="Neck">
					<option value="CHR AIRWAY OBSTRUCT NEC">CHR AIRWAY OBSTRUCT NEC</option>
					<option value="SYMP INVOL HEAD/NECK NEC">SYMP INVOL HEAD/NECK NEC</option>
					</optgroup>
					<optgroup label="Thorax">
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
					</optgroup>
					<optgroup label="Abdomen">
					<option value="ABDMNAL PAIN UNSPCF SITE">ABDMNAL PAIN UNSPCF SITE</option>
					<option value="GASTRITIS/DUODENITIS NOS*">GASTRITIS/DUODENITIS NOS*</option>
					<option value="NAUSEA WITH VOMITING">NAUSEA WITH VOMITING</option>
					<option value="NORMAL DELIVERY">NORMAL DELIVERY</option>
					</optgroup>
					<optgroup label="Upper Extremeties">
					<option value="AMPUTAT">AMPUTAT</option>
					<option value="AMPUTATION FINGER">AMPUTATION FINGER</option>
					<option value="OPEN WOUND OF SHOULDER">OPEN WOUND OF SHOULDER</option>
					</optgroup>
					<optgroup label="Lower Extremeties">
					<option value="AMPUTAT LEG UNILAT NOS">AMPUTAT LEG UNILAT NOS</option>
					<option value="AMPUTATION TOE">AMPUTATION TOE</option>
					</optgroup>
					<optgroup label="Skin">
					<option value="HYPERHIDROSIS">HYPERHIDROSIS</option>
					</optgroup>
					<optgroup label="General">
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
				</td>
				<td>
				<select name="alsList3" onchange="setALS()">
					<option>&lt;Select&gt;</option>
					<optgroup label="Head" class="inputLabel">
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
					</optgroup>
					<optgroup label="Neck">
					<option value="CHR AIRWAY OBSTRUCT NEC">CHR AIRWAY OBSTRUCT NEC</option>
					<option value="SYMP INVOL HEAD/NECK NEC">SYMP INVOL HEAD/NECK NEC</option>
					</optgroup>
					<optgroup label="Thorax">
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
					</optgroup>
					<optgroup label="Abdomen">
					<option value="ABDMNAL PAIN UNSPCF SITE">ABDMNAL PAIN UNSPCF SITE</option>
					<option value="GASTRITIS/DUODENITIS NOS*">GASTRITIS/DUODENITIS NOS*</option>
					<option value="NAUSEA WITH VOMITING">NAUSEA WITH VOMITING</option>
					<option value="NORMAL DELIVERY">NORMAL DELIVERY</option>
					</optgroup>
					<optgroup label="Upper Extremeties">
					<option value="AMPUTAT">AMPUTAT</option>
					<option value="AMPUTATION FINGER">AMPUTATION FINGER</option>
					<option value="OPEN WOUND OF SHOULDER">OPEN WOUND OF SHOULDER</option>
					</optgroup>
					<optgroup label="Lower Extremeties">
					<option value="AMPUTAT LEG UNILAT NOS">AMPUTAT LEG UNILAT NOS</option>
					<option value="AMPUTATION TOE">AMPUTATION TOE</option>
					</optgroup>
					<optgroup label="Skin">
					<option value="HYPERHIDROSIS">HYPERHIDROSIS</option>
					</optgroup>
					<optgroup label="General">
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
					</td></tr>
				</table>
				</div>





				<div style="width:100%;clear:left">
				<table border=1>
				<tr><td><input class='ckBox' name='emsIsALS' id='emsIsALS' type='radio' value=0><span class='ckLabel' style="FONT-SIZE: 100%">BLS Diagnosis:</td></tr>
				<tr><td>
				<select name="blsList1" onchange="setALS()">
					<option>&lt;Select&gt;</option>
					<optgroup label="Head">
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
					</optgroup>
					<optgroup label="Neck">
					<option value="CHR AIRWAY OBSTRUCT NEC">CHR AIRWAY OBSTRUCT NEC</option>
					<option value="SYMP INVOL HEAD/NECK NEC">SYMP INVOL HEAD/NECK NEC</option>
					</optgroup>
					<optgroup label="Thorax">
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
					</optgroup>
					<optgroup label="Abdomen">
					<option value="ABDMNAL PAIN UNSPCF SITE">ABDMNAL PAIN UNSPCF SITE</option>
					<option value="GASTRITIS/DUODENITIS NOS*">GASTRITIS/DUODENITIS NOS*</option>
					<option value="NAUSEA WITH VOMITING">NAUSEA WITH VOMITING</option>
					<option value="NORMAL DELIVERY">NORMAL DELIVERY</option>
					</optgroup>
					<optgroup label="Upper Extremeties">
					<option value="AMPUTAT">AMPUTAT</option>
					<option value="AMPUTATION FINGER">AMPUTATION FINGER</option>
					<option value="OPEN WOUND OF SHOULDER">OPEN WOUND OF SHOULDER</option>
					</optgroup>
					<optgroup label="Lower Extremeties">
					<option value="AMPUTAT LEG UNILAT NOS">AMPUTAT LEG UNILAT NOS</option>
					<option value="AMPUTATION TOE">AMPUTATION TOE</option>
					</optgroup>
					<optgroup label="Skin">
					<option value="HYPERHIDROSIS">HYPERHIDROSIS</option>
					</optgroup>
					<optgroup label="General">
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
				</td>
				<td>
				<select name="blsList2" onchange="setALS()">
					<option>&lt;Select&gt;</option>
					<optgroup label="Head" class="inputLabel">
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
					</optgroup>
					<optgroup label="Neck">
					<option value="CHR AIRWAY OBSTRUCT NEC">CHR AIRWAY OBSTRUCT NEC</option>
					<option value="SYMP INVOL HEAD/NECK NEC">SYMP INVOL HEAD/NECK NEC</option>
					</optgroup>
					<optgroup label="Thorax">
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
					</optgroup>
					<optgroup label="Abdomen">
					<option value="ABDMNAL PAIN UNSPCF SITE">ABDMNAL PAIN UNSPCF SITE</option>
					<option value="GASTRITIS/DUODENITIS NOS*">GASTRITIS/DUODENITIS NOS*</option>
					<option value="NAUSEA WITH VOMITING">NAUSEA WITH VOMITING</option>
					<option value="NORMAL DELIVERY">NORMAL DELIVERY</option>
					</optgroup>
					<optgroup label="Upper Extremeties">
					<option value="AMPUTAT">AMPUTAT</option>
					<option value="AMPUTATION FINGER">AMPUTATION FINGER</option>
					<option value="OPEN WOUND OF SHOULDER">OPEN WOUND OF SHOULDER</option>
					</optgroup>
					<optgroup label="Lower Extremeties">
					<option value="AMPUTAT LEG UNILAT NOS">AMPUTAT LEG UNILAT NOS</option>
					<option value="AMPUTATION TOE">AMPUTATION TOE</option>
					</optgroup>
					<optgroup label="Skin">
					<option value="HYPERHIDROSIS">HYPERHIDROSIS</option>
					</optgroup>
					<optgroup label="General">
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
				</td>
				<td>
				<select name="blsList3" onchange="setALS()">
					<option>&lt;Select&gt;</option>
					<optgroup label="Head" class="inputLabel">
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
					</optgroup>
					<optgroup label="Neck">
					<option value="CHR AIRWAY OBSTRUCT NEC">CHR AIRWAY OBSTRUCT NEC</option>
					<option value="SYMP INVOL HEAD/NECK NEC">SYMP INVOL HEAD/NECK NEC</option>
					</optgroup>
					<optgroup label="Thorax">
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
					</optgroup>
					<optgroup label="Abdomen">
					<option value="ABDMNAL PAIN UNSPCF SITE">ABDMNAL PAIN UNSPCF SITE</option>
					<option value="GASTRITIS/DUODENITIS NOS*">GASTRITIS/DUODENITIS NOS*</option>
					<option value="NAUSEA WITH VOMITING">NAUSEA WITH VOMITING</option>
					<option value="NORMAL DELIVERY">NORMAL DELIVERY</option>
					</optgroup>
					<optgroup label="Upper Extremeties">
					<option value="AMPUTAT">AMPUTAT</option>
					<option value="AMPUTATION FINGER">AMPUTATION FINGER</option>
					<option value="OPEN WOUND OF SHOULDER">OPEN WOUND OF SHOULDER</option>
					</optgroup>
					<optgroup label="Lower Extremeties">
					<option value="AMPUTAT LEG UNILAT NOS">AMPUTAT LEG UNILAT NOS</option>
					<option value="AMPUTATION TOE">AMPUTATION TOE</option>
					</optgroup>
					<optgroup label="Skin">
					<option value="HYPERHIDROSIS">HYPERHIDROSIS</option>
					</optgroup>
					<optgroup label="General">
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
					</td></tr>
				</table>
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
													<input id=hour1 class="tinyInput"/>:<input id=minute1 class="tinyInput"/>
												</div>
											</td>
											
											<td align=left>
												<div id="resp" class="columnList" style="width:7em;border:none">
													<ul>
														<li>Rate:<input class="tinyInput"/></li>
														<li><input class='ckBox' name='emsResp1.XXX' type='radio' checked><span class='ckLabel'>Regular</span></input></li>
														<li><input class='ckBox' name='emsResp1.XXX' type='radio'><span class='ckLabel'>Shallow</span></input></li>
														<li><input class='ckBox' name='emsResp1.XXX' type='radio'><span class='ckLabel'>Labored</span></input></li>
														<li>SP02:<input class="tinyInput"/></li>
													</ul>
												</div>
											</td>
											
											<td align=left>
												<div id="pulse" class="columnList" style="width:9em;border:none">
													<ul>
														<li>Rate:<input class="tinyInput"/></li>
														<li><input class='ckBox' name='emsResp2.@' type='radio' checked><span class='ckLabel'>Regular</span></input></li>
														<li><input class='ckBox' name='emsResp2.@' type='radio'><span class='ckLabel'>Irregular</span></input></li>
														<li/>
														<li>BP:<input class="tinyInput" name='emsResp2'/>/<input class="tinyInput"/></li>
													</ul>
												</div>
											</td>
											
											<td align=left>
												<div id="consciousness" class="columnList" style="width:8em;border:none;margin-top:10px">
													<ul>
														<li><input class='ckBox' name='emsResp3.@' type='radio' checked><span class='ckLabel'>Alert</span></input></li>
														<li><input class='ckBox' name='emsResp3.@' type='radio'><span class='ckLabel'>Voice</span></input></li>
														<li><input class='ckBox' name='emsResp3.@' type='radio'><span class='ckLabel'>Pain</span></input></li>
														<li><input class='ckBox' name='emsResp3.@' type='radio'><span class='ckLabel'>Unresponsive</span></input></li>
													</ul>
												</div>
											</td>
	
											<td align=left>
												<div id="pupils" class="columnList" style="width:10em;border:none">
													<ul style="text-align:center;">
														<li>Right<span class='ckLabel' style="border:0px solid black;width:30px"></span> Left
														<li><input class='ckBox' name='emsResp4a.@' type='radio' checked ></input>	<span class='ckLabel' style="border:0px solid black;width:70px">Normal</span> 	    	<input class='ckBox' name='emsResp4b' type='radio' checked ></input></li>
														<li><input class='ckBox' name='emsResp4a.@' type='radio'></input>			<span class='ckLabel' style="border:0px solid black;width:70px">Dilated</span>			<input class='ckBox' name='emsResp4b' type='radio'></input></li>
														<li><input class='ckBox' name='emsResp4a.@' type='radio'></input>			<span class='ckLabel' style="border:0px solid black;width:70px">Constricted</span>		<input class='ckBox' name='emsResp4b' type='radio' /></li>
														<li><input class='ckBox' name='emsResp4a.@' type='radio'></input>			<span class='ckLabel' style="border:0px solid black;width:70px">Sluggish</span>			<input class='ckBox' name='emsResp4b' type='radio' /></li>
														<li><input class='ckBox' name='emsResp4a.@' type='radio'></input>			<span class='ckLabel' style="border:0px solid black;width:70px">No Reaction</span>		<input class='ckBox' name='emsResp4b' type='radio' /></li>
													</ul>
												</div>
											</td>
	
											<td align=left>
												<div id="skin" class="columnList" style="width:12em;border:none">
													<div style="text-align:center"><input class='ckBox' name='emsResp5' type='radio' checked></input><span class='ckLabel'>Unremarkable</span></div>
													<ul>
	
														<li>
															<input class='ckBox' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel' style="border:0px solid black;width:40px">Cool</span>
															<input class='ckBox' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel'>Pale</span>
														</li>
														<li>
															<input class='ckBox' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel' style="border:0px solid black;width:40px">Warm</span>
															<input class='ckBox' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel'>Cyanotic</span>
														</li>
														<li>
															<input class='ckBox' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel' style="border:0px solid black;width:40px">Moist</span>
															<input class='ckBox' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel'>Flushed</span>
														</li>
														<li>
															<input class='ckBox' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel' style="border:0px solid black;width:40px">Dry</span>
															<input class='ckBox' name='emsResp5.@' type='radio'></input>
															<span class='ckLabel'>Jaund.</span>
														</li>
	
													</ul>
												</div>
											</td>
	
											<td align=left>
												<div id="status" class="columnList" style="width:5em;border:none">
													<ul>
														<li><input class='ckBox' name='emsResp6.@' type='radio'><span class='ckLabel'>C</span></input></li>
														<li><input class='ckBox' name='emsResp6.@' type='radio'><span class='ckLabel'>U</span></input></li>
														<li><input class='ckBox' name='emsResp6.@' type='radio'><span class='ckLabel'>P</span></input></li>
														<li><input class='ckBox' name='emsResp6.@' type='radio'><span class='ckLabel'>S</span></input></li>
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
