@include('layouts.dash.header')
@include('layouts.dash.menu')
<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">
      
      <!--LOGO-->
      <div class="container">
        <div class="titulo">
          <div class="imgadp">
            <img src="{{ asset('images/Logos/adp.png')}}" alt="">
          </div>
        </div>
      </div>
      <!--Title-->
      <div class="container">
        <center><h1>Tier 2</h1></center>
      </div>
      <!--/LOGO-->
       @include('alerts.notification')
      <!--MESSAJES ERROR-->
      @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              <li>You must do the items from the beginning</li>
            @endforeach
          </ul>
        </div>
      @endif
      <br><br><br>
      <!--/MESSAJES ERROR-->
      <!--FORMULARIO-->
      <div class="container form" id="form">
        <h3 class="box-title">FORM</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool minimize" onclick="panelminimize('form')"><q class="fa fa-minus"></q></button>
        </div>
        <br><br><br>
        <form action="{{url('adp/storeTier2')}}" method="POST">
          @csrf
          <div class="row">
             <!--<center><input type="submit" value="Save" class="btn btn-success"></center>-->
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Coach</span>
                  <select id="coach"  style="height: 28px; width: 200px;" onchange="darAgentAdp(this.value,'darAgent')" onclick="darIdAdp(this.value,'adp','adpPHP','no')">
                      <option value="">Select</option>
                      @foreach($roster as $coach)
                        <option value="{{ $coach->coach_name }}">{{ $coach->coach_name }}</option>
                      @endforeach
                  </select>
                </div>
              </center>
            </div>
             <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Card Holder ID</span>
                  <div class="form-line">
                     <input type="number" name="call_id" style="height: 28px; width: 200px;" value="{{ old('call_id') }}" />
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon"><img id="esperar2" width="20em" src="{{ asset('img/cargando/4.gif') }}" style="display: none">Rep Name</span>
                  <div class="form-line">
                    <select id="roster" style="height: 28px; width: 200px;" onchange="darAdp(this.value,'adp','adpPHP','yes')">
                      <option value="">Select</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Card Holder Name</span>
                  <div class="form-line">
                    <input type="text" name="card_name" style="height: 28px; width: 200px;" value="{{ old('card_name') }}" />
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                    <span style="width: 150px;" class="input-group-addon">ADP</span>
                    <div class="form-line">
                      <input type="number" id="adp" style="height: 28px; width: 200px;" disabled/>
                      <input type="hidden" id="adpPHP" name="adp_agent" style="height: 28px; width: 200px;" />
                    </div>
                </div>
              </center>
            </div>            
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Call Date</span>
                  <div class="form-line">
                    <input type="date" name="call_date" style="height: 28px; width: 200px;" value="{{ old('call_date') }}" />
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Auditor</span>
                  <div class="form-line">
                    <input type="text" value="{{ Auth::user()->name }}" style="height: 28px; width: 200px;" disabled/>
                    <input type="hidden" name="auditor_id" value="{{ Auth::user()->id }}">
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Call time</span>
                  <div class="form-line">
                     <input type="text" name="call_time" style="height: 28px; width: 200px;" value="{{ old('call_time') }}" />
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Monitor Date</span>
                  <div class="form-line">
                    <input type="date" name="monitor_date" style="height: 28px; width: 200px;" value="{{ old('monitor_date') }}" />
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Call Duration</span>
                  <div class="form-line">
                    <input type="text" name="call_duration" style="height: 28px; width: 200px;" value="{{ old('call_duration') }}" />
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Monitor Type</span>
                  <div class="form-line">
                    <input type="text" name="monitor_type" style="height: 28px; width: 200px;" value="{{ old('monitor_type') }}" />
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">CSP Stage</span>
                  <div class="form-line">
                    <select  name="csp_stage" style="height: 28px; width: 200px;" />
                      <option value="">Select</option>
                      <option value="OCP">OCP</option>
                      <option value="Customer Service">Customer Service</option>
                      <option value="Tier 2">Tier 2</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Tranfer</span>
                  <div class="form-line">
                    <select  name="transfer" style="height: 28px; width: 200px;" />
                      <option value="">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Subtopic</span>
                  <div class="form-line">
                    <input type="text" name="subtopic" style="height: 28px; width: 200px;" value="{{ old('subtopic') }}" />
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Type of customer</span>
                  <div class="form-line">
                    <input type="text" name="type_customer" style="height: 28px; width: 200px;" value="{{ old('type_customer') }}" />
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Location</span>
                  <div class="form-line">
                    <select  name="location" style="height: 28px; width: 200px;" />
                      <option value="">Select</option>
                      <option value="Sitel Cali">Sitel Cali</option>
                      <option value="Sitel Spartanburg">Sitel Spartanburg</option>
                      <option value="Sitel Baguio">Sitel Baguio</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Reason of the call</span>
                  <div class="form-line">
                    <select  name="reason" style="height: 28px; width: 200px;" />
                      <option value="">Select</option>
                      <option value="">Reason</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Score</span>
                  <div class="form-line">
                    <input type="text" id="scoreqa"  style=" height: 28px; width: 200px; text-align:center;font-family: Arial; font-size: 10pt;" disabled/ />
                    <input type="hidden" id="scoreqaPHP" name="score" />
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Feedback Date</span>
                  <div class="form-line">
                    <input type="date" name="feedback" style="height: 28px; width: 200px;" value="{{ old('feedback') }}" />
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Possible</span>
                  <div class="form-line">
                    <input type="text" id="possible"  style=" height: 28px; width: 200px; text-align:center;font-family: Arial; font-size: 10pt;" disabled/ />
                    <input type="hidden" id="possiblePHP" name="possible_points"/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Obtained</span>
                  <div class="form-line">
                    <input type="text" id="obtained"  style=" height: 28px; width: 200px; text-align:center;font-family: Arial; font-size: 10pt;" disabled/ />
                    <input type="hidden" id="obtainedPHP" name="obtained_points"/>
                  </div>
                </div>
              </center>
            </div>
          </div>
      </div>
      <!--/FORMULARIO-->
      
      
      <!--TABLA-->
      <div class="body table-responsive">
        <table  class="table table-bordered table-striped table-hover dataTable js-exportable">
          <thead>
            <tr>
              <th>Section</th>
              <th>Type</th>
              <th>Evaluation Criteria</th>
              <th>Applies</th>
              <th>Possibles</th>
              <th>Obtained/Deducted</th>
              <th>Comments</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td rowspan= "8" class="tdSection">
                  Compliance
                </td>
                <td>
                  1.1
                </td>
                <td>
                  Did Tier 2 agent open the call clearly and positively?
                </td>
                <td>
                  <select name="p1_1"  class="form-control" onchange="veriadp(this,'p1.1A','p1.1B','p1.1C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p1.1A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p1.1B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p1.1C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com1_1" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr> 
                <td>
                  1.2
                </td>
                <td>
                  Did Tier 2 agent have clear understanding of reason of call ?      
                </td>
                <td>
                  <select name="p1_2"  class="form-control" onchange="veriadp(this,'p1.2A','p1.2B','p1.2C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input id="p1.2A" class="data" type="hidden" value="3" disabled/></center>
                  <center><input id="p1.2B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input id="p1.2C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com1_2" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr> 
                <td>
                  1.3
                </td>
                <td>
                  Did Tier 2 agent correctly follow policies and procedures to resolve (CVV verification)?      
                </td>
                <td>
                  <select name="p1_3"  class="form-control" onchange="veriadp(this,'p1.3A','p1.3B','p1.3C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input id="p1.3A" class="data" type="hidden" value="4" disabled/></center>
                  <center><input id="p1.3B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input id="p1.3C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com1_3" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr> 
                <td>
                  1.4
                </td>
                <td>
                  Did Tier 2 agent avoid placing CH on hold ?      
                </td>
                <td>
                  <select name="p1_4"  class="form-control" onchange="veriadp(this,'p1.4A','p1.4B','p1.4C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input id="p1.4A" class="data" type="hidden" value="4" disabled/></center>
                  <center><input id="p1.4B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input id="p1.4C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com1_4" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr> 
                <td>
                  1.5
                </td>
                <td>
                  Did Tier 2 agent ask to place CH on hold and do so only after CH´s approval?      
                </td>
                <td>
                  <select name="p1_5"  class="form-control" onchange="veriadp(this,'p1.5A','p1.5B','p1.5C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input id="p1.5A" class="data" type="hidden" value="3" disabled/></center>
                  <center><input id="p1.5B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input id="p1.5C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com1_5" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr> 
                <td>
                  1.6
                </td>
                <td>
                  Did Tier 2 agent notate the account properly?      
                </td>
                <td>
                  <select name="p1_6"  class="form-control" onchange="veriadp(this,'p1.6A','p1.6B','p1.6C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input id="p1.6A" class="data" type="hidden" value="3" disabled/></center>
                  <center><input id="p1.6B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input id="p1.6C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com1_6" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr> 
                <td>
                  1.7
                </td>
                <td>
                  Did Tier 2 agent offer further assistance?      
                </td>
                <td>
                  <select name="p1_7"  class="form-control" onchange="veriadp(this,'p1.7A','p1.7B','p1.7C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input id="p1.7A" class="data" type="hidden" value="3" disabled/></center>
                  <center><input id="p1.7B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input id="p1.7C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com1_7" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr> 
                <td>
                  1.8
                </td>
                <td>
                  Did Tier 2 agent thank CH for calling?      
                </td>
                <td>
                  <select name="p1_8"  class="form-control" onchange="veriadp(this,'p1.8A','p1.8B','p1.8C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input id="p1.8A" class="data" type="hidden" value="3" disabled/></center>
                  <center><input id="p1.8B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input id="p1.8C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com1_8" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td rowspan= "5" class="tdSection">
                  Identification
                </td>
                <td class="tdDifferent">
                  2.1
                </td>
                <td class="tdDifferent">
                  Did Tier 2 agent display understanding of the Card Holder's escalation?
                </td>
                <td>
                  <select name="p2_1"  class="form-control" onchange="veriadp(this,'p2.1A','p2.1B','p2.1C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p2.1A" class="data " type="hidden" value="4" disabled/></center>
                  <center><input  id="p2.1B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p2.1C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com2_1" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td class="tdDifferent">
                  2.2
                </td>
                <td class="tdDifferent">
                  Did Tier 2 agent request the card number?
                </td>
                <td>
                  <select name="p2_2"  class="form-control" onchange="veriadp(this,'p2.2A','p2.2B','p2.2C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p2.2A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p2.2B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p2.2C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com2_2" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td class="tdDifferent">
                  2.3
                </td>
                <td class="tdDifferent">
                  Did Tier 2 agent perform the proper authentication process?
                </td>
                <td>
                  <select name="p2_3"  class="form-control" onchange="veriadp(this,'p2.3A','p2.3B','p2.3C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p2.3A" class="data " type="hidden" value="4" disabled/></center>
                  <center><input  id="p2.3B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p2.3C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com2_3" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td class="tdDifferent">
                  2.4
                </td>
                <td class="tdDifferent">
                  Did Tier 2 agent perform enough probing to understand Card Holder´s real reason of the call or root-cause of the issue?
                </td>
                <td>
                  <select name="p2_4"  class="form-control" onchange="veriadp(this,'p2.4A','p2.4B','p2.4C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p2.4A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p2.4B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p2.4C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com2_4" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td class="tdDifferent">
                  2.5
                </td>
                <td class="tdDifferent">
                  Did Tier 2 agent check all necessary CH account information (notes/balance/ history)?
                </td>
                <td>
                  <select name="p2_5"  class="form-control" onchange="veriadp(this,'p2.5A','p2.5B','p2.5C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p2.5A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p2.5B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p2.5C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com2_5" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td rowspan= "8" class="tdSection">
                  T1 to T2 Consult
                </td>
                <td>
                  3.1
                </td>
                <td>
                  Did Tier 2 agent understand T1 agent reason of call ?
                </td>
                <td>
                  <select name="p3_1"  class="form-control" onchange="veriadp(this,'p3.1A','p3.1B','p3.1C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p3.1A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p3.1B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p3.1C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com3_1" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  3.2
                </td>
                <td>
                  Did Tier 2 agent access CH account correctly?
                </td>
                <td>
                  <select name="p3_2"  class="form-control" onchange="veriadp(this,'p3.2A','p3.2B','p3.2C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p3.2A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p3.2B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p3.2C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com3_2" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  3.3
                </td>
                <td>
                  Did Tier 2 agent placed T1 agent on hold to review what updated where done by T1 agents ?
                </td>
                <td>
                  <select name="p3_3"  class="form-control" onchange="veriadp(this,'p3.3A','p3.3B','p3.3C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p3.3A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p3.3B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p3.3C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com3_3" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  3.4
                </td>
                <td>
                  Did Tier 2 agent follow the 1 minute rule?
                </td>
                <td>
                  <select name="p3_4"  class="form-control" onchange="veriadp(this,'p3.4A','p3.4B','p3.4C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p3.4A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p3.4B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p3.4C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com3_4" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  3.5
                </td>
                <td>
                  Did Tier 2 provided T1 agent with correct resolution?
                </td>
                <td>
                  <select name="p3_5"  class="form-control" onchange="veriadp(this,'p3.5A','p3.5B','p3.5C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p3.5A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p3.5B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p3.5C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com3_5" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  3.6
                </td>
                <td>
                  Did Tier 2 agent placed clear comments on what was consulted to T1 agent?
                </td>
                <td>
                  <select name="p3_6"  class="form-control" onchange="veriadp(this,'p3.6A','p3.6B','p3.6C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p3.6A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p3.6B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p3.6C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com3_6" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  3.7
                </td>
                <td>
                  Did Tier 2  agent proactively educated T1 agent how to handle in the future?
                </td>
                <td>
                  <select name="p3_7"  class="form-control" onchange="veriadp(this,'p3.7A','p3.7B','p3.7C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p3.7A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p3.7B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p3.7C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com3_7" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  3.8
                </td>
                <td>
                  Did Tier 2  execute action or confirmed T1 agent executed action in the system?
                </td>
                <td>
                  <select name="p3_8"  class="form-control" onchange="veriadp(this,'p3.8A','p3.8B','p3.8C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p3.8A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p3.8B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p3.8C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com3_8" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td rowspan= "5" class="tdSection">
                  Resolution
                </td>
                <td class="tdDifferent">
                  4.1
                </td>
                <td class="tdDifferent">
                  Did the Tier 2 agent effectively resolve the CH's inquiry
                </td>
                <td>
                  <select name="p4_1"  class="form-control" onchange="veriadp(this,'p4.1A','p4.1B','p4.1C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p4.1A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p4.1B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p4.1C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com4_1" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td class="tdDifferent">
                  4.2
                </td>
                <td class="tdDifferent">
                  Was all information that Tier 2 agent provided to CH correct?
                </td>
                <td>
                  <select name="p4_2"  class="form-control" onchange="veriadp(this,'p4.2A','p4.2B','p4.2C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p4.2A" class="data" type="hidden" value="4" disabled/></center>
                  <center><input  id="p4.2B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p4.2C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com4_2" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td class="tdDifferent">
                  4.3
                </td>
                <td class="tdDifferent">
                  Did Tier 2 agent use tools/resources effectively to resolve CH inquiry?
                </td>
                <td>
                  <select name="p4_3"  class="form-control" onchange="veriadp(this,'p4.3A','p4.3B','p4.3C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p4.3A" class="data" type="hidden" value="3" disabled/></center>
                  <center><input  id="p4.3B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p4.3C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com4_3" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td class="tdDifferent">
                  4.4
                </td>
                <td class="tdDifferent">
                  Did Tier 2 agent proactively educate CH to prevent repeat calls?
                </td>
                <td>
                  <select name="p4_4"  class="form-control" onchange="veriadp(this,'p4.4A','p4.4B','p4.4C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p4.4A" class="data" type="hidden" value="3" disabled/></center>
                  <center><input  id="p4.4B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p4.4C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com4_4" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td class="tdDifferent">
                  4.5
                </td>
                <td class="tdDifferent">
                  Did Tier 2 agent correctly execute the solution in the system?
                </td>
                <td>
                  <select name="p4_5"  class="form-control" onchange="veriadp(this,'p4.5A','p4.5B','p4.5C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p4.5A" class="data" type="hidden" value="3" disabled/></center>
                  <center><input  id="p4.5B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p4.5C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com4_5" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td rowspan= "6">
                  CH Advocacy
                </td>
                <td>
                  5.1
                </td>
                <td>
                  Did Tier 2 agent display active listening skills?
                </td>
                <td>
                  <select name="p5_1"  class="form-control" onchange="veriadp(this,'p5.1A','p5.1B','p5.1C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p5.1A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p5.1B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p5.1C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com5_1" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  5.2
                </td>
                <td>
                  Did Tier 2 agent display effective communication skills?
                </td>
                <td>
                  <select name="p5_2"  class="form-control" onchange="veriadp(this,'p5.2A','p5.2B','p5.2C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p5.2A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p5.2B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p5.2C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com5_2" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  5.3
                </td>
                <td>
                  Did Tier 2 agent expressed emphathy torwards Card Holder/ T2 Agent situation?
                </td>
                <td>
                  <select name="p5_3"  class="form-control" onchange="veriadp(this,'p5.3A','p5.3B','p5.3C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p5.3A" class="data " type="hidden" value="3" disabled/></center>
                  <center><input  id="p5.3B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p5.3C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com5_3" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  5.4
                </td>
                <td>
                  Did Tier 2 agent handle the call in a professional manner?
                </td>
                <td>
                  <select name="p5_4"  class="form-control" onchange="veriadp(this,'p5.4A','p5.4B','p5.4C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p5.4A" class="data " type="hidden" value="4" disabled/></center>
                  <center><input  id="p5.4B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p5.4C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com5_4" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  5.5
                </td>
                <td>
                  Did Tier 2 agent display willingness to assist?
                </td>
                <td>
                  <select name="p5_5"  class="form-control" onchange="veriadp(this,'p5.5A','p5.5B','p5.5C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p5.5A" class="data " type="hidden" value="4" disabled/></center>
                  <center><input  id="p5.5B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p5.5C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com5_5" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  5.6
                </td>
                <td>
                  Did Tier 2 agent display effectively control of the call?
                </td>
                <td>
                  <select name="p5_6"  class="form-control" onchange="veriadp(this,'p5.6A','p5.6B','p5.6C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p5.6A" class="data " type="hidden" value="4" disabled/></center>
                  <center><input  id="p5.6B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p5.6C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com5_6" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td rowspan= "2" class="tdSection">
                </td>
                <td class="tdDifferent">
                  6.1
                </td>
                <td class="tdDifferent">
                  Tier 2 agent was discourteous or has a poor attitude and/or made the CH angry or upset?
                </td>
                <td>
                  <select name="p6_1"  class="form-control" onchange="veriadp(this,'p6.1A','p6.1B','p6.1C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p6.1A" class="data " type="hidden" value="5" disabled/></center>
                  <center><input  id="p6.1B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p6.1C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com6_1" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td class="tdDifferent">
                  6.2
                </td>
                <td class="tdDifferent">
                  Did Tier 2 agent avoid further escalation ?
                </td>
                <td>
                  <select name="p6_2"  class="form-control" onchange="veriadp(this,'p6.2A','p6.2B','p6.2C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p6.2A" class="data " type="hidden" value="5" disabled/></center>
                  <center><input  id="p6.2B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p6.2C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com6_2" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td rowspan= "2" >
                </td>
                <td>
                  7.1
                </td>
                <td>
                  Supervisor´s Feedback:
                </td>
                <td>
                  <select name="p7_1"  class="form-control" onchange="veriadp(this,'p7.1A','p7.1B','p7.1C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p7.1A" class="data " type="hidden" value="0" disabled/></center>
                  <center><input  id="p7.1B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p7.1C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com7_1" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  8.1
                </td>
                <td>
                  Tier 2 agent's  notes:
                </td>
                <td>
                  <select name="p8_1"  class="form-control" onchange="veriadp(this,'p8.1A','p8.1B','p8.1C')" required/>
                      <option value="0">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="N/A">N/A</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p8.1A" class="data " type="hidden" value="0" disabled/></center>
                  <center><input  id="p8.1B" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <center><input  id="p8.1C" class="data sumObt" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com8_1" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
        </tbody>
      </table>
      </form> 
      </div>
      <!--TABLA-->
    </div>    
  </div>
</div>
@include('layouts.dash.footer')