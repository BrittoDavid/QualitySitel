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
      
      <!--FORMULARIO-->
      <div class="container form" id="form">
        <h3 class="box-title">FORM</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool minimize" onclick="panelminimize('form')"><q class="fa fa-minus"></q></button>
        </div>
        <br><br><br>
        <form action="">
          <div class="row">
            <div class="col-md-6">
              <center>
                <div class="input-group">
                    <span style="width: 150px;" class="input-group-addon">ADP</span>
                    <div class="form-line">
                      <input type="text" id="adp" name="adp" style="height: 28px; width: 200px;" required/>
                    </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Rep Name</span>
                  <div class="form-line">
                    <select  id="auditor" style="height: 28px; width: 200px;">
                      <option value="">Select</option>
                      <option value="1">QA</option>
                      <option value="2">Coach</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Customer</span>
                  <div class="form-line">
                    <input type="text" name="customer" style="height: 28px; width: 200px;">
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Coach</span>
                  <div class="form-line">
                   <input type="text" name="coach" style="height: 28px; width: 200px;">
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
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Stage</span>
                  <div class="form-line">
                    <input type="text" name="stage" style="height: 28px; width: 200px;">
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Behavior AHT</span>
                  <div class="form-line">
                    <input type="text" name="behavior_aht" style="height: 28px; width: 200px;" required/ >
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Root Cause AHT</span>
                  <div class="form-line">
                    <input type="text" name="root_cause_aht" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Call ID</span>
                  <div class="form-line">
                     <input type="text" name="call_id" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Date and Time of Call</span>
                  <div class="form-line">
                     <input type="text" name="call_id" style="height: 28px; width: 190px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Audit Date</span>
                  <div class="form-line">
                    <input type="text"  name="audit_date" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Call Duration</span>
                  <div class="form-line">
                    <input type="text" name="call_duration" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Reason of the call</span>
                  <div class="form-line">
                    <input type="text" name="reason_of_the_call" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Subtopic</span>
                  <div class="form-line">
                    <input type="text" name="subtopic" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Driver AHT</span>
                  <div class="form-line">
                    <input type="text" name="driver_aht" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 150px;" class="input-group-addon">Score</span>
                  <div class="form-line">
                    <input type="text" id="scoreqa" name="scoreqa" style=" height: 28px; width: 200px; text-align:center;font-family: Arial; font-size: 10pt;" disabled/ required/>
                  </div>
                </div>
              </center>
            </div>
          </div>
          <input type="hidden" id="scoreqaPHP" name="scoreqaPHP">
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
                  <select name="1_1"  class="form-control" onchange="verifedex(this,'p1.1')" >
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
                  <select name="1_2"  class="form-control" onchange="verifedex(this,'p1.2')" >
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
                  <select name="1_3"  class="form-control" onchange="verifedex(this,'p1.3')" >
                      <option value="">Select</option>
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
                  <select name="1_4"  class="form-control" onchange="verifedex(this,'p1.4')" >
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
                  <select name="1_5"  class="form-control" onchange="verifedex(this,'p1.5')" >
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
                  <select name="2_1"  class="form-control" onchange="verifedex(this,'p2.1')" >
                      <option value="0">Select</option>
                      <option value="4">Exceptional</option>
                      <option value="2">Meets</option>
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
                  <select name="2_2"  class="form-control" onchange="verifedex(this,'p2.2')" >
                      <option value="0">Select</option>
                      <option value="4">Exceptional</option>
                      <option value="2">Meets</option>
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
                  <select name="2_3"  class="form-control" onchange="verifedex(this,'p2.3')" >
                      <option value="">Select</option>
                      <option value="4">Exceptional</option>
                      <option value="2">Meets</option>
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
                  <select name="2_4"  class="form-control" onchange="verifedex(this,'p2.4')" >
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
                  <select name="3_1"  class="form-control" onchange="verifedex(this,'p3.1')" >
                      <option value="0">Select</option>
                      <option value="4">Exceptional</option>
                      <option value="2">Meets</option>
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
                  <select name="3_2"  class="form-control" onchange="verifedex(this,'p3.2')" >
                      <option value="0">Select</option>
                      <option value="4">Exceptional</option>
                      <option value="2">Meets</option>
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
                  <select name="3_3"  class="form-control" onchange="verifedex(this,'p3.3')" >
                      <option value="">Select</option>
                      <option value="4">Exceptional</option>
                      <option value="2">Meets</option>
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
                  <select name="3_4"  class="form-control" onchange="verifedex(this,'p3.4')" >
                      <option value="0">Select</option>
                      <option value="4">Exceptional</option>
                      <option value="2">Meets</option>
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
                  <select name="4_1"  class="form-control" onchange="verifedex(this,'p4.1')" >
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