
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
    <link href="{{ asset('css/individual.css') }}" rel="stylesheet">
    <title>Khanyisa | Individual </title>
</head>
<body>
<sidenav>
        <ul>
            <li class="brand"><a href="{{ url('/home') }}"><img src="{{ asset('img/Khanyisa1.png') }}" alt="Company Logo"></a></li>
                <li class="menu"><a href="{{ url('/home') }}"><img src="{{ asset('img/surface1.svg') }}" alt="Leads Logo">Leads</a></li>
                <li class="menu"><a href="#"><img src="{{ asset('img/Business.svg') }}" alt="Businesses Logo">Businesses</a></li>
                <li class="menu  active"><a href="#"><img src="{{ asset('img/person.svg') }}">Individuals</a></li>
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
        <a href="debotList.php"><p id='pageTitle'>Individuals</p></a>
            <a href="#"><Message><img src="{{ asset('img/Group 291.svg') }}"><br>Message</Message></a>
            <a href="#"><Import><img src="{{ asset('img/import.svg') }}"><br>Import</Import></a>
            <a href="#"><Export><img src="{{ asset('img/export.svg') }}"><br>Export</Export></a>
            <button onclick="openSearch()"><i class="fas fa-search"></i></button>
            <!-- <a href="#"><new onclick="newLeadpopup()"><i class="fas fa-plus" id="saveIcon"></i></new></a> -->
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
        @foreach($individuals as $contact)
        @if($contact->NewLead == "No") 
        <tr>
        <td><a href="{{ url('/policy',$contact->id) }}"><img src="img/default.png"></a></td>
            <td><a href="{{ url('/policy',$contact->id) }}">{{$contact->MainName}}</a></td>
            <td><a href="{{ url('/policy',$contact->id) }}">{{$contact->ProType}}</a></td>
            <td><a href="{{ url('/policy',$contact->id) }}">{{$contact->MainIDNumber}}</a></td>
            @if($contact->Status == "Active") 
            <td><a href="{{ url('/policy',$contact->id) }}"><span class="active">{{$contact->Status}}</span></a></td>
            @elseif($contact->Status == "Inactive")
            <td><a href="{{ url('/policy',$contact->id) }}"><span class="inactive">{{$contact->Status}}</span></a></td>
            @endif
            <td><a href="{{ url('/policy',$contact->id) }}">{{$contact->created_at}}</a></td>
            <td><a href="{{ url('/policy',$contact->id) }}"><i class="fas fa-chevron-right"></i></a></td>
        </tr>
        @else
        <div>No Clients Yet</div>
        @endif
        @endforeach
    </tbody>
  </table>
        </div>
    </div>
</div>

