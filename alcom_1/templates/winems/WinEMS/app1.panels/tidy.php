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

<html>
<head>
  <meta name="generator" content=
  "HTML Tidy for Windows (vers 14 February 2006), see www.w3.org">

  <title></title>
</head>

<body>
  <table border="0" width="100%">
    <tr style="display:none">
      <td>1</td>

      <td>a</td>

      <td>2</td>

      <td>b</td>

      <td>3</td>

      <td>c</td>

      <td>4</td>

      <td>d</td>

      <td>5</td>

      <td>e</td>

      <td>6</td>

      <td>f</td>
    </tr>

    <tr>
      <td>Date</td>

      <td><input name='emsDate' id='emsDate' class="date" onclick=
      "displayDatePicker(this.name, this);"></td>

      <td>Run ID:</td>

      <td name='emsSequence' id='emsSequence'></td>

      <td><!--Agency--></td>

      <td></td>

      <td>Vehicle ID</td>

      <td colspan="2"><input name='emsVehicleID' id=
      'emsVehicleID'></td>

      <td colspan="2" rowspan="4" align="right">
        <table style="border:1px solid black">
          <tr>
            <td colspan="2" align="center">Mileage</td>
          </tr>

          <tr>
            <td>End</td>

            <td><input name="mileageEnd" id="mileageEnd" onchange=
            "calcMileage()"></td>
          </tr>

          <tr>
            <td>Begin</td>

            <td><input name="mileageBegin" id="mileageBegin"
            onchange="calcMileage()"></td>
          </tr>

          <tr>
            <td onclick="calcMileage()">Total</td>

            <td><span id="emsCalcMileage">0</span></td>
          </tr>
        </table>
      </td>
    </tr>

    <tr>
      <td colspan="2">Agency Name</td>

      <td colspan="4"><select name='emsAgencyName'>
        <option>
          &lt;Select&gt;
        </option>

        <option value="001">
          Chevra Hatzoloh of Rockland County
        </option>

        <option value="002">
          Congers Valley Cottage Vol. Ambulance Corps
        </option>

        <option value="003">
          Haverstraw Ambulance Corps
        </option>

        <option value="004">
          Mobile Care
        </option>

        <option value="005">
          Nanuet Community Ambulance Corps
        </option>

        <option value="006">
          New City Vol. Ambulance Corps Rescue Squad Inc.
        </option>

        <option value="007">
          Nyack Community Ambulance Corps
        </option>

        <option value="008">
          Pearl River Alumni Ambulance Corp.
        </option>

        <option value="009">
          Piermont Fire Department Ambulance
        </option>

        <option value="010">
          Ramapo Valley Ambulance Corps
        </option>

        <option value="011">
          Sloatsburg Community Ambulance Corps
        </option>

        <option value="012">
          South Orangetown Ambulance Corps
        </option>

        <option value="013">
          Spring Hill Community Ambulance Corps
        </option>

        <option value="014">
          Stony Point Ambulance Corps
        </option>

        <option value="015">
          William Paul Faist Volunteer Ambulance Corps
        </option>
      </select></td>

      <td colspan="2">Location</td>

      <td><select id='emsLocationCode' name='emsLocationCode'
      onchange="showLocationCode(this.name)">
        <option>
          &lt;Select&gt;
        </option>

        <option value="4338">
          Airmont
        </option>

        <option value="4335">
          Chestnut Ridge
        </option>

        <option value="4350">
          Clarkstown
        </option>

        <option value="4323">
          Grandview-on-Hudson
        </option>

        <option value="4351">
          Haverstraw
        </option>

        <option value="4327">
          Hillburn
        </option>

        <option value="4337">
          Kaser
        </option>

        <option value="7095">
          Kings County (all)
        </option>

        <option value="7093">
          Manhattan (Entire Borough)
        </option>

        <option value="4336">
          Montebello
        </option>

        <option value="4334">
          New Hempstead
        </option>

        <option value="4331">
          New Square
        </option>

        <option value="4324">
          Nyack
        </option>

        <option value="4352">
          Orangetown
        </option>

        <option value="4325">
          Piermont
        </option>

        <option value="4332">
          Pomona
        </option>

        <option value="4353">
          Ramapo
        </option>

        <option value="4330">
          Sloatsburg
        </option>

        <option value="4326">
          South Nyack
        </option>

        <option value="4328">
          Spring Valley
        </option>

        <option value="4354">
          Stony Point
        </option>

        <option value="4329">
          Suffern
        </option>

        <option value="4320">
          Upper Nyack
        </option>

        <option value="4333">
          Wesley Hills
        </option>

        <option value="4322">
          West Haverstraw
        </option>
      </select></td>
    </tr>

    <tr>
      <td colspan="2">Dispatch Info</td>

      <td colspan="4"><input name='emsDispatchInfo' class=
      'wideInput'></td>

      <td colspan="2">Location Code</td>

      <td>
        <div id='dspLocationCode' style="display:none"></div>
      </td>
    </tr>

    <tr>
      <td colspan="2">Call Location</td>

      <td colspan="4"><input name='emsCallLocation' class=
      'wideInput'></td>

      <td colspan="2">Location Type</td>

      <td><select name='emsLocationType'>
        <option>
          &lt;Select&gt;
        </option>

        <option>
          Residence
        </option>

        <option>
          Health
        </option>

        <option>
          Farm
        </option>

        <option>
          Industrial
        </option>

        <option>
          Other Work
        </option>

        <option>
          Road
        </option>

        <option>
          Other
        </option>
      </select></td>
    </tr>

    <tr>
      <td valign="top" colspan="2">Physician At Scene</td>

      <td valign="top" colspan="4"><input name='emsPhysician'
      class='wideInput'></td>

      <td valign="top" colspan="2">Care In Progress</td>

      <td colspan="3">
        <table width="100%" style="border:1px solid black">
          <tr>
            <td align="left"><input class='ckBox' name=
            'emsCareInProgress' type='checkbox'><span class=
            'ckLabel'>None</span> <input class='ckBox' name=
            'emsCareInProgress' type='checkbox'><span class=
            'ckLabel'>Citizen</span> <input class='ckBox' name=
            'emsCareInProgress' type='checkbox'><span class=
            'ckLabel'>PD/FD</span> <input class='ckBox' name=
            'emsCareInProgress' type='checkbox'><span class=
            'ckLabel'>PAD Used</span></td>
          </tr>

          <tr>
            <td align="left"><input class='ckBox' name=
            'emsCareInProgress' type='checkbox' value=
            'harry'><span class='ckLabel'>Other First
            Responder</span> <input class='ckBox' name=
            'emsCareInProgress' type='checkbox'><span class=
            'ckLabel'>Other EMS</span></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

  <div style="float:left;width:50%">
    <div class="contentHeader">
      <span class="inputLabel" style="width:13em">Call Received
      As:&#160;&#160;</span> <select id='emsCallReceived'>
        <option>
          &lt;Select&gt;
        </option>

        <option>
          Emergency
        </option>

        <option>
          Non Emergency
        </option>

        <option>
          Standby
        </option>
      </select>
    </div>

    <div class="contentHeader">
      <span class="inputLabel" style=
      "width:13em;margin-bottom:4px">Call Dispatched
      As:&#160;</span> <select name='emsTransportType'>
        <option>
          &lt;Select&gt;
        </option>

        <option value="990">
          BLS (990)
        </option>

        <option value="995">
          BLS Emergency (995)
        </option>

        <option value="1000">
          ALS Level 1 (1000)
        </option>

        <option value="1005">
          ALS Level 1 Emergency (1005)
        </option>

        <option value="1010">
          ALS Level 2 (1010)
        </option>

        <option value="1015">
          Paramedic Intercept (1015)
        </option>

        <option value="1020">
          Specialty Care Transport (1020)
        </option>

        <option value="1025">
          Fixed Wing (Airplane) (1025)
        </option>

        <option value="1030">
          Rotary Wing (Helicopter) (1030)
        </option>

        <option value="B1">
          Body Removal (billing)
        </option>

        <option value="B2">
          Stand-by Chargeable (billing)
        </option>

        <option value="B3">
          Stand-by Non-chargeable (billing)
        </option>

        <option value="B4">
          Wheel Chair Transport (billing)
        </option>

        <option value="B5">
          Stretcher Transport (billing)
        </option>

        <option value="B6">
          Service Car Transport (billing)
        </option>

        <option value="4835">
          Refusal/No Transport -&gt; Patient Refused Care (4835)
        </option>

        <option value="4840">
          Treatment with No Transport -&gt; Treated and Release
          (4840)
        </option>

        <option value="4825">
          No Patient Found -&gt; No Patient Found (4825)
        </option>

        <option value="-025">
          Not Applicable (-25)
        </option>

        <option value="-015">
          Not Reporting (-15)
        </option>

        <option value="-010">
          Not Known (-10)
        </option>

        <option value="-005">
          Not Available (-5)
        </option><!--    
                                                                                <option>ALS Non Emergency</option>
                                                                                <option>ALS Emergency</option>
                                                                                <option>ALS2</option>
                                                                                <option>BLS Non Emergency</option>
                                                                                <option>BLS Emergency</option>
                                                                                <option>SCT</option>
                                                                                <option>Paramedic Intercept</option>
                                                                                <option>Body Removal</option>
                                                                                <option>Stand By: Chargable</option>
                                                                                <option>Stand By: Non-Chargable</option>
                                                                                <option>Wheel Chair Transport</option>
                                                                                <option>Stretcher Tranport</option>
                                                                                <option>Service Car Transport</option>
                                                                                <option>Refusal  No Transport</option>
                                                                                <option>Treatment with no transport</option>
                                                                                <option>No Patient Found</option>
                                                                                <option>Stand Down</option>
                                                                                <option>Unknown</option>
