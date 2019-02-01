@include('layouts.dash.header')
@include('layouts.dash.menu')
<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">
      <div class="header">
        <center><img style="width: 20%;margin-top: -5em" src="https://masquevinilo.com/4650-thickbox_default/vinilo-decorativo-bienvenido-ii.jpg"></center></div>
        <center>
      <span style="font-size: 4em;"><strong> {{ Auth::user()->name}}</strong></span>
      </center>
      <center>
      <span style="font-size: 4em;"><strong> {{ Auth::user()->rol}}</strong></span>
      </center>
      @include('alerts.notification')
    </div>
</div>
</div>
@include('layouts.dash.footer')