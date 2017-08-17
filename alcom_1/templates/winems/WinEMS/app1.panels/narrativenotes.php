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

<hr/>
						<div style="width:100%;">
							<!--<img alt="" usemap="" src="../media/refuse2.gif" width=730/>-->

<input class="languagebutton" type="button" value="English" onclick="javascript:refuselanguage('refuse.english');"/>
<input class="languagebutton" type="button" value="Spanish" onclick="javascript:refuselanguage('refuse.spanish');"/>
<input class="languagebutton" type="button" value="Portugese" onclick="javascript:refuselanguage('refuse.portugese');"/>
<input class="languagebutton" type="button" value="Russian" onclick="javascript:refuselanguage('refuse.russian');"/>
<input class="languagebutton" type="button" value="German" onclick="javascript:refuselanguage('refuse.german');"/>
<input class="languagebutton" type="button" value="Arabic" onclick="javascript:refuselanguage('refuse.arabic');"/>
<input class="languagebutton" type="button" value="Italian" onclick="javascript:refuselanguage('refuse.italian');"/>
<input class="languagebutton" type="button" value="Dutch" onclick="javascript:refuselanguage('refuse.dutch');"/>
							
<h2>
<div id="refusetext">
<div id="refuse.english">
I hereby refuse emergency medical treatment and/or transportation to the nearest emergency medical facility.
I acknowledge that such treatment was advised by the ambulance technician or physician.
I hereby release such persons from liability for respecting my wishes and following my express directions.						
</div>

<div id="refuse.spanish" style="display:none">
Por la presente se niegan tratamiento médico de emergencia y / o transporte a la instalación médica de emergencia más cercana.
Reconozco que ese tratamiento fue aconsejado por el técnico de ambulancia o médico.
Por la presente, la liberación de esas personas de la responsabilidad por el respeto de mis deseos y mis expresar siguientes direcciones.
</div>

<div id="refuse.russian" style="display:none">
Настоящим отказать чрезвычайной медицинской помощи и / или транспортировку до ближайшего аварийного медицинское учреждение.
Я признаю, что такое обращение было сообщено на скорой помощи техник или врач.
Настоящим освободить таких лиц от ответственности за соблюдение моих пожеланий и после моей выразить направлениях.
</div>

<div id="refuse.arabic" dir="rtl" style="display:none">
أقدم هنا رفض العلاج الطبي في حالات الطوارئ و / او النقل الى اقرب مرفق طبي للطوارئ.
اني اعترف ان هذه المعامله ينصح بها الطبيب او فني اسعاف.
أقدم هنا الافراج عن هؤلاء الاشخاص من المسؤولية عن احترام امنياتي والتعبير عن الاتجاهات التالية بلادي.
</div>

<div id="refuse.italian" style="display:none">
Io qui rifiutare il trattamento medico di emergenza e / o il trasporto alla più vicina struttura medica di emergenza.
Riconosco che tale trattamento è stato consigliato dal medico o tecnico ambulanza.
Con la presente versione da tali persone responsabilità per il rispetto e la mia voglia esprimere la mia seguenti direzioni.
</div>

<div id="refuse.portugese" style="display:none">
I decide recusar tratamento médico de urgência e / ou de transporte para o médico de urgência mais próximo facilidade.
Reconheço que tal tratamento foi advertido pela ambulância técnico ou médico.
I decide libertar essas pessoas de responsabilidade por respeitando meus desejos e expressar a minha seguintes direções.
</div>

<div id="refuse.dutch" style="display:none">
Ik weiger dringende medische behandeling en / of vervoer naar de dichtstbijzijnde medische faciliteit.
Ik erken dat een dergelijke behandeling is geadviseerd door de ambulance technicus of arts.
Ik vrijlating van deze personen van de aansprakelijkheid voor het respecteren van mijn wensen en na mijn uitdrukkelijke richtingen.
</div>

<div id="refuse.german" style="display:none">
Ich hiermit verweigern Notfall medizinische Behandlung und / oder den Transport zum nächstgelegenen Notfall medizinische Einrichtung.
Ich anerkenne, dass sich eine solche Behandlung empfohlen wurde von der Ambulanz Techniker oder Arzt.
Ich hiermit die solche Personen von der Haftung für die Einhaltung meine Wünsche und meine ausdrückliche folgenden Richtungen.
</div>
</div>

</h2>
						</div>
						<div style="width:100%">Patient Signature:</div>
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
