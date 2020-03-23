<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/ico" href="{{ asset('img//logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Refilwe  Akaru Zobane, Dawn Chikoki">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="{{ asset('css/reportGen.css') }}" rel="stylesheet">
    <title>Khanyisa | Reports</title>
</head>
<body>
<sidenav>
        <ul>
            <li class="brand"><a href="{{ url('/home') }}"><img src="{{ asset('img//Khanyisa1.png') }}" alt="Company Logo"></a></li>
                <li class="menu"><a href="{{ url('/home') }}"><img src="{{ asset('img/surface1.svg') }}" alt="Leads Logo">Leads</a></li>
                <li class="menu"><a href="debotList.php"><img src="{{ asset('img/Business.svg') }}" alt="Businesses Logo">Businesses</a></li>
                <li class="menu"><a href="{{ url('/individual') }}"><img src="{{ asset('img/person.svg') }}">Individuals</a></li>
                <li class="menu active"><a href="{{ url('/reports') }}"><img src="{{ asset('img/XMLID_71_.svg') }}">Report</a></li>
                <li class="menu"><a href="{{ url('/contacts') }}"><img src="{{ asset('img/layer1.svg') }}">Contacts</a></li>
                <li class="menu"><a href="report.php"><img src="{{ asset('img/Payment.svg') }}">Claims</a></li>
                <li class="logout"><a href="{{ route('logout') }}"><img src="">Logout</a></li>
            </ul>
        </sidenav>
        <nav>
        <p id='pageTitle'>Reports</p>
            <a href="#"><Message><img src="{{ asset('img/Group 291.svg') }}"><br>Message</Message></a>
            <a href="#"><Import><img src="{{ asset('img/import.svg') }}"><br>Import</Import></a>
            <a href="#"><Export><img src="{{ asset('img/export.svg') }}"><br>Export</Export></a>
            <button onclick="openSearch()"><i class="fas fa-search"></i></button>
            <a href="#"><new onclick="newLeadpopup()"><i class="fas fa-save" id="saveIcon"></i></new></a>
        </nav>
        




<div class="row" id="mainBody">
    

  @if($id == "NLvsI")
    <div class="tab-content">
        <div class="tab-pane active" id="home-vr">
            <form method="post" action="{{ url('/downloadPDF2') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="filterBlock">
            <filterTitle> Filter: </filterTitle>
            <div class="formControl">           
                <label>View</label>
                <select name="viewFilterOne" id="viewFilterOne">
                    <option value="NewLeads">New Leads</option>
                    <option value="Individuals">Individuals</option>
                </select>
            </div>
            <div class="formControl">
                <label>Shop Steward</label>
                <select name="ShopStewardFilterOne" id="demo">
                <option value="%">All</option>
                    @foreach ($shopStewart as $ss)
                    <option value="{{$ss->FullName}}">{{$ss->FullName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="formControl">
                <label>Province</label>
                <select name="provinceFilterOne" id="provinceFilterOne">
                <option value="%">All</option>
                @foreach ($province as $p)
                    <option value="{{$p->province_name}}">{{$p->province_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="formControl">
                <label>Region</label>
                <select name="regionFilterOne" id="regionFilterOne">
                <option value="%">All</option>
                    @foreach ($regions as $r)
                    <option value="{{$r->region_name}}">{{$r->region_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="formControl">
                <label>Station</label>
                <select name="stationFilterOne" id="stationFilterOne">
                <option value="%">All</option>
                    @foreach ($stations as $s)
                    <option value="{{$s->station_name}}">{{$s->station_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="formControl">
                <label>Date</label>
                <input type="text" name="dates" class="textinput" value="<?php echo date('Y-m-d');?>" format="YYYY-MM-DD">
            </div>
            <div class="formControl">           
                <label>Agent</label>
                <select name="AgentFliterOne" id="agentFilter">
                    <option value="%">All</option>
                    @foreach ($users as $u)
                    <option value="{{$u->name }}">{{$u->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="formControl">           
                <label>Premium</label>
                <select name="premiumFilterOne" id="premiumFilterOne">
                    <option value="%">All</option>
                    <option value="Paid">Paid</option>
                    <option value="Unpaid">Unpaid</option>
                </select>
            </div>
            <div class="buttons">
            <button class="xlsxPdfBTN" name="action" value="ExportCSV">Export CSV</button>
            <button class="xlsxPdfBTN" name="action" value="ExportPDF">Export PDF</button>
            </div>
            </form>
        </div>
            <table id="myTable">
                <tr id="th">
                    <th>NAME</th>
                    <th>ID NUMBER</th>
                    <th>PREMIUM</th>
                    <th>SHOP STEWARD</th>
                    <th>AGENT</th>
                    <th>DATE CREATED</th>
                </tr>
                @foreach ($indi as $i)
                @if($i->NewLead == 'Yes')
                <tr>
                    <td>{{$i->MainName}}</td>
                    <td>{{$i->MainIDNumber}}</td>
                    <td>{{$i->MainPremium}}</td>
                    <td>{{$i->ShopSteward}}</td>
                    <td>{{$i->agent}}</td>
                    <td>{{$i->created_at}}</td>
                    <td hidden>{{$i->MainRegion}}</td>
                    <td hidden>{{$i->MainStation}}</td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
        <div class="tab-pane" id="profile-vr">
        <div class="filterBlock">
            <filterTitle> Filter: </filterTitle>
            <div class="formControl">           
                <label>View</label>
                <select name="viewFilter2" id="viewFilter2">
                    <option value="NewLeads">New Leads</option>
                    <option value="Individuals">Individuals</option>
                </select>
            </div>
            <div class="formControl">
                <label>Shop Steward</label>
                <select name="ShopStewardFilter2" id="demo2">
                <option value="%">All</option>
                    @foreach ($shopStewart as $ss)
                    <option value="{{$ss->FullName}}">{{$ss->FullName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="formControl">
                <label>Province</label>
                <select name="provinceFilter2" id="provinceFilter2">
                <option value="%">All</option>
                @foreach ($province as $p)
                    <option value="{{$p->province_name}}">{{$p->province_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="formControl">
                <label>Region</label>
                <select name="regionFilter2" id="regionFilter2">
                <option value="%">All</option>
                    @foreach ($regions as $r)
                    <option value="{{$r->region_name}}">{{$r->region_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="formControl">
                <label>Station</label>
                <select name="stationFilter2" id="stationFilter2">
                <option value="%">All</option>
                    @foreach ($stations as $s)
                    <option value="{{$s->station_name}}">{{$s->station_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="formControl">
                <label>Date</label>
                <input type="text" name="dates2" class="textinput" value="<?php echo date('Y-m-d');?>" format="YYYY-MM-DD">
            </div>
            <div class="formControl">           
                <label>Agent</label>
                <select name="AgentFliter2" id="agentFilter">
                    <option value="%">All</option>
                    @foreach ($users as $u)
                    <option value="{{$u->name }}">{{$u->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="formControl">           
                <label>Premium</label>
                <select name="premiumFilter2" id="premiumFilter2">
                    <option value="%">All</option>
                    <option value="Paid">Paid</option>
                    <option value="Unpaid">Unpaid</option>
                </select>
            </div>
            <div class="buttons">
            <button class="xlsxPdfBTN" name="action" value="ExportCSV">Export CSV</button>
            <button class="xlsxPdfBTN" name="action" value="ExportPDF">Export PDF</button>
            </div>
            </form>
        </div>
            <table  id="myTable2">
                <tr id="th">
                    <th>NAME</th>
                    <th>ID NUMBER</th>
                    <th>PREMIUM</th>
                    <th>SHOP STEWARD</th>
                    <th>AGENT</th>
                    <th>DATE CREATED</th>
                </tr>
                @foreach ($indi as $i)
                @if($i->NewLead == 'No')
                <tr>
                    <td>{{$i->MainName}}</td>	
                    <td>{{$i->MainIDNumber}}</td>
                    <td>{{$i->MainPremium}}</td>
                    <td>{{$i->ShopSteward}}</td>
                    <td>{{$i->agent}}</td>
                    <td>{{$i->created_at}}</td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
    </div>
<!--
        <ul class="nav nav-tabs tabs-right vertical-text">
            <li><a href="#home-vr" data-toggle="tab" aria-selected="true" onclick="">New Leads</a></li>
            <li><a href="#profile-vr" data-toggle="tab" aria-selected="false" onclick="">Individuals</a></li>
        </ul>
-->

 @elseif($id == "Statuses")
        <div class="tab-content">
            <div class="filterBlock">
                <filterTitle> Filter: </filterTitle>
                <div class="formControl">
                    <label>Date</label>
                    <input type="text" name="dates" class="textinput">
                </div>
                <div class="formControl">
                    <label>Shop Steward</label>
                    <select name="" onchange="ShopSteward()">
                        @foreach ($shopStewart as $ss)
                        <option value="{{$ss->FullName}}">{{$ss->FullName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="formControl">           
                    <label>Agent</label>
                    <select name="">
                        <option>No Agents Avaiable</option>
                    </select>
                </div>
                <button class="xlsxPdfBTN">Export CSV</button>
                <button class="xlsxPdfBTN">Export PDF</button>
            </div>
            <div class="tab-pane active" id="home-vr">
            <table>
                <tr id="th">
                    <th>NAME</th>
                    <th>ID NUMBER</th>
                    <th>PREMIUM</th>
                    <th>SHOP STEWARD</th>
                    <th>AGENT</th>
                    <th>DATE CREATED</th>
                </tr>
                @foreach ($indi as $i)
                @if($i->Status == 'Active')
                <tr>
                    <td>{{$i->MainName}}</td>
                    <td>{{$i->MainIDNumber}}</td>
                    <td>{{$i->MainPremium}}</td>
                    <td>{{$i->ShopSteward}}</td>
                    <td>{{$i->agent}}</td>
                    <td>{{$i->created_at}}</td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
        <div class="tab-pane" id="profile-vr">
            <table>
                <tr id="th">
                    <th>NAME</th>
                    <th>ID NUMBER</th>
                    <th>PREMIUM</th>
                    <th>SHOP STEWARD</th>
                    <th>AGENT</th>
                    <th>DATE CREATED</th>
                </tr>
                @foreach ($indi as $i)
                @if($i->Status == 'Pending')
                <tr>
                    <td>{{$i->MainName}}</td>	
                    <td>{{$i->MainIDNumber}}</td>
                    <td>{{$i->MainPremium}}</td>
                    <td>{{$i->ShopSteward}}</td>
                    <td>{{$i->agent}}</td>
                    <td>{{$i->created_at}}</td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
        <div class="tab-pane" id="Inactive-vr">
            <table>
                <tr id="th">
                    <th>NAME</th>
                    <th>ID NUMBER</th>
                    <th>PREMIUM</th>
                    <th>SHOP STEWARD</th>
                    <th>AGENT</th>
                    <th>DATE CREATED</th>
                </tr>
                @foreach ($indi as $i)
                @if($i->Status == 'Inactive')
                <tr>
                    <td>{{$i->MainName}}</td>	
                    <td>{{$i->MainIDNumber}}</td>
                    <td>{{$i->MainPremium}}</td>
                    <td>{{$i->ShopSteward}}</td>
                    <td>{{$i->agent}}</td>
                    <td>{{$i->created_at}}</td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
        <div class="tab-pane" id="Open-vr">
            <table>
                <tr id="th">
                    <th>NAME</th>
                    <th>ID NUMBER</th>
                    <th>PREMIUM</th>
                    <th>SHOP STEWARD</th>
                    <th>AGENT</th>
                    <th>DATE CREATED</th>
                </tr>
                @foreach ($indi as $i)
                @if($i->Status == 'Open')
                <tr>
                    <td>{{$i->MainName}}</td>	
                    <td>{{$i->MainIDNumber}}</td>
                    <td>{{$i->MainPremium}}</td>
                    <td>{{$i->ShopSteward}}</td>
                    <td>{{$i->agent}}</td>
                    <td>{{$i->created_at}}</td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
        <div class="tab-pane" id="ClientConcent-vr">
            <table>
                <tr id="th">
                    <th>NAME</th>
                    <th>ID NUMBER</th>
                    <th>PREMIUM</th>
                    <th>SHOP STEWARD</th>
                    <th>AGENT</th>
                    <th>DATE CREATED</th>
                </tr>
                @foreach ($indi as $i)
                @if($i->Status == 'Client Concent')
                <tr>
                    <td>{{$i->MainName}}</td>	
                    <td>{{$i->MainIDNumber}}</td>
                    <td>{{$i->MainPremium}}</td>
                    <td>{{$i->ShopSteward}}</td>
                    <td>{{$i->agent}}</td>
                    <td>{{$i->created_at}}</td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
        <div class="tab-pane" id="InsurereQuote-vr">
            <table>
                <tr id="th">
                    <th>NAME</th>
                    <th>ID NUMBER</th>
                    <th>PREMIUM</th>
                    <th>SHOP STEWARD</th>
                    <th>AGENT</th>
                    <th>DATE CREATED</th>
                </tr>
                @foreach ($indi as $i)
                @if($i->Status == 'Insurer Quote')
                <tr>
                    <td>{{$i->MainName}}</td>	
                    <td>{{$i->MainIDNumber}}</td>
                    <td>{{$i->MainPremium}}</td>
                    <td>{{$i->ShopSteward}}</td>
                    <td>{{$i->agent}}</td>
                    <td>{{$i->created_at}}</td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
        </div>
        <ul class="nav nav-tabs tabs-right vertical-text">
            <li><a href="#home-vr" data-toggle="tab" aria-selected="true" onclick="">Active</a></li>
            <li><a href="#profile-vr" data-toggle="tab" aria-selected="false" onclick="">Pending</a></li>
            <li><a href="#Inactive-vr" data-toggle="tab" aria-selected="false" onclick="">Inactive</a></li>
            <li><a href="#Open-vr" data-toggle="tab" aria-selected="false" onclick="">Open</a></li>
            <li><a href="#ClientConcent-vr" data-toggle="tab" aria-selected="false" onclick="">Client Concent</a></li>
            <li><a href="#InsurereQuote-vr" data-toggle="tab" aria-selected="false" onclick="">Insurer Quote</a></li>
        </ul>
 @endif

</div>
</body>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>
    document.getElementById('viewFilterOne').addEventListener('click',function(){
        switch(document.getElementById('viewFilterOne').value){
            case "Individuals":
                document.getElementById('home-vr').style.display = "none";
                document.getElementById('profile-vr').style.display = "block";
                break;
            case "NewLeads":
                document.getElementById('home-vr').style.display = "block";
                document.getElementById('profile-vr').style.display = "none";
                break;
            default:
                break;
                
               }
        console.log(document.getElementById('viewFilterOne').value);
    });
    document.getElementById('viewFilter2').addEventListener('click',function(){
        switch(document.getElementById('viewFilter2').value){
            case "Individuals":
                document.getElementById('home-vr').style.display = "none";
                document.getElementById('profile-vr').style.display = "block";
                break;
            case "NewLeads":
                document.getElementById('home-vr').style.display = "block";
                document.getElementById('profile-vr').style.display = "none";
                break;
            default:
                break;
                
               }
        console.log(document.getElementById('viewFilterOne').value);
    });
    $(function() {
  $('input[name="dates"]').daterangepicker({
    opens: 'left',
    "locale": {
        "format": "YYYY-MM-DD",
        "separator": " ~ ",}
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    var table = document.getElementById("myTable");
    var tr = table.getElementsByTagName("tr");
    var td, i, txtValue;

    for (i = 1; i < tr.length; i++) {
        td = ( (tr[i].style.display.value == "none") ? "" : tr[i].getElementsByTagName("td")[5] );
        // td = tr[i].getElementsByTagName("td")[5];
        if (td) {
            txtValue = td.textContent || td.innerText;
            console.log("td="+txtValue);
            if(txtValue > start.format('YYYY-MM-DD') && txtValue < end.format('YYYY-MM-DD')){
                tr[i].style.display = "";
                    console.log("it shows");
            }else{tr[i].style.display = "none";console.log("it doesnt show");}
        }
    }
  });
});
document.getElementById("demo").addEventListener("click", function(){
    var filter = document.getElementById("demo").value.toUpperCase();
    var table = document.getElementById("myTable");
    var tr = table.getElementsByTagName("tr");
    var td, i, txtValue;
      // Loop through all table rows, and hide those who don't match the search query
  for (i = 1; i < tr.length; i++) {
    td = ( (tr[i].style.display.value == "none") ? "" : tr[i].getElementsByTagName("td")[3] );
    console.log("tr="+tr[i].style.display.value);
    if (td != "" && td) {
      txtValue = td.textContent || td.innerText;
      console.log("td="+txtValue);
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
    
  }
    console.log(filter);
});


$('input[name="dates2"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    var table = document.getElementById("myTable2");
    var tr = table.getElementsByTagName("tr");
    var td, i, txtValue;

    for (i = 1; i < tr.length; i++) {
        td = ( (tr[i].style.display.value == "none") ? "" : tr[i].getElementsByTagName("td")[5] );
        // td = tr[i].getElementsByTagName("td")[5];
        if (td) {
            txtValue = td.textContent || td.innerText;
            console.log("td="+txtValue);
            if(txtValue > start.format('YYYY-MM-DD') && txtValue < end.format('YYYY-MM-DD')){
                tr[i].style.display = "";
                    console.log("it shows");
            }else{tr[i].style.display = "none";console.log("it doesnt show");}
        }
    }
  });

  document.getElementById("shopFilter2").addEventListener("click", function(){
    var filter = document.getElementById("shopFilter2").value.toUpperCase();
    var table = document.getElementById("myTable2");
    var tr = table.getElementsByTagName("tr");
    var td, i, txtValue;
      // Loop through all table rows, and hide those who don't match the search query
  for (i = 1; i < tr.length; i++) {
    td = ( (tr[i].style.display.value == "none") ? "" : tr[i].getElementsByTagName("td")[3] );
    console.log("tr="+tr[i].style.display.value);
    if (td != "" && td) {
      txtValue = td.textContent || td.innerText;
      console.log("td="+txtValue);
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
    
  }
    console.log(filter);
});

document.getElementById('agentFilter').addEventListener("click", function(){
    var filter = document.getElementById("agentFilter").value.toUpperCase();
    var table = document.getElementById("myTable");
    var tr = table.getElementsByTagName("tr");
    var td, i, txtValue;
    for (i = 1; i < tr.length; i++) {
    td = ( (tr[i].style.display.value == "none") ? "" : tr[i].getElementsByTagName("td")[4] );
    console.log("tr="+tr[i].style.display.value);
    if (td != "" && td) {
      txtValue = td.textContent || td.innerText;
      console.log("td="+txtValue);
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
    
  }
    console.log(filter);
});
document.getElementById("agentFilter2").addEventListener("click", function(){
    var filter = document.getElementById("agentFilter2").value.toUpperCase();
    var table = document.getElementById("myTable2");
    var tr = table.getElementsByTagName("tr");
    var td, i, txtValue;
      // Loop through all table rows, and hide those who don't match the search query
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    console.log("tr="+tr[i].style.display.value);
    if (td != "" && td) {
      txtValue = td.textContent || td.innerText;
      console.log("td="+txtValue);
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
    
  }
    console.log(filter);
});
document.getElementById("regionFilterOne").addEventListener("click", function(){
    var filter = document.getElementById("regionFilterOne").value.toUpperCase();
    var table = document.getElementById("myTable");
    var tr = table.getElementsByTagName("tr");
    var td, i, txtValue;

          // Loop through all table rows, and hide those who don't match the search query
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[6];
    console.log("tr="+tr[i].style.display.value);
    if (td != "" && td) {
      txtValue = td.textContent || td.innerText;
      console.log("td="+txtValue);
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
    
  }
});
document.getElementById("stationFilterOne").addEventListener("click", function(){
    var filter = document.getElementById("stationFilterOne").value.toUpperCase();
    var table = document.getElementById("myTable");
    var tr = table.getElementsByTagName("tr");
    var td, i, txtValue;

          // Loop through all table rows, and hide those who don't match the search query
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[7];
    console.log("tr="+tr[i].style.display.value);
    if (td != "" && td) {
      txtValue = td.textContent || td.innerText;
      console.log("td="+txtValue);
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
    
  }
});

</script>
</html>