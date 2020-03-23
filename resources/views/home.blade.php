
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <link href="{{ asset('css/individual.css') }}" rel="stylesheet">
    <title>Khanyisa | Leads</title>
</head>
<body>
<sidenav>
        <ul>
            <li class="brand"><a href="{{ url('/home') }}"><img src="{{ asset('img/Khanyisa1.png') }}" alt="Company Logo"></a></li>
                <li class="menu active"><a href="{{ url('/home') }}"><img src="{{ asset('img/surface1.svg') }}" alt="Leads Logo">Leads</a></li>
                <li class="menu"><a href="#"><img src="{{ asset('img/Business.svg') }}" alt="Businesses Logo">Businesses</a></li>
                <li class="menu  "><a href="{{ url('/individual') }}"><img src="{{ asset('img/person.svg') }}">Individuals</a></li>
                <li class="menu"><a href="{{ url('/reports') }}"><img src="{{ asset('img/XMLID_71_.svg') }}">Report</a></li>
                <li class="menu"><a href="{{ url('/contacts') }}"><img src="{{ asset('img/layer1.svg') }}">Contacts</a></li>
                <li class="menu"><a href="#"><img src="{{ asset('img/Payment.svg') }}">Claims</a></li>
                <li class="logout"><a href="{{ route('logout') }}"><img src="">Logout</a></li>
            </ul>
        </sidenav>
        @if(session()->get('success'))
    <div style="z-index: 1;position: absolute;font-size: 12px;margin-top: 71px;" class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
        <nav>
        <a href="debotList.php"><p id='pageTitle'>Client On Boarding</p></a>
            <a href="#"><Message><img src="{{ asset('img/Group 291.svg') }}"><br>Message</Message></a>
            <a onclick="Newimport()" href="#"><Import><img src="{{ asset('img/import.svg') }}"><br>Import</Import></a>
            <a href="#"><Export><img src="{{ asset('img/export.svg') }}"><br>Export</Export></a>
            <a href="{{url('/search')}}"><search onclick="openSearch()"><i class="fas fa-search"></i></search></a>
             <a href="#"><new onclick="newLeadpopup()"><i class="fas fa-plus" id="saveIcon"></i></new></a>
        </nav>   
        <div class="row" id="mainBody">
        
    
    <table>
        <tr id="th">
            <th>FACE</th>
            <th>NAME</th>
            <th>PRODUCT TYPE</th>
            <th>ID NUMER</th>
            <th>STATUS</th>
            <th>DATE CREATED</th>
            <th></th>
        </tr>
        @foreach($petani as $key => $data)
        
        <tr>
        <td><a href="{{ url('/edit',$data->MainIDNumber) }}"><img src="img/default.png"></a></td>
        <td><a href="{{ url('/edit',$data->MainIDNumber) }}">{{$data->MainName}}</a></td>
            <td><a href="{{ url('/edit',$data->MainIDNumber) }}">{{$data->ProType}}</a></td>
            <td><a href="{{ url('/edit',$data->MainIDNumber) }}">{{$data->MainIDNumber}}</a></td>
            @if($data->Status == "Pending") 
            <td><a href="{{ url('/edit',$data->MainIDNumber) }}"><span class="pending">{{$data->Status}}</span></a></td>
            @elseif($data->Status == "Client Consent") 
            <td><a href="{{ url('/edit',$data->MainIDNumber) }}"><span class="clientconsent">{{$data->Status}}</span></a></td>
            @elseif($data->Status == "Insurer Quote") 
            <td><a href="{{ url('/edit',$data->MainIDNumber) }}"><span class="InsurerQuote">{{$data->Status}}</span></a></td>
            @endif
            <td><a href="{{ url('/edit',$data->MainIDNumber) }}">{{$data->created_at}}</a></td>
            <td><a href="{{ url('/edit',$data->MainIDNumber) }}"><i class="fas fa-chevron-right"></i></a></td>
        </tr>
        @endforeach
        
    </tbody>
  </table>
        </div>
    </div>
</div>
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
                            <td class="table_cell hidden"></td>
                            <td class="table_cell" onclick="policyType('Assets')">Assets</td>
                        </tr>
                        <tr class="table_tr">
                            <td class="table_cell hidden"></td>
                            <td class="table_cell" onclick="policyType('Personal Accident')">Personal Accident</td>
                            <td class="table_cell hidden"></td>
                            <td class="table_cell" onclick="policyType('Credit Life')">Credit Life</td>
                        </tr>
                        <tr class="table_tr">
                            <td class="table_cell hidden"></td>
                            <td class="table_cell" onclick="policyType('Goods In Transit')">Goods In Transit</td>
                            <td class="table_cell hidden"></td>
                            <td class="table_cell hidden"></td>
                        </tr>
                    </tbody>
               </table>
               <div class="confirmBTNarea"><button class="confirmBTN"><a href="new.php">Confirm</a></button></div>
            </div>

        </div> 




        <div id="productsOverlay1">
            <div class="overlayContent">
                <button class="overlayclose" onclick="Closeimport()"><i class="fas fa-times"></i></button>
               <div class="overlayTitle">Upload speadsheet</div>
               <form action="{{ url('/import') }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}

@if(session('errors'))
    @foreach($errors as $error)
    <li>{{$error}}</li>

    @endforeach
    @endif

    @if(session('success'))
    {{ session('success') }}
    @endif

<br><br>

Select speadsheet to upload
<br><br>


<input type="file" name="file" id="file">
<br><br>
<button type="submit">Upload File</button>
<br><br>





</form>

               
               
            </div>

        </div>

<script>
    function newLeadpopup(){
            document.getElementById('productsOverlay').style.display = "block";
        }
        function closenewLeadpopup(){
            document.getElementById('productsOverlay').style.display = "none";
        }

        function Newimport(){
            document.getElementById('productsOverlay1').style.display = "block";
        }
        function Closeimport(){
            document.getElementById('productsOverlay1').style.display = "none";
        }
        function policyType(x){
            console.log(x);
            localStorage.setItem("policyType", x);
            window.location.href = "/newleads";
        }
    
</script>



