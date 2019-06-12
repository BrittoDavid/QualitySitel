@include('layouts.dash.header')
@include('layouts.dash.menu')
<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">
      
      <!--LOGO-->
      <div class="container">
        <div class="titulo">
          <div class="imgfedex">
            <img src="{{ asset('images/Logos/fedex.png')}}" alt="">
          </div>
        </div>
      </div>
      <br><br><br>
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
        <form action="{{url('fedex/store')}}" method="POST">
          @csrf
          <div class="row">
             <center><input type="submit" value="Save" class="btn btn-success"></center>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Coach</span>
                  <div class="form-line">
                    <select  id="coach" style="height: 28px; width: 200px;" onchange="darAgent(this.value,'darAgent')" onclick="darAdp(this.value,'adp','adpPHP','no')">
                      <option value="">Seleccione</option>
                      @foreach($roster as $coach)
                        <option value="{{ $coach->coach_name }}">{{ $coach->coach_name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </center>
            </div>
             <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Date and Time of Call</span>
                  <div class="form-line">
                     <input type="text" name="date_and_time" style="height: 28px; width: 190px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon"><img id="esperar1" width="20em" src="{{ asset('img/cargando/4.gif') }}" style="display: none">Rep Name</span>
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
                  <span style="width: 150px;" class="input-group-addon">Behavior AHT</span>
                  <div class="form-line">
                    <select  name="behavior_aht" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="Dead Air">Dead Air</option>
                      <option value="Doesn't Apply">Doesn't Apply</option>
                      <option value="Hold">Hold</option>
                      <option value="Knowledge">Knowledge</option>
                      <option value="Multiple Packages">Multiple Packages</option>
                      <option value="N/A">N/A</option>
                      <option value="Skill">Skill</option>
                      <option value="System Troubleshoot">System Troubleshoot</option>
                      <option value="Transfer">Transfer</option>
                      <option value="Work Avoidance">Work Avoidance</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                    <span style="width: 150px;" class="input-group-addon">ADP</span>
                    <div class="form-line">
                      <input type="text" id="adp" style="height: 28px; width: 200px;" disabled/ required/>
                      <input type="hidden" id="adpPHP" name="adp_agent" style="height: 28px; width: 200px;" required/>
                    </div>
                </div>
              </center>
            </div>            
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Root Cause AHT</span>
                  <div class="form-line">
                    <select  name="outcome_behavior" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="1Source Retrack">1Source Retrack</option>
                      <option value="Dead Air">Dead Air</option>
                      <option value="Delayed Call Opening">Delayed Call Opening</option>
                      <option value="Dextr troubleshoot">Dextr troubleshoot</option>
                      <option value="Difficulty ID Customer Need">Difficulty ID Customer Need</option>
                      <option value="Disengagement">Disengagement</option>
                      <option value="Distraction">Distraction</option>
                      <option value="Doesn't Apply">Doesn't Apply</option>
                      <option value="Knowledge Gap">Knowledge Gap</option>
                      <option value="Logging Case Notes">Logging Case Notes</option>
                      <option value="Multiple Call Attempt to Station">Multiple Call Attempt to Station</option>
                      <option value="N/A">N/A</option>
                      <option value="Ownership Not Available">Ownership Not Available</option>
                      <option value="Unnecessary Call CAT">Unnecessary Call CAT</option>
                      <option value="Unnecessary Call Station">Unnecessary Call Station</option>
                      <option value="Unnecessary Hold">Unnecessary Hold</option>
                      <option value="Waiting on Hold for Station">Waiting on Hold for Station</option>
                    </select>
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
                  <span style="width: 150px;" class="input-group-addon">Call ID</span>
                  <div class="form-line">
                     <input type="number" name="call_id" style="height: 28px; width: 200px;" value="{{ old('call_id') }}" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Customer</span>
                  <div class="form-line">
                    <select  name="customer" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="Shipper">Shipper</option>
                      <option value="Recipient">Recipient</option>
                      <option value="3rd Party">3rd Party</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Audit Date</span>
                  <div class="form-line">
                    <input type="date"  name="audit_date" style="height: 28px; width: 200px;"  value="{{ old('audit_date') }}" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Stage</span>
                  <div class="form-line">
                    <select  name="stage" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="Transition">Transition</option>
                      <option value="Operations">Operations</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Call Duration</span>
                  <div class="form-line">
                    <input type="text" name="call_duration" style="height: 28px; width: 200px;" value="{{ old('call_duration') }}" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Reason of the call</span>
                  <div class="form-line">
                    <select  name="reason_of_the_call" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="Competitor Pick Up">Competitor Pick Up</option>
                      <option value="Controlled Release">Controlled Release</option>
                      <option value="Account Restrictions">Account Restrictions</option>
                      <option value="ACR">ACR</option>
                      <option value="Complaint">Complaint</option>
                      <option value="Compliment">Compliment</option>
                      <option value="Case Update">Case Update</option>
                      <option value="Change Of Signature">Change Of Signature</option>
                      <option value="COD Change Amount">COD Change Amount</option>
                      <option value="COD Fund Type Change">COD Fund Type Change</option>
                      <option value="Delivery Dispute">Delivery Dispute</option>
                      <option value="Delivery Instructions">Delivery Instructions</option>
                      <option value="Damaged Package">Damaged Package</option>
                      <option value="DN/DE/SPOD">DN/DE/SPOD</option>
                      <option value="DTH/RTH/HAL">DTH/RTH/HAL</option>
                      <option value="ETA">ETA</option>
                      <option value="Fraud">Fraud</option>
                      <option value="Future Delivery">Future Delivery</option>
                      <option value="General Message Case">General Message Case</option>
                      <option value="HTD">HTD</option>
                      <option value="Location">Location</option>
                      <option value="Lost Package/Missing Contents">Lost Package/Missing Contents</option>
                      <option value="Misdelivery">Misdelivery</option>
                      <option value="Misdelivery w/o Tracking">Misdelivery w/o Tracking</option>
                      <option value="Missed Pick Up">Missed Pick Up</option>
                      <option value="Other">Other</option>
                      <option value="Package Refused">Package Refused</option>
                      <option value="Pick Up">Pick Up</option>
                      <option value="Property Damage">Property Damage</option>
                      <option value="Rating">Rating</option>
                      <option value="Reattempt">Reattempt</option>
                      <option value="Remove COD">Remove COD</option>
                      <option value="RRT">RRT</option>
                      <option value="RTS">RTS</option>
                      <option value="Stop Package">Stop Package</option>
                      <option value="Stop/Dispose">Stop/Dispose</option>
                      <option value="Supplies - Bulk">Supplies - Bulk</option>
                      <option value="Supplies - Preprinted">Supplies - Preprinted</option>
                      <option value="Tracking/Pkg Status">Tracking/Pkg Status</option>
                      <option value="Vacation Hold">Vacation Hold</option>
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
                    <select  name="subtopic" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="Complaint About Facility">Complaint About Facility</option>
                      <option value="Vehicle Damage">Vehicle Damage</option>
                      <option value="Confirm POD">Confirm POD</option>
                      <option value="Confirm HAL">Confirm HAL</option>
                      <option value="Major Property Damage">Major Property Damage</option>
                      <option value="Minor Property Damage">Minor Property Damage</option>
                      <option value="DTH/RTH/HAL Status">DTH/RTH/HAL Status</option>
                      <option value="Case Information">Case Information</option>
                      <option value="Complaint About Driver">Complaint About Driver</option>
                      <option value="Complaint About Agent">Complaint About Agent</option>
                      <option value="Fraud Email">Fraud Email</option>
                      <option value="N/A">N/A</option>
                      <option value="Vacation Hold Status">Vacation Hold Status</option>
                      <option value="Verify FedEx.com Scans">Verify FedEx.com Scans</option>
                      <option value="PRP">PRP</option>
                      <option value="CIB">CIB</option>
                      <option value="CPU">CPU</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Driver AHT</span>
                  <div class="form-line">
                    <select  name="driver_aht" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="Active Listening">Active Listening</option>
                      <option value="Doesn't Apply">Doesn't Apply</option>
                      <option value="Inaccurate Resolution">Inaccurate Resolution</option>
                      <option value="Incorrect Call close">Incorrect Call close</option>
                      <option value="Lack of Empathy">Lack of Empathy</option>
                      <option value="Lack of Multitasking">Lack of Multitasking</option>
                      <option value="Lack of Procedural Knowledge">Lack of Procedural Knowledge</option>
                      <option value="Lack of Product Knowledge">Lack of Product Knowledge</option>
                      <option value="No Customer Verification">No Customer Verification</option>
                      <option value="Other">Other</option>
                      <option value="Work Avoidance">Work Avoidance</option>
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
                    <input type="text" id="scoreqa"  style=" height: 28px; width: 200px; text-align:center;font-family: Arial; font-size: 10pt;" disabled/ required/>
                  </div>
                </div>
              </center>
            </div>
          </div>
          <input type="hidden" id="scoreqaPHP" name="score">
      </div>
      <!--/FORMULARIO-->
      
      
      <!--TABLA-->
      <div class="body table-responsive">
        <table  class="table table-bordered table-striped table-hover dataTable js-exportable">
          <thead>
            <tr>
              <th>Living PSP</th>
              <th>Rating Points</th>
              <th>Score</th>
              <th>Comments</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>
                  Made customer feel welcome: Greeted and offered to help.<br> 
                  Let them know we appreciate their call/business. Friendly and Courteous throughout the call. <br>Treated customer with dignity and respect throughout the call. Engaged and interested (tone and words).
                </td>
                <td>
                  <select name="p1_1"  class="form-control" onchange="verifedex(this,'p1.1')" required/>
                      <option value="0">Select</option>
                      <option value="4">Exceptional</option>
                      <option value="2">Meets</option>
                      <option value="0">Does not meet</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p1.1" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com1_1" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  Effectively listened to customer:  Clearly focused throughout the call.  Customer didn't have to repeat clearly stated information / Rep clearly understood customer's sense of urgency and responded appropriately. No distractions or interruptions.      
                </td>
                <td>
                  <select name="p1_2"  class="form-control" onchange="verifedex(this,'p1.2')" >
                      <option value="0">Select</option>
                      <option value="4">Exceptional</option>
                      <option value="2">Meets</option>
                      <option value="0">Does not meet</option>
                  </select>
                </td>
                <td>
                  <center><input id="p1.2" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com1_2" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  Empathized and/or apologized appropriately:  Mirrored the customer's point of view clearly indicated that we care (tone and words).  Displayed patience and understanding" 
                </td>
                <td>
                  <select name="p1_3"  class="form-control" onchange="verifedex(this,'p1.3')" >
                      <option value="0">Select</option>
                      <option value="4">Exceptional</option>
                      <option value="2">Meets</option>
                      <option value="0">Does not meet</option>
                  </select>
                </td>
                <td>
                  <center><input id="p1.3" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com1_3" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  Took Ownership: Intentionally took actions to fulfill customer's request.  Treated customer's issue as their own.  Made the customer feel in control.  Made the interaction easy and displayed confidence. 
                </td>
                <td>
                  <select name="p1_4"  class="form-control" onchange="verifedex(this,'p1.4')" >
                      <option value="0">Select</option>
                      <option value="4">Exceptional</option>
                      <option value="2">Meets</option>
                      <option value="0">Does not meet</option>
                  </select>
                </td>
                <td>
                  <center><input id="p1.4" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com1_4" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  "Personalized call/established relationship with customer: Used customer's name if given/gathered. Customized call close, built rapport as appropriate, and gave details and educated customer as needed." 
                </td>
                <td>
                  <select name="p1_5"  class="form-control" onchange="verifedex(this,'p1.5')" >
                      <option value="0">Select</option>
                      <option value="4">Exceptional</option>
                      <option value="2">Meets</option>
                      <option value="0">Does not meet</option>
                  </select>
                </td>
                <td>
                  <center><input id="p1.5" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com1_5" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
        </tbody>
      </table>
      
      <table  class="table table-bordered table-striped table-hover dataTable js-exportable">
          <thead>
            <tr>
              <th>ECLIPSE</th>
              <th>Rating Points</th>
              <th>Score</th>
              <th>Comments</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>
                  Clearly identified customer's need(s): Asked probing questions as necessary. Identified secondary needs as applicable.
                </td>
                <td>
                  <select name="p2_1"  class="form-control" onchange="verifedex(this,'p2.1')" >
                      <option value="0">Select</option>
                      <option value="2">Exceptional</option>
                      <option value="1">Meets</option>
                      <option value="0">Does not meet</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p2.1" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com2_1" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  Offered Options and Agree on Solutions:  Offered all appropriate options based on customer's stated and emotional need.
                </td>
                <td>
                  <select name="p2_2"  class="form-control" onchange="verifedex(this,'p2.2')" >
                      <option value="0">Select</option>
                      <option value="2">Exceptional</option>
                      <option value="1">Meets</option>
                      <option value="0">Does not meet</option>
                  </select>
                </td>
                <td>
                  <center><input id="p2.2" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com2_2" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  Communicated Expectations:  Clearly stated what was happening during the call and what will happen after to the customer's understanding.
                </td>
                <td>
                  <select name="p2_3"  class="form-control" onchange="verifedex(this,'p2.3')" >
                      <option value="0">Select</option>
                      <option value="2">Exceptional</option>
                      <option value="1">Meets</option>
                      <option value="0">Does not meet</option>
                  </select>
                </td>
                <td>
                  <center><input id="p2.3" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com2_3" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  SOPS:      Followed all KMS, SCOOP, Job Aids, CRISP,  guidelines, etc., including mandatory phraseology.
                </td>
                <td>
                  <select name="p2_4"  class="form-control" onchange="verifedex(this,'p2.4')" >
                      <option value="0">Select</option>
                      <option value="4">Exceptional</option>
                      <option value="2">Meets</option>
                      <option value="0">Does not meet</option>
                  </select>
                </td>
                <td>
                  <center><input id="p2.4" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com2_4" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
        </tbody>
      </table>

      <table class="table table-bordered table-striped table-hover dataTable js-exportable">
          <thead>
            <tr>
              <th>Efficiency</th>
              <th>Rating Points</th>
              <th>Score</th>
              <th>Comments</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>
                  Used 1Source and all applications  efficiently:   Navigated and found information quickly.
                </td>
                <td>
                  <select name="p3_1"  class="form-control" onchange="verifedex(this,'p3.1')" >
                      <option value="0">Select</option>
                      <option value="2">Exceptional</option>
                      <option value="1">Meets</option>
                      <option value="0">Does not meet</option>
                  </select>
                </td>
                <td>
                  <center><input  id="p3.1" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com3_1" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  Call flowed in an efficient order: Didn't have to retrack.
                </td>
                <td>
                  <select name="p3_2"  class="form-control" onchange="verifedex(this,'p3.2')" >
                      <option value="0">Select</option>
                      <option value="2">Exceptional</option>
                      <option value="1">Meets</option>
                      <option value="0">Does not meet</option>
                  </select>
                </td>
                <td>
                  <center><input id="p3.2" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com3_2" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  Call flowed in an efficient pace for the call type, customer, etc.:   Call should be paced appropriately for the complexity of the issue as well as the knowledge/experience level of the customer. No unnecessary holds or unnecessarily long holds.
                </td>
                <td>
                  <select name="p3_3"  class="form-control" onchange="verifedex(this,'p3.3')" >
                      <option value="0">Select</option>
                      <option value="2">Exceptional</option>
                      <option value="1">Meets</option>
                      <option value="0">Does not meet</option>
                  </select>
                </td>
                <td>
                  <center><input id="p3.3" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com3_3" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
              <tr>
                <td>
                  Rep transferred appropriately:  Cold vs warm and was it appropriate to the request?
                </td>
                <td>
                  <select name="p3_4"  class="form-control" onchange="verifedex(this,'p3.4')" >
                      <option value="0">Select</option>
                      <option value="2">Exceptional</option>
                      <option value="1">Meets</option>
                      <option value="0">Does not meet</option>
                  </select>
                </td>
                <td>
                  <center><input id="p3.4" class="data sumPoss" type="number" value="0" disabled/></center>
                </td>
                <td>
                  <textarea name="com3_4" class="form-control" rows="3" style=" height: 70px; width: 500px; max-width:500px; max-height: 70px; min-width: 500px; min-height:70px" ></textarea>
                </td>
              </tr>
        </tbody>
      </table>

      <table class="table table-bordered table-striped table-hover dataTable js-exportable">
          <thead>
            <tr>
              <th colspan= "3">Call Failed</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>
                  AUTOFAIL.
                </td>
                <td>
                  <select name="p4_1"  class="form-control" onchange="verifedex(this,'p4.1')" >
                      <option value="0">Select</option>
                      <option value="AF">YES</option>
                      <option value="0">NO</option>
                  </select>
                </td>
                <td>
                  <center><input id="p4.1" class="data sumPoss" type="text" value="0" disabled/></center>
                </td>
              </tr>
        </tbody>
      </table>
      </form> 
      </div>
      <!--/TABLA-->
    </div>    
  </div>
</div>
@include('layouts.dash.footer')