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
      <br><br><br>
      <!--/LOGO-->
       @include('alerts.notification')
      <!--MESSAJES ERROR
      @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              <li>You must do the items from the beginning</li>
            @endforeach
          </ul>
        </div>
      @endif-->
      <br><br><br>
      <!--/MESSAJES ERROR-->

      <!--FORMULARIO-->
      <div class="container">
        <h3 class="box-title">Incident Tracker</h3>
        <form action="{{url('adp/registerTracker')}}" method="POST">
          @csrf
          <div class="row">
             <center><input type="submit" value="Save" class="btn btn-success"></center>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">ID</span>
                  <div class="form-line">
                     <input type="text" value="{{$id}}" style="height: 28px; width: 200px;" disabled/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Call Date</span>
                  <div class="form-line">
                     <input type="date" name="call_date" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Call Time</span>
                  <div class="form-line">
                     <input type="text" id="time" placeholder="H:M:S"  name="call_time" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Call length</span>
                  <div class="form-line">
                     <input type="text" name="call_length" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                    <span style="width: 200px;" class="input-group-addon">Call ID</span>
                    <div class="form-line">
                      <input type="number" name="call_id"  style="height: 28px; width: 200px;" required/>
                    </div>
                </div>
              </center>
            </div>            
            <div class="col-md-6">
              <center>
                <div class="input-group">
                    <span style="width: 200px;" class="input-group-addon">Date Received</span>
                    <div class="form-line">
                      <input type="date" name="date_received" style="height: 28px; width: 200px;" required/>
                    </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Date answered</span>
                  <div class="form-line">
                    <input type="date" name="date_answered" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Received from</span>
                  <div class="form-line">
                     <input type="text" name="received_from" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">LOB/Product</span>
                  <div class="form-line">
                     <input type="text" name="lob_product" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">CSP</span>
                  <div class="form-line">
                    <input type="text"  name="csp" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">ADP - Lawson</span>
                  <div class="form-line">
                    <input type="number"  name="adp_lawson" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">What was the <br> incident/infraction</span>
                  <div class="form-line">
                    <input type="text" name="what_incident" style="height: 50px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Tips to correct <br> incident / infraction</span>
                  <div class="form-line">
                    <input type="text" name="correct_incident" style="height: 50px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Call Synopsis</span>
                  <div class="form-line">
                    <input type="text" name="call_synopsis" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Findings</span>
                  <div class="form-line">
                    <input type="text" name="findings" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Validity</span>
                  <div class="form-line">
                    <select  name="validity" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="YES">YES</option>
                      <option value="NO">NO</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Reason for Validity</span>
                  <div class="form-line">
                    <input type="text"  name="reason_for_validity" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Reason for contact</span>
                  <div class="form-line">
                    <input type="text"  name="reason_for_contact" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Resolution provided?</span>
                  <div class="form-line">
                    <select  name="resolution_provided" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="YES">YES</option>
                      <option value="NO">NO</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Financial Impact (USD)</span>
                  <div class="form-line">
                    <input type="text"  name="finantial_impact" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">KSW Tag</span>
                  <div class="form-line">
                    <select  name="ksw_tag" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="Knowledge">Knowledge</option>
                      <option value="Skill">Skill</option>
                      <option value="Will">Will</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">KSW tag area of opportunity</span>
                  <div class="form-line">
                    <input type="text"  name="area_opportunity" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Acknowledgement Status</span>
                  <div class="form-line">
                    <select  name="acknowledgement" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="Open">Open</option>
                      <option value="Closed">Closed</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Rudeness or ZTP?</span>
                  <div class="form-line">
                    <select  name="rudeness_ztp" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="YES">YES</option>
                      <option value="NO">NO</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">QA section impacted</span>
                  <div class="form-line">
                    <select  name="qa_section" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="Compliance">Compliance</option>
                      <option value="Identification">Identification</option>
                      <option value="Resolution">Resolution</option>
                      <option value="Card Holder advocacy">Card Holder advocacy</option>
                      <option value="T1 to T2 Consult">T1 to T2 Consult</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Created by</span>
                  <div class="form-line">
                    <input type="text"  name="auditor" value="{{Auth::user()->name}}" style="height: 28px; width: 200px;" disabled/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Error type</span>
                  <div class="form-line">
                    <select  name="error_type" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="Unnecessary Webform">Unnecessary Webform</option>
                      <option value="Invalid transfer">Invalid transfer</option>
                      <option value="Incorrect system usage">Incorrect system usage</option>
                      <option value="Incorrect information">Incorrect information</option>
                      <option value="Failure to confirm CIP remediation">Failure to confirm CIP remediation</option>
                      <option value="Incorrect document request">Incorrect document request</option>
                      <option value="Fraud prevention">Fraud prevention</option>
                      <option value="Account documentation">Account documentation</option>
                      <option value="Shipping procedure">Shipping procedure</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">User ID</span>
                  <div class="form-line">
                    <input type="number"  name="user_id" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Sub error type</span>
                  <div class="form-line">
                    <select  name="sub_error_type" style="height: 28px; width: 202px;" required/>
                      <option value="">Select</option>
                      <option value="Document request">Document request</option>
                      <option value="Account not elegible for 3rd party deposits">Account not elegible for 3rd party deposits</option>
                      <option value="Idology">Idology</option>
                      <option value="Activated card in locked status">Activated card in locked status</option>
                      <option value="Failure to select correct option in overnight shipping webform">Failure to select correct option in overnight shipping webform</option>
                      <option value="Failure to place card in a status that prevents fraud">Failure to place card in a status that prevents fraud</option>
                      <option value="Shipping request">Shipping request</option>
                      <option value="Fraud prevention Fraud">Fraud prevention Fraud</option>
                      <option value="Account manager">Account manager</option>
                      <option value="Failure to review account notes">Failure to review account notes</option>
                      <option value="card request">card request</option>
                      <option value="Sensitive information in account notes">Sensitive information in account notes</option>
                      <option value="Account documentation Sensitive information in account notes">Account documentation Sensitive information in account notes</option>
                      <option value="No account notes">No account notes</option>
                      <option value="Incorrect document request Incorrect documents requested">Incorrect document request Incorrect documents requested</option>
                      <option value="Tier 2">Tier 2</option>
                      <option value="Card activation">Card activation</option>
                      <option value="Incorrect information failed to refer to employer">Incorrect information failed to refer to employer</option>
                      <option value="Cancelled card">Cancelled card</option>
                      <option value="Failure to perform reversal">Failure to perform reversal</option>
                      <option value="Incorrect transcode">Incorrect transcode</option>
                      <option value="Failure to confirm CIP remediation Idology">Failure to confirm CIP remediation Idology</option>
                      <option value="Failure to validate address">Failure to validate address</option>
                      <option value="Incorrect information System review">Incorrect information System review</option>
                      <option value="Incorrect information Incorrect online referral">Incorrect information Incorrect online referral</option>
                      <option value="Fraud prevention Failure to place card in a status that prevents fraud">Fraud prevention Failure to place card in a status that prevents fraud</option>
                      <option value="Incorrect document request Limited status features">Incorrect document request Limited status features</option>
                      <option value="Incorrect document request Document request">Incorrect document request Document request</option>
                      <option value="False expectations regarding fee">False expectations regarding fee</option>
                      <option value="incorrect employer referral">incorrect employer referral</option>
                      <option value="Incorrect information False expectations">Incorrect information False expectations</option>
                      <option value="Pasted previous department's notes">Pasted previous department's notes</option>
                      <option value="Authentication Failure to request ID or CVV">Authentication Failure to request ID or CVV</option>
                      <option value="Fraud prevention Third party authorization">Fraud prevention Third party authorization</option>
                      <option value="Gas hold">Gas hold</option>
                      <option value="RLH for transaction already completed">RLH for transaction already completed</option>
                      <option value="Incorrect system usage Idology">Incorrect system usage Idology</option>
                      <option value="Unauthorized change information">Unauthorized change information</option>
                      <option value="Incorrect system usage Cancelled card">Incorrect system usage Cancelled card</option>
                      <option value="direct deposit">direct deposit</option>
                      <option value="Unrequested change Unauthorized account information change">Unrequested change Unauthorized account information change</option>
                      <option value="Incorrect system usage incorrect funds transfer">Incorrect system usage incorrect funds transfer</option>
                      <option value="Incorrect information Failure to review account notes">Incorrect information Failure to review account notes</option>
                      <option value="Authentication Assisting unverified caller">Authentication Assisting unverified caller</option>
                      <option value="N/A">N/A</option>
                      <option value="Third party authorization">Third party authorization</option>
                      <option value="Failure to confirm CIP remediation Deposits">Failure to confirm CIP remediation Deposits</option>
                      <option value="Incorrect system usage False expectations regarding fee">Incorrect system usage False expectations regarding fee</option>
                      <option value="Loaded card skipping pre auth process">Loaded card skipping pre auth process</option>
                      <option value="Running balance">Running balance</option>
                      <option value="Incorrect system usage Failure to submit webform">Incorrect system usage Failure to submit webform</option>
                      <option value="System review">System review</option>
                      <option value="Limited status features">Limited status features</option>
                      <option value="Unnecessary country exception and document request">Unnecessary country exception and document request</option>
                      <option value="Fraud prevention Full card number">Fraud prevention Full card number</option>
                      <option value="Wrong load amount">Wrong load amount</option>
                      <option value="Failure to confirm CIP remediation DDS request">Failure to confirm CIP remediation DDS request</option>
                      <option value="Bill pay">Bill pay</option>
                      <option value="Incorrect online referral">Incorrect online referral</option>
                      <option value="funds realesed without RLH">funds realesed without RLH</option>
                      <option value="Incorrect information Deposits">Incorrect information Deposits</option>
                      <option value="Country exception with limited compliance">Country exception with limited compliance</option>
                      <option value="Failure to confirm CIP remediation Card activation">Failure to confirm CIP remediation Card activation</option>
                      <option value="False expectations">False expectations</option>
                      <option value="Authentication False expectations">Authentication False expectations</option>
                      <option value="Full card number">Full card number</option>
                      <option value="Shipping procedure Failure to validate address">Shipping procedure Failure to validate address</option>
                      <option value="Account documentation Pasted previous department's notes">Account documentation Pasted previous department's notes</option>
                      <option value="Invalid transfer False expectations regarding fee">Invalid transfer False expectations regarding fee</option>
                      <option value="Incorrect system usage Card status update">Incorrect system usage Card status update</option>
                      <option value="Shipping procedure Failure to submit webform">Shipping procedure Failure to submit webform</option>
                      <option value="Incorrect system usage Unauthorized change information">Incorrect system usage Unauthorized change information</option>
                      <option value="Deposits">Deposits</option>
                      <option value="Incorrect deposit expectations">Incorrect deposit expectations</option>
                      <option value="DOB was off">DOB was off</option>
                      <option value="Rudeness">Rudeness</option>
                      <option value="Invalid transfer Running balance">Invalid transfer Running balance</option>
                      <option value="Account notes stating cannot be swithced to active">Account notes stating cannot be swithced to active</option>
                      <option value="Incorrect system usage Incorrect transcode">Incorrect system usage Incorrect transcode</option>
                      <option value="Funds transfer with locked account">Funds transfer with locked account</option>
                      <option value="Placed incorrect card as lost">Placed incorrect card as lost</option>
                      <option value="Debited overnight shipping">Debited overnight shipping</option>
                      <option value="One time courtesy release">One time courtesy release</option>
                      <option value="Transaction release">Transaction release</option>
                      <option value="MoneyGram Western Union funds loading">MoneyGram Western Union funds loading</option>
                      <option value="Failure to request ID or CVV">Failure to request ID or CVV</option>
                      <option value="Incorrect information direct deposit">Incorrect information direct deposit</option>
                      <option value="Failed to lock card when ch failed SIP verficati">Failed to lock card when ch failed SIP verficati</option>
                      <option value="(blank)">(blank)</option>
                      <option value="Incorrect amount reimburstment">Incorrect amount reimburstment</option>
                      <option value="Card number">Card number</option>
                      <option value="Over $500 RLH">Over $500 RLH</option>
                      <option value="Activated wroong card">Activated wroong card</option>
                      <option value="Failure to confirm CIP remediation Document request">Failure to confirm CIP remediation Document request</option>
                      <option value="Fraud prevention Card status update">Fraud prevention Card status update</option>
                      <option value="Incorrect document request explanation">Incorrect document request explanation</option>
                      <option value="Card replacement">Card replacement</option>
                      <option value="Incorrect documents requested">Incorrect documents requested</option>
                      <option value="incorrect funds transfer">incorrect funds transfer</option>
                      <option value="Shipping procedure Failure to select correct option in overnight shipping webform">Shipping procedure Failure to select correct option in overnight shipping webform</option>
                      <option value="Incorrect information Limited status features">Incorrect information Limited status features</option>
                      <option value="Cancelled wrong card">Cancelled wrong card</option>
                      <option value="Fraud">Fraud</option>
                      <option value="Unnecessary request">Unnecessary request</option>
                      <option value="Convenience check">Convenience check</option>
                      <option value="Incorrect information Unauthorized change information">Incorrect information Unauthorized change information</option>
                      <option value="Incorrect information No account notes">Incorrect information No account notes</option>
                      <option value="Unrequested card activation">Unrequested card activation</option>
                      <option value="Fraud prevention Activated card in locked status">Fraud prevention Activated card in locked status</option>
                      <option value="Documents requested after Ido pass">Documents requested after Ido pass</option>
                      <option value="Incorrect document request Documents requested after Ido pass">Incorrect document request Documents requested after Ido pass</option>
                      <option value="Address update">Address update</option>
                      <option value="Authentication Third party authorization">Authentication Third party authorization</option>
                      <option value="failed to refer to employer">failed to refer to employer</option>
                      <option value="Unrequested change Accessed wrong account">Unrequested change Accessed wrong account</option>
                      <option value="CH could not use card online">CH could not use card online</option>
                      <option value="Incorrect information Card status update">Incorrect information Card status update</option>
                      <option value="Invalid transfer Disputes">Invalid transfer Disputes</option>
                      <option value="Accessed wrong account">Accessed wrong account</option>
                      <option value="Incorrect system usage Activated wroong card">Incorrect system usage Activated wroong card</option>
                      <option value="third party deposits authorization">third party deposits authorization</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">QA sub-section impacted</span>
                  <div class="form-line">
                    <input type="text"  name="qa_sub_section_impacted" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Secondary QA sub-section <br> impacted if applicable</span>
                  <div class="form-line">
                    <input type="text" name="secondary_qa_sub_section_impacted" style="height: 48px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Amount of finantial impact </span>
                  <div class="form-line">
                    <input type="text" placeholder="(USA) $" name="amount_finantial_impact" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Detected by</span>
                  <div class="form-line">
                    <select  name="detected_by" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="Sitel Baguio">Sitel Baguio</option>
                      <option value="Sitel Spartanburg">Sitel Spartanburg</option>
                      <option value="Sitel Cali">Sitel Cali</option>
                      <option value="ADP">ADP</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Financial Impact amount</span>
                  <div class="form-line">
                    <select  name="financial_impact" style="height: 28px; width: 200px;" required/>
                      <option value="">Select</option>
                      <option value="YES">YES</option>
                      <option value="NO">NO</option>
                    </select>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">QA Assigned</span>
                  <div class="form-line">
                    <input type="text" name="qa_assigned" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Employee's Role</span>
                  <div class="form-line">
                    <input type="text" name="employee_role" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Wave</span>
                  <div class="form-line">
                    <input type="text" name="wave" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Immediate Supervisor</span>
                  <div class="form-line">
                    <input type="text" name="immediate_supervisor" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Operations Manager</span>
                  <div class="form-line">
                    <input type="text" name="operations_manager" style="height: 28px; width: 200px;" required/>
                  </div>
                </div>
              </center>
            </div>
            <div class="col-md-6">
              <center>
                <div class="input-group">
                  <span style="width: 200px;" class="input-group-addon">Agent Status</span>
                  <div class="form-line">
                    <input type="text" name="agent_status" style="height: 28px; width: 205px;" required/>
                  </div>
                </div>
              </center>
            </div>
          </div>
        </form> 
        <!--/FORMULARIO-->
      </div>
    </div>    
  </div>
</div>
@include('layouts.dash.footer')
<script>
  formatTime();
</script>

