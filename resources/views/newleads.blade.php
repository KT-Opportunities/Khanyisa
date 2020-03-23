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
    <link href="{{ asset('css/stylesheet1.css') }}" rel="stylesheet">
    <title>Khanyisa | New Leads</title>
</head>
<body>
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
        <p id='pageTitle'>Dibanani Funeral</p>
            <a href="#"><Message><img src="{{ asset('img/Group 291.svg') }}"><br>Message</Message></a>
            <a href="#"><Import><img src="{{ asset('img/import.svg') }}"><br>Import</Import></a>
            <a href="#"><Export><img src="{{ asset('img/export.svg') }}"><br>Export</Export></a>
            <a href="#"><search onclick="openSearch()"><i class="fas fa-search"></i></search></a>
            <a href="#"><new onclick="newLeadpopup()"><i class="fas fa-save" id="saveIcon"></i></new></a>
        </nav>
        




<div class="row" id="mainBody">

 <div class="col-md-9">
<form class="" method="POST" action="{{ url('/create') }}">
            <div class="block" id="step1">
    <div class="row">
        <div class="col-md-12"><h6>PRINCIPAL MEMBER DETAILS</h6></div>
        
            <div class="col-md-12"><hr /></div>
            <div class="col-md-6"> 
                <label for="ApplicationType">Select Application Type:</label>   
                <select name="ApplicationType1">
                  <option selected value="New Application">New Application</option>
                  <option value="Transfer">Transfer</option>

                </select>
            </div>
            <div class="col-md-6"> 
                <label for="SchemeOption">Select Scheme Option:</label>   
                <select name="SchemeOption" class="formControl" id="SchemeOption">

                <option selected value="A: R8 000">A: R8 000</option>
                <option value="R13 000">B: R13 000</option>
                <option value="R17 000">C: R17 000</option>
                <option value="R19 000">D: R19 000</option>
                <option value="R30 000">E: R30 000</option>
                <option value="R50 000">F: R50 000</option>
                <option value="R75 000">G: R75 000</option>
                
                </select>
            </div>
            <div class="col-md-6">
                <label for="Region">Region :</label>
                <select  class="formControl" name="Region">
                
                @foreach($region as $contact)
                <option selected value="{{$contact->region_name}}">{{$contact->region_name}}</option>
                @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="CellNumber">Cell Number :</label>
                <input type="number" class="formControl" name="CellNumber"/>
            </div>
            <div class="col-md-6">
                <label for="Email">Email :</label>
                <input type="email" class="formControl" name="Email"/>
            </div>
            <div class="col-md-6">
                <label for="agent">Khanisa Agent  :</label>
                <select class="formControl" name="agent">
                @foreach($users as $contact)
                <option  value="{{$contact->name}}">{{$contact->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="ShopSteward">Shop Steward  :</label>
                <select  class="formControl" name="ShopSteward">
                <!-- <option selected>Select Shop Stewards</option> -->
                @foreach($ss as $contact)
                <option value="{{$contact->FullName}}">{{$contact->FullName}}</option>
                @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <h6 id="APPLICATION_FOR_VOLUNTARY"> APPLICATION FOR VOLUNTARY FUNERAL ASSURANCE WITH EXTENDED FAMILY BENEFITS</h6>
            </div>
            <div class="col-md-6">
                <label for="MainRegion">Region :</label>
                <select  class="formControl" name="MainRegion">
                
                @foreach($region as $contact)
                <option selected value="{{$contact->region_name}}">{{$contact->region_name}}</option>
                @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="MainStation">Station :</label>
                <select  class="formControl" name="MainStation">
                
                @foreach($station as $contact)
                <option selected value="{{$contact->station_name}}">{{$contact->station_name}}</option>
                @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="MainSurname">Surname :</label>
                <input type="text" class="formControl" name="MainSurname" required/>
              </div>
            <div class="col-md-6">
                <label for="MainName">Name :</label>
                <input type="text" class="formControl" name="MainName" required />
            </div>
            <div class="col-md-6">
                <label for="MainIDNumber">ID Number :</label>
                <input type="number" class="formControl" name="MainIDNumber" required maxlength="13" id="MainIDNumber" minlength="13" max-length="13"/>
            </div>
            <div class="col-md-6">
                <label for="MainAge">Age :</label>
                <input type="number" class="formControl" name="MainAge" id="MainAge" readonly/>
            </div>
            
            <div class="col-md-6">
                <label for="MainCellNumber">Cell Number :</label>
                <input type="number" class="formControl" name="MainCellNumber" required/>
            </div>
            <div class="col-md-6">
                <label for="MainWorkNumber">Work Number :</label>
                <input type="number" class="formControl" name="MainWorkNumber"/>
            </div>
            <div class="col-md-6">
                <label for="MainPremium">Premium R:</label>
                <input type="text" class="formControl" name="MainPremium" id="MainPremium" readonly/>
            </div>
            <div class="col-md-6">
                <label for="MainEmail">Email :</label>
                <input type="email" class="formControl" name="MainEmail"/>
            </div>
            <div class="col-md-6">
                <label for="SapuNumber">SAPU Number :</label>
                <input type="text" class="formControl" name="SapuNumber"/>
              </div>
            <div class="col-md-6">
                <label for="PostalAdd">Postal Address :</label>
                <input type="text" class="formControl" name="PostalAdd" required/>
            </div>
            <div class="col-md-6">
                <label for="Residential">Residential Address :</label>
                <input type="text" class="formControl" name="Residential"/>
            </div>
            <div class="col-md-6">
                <label for="MainUMNGCWABO" class="container">UMNGCWABO :
                <input type="checkbox" class="formControl" name="MainUMNGCWABO"  value="Yes" id="MainUMNGCWABO"/>
                <span class="checkmark"></span>
                </label>
            </div>
            <div class="col-md-6">
                <label for="PostalAdd">Policy Number :</label>
                <input type="text" class="formControl" id="PolicyNum"value="KIP" name="PolicyNum"/>
            </div>
            <div class="col-md-12">
                <div class="btn" id="update" onClick="showstep2()">Next Step</div>
            </div>

    </div>
          </div>
          <div class="block" id="step2">
                    <div class="row">
                    <div class="col-md-12"><div class="btn" id="prev1" onClick="showstep1()">Prev Step</div></div>
                        <div class="col-md-12"><h6>PERSONAL DETAILS OF SPOUSE: </h6></div>
                        <div class="col-md-12"><hr /></div>
                        <div class="col-md-6">
                                <label>Surname :</label>
                                <input type="text" name="SPSurname" class="formControl" id="SPSurname">
                            </div>
                            <div class="col-md-6">
                                <label>First Name :</label>
                                <input type="text" name="SPName" class="formControl" >
                            </div>
                            <div class="col-md-6">
                                <label>ID Number :</label>
                                <input type="number" name="SPIDNumber" class="formControl" minlength="13" maxlength="13">
                            </div>
                        
                        <div class="col-md-6">
                                <label>Premium  R:</label>
                                <input type="text" name="SPPremium" class="formControl" id="SPPremium"  readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="container">UMNGCWABO	 :
                                <input type="checkbox" name="SPUMNGCWABO" class="formControl" value="Yes" id="SPUMNGCWABO">
                                <span class="checkmark"></span>    
                            </label>
                            </div><br>
                            <div class="col-md-12" style="visibility: hidden;"><hr /></div>
                            <div class="col-md-12"><hr /></div>
                        <div class="col-md-12">
                                <p>PRINCIPAL MEMBER’S OWN CHILDREN DETAILS:</p>
                            </div>
                        <div class="col-md-12">
                                <table>
                                    <thead>
                                        <tr>
                                            <td>Name:</td>
                                            <td>ID Number:</td>
                                            <td>UMNGCWABO:</td>
                                            <td>Preminum:</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="Name1" id="Name1" class="formControl"></td>
                                            
                                            <td><input type="number" name="IDNumber1" class="formControl" maxlength="13" minlength="13" id="IDNumber1"></td>
                                            <td><label class="container">
                                                <input type="checkbox" name="check1" class="formControl" value="Yes" id="check1">
                                                <span class="tdcheckmark"></span>
                                                </label>
                                            </td>
                                            <td><input type="text" name="Preminum1" id="Preminum1" class="formControl" readonly></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Name2" id="Name2" class="formControl"></td>
                                            
                                            <td><input type="number" name="IDNumber2" class="formControl" maxlength="13" minlength="13" id="IDNumber2"></td>
                                            <td><label class="container">
                                                <input type="checkbox" name="check2" class="formControl" value="Yes" id="check2">
                                                <span class="tdcheckmark"></span>
                                                </label>
                                            </td>
                                            <td><input type="text" name="Preminum2" id="Preminum2" class="formControl" readonly></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Name3" id="Name3" class="formControl"></td>
                                            
                                            <td><input type="number" name="IDNumber3" class="formControl" maxlength="13" minlength="13" id="IDNumber3"></td>
                                            <td><label class="container">
                                                <input type="checkbox" name="check3" class="formControl" value="Yes" id="check3">
                                                <span class="tdcheckmark"></span>
                                                </label>
                                            </td>
                                            <td><input type="text" name="Preminum3" id="Preminum3" class="formControl" readonly></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Name4" id="Name4" class="formControl"></td>
                                            
                                            <td><input type="number" name="IDNumber4" class="formControl" maxlength="13" minlength="13" id="IDNumber4"></td>
                                            <td><label class="container">
                                                <input type="checkbox" name="check4" class="formControl" value="Yes" id="check4">
                                                <span class="tdcheckmark"></span>
                                                </label>
                                            </td>
                                            <td><input type="text" name="Preminum4" id="Preminum4" class="formControl" readonly></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Name5" id="Name5" class="formControl"></td>
                                            
                                            <td><input type="number" name="IDNumber5" class="formControl" maxlength="13" minlength="13" id="IDNumber5"></td>
                                            <td><label class="container">
                                                <input type="checkbox" name="check5" class="formControl" value="Yes" id="check5">
                                                <span class="tdcheckmark"></span>
                                                </label>
                                            </td>
                                            <td><input type="text" name="Preminum5" id="Preminum5" class="formControl" readonly></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Name6" id="Name6" class="formControl"></td>
                                            
                                            <td><input type="number" name="IDNumber6" class="formControl" maxlength="13" minlength="13" id="IDNumber6"></td>
                                            <td><label class="container">
                                                <input type="checkbox" name="check6" class="formControl" value="Yes" id="check6">
                                                <span class="tdcheckmark"></span>
                                                </label>
                                            </td>
                                            <td><input type="text" name="Preminum6" id="Preminum6" class="formControl" readonly></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">	TOTAL IMMEDIATE FAMILY PREMIUM:</td>
                                            <td><input type="text" name="TotalPreminum" class="formControl" readonly id="TotalPreminum"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12"><hr /></div>
                            <div class="col-md-12"><P>WIDER CHILDREN’S DETAILS:</P></div>

                        <div class="col-md-12">
                            <table>
                                <thead>
                                    <tr>
                                        <td>Name:</td>
                                        <td>ID Number:</td>
                                        <td>Premium:</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" name="WName1" class="formControl" id="WName1"></td>
                                        
                                        <td><input type="number" name="WIDNumber1" class="formControl" maxlength="13" minlength="13" id="WIDNumber1"></td>
                                        <td><input type="text" name="WPre1" class="formControl" readonly id="WPre1"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="WName2" class="formControl" id="WName2"></td>
                                        
                                        <td><input type="number" name="WIDNumber2" class="formControl" maxlength="13" minlength="13" id="WIDNumber2"></td>
                                        <td><input type="text" name="WPre2" class="formControl" readonly id="WPre2"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="WName3" class="formControl" id="WName3"></td>
                                        
                                        <td><input type="number" name="WIDNumber3" class="formControl" maxlength="13" minlength="13" id="WIDNumber3"></td>
                                        <td><input type="text" name="WPre3" class="formControl" readonly id="WPre3"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="WName4" class="formControl" id="WName4"></td>
                                        
                                        <td><input type="number" name="WIDNumber4" class="formControl" maxlength="13" minlength="13" id="WIDNumber4"></td>
                                        <td><input type="text" name="WPre4" class="formControl" readonly id="WPre4"></td>
                                    </tr>
                                    <tr>
                                            <td colspan="2">TOTAL WIDER CHILDREN PREMIUM:</td>
                                            <td><input type="text" name="WTotalPre" class="formControl" readonly id="WTotalPre"></td>
                                        </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="col-md-12"><hr /></div>
                        <div class="col-md-12">
                                <p>EXTENDED FAMILY DETAILS:</p>
                        </div>
                        <div class="col-md-12">
                                <table>
                                    <thead>
                                        <tr>
                                            <td>Name:</td>
                                            <td>ID Number:</td>
                                            <td>REPATRIATION PREM </td>
                                            <td>UMNGCWABO</td>
                                            <td>COVER AMOUNT</td>
                                            <td>PREM</td>
                                            <td>TOTAL PREM</td>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="FName1" class="formControl"></td>
                                            
                                            <td><input type="number" name="FIDNumber1" class="formControl" maxlength="13" minlength="13" id="FIDNumber1"></td>
                                            <td><label class="container">
                                                <input type="checkbox" name="FRep1" class="formControl" id="FRep1">
                                                <span class="tdcheckmark"></span>
                                                </label>
                                            </td>
                                            <td><label class="container">
                                                <input type="checkbox" name="FUMN1" class="formControl" value="Yes" id="FUMN1">
                                                <span class="tdcheckmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <select type="text" name="FCovAm1" class="formControl" id="FCovAm1">
                                                    <option value="5000" selected>R 5,000</option>
                                                    <option value="6000">R 6,000</option>
                                                    <option value="7000">R 7,000</option>
                                                    <option value="8000">R 8,000</option>
                                                    <option value="9000">R 9,000</option>
                                                    <option value="10000">R 10,000</option>
                                                    <option value="15000">R 15,000</option>
                                                    <option value="20000">R 20,000</option>
                                                    <option value="25000">R 25,000</option>
                                                    <option value="30000">R 30,000</option>
                                                </select>
                                            </td>
                                            <td><input type="text" name="FPrem1" class="formControl" readonly id="FPrem1"></td>
                                            <td><input type="text" name="FTotalPre1" class="formControl" readonly id="FTotalPre1"></td>
                                        </tr>
                                        <tr>
                                        <td><input type="text" name="FName2" class="formControl"></td>
                                            
                                            <td><input type="number" name="FIDNumber2" class="formControl" maxlength="13" minlength="13" id="FIDNumber2"></td>
                                            <td><label class="container">
                                                <input type="checkbox" name="FRep2" class="formControl" id="FRep2">
                                                <span class="tdcheckmark"></span>
                                                </label>

                                                </td>
                                            <td><label class="container">
                                                <input type="checkbox" name="FUMN2" class="formControl" value="Yes" id="FUMN2">
                                                <span class="tdcheckmark"></span>
                                                </label>
                                                </td>
                                            <td><select type="text" name="FCovAm2" class="formControl" id="FCovAm2">
                                                    <option value="5000" selected>R 5,000</option>
                                                    <option value="6000">R 6,000</option>
                                                    <option value="7000">R 7,000</option>
                                                    <option value="8000">R 8,000</option>
                                                    <option value="9000">R 9,000</option>
                                                    <option value="10000">R 10,000</option>
                                                    <option value="15000">R 15,000</option>
                                                    <option value="20000">R 20,000</option>
                                                    <option value="25000">R 25,000</option>
                                                    <option value="30000">R 30,000</option>
                                                </select></td>
                                            <td><input type="text" name="FPrem2" class="formControl" readonly id="FPrem2"></td>
                                            <td><input type="text" name="FTotalPre2" class="formControl" readonly id="FTotalPre2"></td>
                                        </tr>
                                        <tr>
                                        <td><input type="text" name="FName3" class="formControl"></td>
                                            
                                            <td><input type="number" name="FIDNumber3" class="formControl" maxlength="13" minlength="13" id="FIDNumber3"></td>
                                            <td><label class="container">
                                            <input type="checkbox" name="FRep3" class="formControl" id="FRep3">
                                            <span class="tdcheckmark"></span>
                                                </label>
                                            </td>
                                            <td><label class="container">
                                            <input type="checkbox" name="FUMN3" class="formControl" value="Yes" id="FUMN3">
                                            <span class="tdcheckmark"></span>
                                                </label>
                                            </td>
                                            <td><select type="text" name="FCovAm3" class="formControl" id="FCovAm3">
                                                    <option value="5000" selected>R 5,000</option>
                                                    <option value="6000">R 6,000</option>
                                                    <option value="7000">R 7,000</option>
                                                    <option value="8000">R 8,000</option>
                                                    <option value="9000">R 9,000</option>
                                                    <option value="10000">R 10,000</option>
                                                    <option value="15000">R 15,000</option>
                                                    <option value="20000">R 20,000</option>
                                                    <option value="25000">R 25,000</option>
                                                    <option value="30000">R 30,000</option>
                                                </select></td>
                                            <td><input type="text" name="FPrem3" class="formControl" readonly id="FPrem3"></td>
                                            <td><input type="text" name="FTotalPre3" class="formControl" readonly id="FTotalPre3"></td>
                                        </tr>
                                        <tr>
                                        <td><input type="text" name="FName4" class="formControl"></td>
                                            
                                            <td><input type="number" name="FIDNumber4" class="formControl" maxlength="13" minlength="13" id="FIDNumber4"></td>
                                            <td><label class="container">
                                            <input type="checkbox" name="FRep4" class="formControl" id="FRep4">
                                            <span class="tdcheckmark"></span>
                                                </label>
                                            </td>
                                            <td><label class="container">
                                            <input type="checkbox" name="FUMN4" class="formControl" value="Yes" id="FUMN4">
                                            <span class="tdcheckmark"></span>
                                                </label>
                                            </td>
                                            <td><select type="text" name="FCovAm4" class="formControl" id="FCovAm4">
                                                    <option value="5000" selected>R 5,000</option>
                                                    <option value="6000">R 6,000</option>
                                                    <option value="7000">R 7,000</option>
                                                    <option value="8000">R 8,000</option>
                                                    <option value="9000">R 9,000</option>
                                                    <option value="10000">R 10,000</option>
                                                    <option value="15000">R 15,000</option>
                                                    <option value="20000">R 20,000</option>
                                                    <option value="25000">R 25,000</option>
                                                    <option value="30000">R 30,000</option>
                                                </select></td>
                                            <td><input type="text" name="FPrem4" class="formControl" readonly id="FPrem4"></td>
                                            <td><input type="text" name="FTotalPre4" class="formControl" readonly id="FTotalPre4"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">TOTAL EXTENDED FAMILY PREMIUM</td>
                                            <td><input type="text" name="FTotalPrem" class="formControl" readonly id="FTotalPrem"></td>
                                        </tr>
                                    </tbody>
                                </table> 
                                <div class="col-md-12">
                       <p class="redsmalltxt"> Repatriation benefit for extended family members can be added @ R2.30 per member.  </p>
                            </div>     
                        </div>
                        <!-- <div class="col-md-6">
                                <label>PHYSICAL NUMBER :</label>
                                <input type="text" name="physicalNumber" class="formControl">
                            </div> -->
                            <div class="col-md-12"><div class="btn" id="update3" onClick="showstep3()">Next Step</div></div>
                    </div>
                </div>
                <div class="block" id="step3">
                    <div class="row">
                    <div class="col-md-12"><div class="btn" id="prev2" onClick="showstep2()">Prev Step</div></div>
                        <div class="col-md-12"><h6><b>INCOME CONTINUATION BENEFIT:</b> (Six Months)</h6></div>
                        <div class="col-md-12"><hr /></div>
                        <div class="col-md-12">
                                <p class="redsmalltxt">Income continuation benefit after death of principle member for 6 months @ R10.90 per month for every R1,000</p>
                                <table>
                                    <thead>
                                        <tr>
                                            <td>BENEFIT PER MONTH</td>
                                            <td>PREMIUM</td>
                                            <td>SELECT</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>R 1,000</td>
                                        <td>R10.90</td>
                                        <td><label class="container"><input type="radio" name="BPMone" value="one" class="formControl" id="BPMone"><span class="td2checkmark"></span></label></td>
                                    </tr>
                                    <tr>
                                        <td>R 2,000</td>
                                        <td>R21.80</td>
                                        <td><label class="container"><input type="radio" name="BPMone" value="two" class="formControl" id="BPMtwo"><span class="td2checkmark"></span></label></td>
                                    </tr>
                                    <tr>
                                        <td>R 3,000</td>
                                        <td>R32.70</td>
                                        <td><label class="container"><input type="radio" name="BPMone" value="three" class="formControl" id="BPMthree"><span class="td2checkmark"></span></label></td>
                                    </tr>
                                    <tr>
                                        <td>R 4,000</td>
                                        <td>R43.60</td>
                                        <td><label class="container"><input type="radio" name="BPMone" value="four" class="formControl" id="BPMfour"><span class="td2checkmark"></span></label></td>
                                    </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                            <div class="col-md-12"><h6><b>OPTIONAL BENEFITS:</b></h6></div>
                            <div class="col-md-12"><hr/></div>
                            <div class="col-md-12">
                                <table>
                                    <thead>
                                        <tr>
                                            <td>OPTIONAL BENEFIT</td>
                                            <td>COVER</td>
                                            <td>PREMIUM</td>
                                            <td>SELECT</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Airtime</td>
                                            <td>R 250</td>
                                            <td>R 7.60</td>
                                            <td><label class="container"><input type="checkbox" value="air" name="OPone" class="formControl" id="OPone"><span class="td2checkmark"></span></label></td>
                                        </tr>
                                        <tr>
                                            <td>Car Hire</td>
                                            <td>R 7,500</td>
                                            <td>R 34.10</td>
                                            <td><label class="container"><input type="checkbox" value="car" name="OPtwo" class="formControl" id="OPtwo"><span class="td2checkmark"></span></label></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12"><h6><b>TOTAL PREMIUM CALCULATION</b></h6></div>
                            <div class="col-md-12"><hr/></div>
                            <div class="col-md-12">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Total Immediate Family Funeral Premium    +    Umngcwabo / Beef / Inkomo Premium</td>
                                            <td><input type="text" name="TotalFamily" class="formControl" placeholder="R" readonly id="TotalFamily"></td>
                                        </tr>
                                        <tr>
                                            <td>Wider Children Premium</td>
                                            <td><input type="text" name="Wider" class="formControl" placeholder="R" readonly id="Wider"></td>
                                        </tr>
                                        <tr>
                                            <td>Extended Family Premium</td>
                                            <td><input type="text" name="Extended" class="formControl" placeholder="R" readonly id="Extended"></td>
                                        </tr>
                                        <tr>
                                            <td>Income Continuation Premium (6 Months)</td>
                                            <td><input type="text" name="InCon" class="formControl" placeholder="R" readonly id="InCon"></td>
                                        </tr>
                                        <tr>
                                            <td>Airtime Premium</td>
                                            <td><input type="text" name="Airtime" class="formControl" placeholder="R" readonly id="Airtime"></td>
                                        </tr>
                                        <tr>
                                            <td>Car Hire Premium</td>
                                            <td><input type="text" name="Car" class="formControl" placeholder="R" readonly id="Car"></td>
                                        </tr>
                                        <tr>
                                            <td>GRAND TOTAL PREMIUM</td>
                                            <td><input type="text" name="GrandTotal" class="formControl" placeholder="R" readonly id="GrandTotal"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12"><h6><b>BENEFICIARY NOMINATION</b></h6></div>
                            <div class="col-md-12"><hr/></div>
                            <div class="col-md-12">
                                <p>I hereby nominate the following person for any benefits due to be paid from the scheme in the event of my death</p>
                            </div>
                            <div class="col-md-6">
                                <label>NAME:</label>
                                <input type="text" name="BName" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>SURNAME:</label>
                                <input type="text" name="BSurname" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>ID NUMBER: </label>
                                <input type="number" name="BIDNumber" class="formControl" maxlength="13" minlength="13">
                            </div>
                        <div class="col-md-6">
                                <label>RELATIONSHIP:</label>
                                <input type="text" name="BRel" class="formControl">
                            </div>
                        
                        
                        

                            <div class="col-md-12"><div class="btn" id="update4" onClick="showstep4()">Next Step</div></div>
                    </div>
                </div>
                <div class="block" id="step4">
                    <div class="row">
                    <div class="col-md-12"><div class="btn" id="prev3" onClick="showstep3()">Prev Step</div></div>
                        <div class="col-md-12"><h6><b>PREMIUM PAYMENT</b></h6></div>
                        <div class="col-md-12"><hr /></div>
                            <div class="col-md-6">
                                <label>NAME :</label>
                                <input type="text" name="PName" class="formControl">
                            </div>
                            <div class="col-md-6">
                                <label>SURNAME:</label>
                                <input type="text" name="PSurname" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>RANK:</label>
                                <input type="text" name="PRank" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>STATION:</label>
                                <input type="text" name="PStation" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>I.D NUMBER :</label>
                                <input type="text" name="PIDNumber" maxlength="13" minlength="13" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>PERSAL NUMBER:</label>
                                <input type="text" name="PNumber" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>AMOUNT:</label>
                                <input type="text" name="PAmount" class="formControl" id="PAmount">
                            </div>
                        <div class="col-md-6">
                                <label>START DATE:</label>
                                <input type="date" name="PDate" class="formControl">
                            </div>
                            <div class="col-md-6">
                                <label>DATE:</label>
                                <input type="date" name="maritalStatus" class="formControl">
                            </div>
                            <div class="col-md-12"><p class="redsmalltxt">When selecting payment via Persal, please also complete the Debit Order section to be used only in case of limit exceed</p></div>
                            <div class="col-md-12"><h6><b>DEBIT ORDER AUTHORITY</b></h6></div>
                            <div class="col-md-12"><hr /></div>
                            <div class="col-md-12">
                                <label>ACCOUNTHOLDER NAME:</label>
                                <input type="text" name="AccHolderName" class="formControl">
                            </div>
                            <div class="col-md-6">
                                <label>BANK NAME:</label>
                                <input type="text" name="BankName" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>BRANCH NAME:</label>
                                <input type="text" name="BranchName" class="formControl">
                            </div>
                            <div class="col-md-6">
                                <label>ACCOUNT NUMBER:</label>
                                <input type="text" name="AccNumber" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>BRANCH CODE:</label>
                                <input type="text" name="BranchCode" class="formControl">
                            </div>
                            <div class="col-md-12">
                                <label>AMOUNT:</label>
                                <input type="text" name="AccAmount" class="formControl" placeholder="R" id="AccAmount">
                            </div>
                            <div class="col-md-6">
                                <label>ACCOUNT TYPE:</label>
                                <select name="AccType" class="formControl">
                                    <option selected value="Cheque" >CHEQUE</option>
                                    <option value="Savings">SAVINGS</option>
                                    <option value="Transmission">TRANSMISSION</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>START DATE:</label>
                                <input type="date" name="AccDate" class="formControl">
                            </div>  
                            <div class="col-md-12">
                                <p class="redsmalltxt">**NB: If it is found that a participant is over the age limit when joining, any claim for this member will be repudiated and premiums refunded. 
                                    Fax completed form to 086 673 2150 or e-mail to info@sapufuneral.co.za  or contact our Call Centre on  087 110 0973/ 012 940 2616 or 012 362 0143
                                </p>
                            </div>
                            <div class="col-md-12"><div class="btn"  id="confirmBTN" onClick="openPopup()">CONFIRM</div></div>
                    </div>
                    </div>
                    <popup id="popup">
            <div class="popupContent">
                <p>Message <span class="cloze" onClick="clozePopup()">&times;</span></p><br>
                <p class="popuptxt">Are you sure you want to save these changes?</p><br><br>
                <div class="popup_buttons"><button id="no" onclick="clozePopup()">Continue editing</button><button type="submit" id="yes" onclick="">Yes</button></div>
            </div>
        </popup>
                </div>
                </form>

        </div>
            <div class="col-md-3" hidden id="concent">
                <concentTitle>Concent Question</concentTitle>
                <p>“To enable the insurer to underwrite risk fairly and to combat insurance fraud, we need to have your consent to verify and share policy information with insurers and other institutions as well as to access credit information held by other institutions. </p>
                <p>Do you give the insurer consent?</p>
                <button class="yes">YES</button> <button class="no">NO</button>
            </div>
</div>
<search id="search">
            <button onClick="closeSearch()" class="btn">X</button>
            <input type="text" placeholder="What are you searching for?">
        </search>
        
       <div class="blueBorder" id="blueBorder"></div>

        


</body>
<script>
$('document').ready(function(){
    setOptionPremiumValue();
    // document.getElementById('SchemeOption')
});
   var d8 = new Date();
   document.getElementById('update').addEventListener("click",function(){
       console.log("FUCKCUCJFIJFDJUFJM");
   });
        document.getElementById('SchemeOption').addEventListener("click",function(){
                setOptionPremiumValue();
             });
             document.getElementById('MainIDNumber').addEventListener('keyup', function(){
                getAge("MainIDNumber","MainAge");
            });
            document.getElementById('MainIDNumber').addEventListener('change', function(){
                getAge("MainIDNumber","MainAge");
            });
            document.getElementById('MainUMNGCWABO').addEventListener('change', function(){
                addMainUMNGCWABO();
            });
            document.getElementById('SPUMNGCWABO').addEventListener('change', function(){
                addMainUMNGCWABO();
            });
            document.getElementById('IDNumber1').addEventListener('keyup', function(){
                getAgeValidation("check1",this.id,"Preminum1");           
            });
            document.getElementById('IDNumber2').addEventListener('keyup', function(){
                getAgeValidation("check2",this.id,"Preminum2");           
            });
            document.getElementById('IDNumber3').addEventListener('keyup', function(){
                getAgeValidation("check3",this.id,"Preminum3");           
            });
            document.getElementById('IDNumber4').addEventListener('keyup', function(){
                getAgeValidation("check4",this.id,"Preminum4");           
            });
            document.getElementById('IDNumber5').addEventListener('keyup', function(){
                getAgeValidation("check5",this.id,"Preminum5");           
            });
            document.getElementById('IDNumber6').addEventListener('keyup', function(){
                getAgeValidation("check6",this.id,"Preminum6");           
            });
            document.getElementById('check1').addEventListener('change', function(){
                ownKidsUMNGCWABO("Preminum1",this.id);
            });
            document.getElementById('check2').addEventListener('change', function(){
                ownKidsUMNGCWABO("Preminum2",this.id);
            });
            document.getElementById('check3').addEventListener('change', function(){
                ownKidsUMNGCWABO("Preminum3",this.id);
            });
            document.getElementById('check4').addEventListener('change', function(){
                ownKidsUMNGCWABO("Preminum4",this.id);
            });
            document.getElementById('check5').addEventListener('change', function(){
                ownKidsUMNGCWABO("Preminum5",this.id);
            });
            document.getElementById('check6').addEventListener('change', function(){
                ownKidsUMNGCWABO("Preminum6",this.id);
            });
            document.getElementById('WIDNumber1').addEventListener('keyup', function(){
                ValidateWiderAge("WPre1",this.id);
                widerChildernTotal();
                WiderChildrenPremium();
            });
            document.getElementById('WIDNumber2').addEventListener('keyup', function(){
                ValidateWiderAge("WPre2",this.id);
                widerChildernTotal();
                WiderChildrenPremium();
            });
            document.getElementById('WIDNumber3').addEventListener('keyup', function(){
                ValidateWiderAge("WPre3",this.id);
                widerChildernTotal();
                WiderChildrenPremium();
            });
            document.getElementById('WIDNumber4').addEventListener('keyup', function(){
                ValidateWiderAge("WPre4",this.id);
                widerChildernTotal();
                WiderChildrenPremium();
            });
            document.getElementById('FCovAm1').addEventListener('click', function(){ getExtendedFamilyPreimium("FIDNumber1",this.id,"FUMN1","FPrem1","FRep1","FTotalPre1")});
            document.getElementById('FCovAm2').addEventListener('click', function(){ getExtendedFamilyPreimium("FIDNumber2",this.id,"FUMN2","FPrem2","FRep2","FTotalPre2")});
            document.getElementById('FCovAm3').addEventListener('click', function(){ getExtendedFamilyPreimium("FIDNumber3",this.id,"FUMN3","FPrem3","FRep3","FTotalPre3")});
            document.getElementById('FCovAm4').addEventListener('click', function(){ getExtendedFamilyPreimium("FIDNumber4",this.id,"FUMN4","FPrem4","FRep4","FTotalPre4")});                                
            document.getElementById('BPMone').addEventListener('click', function(){ getINCOMECONTINUATIONBENEFIT();});
            document.getElementById('BPMtwo').addEventListener('click', function(){ getINCOMECONTINUATIONBENEFIT();});
            document.getElementById('BPMthree').addEventListener('click', function(){ getINCOMECONTINUATIONBENEFIT();});
            document.getElementById('BPMfour').addEventListener('click', function(){ getINCOMECONTINUATIONBENEFIT();});
            document.getElementById('OPone').addEventListener('click', function(){
                if(document.getElementById('OPone').checked){
                    document.getElementById('Airtime').value = (7.60).toFixed(2);
                    GrandestGrandTotal();
                }else{
                    document.getElementById('Airtime').value = 0;
                    GrandestGrandTotal();
                }
            });
            document.getElementById('OPtwo').addEventListener('click', function(){
                if(document.getElementById('OPtwo').checked){
                    document.getElementById('Car').value =(34.10).toFixed(2);
                    GrandestGrandTotal();
                }else{
                    document.getElementById('Car').value = 0;
                    GrandestGrandTotal();
                }
            });

            document.getElementById('PolicyNum').addEventListener('click', function(){
                var p = "KIP00001";
                console.log(p);
                document.getElementById('PolicyNum').value = p;
                p++;

            });







        var modal = document.getElementById('popup');
        //document.getElementById("pageTitle").innerHTML = (localStorage.getItem("policyType") + " LINES APPLICATION").toUpperCase();;
        function openSearch(){
            
              $("sidenav").hide();
              $("nav").hide();
              $("#mainBody").hide();
              document.getElementById('search').style.display = "block";
              document.body.style.backgroundColor = "white";

        }
        function closeSearch(){
            console.log("well?");
              $("sidenav").show();
              $("nav").show();
              $("#mainBody").show();
              document.getElementById('search').style.display = "none"; 
            document.body.style.backgroundColor = "#F2F2F5";
            console.log("well?");
        }
        function openPopup(){
            console.log("here");
            document.getElementById('popup').style.display = "block";
        }
        function clozePopup(){
            modal.style.display = "none";
        }
        function showstep1(){
            document.getElementById('step1').style.display = "block";
            document.getElementById('step2').style.display = "none";
            document.getElementById('step3').style.display = "none";
            document.getElementById('blueBorder').style.height = "40px";
            topFunction();
            console.log("step1()");
        }
        function showstep2(){
                document.getElementById('step2').style.display = "block";
                document.getElementById('step1').style.display = "none";
                document.getElementById('step3').style.display = "none";
                document.getElementById('blueBorder').style.height = "80px";
                topFunction();
                console.log("step2()");
        }
        function showstep3(){
            document.getElementById('step3').style.display = "block";
            document.getElementById('concent').style.display = "block";
            document.getElementById('step2').style.display = "none";
            document.getElementById('step4').style.display = "none";
            document.getElementById('blueBorder').style.height = "120px";
            topFunction();
            console.log("step3()");
        }
        function showstep4(){
            document.getElementById('step4').style.display = "block";
            document.getElementById('step3').style.display = "none";
            document.getElementById('concent').style.display = "none";
            document.getElementById('blueBorder').style.height = "160px";
            topFunction();
            console.log("step4()");
        }
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        function topFunction() {
            document.body.scrollTop = 0; 
            document.documentElement.scrollTop = 0;
        }
        function setOptionPremiumValue(){
           switch(document.getElementById('SchemeOption').value)
            {
                case "A: R8 000":
                var x = 31.10;
                document.getElementById('MainPremium').value = x.toFixed(2);
                TotalImmediateFamilyFuneralPremium();
                console.log(" setOptionPremiumValue() = "+ x);
                return x;
                     break;
                case "B: R13 000":
                    var x = 47.25;
                    document.getElementById('MainPremium').value = x.toFixed(2);
                    TotalImmediateFamilyFuneralPremium();
                     console.log(" setOptionPremiumValue() = "+ x);
                      return x;
                    break;
                case "C: R17 000":
                    var x = 60.30;
                    document.getElementById('MainPremium').value = x.toFixed(2);
                    TotalImmediateFamilyFuneralPremium();
                     console.log(" setOptionPremiumValue() = "+ x);
                      return x;
                    break;
                case "D: R19 000":
                    var x = 68.30;
                    document.getElementById('MainPremium').value = x.toFixed(2);
                    TotalImmediateFamilyFuneralPremium();
                     console.log(" setOptionPremiumValue() = "+ x);
                      return x;
                    break;
                case "E: R30 000":
                    var x = 96.20;
                    document.getElementById('MainPremium').value = x.toFixed(2);
                    TotalImmediateFamilyFuneralPremium();
                     console.log(" setOptionPremiumValue() = "+ x);
                      return x;
                    break;
                case "F: R50 000":
                    var x = 161.30;
                    document.getElementById('MainPremium').value = x.toFixed(2);
                    TotalImmediateFamilyFuneralPremium();
                     console.log(" setOptionPremiumValue() = "+ x);
                      return x;
                    break;
                case "G: R75 000":
                    var x = 240.00;
                    document.getElementById('MainPremium').value = x.toFixed(2);
                    TotalImmediateFamilyFuneralPremium();
                     console.log(" setOptionPremiumValue() = "+ x);
                      return x;
                    break;
                 default:
                 break;
            }
        }
        function getAge(x,y){
            console.log("getAge(x,y)");
            var z = parseInt(d8.getYear()) - parseInt(document.getElementById(x).value.substring(0, 2));
            document.getElementById(y).value = z.toString().slice(-2);

        }
        function addMainUMNGCWABO(){
            console.log("addMainUMNGCWABO()");
            var x = document.getElementById('MainUMNGCWABO');
            var y = document.getElementById('SPUMNGCWABO');
            var z = setOptionPremiumValue();
            if(x.checked == true && y.checked == true){
                document.getElementById('MainPremium').value = (35.85 + z).toFixed(2);
                document.getElementById('SPPremium').value = (35.85 + z).toFixed(2);
            }else if(x.checked == false && y.checked == true){
                document.getElementById('MainPremium').value = (22.80 + z).toFixed(2);
                document.getElementById('SPPremium').value = (22.80 + z).toFixed(2);
            }else if(x.checked == true && y.checked == false){
                document.getElementById('MainPremium').value = (22.80 + z).toFixed(2);
                
            }
            TotalImmediateFamilyFuneralPremium();
        }
        function getAgeValidation(x,y,z){
            console.log("getAgeValidation(x,y,z) y = "+y);
            var age = (d8.getYear() - document.getElementById(y).value.substring(0, 2)).toString().slice(-2);
                if(age >= 14 && age <= 21){
                    // if(document.getElementById(x))
                    document.getElementById(z).value = 0;
                }else{
                    document.getElementById(x).disabled = true;
                    console.log("not in age gap:"+age );
                    document.getElementById(z).value = 0;
                }
        }
        function ownKidsUMNGCWABO(x,y){
                
                if(document.getElementById(y).checked == true){
                    document.getElementById(x).value =  17.50;
                    document.getElementById('TotalPreminum').value =  17.50;
                }else{
                    document.getElementById(x).value =  0;
                }
                TotalImmediateFamilyFuneralPremium();
                
        }
        function  ValidateWiderAge(x,y){
            console.log();
            var z = parseInt(d8.getYear()) - parseInt(document.getElementById(y).value.substring(0, 2));
            var a = Number(z.toString().slice(-2));
            if(a >= 0 && a <= 5 ){
                document.getElementById(x).value = 7.00;
                    console.log("1 gap");
            }else  if(a >= 6 && a <= 13 ){
                console.log("2 gap");
                document.getElementById(x).value = 7.00;
            }else  if(a >= 14 && a <= 18 ){
                document.getElementById(x).value = 7.00;
                console.log("3 gap");
            }else{
                document.getElementById(x).value = 0;
                console.log("4 gap: to old");
            }

            // document.getElementById(y).value = ;

        }
        function ExtendedFamilyAge(x){
            var z = "";
            var a = "";
            if(document.getElementById(x).value == ""){
                a = 0;
                alert("Please enter ID number");
            }else{
             z = parseInt(d8.getYear()) - parseInt(document.getElementById(x).value.substring(0, 2));
             a = z.toString().slice(-2);
        }
            return a;
        }
        function getExtendedFamilyUMNCWABO(x,age){
                var UMNCWABO = 0;

            if(document.getElementById(x).checked){
                if(age >= 14 && age <= 20){
                    UMNCWABO = 17.50;
                }else if(age >= 21 && age <= 64){
                    UMNCWABO = 37.30;
                }else if(age >= 65 && age <= 74){
                    UMNCWABO = 93.40;
                }else if(age >= 75 && age <= 94){
                    UMNCWABO = 133.00;
                }
                return UMNCWABO;
            }else{
                return UMNCWABO;
                console.log("was not checked");
            }
            console.log("age: "+age);
        }
        function getExtendedFamilyPreimium(x,y,z,a,b,c){
            var total = 0;
            console.log("getExtendedFamilyPreimium(x,y,z,a,b,c) called");
            var age = ExtendedFamilyAge(x);
            console.log("got age: "+age);
            var UMNCWABO = getExtendedFamilyUMNCWABO(z,age);
            console.log("got UMNCWABO: "+ UMNCWABO);
            total += UMNCWABO;
            if(document.getElementById(b).checked){
                total += 2.30;
            }
            switch(Number(document.getElementById(y).value)){
                case 5000:
                        if(age >= 0 && age<= 17){
                            document.getElementById(a).value = 3.75;
                            total += 3.75;
                            getExtendedFamilyPreimiumTotal(c,total);
                        }else if(age >= 18 && age<= 64){
                            document.getElementById(a).value = 16.50;
                            total += 16.50;
                            getExtendedFamilyPreimiumTotal(c,total);
                        }else if(age >= 65 && age<= 74){
                            document.getElementById(a).value = 42.00;
                            total += 42.00;
                            getExtendedFamilyPreimiumTotal(c,total);
                        }else  if(age >= 75 && age<= 84){
                            document.getElementById(a).value = 60.00;
                            total += 60.00;
                            getExtendedFamilyPreimiumTotal(c,total);
                        }else  if(age >= 85 && age<= 94){
                            document.getElementById(a).value = 80.00;
                            total += 80.00;
                            getExtendedFamilyPreimiumTotal(c,total);
                        }
                    break;
                case 6000:
                    if(age >= 0 && age<= 17){
                        document.getElementById(a).value = 4.50;
                        total += 4.50;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 18 && age<= 64){
                        document.getElementById(a).value = 19.80;
                        total += 19.80;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 65 && age<= 74){
                        document.getElementById(a).value = 50.40;
                        total +=50.40;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 75 && age<= 84){
                        document.getElementById(a).value = 72.00;
                        total += 72.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 85 && age<= 94){
                        document.getElementById(a).value = 96.00;
                        total +=  96.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }
                    break;
                case 7000:
                    if(age >= 0 && age<= 17){
                        document.getElementById(a).value =5.25;
                        total += 5.25;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 18 && age<= 64){
                        document.getElementById(a).value =23.10;
                        total += 23.10;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 65 && age<= 74){
                        document.getElementById(a).value =58.80;
                        total += 58.80;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 75 && age<= 84){
                        document.getElementById(a).value =84.00;
                        total += 84.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 85 && age<= 94){
                        document.getElementById(a).value =112.00;
                        total += 112.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }
                    
                    break;
                case 8000:
                    if(age >= 0 && age<= 17){
                        document.getElementById(a).value =6.00;
                        total += 6.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 18 && age<= 64){
                        document.getElementById(a).value =26.40;
                        total += 26.40;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 65 && age<= 74){
                        document.getElementById(a).value =67.20;
                        total += 67.20;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 75 && age<= 84){
                        document.getElementById(a).value =96.00;
                        total += 96.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 85 && age<= 94){
                        document.getElementById(a).value =128.00;
                        total += 128.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }
                    break;
                case 9000:
                    if(age >= 0 && age<= 17){
                        document.getElementById(a).value =6.75;
                        total += 6.75;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 18 && age<= 64){
                        document.getElementById(a).value =29.70;
                        total += 29.70;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 65 && age<= 74){
                        document.getElementById(a).value =75.60;
                        total += 75.60;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 75 && age<= 84){
                        document.getElementById(a).value =108.00;
                        total += 108.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 85 && age<= 94){
                        document.getElementById(a).value =144.00;
                        total += 144.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }
                    break;
                case 10000:
                    if(age >= 0 && age<= 17){
                        document.getElementById(a).value =7.50;
                        total += 7.50;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 18 && age<= 64){
                        document.getElementById(a).value =33.00;
                        total += 33.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 65 && age<= 74){
                        document.getElementById(a).value =84.00;
                        total += 84.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 75 && age<= 84){
                        document.getElementById(a).value =120.00;
                        total += 120.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 85 && age<= 94){
                        document.getElementById(a).value =160.00;
                        total += 160.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }
                    break;
                case 15000:
                    if(age >= 0 && age<= 17){
                        document.getElementById(a).value =11.25;
                        total += 11.25;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 18 && age<= 64){
                        document.getElementById(a).value =49.50;
                        total += 49.50;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 65 && age<= 74){
                        document.getElementById(a).value =126.00;
                        total += 126.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 75 && age<= 84){
                        document.getElementById(a).value =180.00;
                        total += 180.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 85 && age<= 94){
                        document.getElementById(a).value =240.00;
                        total += 240.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }
                    break;
                case 20000:
                    if(age >= 0 && age<= 17){
                        document.getElementById(a).value =15.00;
                        total += 15.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 18 && age<= 64){
                        document.getElementById(a).value =66.00;
                        total += 66.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 65 && age<= 74){
                        document.getElementById(a).value =168.00;
                        total += 168.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 75 && age<= 84){
                        document.getElementById(a).value =240.00;
                        total += 240.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 85 && age<= 94){
                        document.getElementById(a).value =320.00;
                        total += 320.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }
                    break;
                case 25000:
                    if(age >= 0 && age<= 17){
                        document.getElementById(a).value =18.75;
                        total += 18.75;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 18 && age<= 64){
                        document.getElementById(a).value =82.50;
                        total += 82.50;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 65 && age<= 74){
                        document.getElementById(a).value =210.00;
                        total +=210.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 75 && age<= 84){
                        document.getElementById(a).value =300.00;
                        total += 300.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 85 && age<= 94){
                        document.getElementById(a).value =400.00;
                        total += 400.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }
                    break;
                case 30000:
                    if(age >= 0 && age<= 17){
                        document.getElementById(a).value =22.50;
                        total += 22.50;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 18 && age<= 64){
                        document.getElementById(a).value =99.00;
                        total += 99.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else if(age >= 65 && age<= 74){
                        document.getElementById(a).value =252.00;
                        total += 252.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 75 && age<= 84){
                        document.getElementById(a).value =360.00;
                        total += 360.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }else  if(age >= 85 && age<= 94){
                        document.getElementById(a).value =480.00;
                        total += 480.00;
                         getExtendedFamilyPreimiumTotal(c,total);
                    }
                    break;
                default:
                console.log( typeof document.getElementById(y).value);
                    break;
            }
        }
        function getExtendedFamilyPreimiumTotal(x,total){
            // x is the loctaion
            //you know total
            document.getElementById(x).value = total.toFixed(2);
            console.log("the last tootal  b4 grand: "+ total);
            getExtendedFamilyPreimiumGrandTotal();
        }
        function getExtendedFamilyPreimiumGrandTotal(){
            var total = 0;
            if(document.getElementById("FTotalPre1").value != ""){
                    total += Number(document.getElementById("FTotalPre1").value);
            }
            if(document.getElementById("FTotalPre2").value != ""){
                total += Number(document.getElementById("FTotalPre2").value);
            }
            if(document.getElementById("FTotalPre3").value != ""){
                total += Number(document.getElementById("FTotalPre3").value);
            }
            if(document.getElementById("FTotalPre4").value != ""){
                total += Number(document.getElementById("FTotalPre4").value);
            }
            
            document.getElementById("FTotalPrem").value = total.toFixed(2);
            ExtendedFamilyPremium();
        }
        function widerChildernTotal(){
            var total = 0;
            if(document.getElementById('WPre1').value == ""){
                  total = total + 0;
            }else {
                total += Number(document.getElementById('WPre1').value);
            }
            if(document.getElementById('WPre2').value == ""){
                 total = total + 0;
            }else {
                 total += Number(document.getElementById('WPre2').value);
            }
            if(document.getElementById('WPre3').value ==""){
                  total = total + 0;
            }else{
                 total += Number(document.getElementById('WPre3').value);
            }
            if(document.getElementById('WPre4').value ==""){
                  total = total + 0;
            }else{
                 total += Number(document.getElementById('WPre4').value);
            }
            document.getElementById('WTotalPre').value = total.toFixed(2);
        }
        function TotalImmediateFamilyFuneralPremium(){
            if(document.getElementById('TotalPreminum').value == ""){
                console.log("that first total: "+document.getElementById('TotalPreminum').value);
                document.getElementById('TotalFamily').value = Number(document.getElementById('MainPremium').value);
            }else{
                console.log("that first total: "+document.getElementById('TotalPreminum').value);
                document.getElementById('TotalFamily').value = Number(document.getElementById('MainPremium').value) + Number(document.getElementById('TotalPreminum').value);
            }
            GrandestGrandTotal();
        }
        function WiderChildrenPremium(){
            document.getElementById('Wider').value = Number(document.getElementById('WTotalPre').value).toFixed(2);
            console.log("Wider:" + document.getElementById('Wider').value);
            GrandestGrandTotal();
        }
        function ExtendedFamilyPremium(){
            document.getElementById('Extended').value = document.getElementById("FTotalPrem").value;
            GrandestGrandTotal();
        }
        function getINCOMECONTINUATIONBENEFIT(){
            if(document.getElementById('BPMone').checked){
                document.getElementById('InCon').value = 10.90;
            }else if(document.getElementById('BPMtwo').checked) {
                document.getElementById('InCon').value = 21.80;
            }else if(document.getElementById('BPMthree').checked) {
                document.getElementById('InCon').value = 32.70;
            }else if(document.getElementById('BPMfour').checked) {
                document.getElementById('InCon').value = 43.60;
            }
            GrandestGrandTotal();


        }
        function GrandestGrandTotal(){
            var total = 0;
            if(document.getElementById('TotalFamily').value != ""){
                total += Number(document.getElementById('TotalFamily').value);
            }
            if(document.getElementById('Wider').value != ""){
                total += Number(document.getElementById('Wider').value);
            }
            if(document.getElementById('Extended').value != ""){
                total += Number(document.getElementById('Extended').value);
            }
            if(document.getElementById('InCon').value != ""){
                total += Number(document.getElementById('InCon').value);
            }
            if(document.getElementById('Airtime').value != ""){
                total += Number(document.getElementById('Airtime').value);
            }
            if(document.getElementById('Car').value != ""){
                total += Number(document.getElementById('Car').value);
            }
            document.getElementById('GrandTotal').value = total.toFixed(2);
            document.getElementById('PAmount').value = total.toFixed(2);
            document.getElementById('AccAmount').value = total.toFixed(2);
            console.log("Grandestof Grand total: " + total);
        }
    </script>
</html>
