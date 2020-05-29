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
    <link href="{{ asset('css/reports.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <title>Khanyisa | Contatcs </title>
</head>
<body>
<sidenav>
        <ul>
            <li class="brand"><a href="{{ url('/home') }}"><img src="{{ asset('img/Khanyisa1.png') }}" alt="Company Logo"></a></li>
                <li class="menu"><a href="{{ url('/home') }}"><img src="{{ asset('img/surface1.svg') }}" alt="Leads Logo">Leads</a></li>
                <li class="menu"><a href="debotList.php"><img src="{{ asset('img/Business.svg') }}" alt="Businesses Logo">Businesses</a></li>
                <li class="menu"><a href="#"><img src="{{ asset('img/person.svg') }}">Individuals</a></li>
                <li class="menu  active"><a href="{{ url('/reports') }}"><img src="{{ asset('img/XMLID_71_.svg') }}">Report</a></li>
                <li class="menu"><a href="creditorList.php"><img src="{{ asset('img/layer1.svg') }}">Contacts</a></li>
                <li class="menu"><a href="report.php"><img src="{{ asset('img/Payment.svg') }}">Claims</a></li>
                <li class="logout"><a href="{{ route('logout') }}"><img src="">Logout</a></li>
            </ul>
        </sidenav>
  
        <nav>
        <a href="debotList.php"><p id='pageTitle'>Report</p></a>
            <a href="#"><Message><img src="{{ asset('img/Group 291.svg') }}"><br>Message</Message></a>
            <a href="#"><Import><img src="{{ asset('img/import.svg') }}"><br>Import</Import></a>
            <a href="#"><Export><img src="{{ asset('img/export.svg') }}"><br>Export</Export></a>
            <button onclick="openSearch()"><i class="fas fa-search"></i></button>
            <a href="#"><new onclick="newLeadpopup()"><i class="fas fa-plus" id="saveIcon"></i></new></a>
           
        </nav>  
        
        <div class="row" id="mainBody">
        
        <div class="col-md-12">
            
                <div class="row">
                    <div class="col-md-12">
                    <div class="block">
                        <button class="viewDetailsBTN"><a href="{{ url('/reportGen') }}">View details</a></button>
                        <canvas id="myChart" height="70"></canvas>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="block">
                    <button class="viewDetailsBTN"><a href="{{ url('/reportGen') }}">View details</a></button>
                    <canvas id="pie-chart" height="350"></canvas>
        </div>
                    </div>
                    <div class="col-md-6">
                    
                    </div>
                </div>
                
        </div>
    </div>
    </div>
        <script>
            var data = [0,0,0,0,0,0,0,0,0,0,0,0];
            var newLeads = [0,0,0,0,0,0,0,0,0,0,0,0];
            var date = new Date();
            var pie = [0,0,0,0,0,0];
            @foreach($indi as $contact)
                var x = " {{$contact->created_at}} ";
                switch("{{$contact->Status}}"){
                    case "Active":
                    pie[0] += 1; 
                    break;
                    case "Inactive":
                    pie[1] += 1; 
                    break;
                    case "Pending":
                    pie[2] += 1; 
                    break;
                    case "Insurer Quote":
                    pie[3] += 1; 
                    break;
                    case "Client Concent":
                    pie[4] += 1; 
                    break;
                    case "Open":
                    pie[5] += 1; 
                    break;
                    default:
                    console.log("default ssyas = "+"{{$contact->Status}}");
                    break;
                }
                if(x.substring(0, 5) == date.getFullYear()){
                    if("{{$contact->NewLead}}" == "No"){
                switch(x.substring(6, 8)){
                    case "01":
                    data[0] += 1;
                    break;
                    case "02":
                    data[1] += 1;
                    break;
                    case "03":
                    data[2] += 1;
                    break;
                    case "04":
                    data[3] += 1;
                    break;
                    case "05":
                    data[4] += 1;
                    break;
                    case "06":
                    data[5] += 1;
                    break;
                    case "07":
                    data[6] += 1;
                    break;
                    case "08":
                    data[7] += 1; 
                    break;  
                    case "09" :
                    data[8] += 1;
                    break;
                    case "10":
                    data[9] += 1;
                    break;
                    case "11":
                    data[10] += 1;
                    break;
                    case "12": 
                    data[11] += 1;
                    break; 
                    default:
                    console.log("dafault = "+ x.substring(6, 8) );
                    break;
                }
            }else{
                switch(x.substring(6, 8)){
                    case "01":
                    newLeads[0] += 1;
                    break;
                    case "02":
                    newLeads[1] += 1;
                    break;
                    case "03":
                    newLeads[2] += 1;
                    break;
                    case "04":
                    newLeads[3] += 1;
                    break;
                    case "05":
                    newLeads[4] += 1;
                    break;
                    case "06":
                    newLeads[5] += 1;
                    break;
                    case "07":
                    newLeads[6] += 1;
                    break;
                    case "08":
                    newLeads[7] += 1; 
                    break;  
                    case "09" :
                    newLeads[8] += 1;
                    break;
                    case "10":
                    newLeads[9] += 1;
                    break;
                    case "11":
                    newLeads[10] += 1;
                    break;
                    case "12": 
                    newLeads[11] += 1;
                    break; 
                    default:
                    console.log("dafault = "+ x.substring(6, 8) );
                    break;
                } 
            }
            }
            @endforeach
            console.log(data);
            console.log(newLeads);
            console.log(pie);
        var ctx = document.getElementById('myChart').getContext('2d');
 var myBarChart = new Chart(ctx, {
    type: 'bar',
    data:{
            labels: ["Jan", "Feb", "Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec"],
            datasets: [
                {
                    label: "New Leads",
                    backgroundColor: "rgba(255, 247, 0, 0.3)",
                    borderColor: "#fff700",
                    borderWidth:1,
                    data:data
                },
                {
                    label: "Invividuals",
                    backgroundColor: "rgba(255, 8, 0, 0.3)",
                    borderColor: "#ff0800",
                    borderWidth:1,
                    data: newLeads
                }
            ]
        },
    options: {
        barValueSpacing: 20,
        scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                }
            }]
        },
        title: {
        display: true,
        text: 'New leads VS Individuals created in '+ date.getFullYear()
      }
    }
});
new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Active", "Inactive", "Pending", "Insurer Quote", "Client Concent","Open"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["rgba(41, 184, 198,0.3)", "rgba(45, 84, 179,0.3)","rgba(66, 118, 146,0.3)","rgba(71, 145, 228,0.3)","rgba(197, 31, 119,0.3)","rgba(254, 95, 85,0.3)"],
        borderColor: ["rgba(41, 184, 198,1)","#2D54B3","#427692","#4791E4","#C51F77","#FE5F55"],
        borderWidth:1,
        data: pie
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Individaul Statuses '
      }
    }
});
</script>
    </body>
</html>