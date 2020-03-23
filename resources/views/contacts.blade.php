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
    <link href="{{ asset('css/contacts.css') }}" rel="stylesheet">
    <title>Khanyisa | Contacts </title>
</head>
<body>
<sidenav>
        <ul>
            <li class="brand"><a href="{{ url('/home') }}"><img src="{{ asset('img/Khanyisa1.png') }}" alt="Company Logo"></a></li>
                <li class="menu"><a href="{{ url('/home') }}"><img src="{{ asset('img/surface1.svg') }}" alt="Leads Logo">Leads</a></li>
                <li class="menu"><a href="#"><img src="{{ asset('img/Business.svg') }}" alt="Businesses Logo">Businesses</a></li>
                <li class="menu"><a href="{{ url('/individual') }}"><img src="{{ asset('img/person.svg') }}">Individuals</a></li>
                <li class="menu"><a href="{{ url('/reports') }}"><img src="{{ asset('img/XMLID_71_.svg') }}">Report</a></li>
                <li class="menu active"><a href="{{ url('/contacts') }}"><img src="{{ asset('img/layer1.svg') }}">Contacts</a></li>
                <li class="menu"><a href="#"><img src="{{ asset('img/Payment.svg') }}">Claims</a></li>
                <li class="logout"><a href="{{ route('logout') }}"><img src="">Logout</a></li>
            </ul>
        </sidenav>
        @if(session()->get('success'))
    <div style="z-index: 1;position: absolute;font-size: 12px;margin-top: 71px;" class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
    @endif
    @if(session()->get('error'))
    <div style="z-index: 1;position: absolute;font-size: 12px;margin-top: 71px;" class="alert alert-danger">
      {{ session()->get('error') }}  
    </div>
  @endif
  
        <nav>
        <a href="debotList.php"><p id='pageTitle'>Contacts</p></a>
            <a href="#"><Message><img src="{{ asset('img/Group 291.svg') }}"><br>Message</Message></a>
            <a href="#"><Import><img src="{{ asset('img/import.svg') }}"><br>Import</Import></a>
            <a href="#"><Export><img src="{{ asset('img/export.svg') }}"><br>Export</Export></a>
            <a href="#"><search onclick="openSearch()"><i class="fas fa-search"></i></search></a>
            <a href="#"><new onclick="newLeadpopup()"><i class="fas fa-plus" id="saveIcon"></i></new></a>
           
        </nav>   
        <div class="row" id="mainBody">
            <div class="col-md-12">
        <div class="tab-content">
                <div class="tab-pane active" id="home-vr">
                    <table>
                    <tr  id="th">
                        <th>FACE</th>
                        <th>NAME</th>
                        <th>CONTACT</th>
                        <th>EMAIL</th>
                        <th>REGION</th>
                        <th>ID Number</th>
                        <th></th>
                    </tr>
                    @foreach($ss as $data)
                    <tr>
                    <td><a href="{{ url('/contactsview',$data->id) }}"><img src="img/default.png"></a></td>
                    <td><a href="{{ url('/contactsview',$data->id) }}">{{$data->FullName}}</a></td>
                    <td><a href="{{ url('/contactsview',$data->id) }}">{{$data->Cell}}</a></td>
                    <td><a href="{{ url('/contactsview',$data->id) }}">{{$data->Email}}</a></td>
                    <td><a href="{{ url('/contactsview',$data->id) }}">{{$data->Region}}</a></td>
                    <td><a href="{{ url('/contactsview',$data->id) }}">{{$data->ID_No}}</a></td>
                    <td><a class="delete" href="{{ url('/deleteSS',$data->id) }}"><i class="far fa-trash-alt"></i></a></td>

                    </tr>
                    @endforeach
                    </table>
                    {{ $ss->links() }}
                </div>
                <div class="tab-pane" id="profile-vr">
                    <!-- <table>
                    <tr id="th">
                        <th>FACE</th>
                        <th>NAME</th>
                        <th>CONTACT</th>
                        <th>EMAIL</th>
                        <th>REGION</th>
                        <th>STATION</th>
                    </tr>
                    <tr>
                    <td><a href=""><img src="img/default.png"></a></td>
                        <td>Insures</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </table> -->

                    COMING SOON!

                    
                </div>
                
                <div class="tab-pane" id="profile-vrr">
                <table>
                    <tr id="th">
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>DATE ADDED</th>
                        
                        <th></th>
                    </tr>
                    @foreach($users as $use)
                    <tr>
                    
                    <td><a href="#">{{$use->name}}</a></td>
                    <td><a href="#">{{$use->email}}</a></td>
                    <td><a href="#">{{$use->created_at}}</a></td>
                    
                    <td><a class="delete" href="{{ url('/deleteA',$use->id) }}"><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                    @endforeach
                    </table>
                    {{ $users->links() }}
                    
                </div>

                <div class="tab-pane" id="region">
                <table>
                    <tr id="th">
                        <th>REGION NAME</th>
                        <th>PROVINCE</th>
                        <th>DATE ADDED</th>
                        
                        <th></th>
                    </tr>
                    
                    @foreach($region as $reg)
                    <tr>
                    
                    
                    <td><a href="#">{{$reg->region_name}}</a></td>
                    <td><a href="#">{{$reg->province_name}}</a></td>
                    <td><a href="#">{{$reg->created_at}}</a></td>
                    
                    
                    <td><a class="delete" href="{{ url('/deleteR',$reg->id) }}"><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                    @endforeach
                    </table>
                    
                    
                    
                </div>

                <div class="tab-pane" id="station">
                <table>
                    <tr id="th">
                        <th>STATION NAME</th>
                        <th>REGION NAME</th>
                        <th>DATE ADDED</th>
                        
                        <th></th>
                    </tr>
                    @foreach($station as $stat)
                    <tr>
                    
                    <td><a href="#">{{$stat->id}}</a></td>
                    <td><a href="#">{{$stat->station_name}}</a></td>
                    <td><a href="#">{{$stat->region_name}}</a></td>
                    <td><a href="#">{{$stat->created_at}}</a></td>
                    
                    
                    <td><a class="delete" href="{{ url('/deleteST',$stat->id) }}"><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                    @endforeach
                    </table>
                   
                    
                </div>
            </div>
