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
      <!--MESSAJES ERROR-->
      @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <br><br><br>
      <!--/MESSAJES ERROR-->      
      <!--TABLA-->
      <div class="body table-responsive">
        <table id="fedexrawdata" class="table table-bordered table-striped table-hover dataTable js-exportable col-lg-12">
          <thead>
            <tr>
              <th>ID</th>
              <th>Call Date</th>
              <th>Call time</th>
              <th>Call length</th>
              <th>Call ID</th>
              <th>Date Received</th>
              <th>Date answered</th>
              <th>Received from</th>
              <th>LOB/Product</th>
              <th>CSP</th>
              <th>ADP - Lawson</th>
              <th>What was the incident/infraction</th>
              <th>Tips to correct incident / infraction</th>
              <th>Call Synopsis</th>
              <th>Findings</th>
              <th>Validity</th>
              <th>Reason for Validity</th>
              <th>Reason for contact</th>
              <th>Resolution provided?</th>
              <th>Finantial impact?</th>
              <th>KSW Tag</th>
              <th>KSW tag area of opportunity</th>
              <th>Acknowledgement Status</th>
              <th>Rudeness or ZTP?</th>
              <th>QA section impacted</th>
              <th>Created by</th>
              <th>Error type</th>
              <th>User ID</th>
              <th>Sub error type</th>
              <th>QA sub-section impacted</th>
              <th>Secondary QA sub-section impacted if applicable</th>
              <th>Amount of finantial impact</th>
              <th>Detected by</th>
              <th>Financial Impact amount</th>
              <th>Interval Formula</th>
              <th>Month</th>
              <th>Weekend</th>
              <th>QA Assigned</th>
              <th>Employee's Role</th>
              <th>Wave</th>
              <th>Immediate Supervisor</th>
              <th>Operations Manager</th>
              <th>Agent Status</th>
              <th>Repeat Offender?</th>
              <th>Edit</th>
              @if(Auth::user()->rol == "developer" or Auth::user()->rol == "administator")
              <th>Delete</th>
              @endif
            </tr>
          </thead>
          <tbody>
            @foreach($tracker as $tra)
            <input type="hidden" value="{{$tra->id_tracker}}" id="id_tracker">
              <tr>
                <td>{{$tra->id_tracker}}</td>
                <td>{{$tra->call_date}}</td>
                <td>{{$tra->call_time}}</td>
                <td>{{$tra->call_length}}</td>
                <td>{{$tra->call_id}}</td>
                <td>{{$tra->date_received}}</td>
                <td>{{$tra->date_answered}}</td>
                <td>{{$tra->received_from}}</td>
                <td>{{$tra->lob_product}}</td>
                <td>{{$tra->csp}}</td>
                <td>{{$tra->adp_lawson}}</td>
                <td>{{$tra->what_incident}}</td>
                <td>{{$tra->correct_incident}}</td>
                <td>{{$tra->call_synopsis}}</td>
                <td>{{$tra->findings}}</td>
                <td>{{$tra->validity}}</td>
                <td>{{$tra->reason_for_validity}}</td>
                <td>{{$tra->reason_for_contact}}</td>
                <td>{{$tra->resolution_provided}}</td>
                <td>{{$tra->finantial_impact}}</td>
                <td>{{$tra->ksw_tag}}</td>
                <td>{{$tra->area_opportunity}}</td>
                <td>{{$tra->acknowledgement}}</td>
                <td>{{$tra->rudeness_ztp}}</td>
                <td>{{$tra->qa_section}}</td>
                <td>{{$tra->name}}</td>
                <td>{{$tra->error_type}}</td>
                <td>{{$tra->user_id}}</td>
                <td>{{$tra->sub_error_type}}</td>
                <td>{{$tra->qa_sub_section_impacted}}</td>
                <td>{{$tra->secondary_qa_sub_section_impacted}}</td>
                <td>{{$tra->amount_finantial_impact}}</td>
                <td>{{$tra->detected_by}}</td>
                <td>{{$tra->financial_impact}}</td>
                <td>{{$tra->interval_formula}}</td>
                <td>{{$tra->month}}</td>
                <td>{{$tra->weekend}}</td>
                <td>{{$tra->qa_assigned }}</td>
                <td>{{$tra->employee_role }}</td>
                <td>{{$tra->wave}}</td>
                <td>{{$tra->immediate_supervisor}}</td>
                <td>{{$tra->operations_manager}}</td>
                <td>{{$tra->agent_status}}</td>
                <td>{{$tra->repeat_offender}}</td>
                <td><a class="btn btn-info" href="{{url('adp/updateTracker?id='.$tra->id_tracker)}}"><span class="glyphicon glyphicon-wrench"></span></a></td>
                @if(Auth::user()->rol == "developer" or Auth::user()->rol == "administator")
                <td><button class="btn btn-warning"  onclick="abrirmodalDelete('deleteData','{{$tra->id_tracker}}')"><span class="glyphicon glyphicon-remove-circle"></span></button>
                </td>
                @endif
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!--/TABLA-->
    </div>    
  </div>
</div>
@include('layouts.dash.footer')
<script type="text/javascript">
  $(document).ready(function() 
  {
    tabladinamica("fedexrawdata");
  });  
</script>