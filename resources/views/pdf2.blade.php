
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <style>
      body{
        font-size:12px;
        font-family: Arial, sans-serif;
        background-image: url("/img/logo.png");
        background-repeat:no-repeat;
        width:100%;
        
      }
      body::after{
        opacity:0.5;
      }
      table{
        width:100%;
      }
      table > thead{
        background-color:#343643;
        color:white;
      }
      table > tbody > tr{
        border:1px solid red;
        border-bottom:1px solid #343643;
      }
      td{
        padding:5px;
        border-bottom:1px solid #343643;
      }
      h1{
        color:#343643;
        text-decoration: underline;
        text-align:center;
      }
    </style>
    <div class="MainBody">

    <h1>Khanyisa Report</h1>
    <br><br><br><br><br>
      Created: <?php echo date('Y-m-d'); ?>
      <br>
    Shop steward: @if($ShopStewardFilterOne == "%")
      All
    @else {{$ShopStewardFilterOne}}
    @endif
    <br>
    Agent: 
    @if($AgentFliterOne == "%")
    All
    @else {{$AgentFliterOne}}
    @endif
    <br>
    Start: {{ $startDate}}<br>
    End : {{ $endDate}}<br>
    Station
    @if($StationFliterOne == "%")
    All
    @else {{$StationFliterOne}}
    @endif
     <br>
    Region: 
    @if($RegionFliterOne == "%")
    All
    @else {{$RegionFliterOne}}
    @endif 
     <br><br>
    <table class="table table-bordered">
    <thead>
      <tr>
        <td><b>PLOICY NUMBER</b></td>
        <td><b>PRODUCT TYPE</b></td>
        <td><b>NAME</b></td>
        <td><b>ID NUMBER</b></td>
        <td><b>PREMIUM</b></td>
        <td><b>SHOP STEWARD</b></td>
        <td><b>AGENT</b></td>
        <td><b>DATE CREATED</b></td>     
      </tr>
      </thead>
      <tbody>
      @foreach($final as $f)
      <tr>
        <td>{{ $f->policy_num}}</td>
        <td>
        {{$f->ProType}}
        </td>
        <td>
        {{$f->MainName}}
        </td>
        <td>
        {{$f->MainIDNumber}}
        </td>
        <td>
        {{$f->MainPremium}}
        </td>
        <td>
        {{$f->ShopSteward}}
        </td>
        <td>
        {{$f->agent}}
        </td>
        <td>
        {{$f->created_at}}
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
    </div>
    <!-- <h1>Filters are working but not yet filtering for "All" in the controller and theres no station and region handler yet</h1>
      <p>{{ $indi }}</p> -->
  </body>
</html>