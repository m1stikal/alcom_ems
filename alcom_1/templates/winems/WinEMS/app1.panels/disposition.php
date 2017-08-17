				<!-- CONTENT: BEGIN -->
				<div style="width:100%;border:0px solid black">

<div style="margin-top:10px"></div>

					<input type=checkbox class=ckBox name='emsTransportedALS'><span class=contentHeader>Transported as ALS</span></input><br/>
					
					<div class=contentHeader>Disposition Code:&nbsp;<input id=dispCode></input><br/>
									<span class='inputLabel'>Destination (Hospital/Non-Hospital)</span>
									<select rows="20" name='emsDestination' id='emsDestination' onchange="setDisposition(this.name)">
										<option>&lt;Select&gt;</option>
										<OPTGROUP LABEL="Hospitals">										
											<option value="926 (93)">Beth Israel Medical Center - Kings Highway Division</option>
											<option value="902 (41)">Brookdale Hospital Medical Center</option>
											<option value="923 (91)">Brooklyn Hopsital Caledonian Division</option>
											<option value="929 (95)">Brooklyn Hospital Center - Downtown</option>
											<option value="921 (42)">Coney Island Hospital</option>
											<option value="431">Good Samaritan of Suffern</option>
											<option value="437">Helen Hayes Hospital</option>
											<option value="916 (55)">Interfaith Medical Center - St. Johns</option>
											<option value="910 (46)">Interfaith Medical Center Jewish Hosp. Medical Center of Brooklyn</option>
											<option value="672 (48)">Kings County Hospital Center</option>
											<option value="934 (49)">Long Island College Hospital</option>
											<option value="913 (51)">Lutheran Medical Center</option>
											<option value="914 (53)">Maimonides Medical Center</option>
											<option value="905 (92)">New York Community Hospital of Brooklyn</option>
											<option value="915 (54)">New York Methodist Hospital</option>
											<option value="436">Nyack Hospital</option>
											<option value="917 (56)">St. Mary's Hospital of Brooklyn</option>
											<option value="438">Summit Park Hosp. - Rockland County Infirmary</option>
											<option value="671 (44)">University Hospial of Brooklyn</option>
											<option value="925 (90)">Veteran's Administration Hospital</option>
											<option value="920 (94)">Victory Memorial Hospital</option>
											<option value="903 (45)">Woodhull Medical and Mental Health Center</option>
											<option value="935 (58)">Wyckoff Heights Hospital</option>
										<OPTGROUP/">										
										<OPTGROUP LABEL="Non-Hospital Disposition">
											<option value="001">Nursing Home</option>
											<option value="002">Other Medical Facility</option>
											<option value="003">Residence</option>
											<option value="004">Treated by this unit and transported by another unit</option>
											<option value="005">Refused Medical Aid and/or Transport</option>
											<option value="006">Call Cancelled</option>
											<option value="007">Stand By Only</option>
											<option value="008">No Patient Found</option>
										<OPTGROUP/>
									</select>
					</div>  

					<div stylex="float:left;width:45%;height:70px">

						<div class="contentHeader" style="width:100%;border:0px solid black">
						 	<span class="inputLabel" style="width:10em">Proximity:&nbsp;&nbsp;</span>
							<input class='ckBox' name='emsProximity' type='radio'><span class='ckLabel'>In Area</span></input>
							<input class='ckBox' name='emsProximity' type='radio'><span class='ckLabel'>Out Of Area</span></input>
						</div>				

						<div class="contentHeader" style="width:100%; xborder:1px solid black;">
						 	<span class="inputLabel" style="width:8em;margin-bottom:4px" >Purpose:&nbsp;</span>
								<select name='emsTransportPurpose' style="xwidth:12em%">
									<option>&lt;Select&gt;</option>
									<option>Transferred to rehabilitation facility</option>
									<option>Transport for benefit of physician</option>
									<option>Transported for care of specialist</option>
									<option>Transported for nearness of family members</option>
									<option>Transported to nearest facility</option>
								</select>
							</span>
						</div>

						<div class="contentHeader" style="width:100%; xborder:1px solid black;">
						 	<span class="inputLabel" style="width:8em;margin-bottom:4px" >Ambulance Requested By:&nbsp;</span>
								<select name='' style="xwidth:12em%">
									<option>&lt;Select&gt;</option>
									<option>Patient</option>
									<option>Friend</option>
									<option>Family</option>
									<option>Hospital/Clinic/SNF</option>
									<option>Physician</option>
									<option>Police</option>
									<option>Renal Dialysis</option>
									<option>Witness</option>
								</select>
							</span>
						</div>
						
					</div>

					<div class=contentTable style="width:100%;height:110px;border:1px solid black">						
						<div id="c1" class="columnList" style="width:15%;xheight:100px;border:none">
							<ul>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>DOA</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Obvious Death</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Cancelled</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Helicopter</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>RMA/AMA</span></li>
							</ul>
						</div>					
						<div id="c1" class="columnList" style="width:40%;xheight:100px;border:none">
							<ul>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>DNR</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Unfounded</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>MIA</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Transported by:<input id=transportBy class="ckInputMedium"/></span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Other:<input id=other class="ckInputWide"/></span></li>
							</ul>
						</div>					

						<div id="c1" class="columnList" style="width:45%;xheight:100px;border:none">
							<ul>
								<li><span class='ckLabel' style="width:12em"><b>Type of Transport:</b></span>
										<select name='' style="xwidth:12em%">
											<option>&lt;Select&gt;</option>
											<option>Initial</option>
											<option>Return</option>
											<option>Family</option>
											<option>Transfer</option>
											<option>Round Trip</option>
										</select>
								</li>
								<li><span class='ckLabel' style="width:12em">Weight of Patient:</span><input id=other class="ckInputMedium"/></li>
								<li><span class='ckLabel' style="width:12em">Purpose of Round Trip:</span><input id=other class="ckInputWide" style="width:70%"/></li>
								<li><span class='ckLabel' style="width:12em">Reason for Stretcher:</span><input id=other class="ckInputWide"  style="width:70%"/></li>
							</ul>
						</div>					

					</div>


					<div class=contentHeader>Transportation</div>
					
					<div class=contentTable style="width:100%;height:160px;border:1px solid black">						
						<div id="c1" class="columnList" style="width:30%;height:100px;border:none">
							<ul>
								<li><input class='ckBox' name='emsTRANS1' type='checkbox'/><span class='ckLabel'>Moved to ambulance on stretcher/backboard</span></li>
								<li><input class='ckBox' name='emsTRANS2' type='checkbox'/><span class='ckLabel'>Moved to ambulance on stair chair</span></li>
								<li><input class='ckBox' name='emsTRANS3' type='checkbox'/><span class='ckLabel'>Moved to ambulance on scoop</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Carried to ambulance</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Walked to ambulance</span></li>
								<li><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Met at ambulance</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Restrained during transportation</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>In shock during transportation</span></li>
								<li/>
							</ul>
						</div>					
						<div id="c1" class="columnList" style="width:35%;height:100px;border:none">
							<ul>
								<li><input class='ckBox' name='emsTRANS4' type='checkbox'/><span class='ckLabel'>Transported in Trendelenburg position</span></li>
								<li><input class='ckBox' name='emsTRANS5' type='checkbox'/><span class='ckLabel'>Transported in left lateral recumbent position</span></li>
								<li><input class='ckBox' name='emsTRANS6' type='checkbox'/><span class='ckLabel'>Transported with head elevated</span></li>								
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Transported in position of comfort </span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Transported in prone position</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Transported in sitting position</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Transported in supine position</span></li>
								<li><input class='ckBox' name='emsTRANS7' type='checkbox'/><span class='ckLabel'>Other:&nbsp;<input name="emsTRANS7V1" class="ckInputMedium"/></span></li>
							</ul>
						</div>	

						<div id="c1" class="columnList" style="width:35%;height:100px;border:none">
							<ul>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient bed confined before transport</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient bed confined after transport</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient moved by stretcher</span></li>								
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient unconscious or in shock </span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient required physical restraints</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient visibly hemorrhaging</span></li>
								<li><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Transport was medically necessary</span></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>

						
						<div id="c1" class="columnList" style="width:35%;height:100px;border:none">
							<ul>
								<li><span class='ckLabel' style="font-weight:bold">Facility Transport:</span></li>
									<li style="padding-left:20px"><input class='ckBox' name='emsT1' type='checkbox' /><span class='ckLabel'>Nearest Facility</span></li>
									<li style="padding-left:20px"><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>For the benefit of the preferred provider</span></li>
									<li style="padding-left:20px"><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>For the nearness of family</span></li>
									<li style="padding-left:20px"><input class='ckBox' name='emsT1' type='checkbox'/><span class='ckLabel'>Equipment or specialist not available at 1<sup>st</sup> facility</span></li>
							</ul>
						</div>
						
						<div id="c1" class="columnList" style="width:35%;height:100px;border:none">
							<ul>
								<li><span class='ckLabel' style="font-weight:bold">Hospital to Hospital transports:</span></li>
									<li style="padding-left:20px"><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient was discharged from 1<sup>st</sup> hospital</span></li>
									<li style="padding-left:20px"><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Patient admitted to facility</span></li>
									<li style="padding-left:20px"><input class='ckBox' name='emsT2' type='checkbox'/><span class='ckLabel'>Transported to nearest facility</span></li>
							</ul>
						</div>	
										
					</div>
					
					<div class=contentHeader>Names of Crew</div>
					<div class=contentTable style="width:100%;height:100px;border:0px solid black">						

						<table border=0 width=100% style="border:1px solid black">
							<tr>
								<td valign=top style="border:0px solid black">
									<table id="vitalTable" class=colTable width=100%>
									    <colgroup>
									      <col width=25%/>
									      <col width=25%/>
									      <col width=25%/>
									      <col width=25%/>
									    </colgroup>

									    <thead>
											<tr>
												<th>In Charge:&nbsp;<input id=inCharge style="width:60%"></th>									
												<th>Driver:&nbsp;<input id=driver></th>									
												<th>Other:&nbsp;<input id=crew1></th>									
												<th>Other:&nbsp;<input id=crew2></th>									
											</tr>
										</thead>
										
										<tbody id="tbody">
										<tr>
											<td align=left style="border:0px">
												<div style="width:100%;border:0px solid black">
													<div id="c1" class="columnList" style="width:5em;border:none">
														<ul>
															<li><input class='ckBox ckControl' name='emsInCharge' type='radio'><span class='ckLabel'>EMT</span></input></li>
															<li><input class='ckBox ckControl' name='emsInCharge' type='radio'><span class='ckLabel'>AEMT#</span></input></li>
															<li></li>
														</ul>
													</div>
													<div id="c2" class="columnList" style="width:13em;border:none;vertical-align:middle;">
														#&nbsp;<input id=emsInChargeNumber/>
													</div>
												</div>
											</td>

											<td align=left style="border:none">
												<div style="width:100%;border:0px solid black">
													<div id="c1" class="columnList" style="width:5em;border:none">
														<ul>
															<li><input class='ckBox ckControl' name='emsDriver' type='radio'><span class='ckLabel'>CFR</span></input></li>
															<li><input class='ckBox ckControl' name='emsDriver' type='radio'><span class='ckLabel'>EMT</span></input></li>
															<li><input class='ckBox ckControl' name='emsDriver' type='radio'><span class='ckLabel'>AEMT#</span></input></li>
														</ul>
													</div>
													<div id="c2" class="columnList" style="width:13em;border:none">
														#&nbsp;<input id=emsDriverNumber/>
													</div>
												</div>
											</td>

											<td align=left style="border:none">
												<div style="width:100%;border:0px solid black">
													<div id="c1" class="columnList" style="width:5em;border:none">
														<ul>
															<li><input class='ckBox ckControl' name='emsOther1' type='radio'><span class='ckLabel'>CFR</span></input></li>
															<li><input class='ckBox ckControl' name='emsOther1' type='radio'><span class='ckLabel'>EMT</span></input></li>
															<li><input class='ckBox ckControl' name='emsOther1' type='radio'><span class='ckLabel'>AEMT#</span></input></li>
														</ul>
													</div>
													<div id="c2" class="columnList" style="width:13em;border:none">
														#&nbsp;<input id=emsOther1Number/>
													</div>
												</div>
											</td>

											<td align=left style="border:none">
												<div style="width:100%;border:0px solid black">
													<div id="c1" class="columnList" style="width:5em;border:none">
														<ul>
															<li><input class='ckBox ckControl' name='emsOther2' type='radio'><span class='ckLabel'>CFR</span></input></li>
															<li><input class='ckBox ckControl' name='emsOther2' type='radio'><span class='ckLabel'>EMT</span></input></li>
															<li><input class='ckBox ckControl' name='emsOther2' type='radio'><span class='ckLabel'>AEMT#</span></input></li>
														</ul>
													</div>
													<div id="c2" class="columnList" style="width:13em;border:none">
														#&nbsp;<input id=emsOther2Number/>
													</div>
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
