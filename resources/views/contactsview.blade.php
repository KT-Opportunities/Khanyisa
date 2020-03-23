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
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
  
        <nav>
        <a href="debotList.php"><p id='pageTitle'>Contacts</p></a>
            <a href="#"><Message><img src="{{ asset('img/Group 291.svg') }}"><br>Message</Message></a>
            <a href="#"><Import><img src="{{ asset('img/import.svg') }}"><br>Import</Import></a>
            <a href="#"><Export><img src="{{ asset('img/export.svg') }}"><br>Export</Export></a>
            <button onclick="openSearch()"><i class="fas fa-search"></i></button>
            
           
        </nav>   
        <div class="row" id="mainBody">
            <div class="col-md-12">
                
    <div class="editModalContent" id="editModalContent">
    <form class="" method="POST" action="{{ url('/editsteward', $ss->id) }}">
        <div class="row">
                <div class="col-md-12">
                    <div style="visibility: hidden;" class="cloze" id="cloze2"> <i class="fas fa-times"></i></div>
                    <div class="ModalTitle">{{$ss->FullName}}</div>
                </div>
                
        <div class="col-md-6">
        <label>Name:</label>
            <input type="text" name="name" value="{{$ss->FullName}}" class="formControl" disabled>
        </div>
        <div class="col-md-6">
            <label>Gender</label>
            <input type="text" name="gender" value="{{$ss->Gender}}"  class="formControl" disabled>
        </div>
        <div class="col-md-6">
            <label>Contact Number:</label>
            <input type="tel" name="cell" value="{{$ss->Cell}}" class="formControl" disabled>
        </div>
        <div class="col-md-6">
            <label>Email Address:</label>
            <input type="email" name="email" value="{{$ss->Email}}" class="formControl" disabled>
        </div>
        <div class="col-md-6">
            <label>ID Number:</label>
            <input type="text" name="id" value="{{$ss->ID_No}}" class="formControl" disabled>
        </div>
        <div class="col-md-6">
            <label>Persal Number:</label>
            <input type="text" name="persal" value="{{$ss->Persal_No}}" class="formControl" disabled>
        </div>
        <div class="col-md-6">
            <label>Province:</label>
            <input type="text" name="province" value="{{$ss->Province}}" class="formControl" disabled>
        </div>
        <div class="col-md-6">
            <label>Region:</label>
            <input type="text" name="region" value="{{$ss->Region}}" class="formControl" disabled>
        </div>
        <div class="col-md-6">
            <label>Station:</label>
            <input type="text" name="station"  class="formControl" disabled>
        </div>
        <div class="col-md-6">
            <label>Information Sheet Received :</label>
                <select name="Info" class="formControl" disabled>
                <option selected value="{{$ss->Info_Rec}}">{{$ss->Info_Rec}}</option>
                <option  value="Yes">Yes</option>
                <option  value="No">No</option>
                </select>
        </div>
        <div class="col-md-6">
            <label>Training attended  :</label>
            <select name="training" class="formControl" disabled>
                <option selected value="{{$ss->Info_Rec}}">{{$ss->Info_Rec}}</option>
                <option  value="Yes">Yes</option>
                <option  value="No">No</option>
            </select>
            
        </div>
        <div class="col-md-6">
            <label >Comments  :</label>
            <input style="height: 200px"  type="text" name="comment" value="{{$ss->Comments}}" class="formControl" disabled>
            
        </div>
                <div class="col-md-12">
                    
                    <button class="save" id="save" style="display:none; border:none; cursor: pointer;">Save</button>
                    <a href="{{ url('/delete',$ss->id) }}" class="cancel" id="cancel" style="display:none; cursor: pointer;">Delete</a>
                    <div style="cursor: pointer;" class="edit" id="edit">Edit</div>
                </div>
</form>
        </div>
    </div>


        
        </div>
    </div>
</div>

<div class="newModal" id="newModal">
    <div class="newModalContent">
        <div class="row">
        <div class="col-md-12">
            
            <div class="cloze" id="cloze"><i class="fas fa-times"></i></div>
            <div class="ModalTitle">New Contact</div>
        </div>
        <div class="col-md-6">
            <label>Type of Contact:</label>
            <select class="formControl">
                <option value="shopSteward">Shop Steward</option>
                <option value="Insurers">Insurers</option>
            </select>
        </div>
        <div class="col-md-6">
        <label>Name:</label>
            <input type="text" name="" class="formControl">
        </div>
        <div class="col-md-6">
            <label>Contact Number:</label>
            <input type="tel" name="" class="formControl">
        </div>
        <div class="col-md-6">
            <label>Email Address:</label>
            <input type="email" name="" class="formControl">
        </div>
        <div class="col-md-6">
            <label>Province:</label>
            <input type="text" name="" class="formControl">
        </div>
        <div class="col-md-6">
            <label>Region:</label>
            <input type="text" name="" class="formControl">
        </div>
        <div class="col-md-6">
            <label>Station:</label>
            <input type="text" name="" class="formControl">
        </div>
        <div class="col-md-3">
            <label class="container">Information Sheet Received :
            <input type="checkbox" name="" class="formControl">
            <span class="checkmark"></span>
            </label>
        </div>
        <div class="col-md-3">
            <label class="container">Training attended  :
            <input type="checkbox" name="" class="formControl">
            <span class="checkmark"></span>
            </label>
        </div>
        <div class="col-md-12">
            <div class="save">Save</div>
        </div>
        </div>
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
        document.getElementById('save').style.display = "block";
        // document.getElementById('cancel').style.display = "block";
        document.getElementById('edit').style.display = "none";
        // document.querySelector("input").disabled = false;
        
    });
    function newLeadpopup(){
        document.getElementById('newModal').style.display = "block";
    }
    function EditPopUp(){
        document.getElemenentById('editModal').style.display = "block";
    }
</script>
</html>