-->
      </select>
    </div>

    <div class="contentHeader" style="xborder:1px solid black">
      <span class="inputLabel" style="width:13em">Dispatch
      Method:&#160;&#160;</span> <select name='emsDispatchMethod'
      id='emsDispatchMethod' onchange=
      "checkDispatchMethod(this.name)">
        <option>
          &lt;Select&gt;
        </option>

        <option>
          911
        </option>

        <option>
          Emergency
        </option>

        <option>
          Walk-In
        </option>

        <option>
          Scheduled
        </option>
      </select>
    </div>
  </div>

  <div style="float:left;width:45%;height:70px">
    <div class="contentHeader" style=
    "width:100%;xborder:1px solid black">
      <span class="inputLabel" style=
      "width:10em">Proximity:&#160;&#160;</span> <input class=
      'ckBox' name='emsProximity' type='radio'><span class=
      'ckLabel'>In Area</span> <input class='ckBox' name=
      'emsProximity' type='radio'><span class='ckLabel'>Out Of
      Area</span>
    </div>

    <div class="contentHeader" style=
    "width:100%; xborder:1px solid black;">
      <span class="inputLabel" style=
      "width:10em;margin-bottom:4px">Purpose:&#160;</span>
      <select name='emsTransportPurpose' style="width:15em%">
        <option>
          &lt;Select&gt;
        </option>

        <option>
          Patient transferred to rehabilitation facility
        </option>

        <option>
          Patient transport for benefit of physician
        </option>

        <option>
          Patient transported for care of specialist
        </option>

        <option>
          Patient transported for nearness of family members
        </option>

        <option>
          Patient transported to nearest facility
        </option>
      </select>
    </div>
  </div>

  <div style="float:left;width:70%;">
    <div id="scheduledTransport" style=
    "display:none; margin-left:1em; xborder:1px solid black">
      <div class="contentHeader">
        <span class="inputLabel" style="width:18em">Referring
        Physician:&#160;&#160;</span> <input class='wideInput'
        name='emsConditionCode'> <span class=
        "inputLabel">UPIN:&#160;&#160;</span> <input class=
        'mediumInput' name='emsUPIN'>
      </div>

      <div class="contentHeader">
        <span class="inputLabel" style="width:18em">Certificate of
        Medical Necessity:&#160;&#160;</span> <input class='ckBox'
        name='emsProximity' type='radio'><span class=
        'ckLabel'>Yes</span> <input class='ckBox' name=
        'emsProximity' type='radio'><span class='ckLabel'>No</span>
      </div>
    </div>
  </div>
  <!--                                <div class="contentHeader">
                                                        <span class="inputLabel" style="width:13em">Condition Code:&nbsp;&nbsp;</span>
                                                        <input class='inputMedium' name='emsConditionCode'/>
                                                </div>
-->
  <!-- CONTENT: END   -->
</body>
</html>
