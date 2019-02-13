@include('layouts.dash.header')
@include('layouts.dash.menu')
<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">
        <div class="header">
          <center><span style="font: oblique bold 120% cursive; font-size: 90px;"><strong>Welcome</strong></span></center>
        </div>
        <center>
            <span style="font-size: 4em;"><strong> {{ Auth::user()->name}}</strong></span>
        </center>
        <center>
          <span style="font-size: 4em;"><strong> {{ Auth::user()->position}}</strong></span>
        </center>
        @include('alerts.notification')
    </div>
</div>
</div>
@include('layouts.dash.footer')