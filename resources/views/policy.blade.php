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
    <link href="{{ asset('css/individualView.css') }}" rel="stylesheet">
    <link href="{{ asset('css/policyDetails.css') }}" rel="stylesheet">
    
    <title>Khanyisa | Edit Lead</title>
</head>
<body>
@if(session()->get('success'))
    <div style="z-index: 1; position: absolute; margin-left: 12%; font-size: 12px;" class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
<sidenav>
        <ul>
            <li class="brand"><a href="{{ url('/home') }}"><img src="{{ asset('img//Khanyisa1.png') }}" alt="Company Logo"></a></li>
                <li class="menu active"><a href="{{ url('/home') }}"><img src="{{ asset('img/surface1.svg') }}" alt="Leads Logo">Leads</a></li>
                <li class="menu"><a href="#"><img src="{{ asset('img/Business.svg') }}" alt="Businesses Logo">Businesses</a></li>
                <li class="menu"><a href="{{ url('/individual') }}"><img src="{{ asset('img/person.svg') }}">Individuals</a></li>
                <li class="menu"><a href="{{ url('/reports') }}"><img src="{{ asset('img/XMLID_71_.svg') }}">Report</a></li>
                <li class="menu"><a href="{{ url('/contacts') }}"><img src="{{ asset('img/layer1.svg') }}">Contacts</a></li>
                <li class="menu"><a href="#"><img src="{{ asset('img/Payment.svg') }}">Claims</a></li>
                <li class="logout"><a href="{{ route('logout') }}"><img src="">Logout</a></li>
            </ul>
        </sidenav>
        
        <nav>
        <p id='pageTitle'>Policy List</p>
            <a href="#"><Message><img src="{{ asset('img/Group 291.svg') }}"><br>Message</Message></a>
            <a href="#"><Import><img src="{{ asset('img/import.svg') }}"><br>Import</Import></a>
            <a href="#"><Export><img src="{{ asset('img/export.svg') }}"><br>Export</Export></a>
            <a href="{{url('/search')}}"><search onclick="openSearch()"><i class="fas fa-search"></i></search></a>
            <a href="#"><new onclick="newLeadpopup()"><i class="fas fa-plus" id="saveIcon"></i></new></a>
        </nav>
    <form class="" method="POST" action="{{ url('/update', $policys->id) }}">
        <debtor>
            <div><img src="{{ asset('img/default.png') }}"></div>
            <div class="debtorDetails">
                <p>{{$policys->MainName}} {{$policys->MainSurname}} </p>
                <p>{{$policys->MainIDNumber}}</p>
                <br>
                <p>{{$policys->created_at}}</p>
                @if($policys->Status == "Inactive")
                <span  class="inactive">{{$policys->Status}}</span>
                @elseif($policys->Status == "Active")
                <span class="active">{{$policys->Status}}</span>
                @endif
            </div>
        </debtor>




