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

      <div class="header">
        <center><a class="btn btn-info" href="{{url('fedex/qualityPerformance')}}">Quality Performance</a></center>
      </div>
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
              <th>ADP</th>
              <th>Rep Name</th>
              <th>Customer 2</th>
              <th>Coach</th>
              <th>Wave</th>
              <th>Auditor</th>
              <th>Auditor Position</th>
              <th>Stage</th>
              <th>Behavior AHT</th>
              <th>Outcome Behavior</th>
              <th>Call ID</th>
              <th>Date and time of call</th>
              <th>Audit Date</th>
              <th>Call Duration</th>
              <th>Reason of the call</th>
              <th>Subtopic</th>
              <th>Driver AHT</th>
              <th>Score</th>
              <th>Rating Points</th>
              <th>Month</th>
              <th>1.1</th>
              <th>1.2</th>
              <th>1.3</th>
              <th>1.4</th>
              <th>1.5</th>
              <th>Process Compliance</th>
              <th>Eclipse</th>
              <th>2.1</th>
              <th>2.2</th>
              <th>2.3</th>
              <th>2.4</th>
              <th>Call Handling</th>
              <th>Efficiency</th>
              <th>3.1</th>
              <th>3.2</th>
              <th>3.3</th>
              <th>3.4</th>
              <th>4.1</th>
              <th>Comments1</th>
              <th>Comments2</th>
              <th>Comments3</th>
              <th>Comments4</th>
              <th>Comments5</th>
              <th>Comments6</th>
              <th>Comments7</th>
              <th>Comments8</th>
              <th>Comments9</th>
              <th>Comments10</th>
              <th>Comments11</th>
              <th>Comments12</th>
              <th>Comments13</th>
              <th>Comments14</th>
              <th>Comments15</th>
              <th>Comments16</th>
            </tr>
          </thead>
          <tbody>
            @foreach($rawdata as $raw)
              <tr>
                <td>{{$raw->adp}}</td>
                <td>{{$raw->name_agent}}</td>
                <td>{{$raw->customer}}</td>
                <td>{{$raw->coach_name}}</td>
                <td>{{$raw->wave}}</td>
                <td>{{$raw->name}}</td>
                <td>{{$raw->position}}</td>
                <td>{{$raw->stage}}</td>
                <td>{{$raw->behavior_aht}}</td>
                <td>{{$raw->outcome_behavior}}</td>
                <td>{{$raw->call_id}}</td>
                <td>{{$raw->date_and_time}}</td>
                <td>{{$raw->audit_date}}</td>
                <td>{{$raw->call_duration}}</td>
                <td>{{$raw->reason_of_the_call}}</td>
                <td>{{$raw->subtopic}}</td>
                <td>{{$raw->driver_aht}}</td>
                <td>{{$raw->score}}</td>
                <td>{{$raw->rating}}</td>
                <td>{{$raw->month}}</td>
                <td>{{$raw->p1_1}}</td>
                <td>{{$raw->p1_2}}</td>
                <td>{{$raw->p1_3}}</td>
                <td>{{$raw->p1_4}}</td>
                <td>{{$raw->p1_5}}</td>
                <td>{{$raw->process_compliance}}</td>
                <td>{{$raw->eclipse}}</td>
                <td>{{$raw->p2_1}}</td>
                <td>{{$raw->p2_2}}</td>
                <td>{{$raw->p2_3}}</td>
                <td>{{$raw->p2_4}}</td>
                <td>{{$raw->call_handling}}</td>
                <td>{{$raw->efficiency}}</td>
                <td>{{$raw->p3_1}}</td>
                <td>{{$raw->p3_2}}</td>
                <td>{{$raw->p3_3}}</td>
                <td>{{$raw->p3_4}}</td>
                <td>{{$raw->p4_1}}</td>
                <td>{{$raw->com1_1}}</td>
                <td>{{$raw->com1_2}}</td>
                <td>{{$raw->com1_3}}</td>
                <td>{{$raw->com1_4}}</td>
                <td>{{$raw->com1_5}}</td>
                <td>{{$raw->comments6}}</td>
                <td>{{$raw->comments7}}</td>
                <td>{{$raw->com2_2}}</td>
                <td>{{$raw->com2_3}}</td>
                <td>{{$raw->com2_4}}</td>
                <td>{{$raw->comments12}}</td>
                <td>{{$raw->comments13}}</td>
                <td>{{$raw->com3_1}}</td>
                <td>{{$raw->com3_2}}</td>
                <td>{{$raw->com3_3}}</td>
                <td>{{$raw->com3_4}}</td>
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