</div>
        <ul class="nav nav-tabs tabs-right vertical-text">
            <li><a href="#home-vr" data-toggle="tab" aria-selected="true" onclick="viewShopStewards()">Shop Stewards</a></li>
            <li><a href="#profile-vr" data-toggle="tab" aria-selected="false" onclick="viewInsures()">Insures</a></li>
            <li><a href="#profile-vrr" data-toggle="tab" aria-selected="false" onclick="viewAgent()">Agents</a></li>
            <li><a href="#region" data-toggle="tab" aria-selected="false" onclick="viewRegion()">Region</a></li>
            <li><a href="#station" data-toggle="tab" aria-selected="false" onclick="viewStation()">Station</a></li>
        </ul>
        </div>
    </div>
</div>

<div class="newModal" id="newModal">
    <div class="newModalContent">
    <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Shop Stewards</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Insures</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Agents</button>
  <button class="tablinks" onclick="openCity(event, 'Region')">Region</button>
  <button class="tablinks" onclick="openCity(event, 'Station')">Station</button>
  <div class="cloze" id="cloze"><i class="fas fa-times"></i></div>
</div>

<div id="London" class="tabcontent">
<form class="" method="POST" action="{{ url('/newsteward') }}">
<div class="row">
        <div class="col-md-12">
            
            
            <div class="ModalTitle">New Shop Steward</div>
        </div>
        
        <div class="col-md-6">
        <label>Name:</label>
            <input type="text" name="name"  class="formControl" required>
        </div>
        <div class="col-md-6">
            <label>Gender</label>
            <select name="gender"  class="formControl" >
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="col-md-6">
            <label>Contact Number:</label>
            <input type="tel" name="cell"  class="formControl"  required minlength="10">
        </div>
        <div class="col-md-6">
            <label>Email Address:</label>
            <input type="email" name="email" class="formControl"  required>
        </div>
        <div class="col-md-6">
            <label>ID Number:</label>
            <input type="text" name="id"  class="formControl"  required minlength="13" maxlength="13">
        </div>
        <div class="col-md-6">
            <label>Personal Number:</label>
            <input type="text" name="persal"  class="formControl" >
        </div>
        <div class="col-md-6">
            <label>Province:</label>
            <input type="text" name="province"  class="formControl"  required>
        </div>
        <div class="col-md-6">
            <label>Region:</label>
            <select name="region"  class="formControl" required>
                @foreach($region as $r)
                <option value="{{$r->region_name}}">{{$r->region_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label>Station:</label>
            <input type="text" name="station"  class="formControl"  required>
        </div>
        <div class="col-md-6">
            <label>Information Sheet Received :</label>
                <select name="Info" class="formControl"  required>
                <option  value="Yes">Yes</option>
                <option  value="No">No</option>
                </select>
        </div>
        <div class="col-md-6">
            <label>Training attended  :</label>
            <select name="training" class="formControl"  required>
                <option  value="Yes">Yes</option>
                <option  value="No">No</option>
            </select>
            
        </div>
        <div class="col-md-6">
            <label >Comments  :</label>
            <input style="height: 200px"  type="text" name="comment" class="formControl" >
            
        </div>
        <div class="col-md-12">
            <button style="border: none; cursor: pointer;" class="save">Save</button>
        </div>
        </form>
        
    
</div>
</div>

<div id="Paris" class="tabcontent">
  <h3>COMING SOON!</h3>
  
</div>

<div id="Tokyo" class="tabcontent">
<form class="" method="POST" action="{{ url('/newagent') }}">
        <div class="row">
        <div class="col-md-12">
            
            
            <div class="ModalTitle">New Agent</div>
        </div>
        
        <div class="col-md-6">
        <label>Name:</label>
            <input type="text" name="Aname"  class="formControl" >
        </div>
        
        
        <div class="col-md-6">
            <label>Email Address:</label>
            <input type="email" name="Aemail" class="formControl" >
        </div>
        
        <div class="col-md-6">
            <label >Password  :</label>
            <input   type="password" name="Apassword" class="formControl" >
            
        </div>
        <div class="col-md-12">
            <button style="border: none; cursor: pointer;" class="save">Save</button>
        </div>
        </form>
        
    


</div>
</div>

<div id="Region" class="tabcontent">
<form class="" method="POST" action="{{ url('/newregion') }}">
        <div class="row">
        <div class="col-md-12">
            <div class="ModalTitle">New Region</div>
        </div>
        
        <div class="col-md-6">
        <label>Region Name:</label>
            <input type="text" name="region_name"  class="formControl" >
        </div>
        <div class="col-md-6">
                <label for="agent">Province  :</label>
                <select class="formControl" name="province_name">
                @foreach($province as $pp)
                <option selected value="{{$pp->province_name}}">{{$pp->province_name}}</option>
                @endforeach
                </select>
            </div>
        
        <div class="col-md-12">
            <button style="border: none; cursor: pointer;" class="save">Save</button>
        </div>
        </form>
        
    


</div>
</div>

<div id="Station" class="tabcontent">
<form class="" method="POST" action="{{ url('/newstation') }}">
        <div class="row">
        <div class="col-md-12">
            <div class="ModalTitle">New Station</div>
        </div>
        
        <div class="col-md-6">
        <label>Station Name:</label>
            <input type="text" name="station_name"  class="formControl" >
        </div>

        <div class="col-md-6">
                <label for="agent">Region:</label>
                <select class="formControl" name="region_name">
                @foreach($region as $contact)
                <option selected value="{{$contact->region_name}}">{{$contact->region_name}}</option>
                @endforeach
                </select>
            </div>
        
        <div class="col-md-12">
            <button style="border: none; cursor: pointer;" class="save">Save</button>
        </div>
        </form>
        
    


</div>
    </div>
</div>



</body>
<script>
    document.getElementById('cloze').addEventListener('click', function(){
        document.getElementById('newModal').style.display = "none";
    });
    document.getElementById('cancel').addEventListener('click', function(){
        document.getElementById('editModal').style.display = "none";
    });
    document.getElementById('cloze2').addEventListener('click', function(){
        document.getElementById('editModal').style.display = "none";
    });
    document.getElementById('edit').addEventListener('click', function(){
        document.getElementById('save').style.display = "block";
        document.getElementById('cancel').style.display = "block";
        document.getElementById('edit').style.display = "none";
        // document.querySelector("input").disabled = false;
        var fContrl = document.getElementsByClassName("input");
        for (var i = 0; i < fContrl.length; i++)
        {fContrl[i].removeAttribute("disabled");}
    });
    function newLeadpopup(){
        document.getElementById('newModal').style.display = "block";
    }
    function EditPopUp(){
        document.getElemenentById('editModal').style.display = "block";
    }

    function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


</script>
</html>