<div class="row" id="mainBody">
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif

  <table>
        <tr id="th">
        <th>POLICY</th>
                    <th>ID NUMBER</th>
                    <th>STATUS</th>
                    <th>DEBIT DATE</th>
                    
        </tr>
        
        
        <tr>
        <td><a href="{{ url('/edit',$policys->id) }}">{{$policys->ProType}}</a></td>
        <td><a href="{{ url('/edit',$policys->id) }}">{{$policys->MainIDNumber}}</a></td>
        @if($policys->Status == "Active") 
            <td><a href="{{ url('/edit',$policys->id) }}"><span class="active">{{$policys->Status}}</span></a></td>
            @elseif($policys->Status == "Inactive")
            <td><a href="{{ url('/edit',$policys->id) }}"><span class="inactive">{{$policys->Status}}</span></a></td>
            @endif
        <td><a href="{{ url('/edit',$policys->id) }}">{{$policys->created_at}}</a></td>
            
        </tr>
        
        
    </tbody>
  </table>

                

        </div>
            

    
    </form>
     <div id="productsOverlay">
            <div class="overlayContent">
                <button class="overlayclose" onclick="closenewLeadpopup()"><i class="fas fa-times"></i></button>
               <div class="overlayTitle">Products</div>
               <table class="overlaytable">
                    <thead>
                        <tr>
                            <td class="thead">Long Term Insurance</td>
                            <td class="thead">Short Term Insurance</td>
                            <td class="thead">Contstruction Insurance</td>
                            <td class="thead">Agriculture Insurance</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table_tr">
                            <td class="table_cell" onclick="policyType('Funeral')">Funeral<i class="fas fa-check"></i></td>
                            <td class="table_cell" onclick="policyType('Personal')">Personal</td>
                            <td class="table_cell" onclick="policyType('Guarantees / Bonds')">Guarantees / Bonds</td>
                            <td class="table_cell" onclick="policyType('Crop')">Crop</td>
                        </tr> 
                        <tr class="table_tr">
                            <td class="table_cell" onclick="policyType('Investments')">Investments</td>
                            <td class="table_cell" onclick="policyType('Commercial')">Commercial</td>
                            <td class="table_cell" onclick="policyType('Engineering')">Engineering</td>
                            <td class="table_cell" onclick="policyType('Livestock')">Livestock</td>
                        </tr>
                        <tr class="table_tr">
                            <td class="table_cell" onclick="policyType('Retirement Annuities')">Retirement Annuities</td>
                            <td class="table_cell" onclick="policyType('Liability')">Liability</td>
                            <td class="table_cell"></td>
                            <td class="table_cell" onclick="policyType('Assets')">Assets</td>
                        </tr>
                        <tr class="table_tr">
                            <td class="table_cell"></td>
                            <td class="table_cell" onclick="policyType('Personal Accident')">Personal Accident</td>
                            <td class="table_cell"></td>
                            <td class="table_cell" onclick="policyType('Credit Life')">Credit Life</td>
                        </tr>
                        <tr class="table_tr">
                            <td class="table_cell"></td>
                            <td class="table_cell" onclick="policyType('Goods In Transit')">Goods In Transit</td>
                            <td class="table_cell"></td>
                            <td class="table_cell"></td>
                        </tr>
                    </tbody>
               </table>
               <div class="confirmBTNarea"><button class="confirmBTN"><a href="new.php">Confirm</a></button></div>
            </div>

        </div> 
</div>
</body>

<script>
    function newLeadpopup(){
            document.getElementById('productsOverlay').style.display = "block";
        }
        function closenewLeadpopup(){
            document.getElementById('productsOverlay').style.display = "none";
        }
        function policyType(x){
            console.log(x);
            localStorage.setItem("policyType", x);
            window.location.href = "/newleads";
        }
    



        $().ready(function() {


$('#Edit').click(function() {
    $('input').each(function() {
        if ($(this).attr('disabled')) {
            $(this).removeAttr('disabled');
        }
        else {
            $(this).attr({
                'disabled': 'disabled'
            });
        }
    });
    $('select').each(function() {
        if ($(this).attr('disabled')) {
            $(this).removeAttr('disabled');
        }
        else {
            $(this).attr({
                'disabled': 'disabled'
            });
        }
    });

    var x = document.getElementById("UP");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
});
});
    function next(){
        document.getElementById('step2').style.display = "block";
        document.getElementById('Next1').style.display = "block";
        document.getElementById('Prev1').style.display = "block";
        document.getElementById('step1').style.display = "none";
        document.getElementById('Next').style.display = "none";
    }
    function prev1(){
        document.getElementById('step1').style.display = "block";
        document.getElementById('Next').style.display = "block";
        document.getElementById('Next1').style.display = "none";
        document.getElementById('Prev1').style.display = "none";
        document.getElementById('step2').style.display = "none"; 
    }
    function next1(){
        document.getElementById('step3').style.display = "block";
        document.getElementById('Next2').style.display = "block";
        document.getElementById('Prev2').style.display = "block";
        document.getElementById('step2').style.display = "none";
        document.getElementById('Next1').style.display = "none";
        document.getElementById('Prev1').style.display = "none";
    }
    function prev2(){
        document.getElementById('step2').style.display = "block";
        document.getElementById('Next1').style.display = "block";
        document.getElementById('Prev1').style.display = "block";
        document.getElementById('step3').style.display = "none";
        document.getElementById('Next2').style.display = "none";
        document.getElementById('Prev2').style.display = "none";
    }
    function next2(){
        document.getElementById('step3').style.display = "none";
        document.getElementById('step4').style.display = "block";
        document.getElementById('Next3').style.display = "block";
        document.getElementById('Prev3').style.display = "block";
        document.getElementById('confirmBTN').style.display = "block";
        document.getElementById('Next2').style.display = "none";
        document.getElementById('Prev2').style.display = "none";
    }
    function prev3(){
        document.getElementById('step3').style.display = "block";
        document.getElementById('Next2').style.display = "block";
        document.getElementById('Prev2').style.display = "block";
        document.getElementById('Next3').style.display = "none";
        document.getElementById('Prev3').style.display = "none";
        document.getElementById('step4').style.display = "none";
    }
    // document.getElementById('').style.display = "";
</script>
</html>