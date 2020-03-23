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
            @if($indi->NewLead == "Yes")
                <li class="menu active"><a href="{{ url('/home') }}"><img src="{{ asset('img/surface1.svg') }}" alt="Leads Logo">Leads</a></li>
            @else
                <li class="menu"><a href="{{ url('/home') }}"><img src="{{ asset('img/surface1.svg') }}" alt="Leads Logo">Leads</a></li>
            @endif
                <li class="menu"><a href="#"><img src="{{ asset('img/Business.svg') }}" alt="Businesses Logo">Businesses</a></li>
            @if($indi->NewLead == "No")    
                <li class="menu active"><a href="{{ url('/individual') }}"><img src="{{ asset('img/person.svg') }}">Individuals</a></li>
            @else
            <li class="menu"><a href="{{ url('/individual') }}"><img src="{{ asset('img/person.svg') }}">Individuals</a></li>
            @endif
                <li class="menu"><a href="{{ url('/reports') }}"><img src="{{ asset('img/XMLID_71_.svg') }}">Report</a></li>
                <li class="menu"><a href="{{ url('/contacts') }}"><img src="{{ asset('img/layer1.svg') }}">Contacts</a></li>
                <li class="menu"><a href="#"><img src="{{ asset('img/Payment.svg') }}">Claims</a></li>
                <li class="logout"><a href="{{ route('logout') }}"><img src="">Logout</a></li>
            </ul>
        </sidenav>
        <nav>
        <p id='pageTitle'>Funeral Policy</p>
            <a href="#"><Message><img src="{{ asset('img/Group 291.svg') }}"><br>Message</Message></a>
            <a href="/download/{{$indi->SignedDoc}}"><Import><img src="{{ asset('img/import.svg') }}"><br>Download pdf</Import></a>
            <a href="#" onclick="newLeadpopup()" ><Export><img src="{{ asset('img/export.svg') }}"><br>Upload pdf</Export></a>
            <a href="#"><search onclick="openSearch()"><i class="fas fa-search"></i></search></a>
            <a href="#"><new onclick="newLeadpopup()"><i class="fas fa-save" id="saveIcon"></i></new></a>
        </nav>
    <form class="" method="POST" action="{{ url('/update', $indi->id) }}">
        <debtor>
            <div><img src="{{ asset('img/default.png') }}"></div>
            <div class="debtorDetails">
                <p>{{$indi->MainName}} {{$indi->MainSurname}} </p>
                <p>{{$indi->MainIDNumber}}</p>
                <br>
                <p>{{$indi->created_at}}</p>
                @if($indi->Status == "Pending")
                <span  class="pending">{{$indi->Status}}</span>
                @elseif($indi->Status == "Client Consent")
                <span class="clientconsent">{{$indi->Status}}</span>
                @elseif($indi->Status == "Insurer Quote")
                <span class="InsurerQuote">{{$indi->Status}}</span>
                @elseif($indi->Status == "Inactive")
                <span  class="inactive">{{$indi->Status}}</span>
                @elseif($indi->Status == "Active")
                <span class="active">{{$indi->Status}}</span>
                @endif
            </div>
        </debtor>




<div class="row" id="mainBody">
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
<div class="col-md-12 PrevNextEdit">
    <div style="cursor: pointer;" id="Next"  onclick="next()">Next</div>
    <div style="cursor: pointer;" id="Prev1" onclick="prev1()">Prev</div>
    <div style="cursor: pointer;" id="Next1" onclick="next1()">Next</div>
    <div style="cursor: pointer;" id="Prev2" onclick="prev2()">Prev</div>
    <div style="cursor: pointer;" id="Next2" onclick="next2()">Next</div>
    <div style="cursor: pointer;" id="Prev3" onclick="prev3()">Prev</div>
    <div style="cursor: pointer;" id="confirmBTN" onclick="">Confirm</div>
    <div style="cursor: pointer;" id="Edit" onclick="edit()">Edit</div>
    <button id="UP" style="display: none;">Update</button>
    <div style="cursor: pointer;" id="generatePDF"><a href="{{ url('/downloadPDF',$indi->MainIDNumber) }}" ><img src="{{ asset('img/Page-1.svg') }}"> Generate Certificate</a></div>
</div>
    <div class="col-md-12">
        <ul class="nav nav-tabs tabs-right vertical-text">
            <li><a href="#step1" data-toggle="tab" aria-selected="true" onclick="viewPolicy()">Policy</a></li>
            <li><a href="#tasksContainer" data-toggle="tab" aria-selected="false" onclick="viewTasks()">Tasks</a></li>
            <li><a href="#communicationCommunication" data-toggle="tab" aria-selected="false" onclick="viewComms()">Communication</a></li>
        </ul>
                <div class="block" id="step1">
                    <div class="row">
                        <div class="col-md-12"><h6>PRINCIPAL MEMBER DETAILS</h6></div>
                        <!-- {{$ss->FullName}}{{$ss->Email}} -->
                            <div class="col-md-12"><hr /></div>
                            <div class="col-md-6"> 
                                <label for="ApplicationType">Application Type:</label>   
                                <select name="ApplicationType" disabled>
                                <option selected value="{{$indi->ApplicationType}}">{{$indi->ApplicationType}}</option>
                                <option value="Ammenment">Ammenment</option>
                                <option value="Transfer">Transfer</option>
                                <option value="New Application">New Application</option>

                                </select>
                            </div>
                            <div class="col-md-6"> 
                                <label for="SchemeOption">Select Scheme Option:</label>   
                                <select name="SchemeOption" class="formControl" disabled>
                                <option selected value="{{$indi->SchemeOption}}">{{$indi->SchemeOption}}</option>
                                <option value="A: R8 000">A: R8 000</option>
                                <option value="B: R13 000">B: R13 000</option>
                                <option value="C: R17 000">C: R17 000</option>
                                <option value="C: R19 000">C: R19 000</option>
                                <option value="C: R30 000">C: R30 000</option>
                                <option value="C: R50 000">C: R50 000</option>
                                <option value="C: R75 000">C: R75 000</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="Region">Region :</label>
                                <input type="text" class="formControl" value="{{$indi->Region}}" name="Region" disabled/>
                            </div>
                            <div class="col-md-6">
                                <label for="CellNumber">Cell Number :</label>
                                <input type="text" class="formControl" value="{{$indi->CellNumber}}" disabled name="CellNumber"/>
                            </div>
                            <div class="col-md-6">
                                <label for="Email">Email :</label>
                                <input type="text" class="formControl" value="{{$indi->Email}}" disabled name="Email"/>
                            </div>
                            <div class="col-md-12">
                                <h6 id="APPLICATION_FOR_VOLUNTARY"> APPLICATION FOR VOLUNTARY FUNERAL ASSURANCE WITH EXTENDED FAMILY BENEFITS</h6>
                            </div>
                            <div class="col-md-6">
                                <label for="MainRegion">Region :</label>
                                <input type="text" class="formControl" value="{{$indi->MainRegion}}" disabled name="MainRegion"/>
                            </div>
                            <div class="col-md-6">
                                <label for="MainStation">Station :</label>
                                <input type="text" class="formControl" value="{{$indi->MainStation}}" disabled name="MainStation"/>
                            </div>
                            <div class="col-md-6">
                                <label for="PolicyNum">Policy Number :</label>
                                <input type="text" class="formControl" value="{{$indi->policy_num}}" disabled name="PolicyNum"/>
                            </div>
                            <div class="col-md-6">
                                <label for="MainSurname">Surname :</label>
                                <input type="text" class="formControl" value="{{$indi->MainSurname}}" disabled name="MainSurname"/>
                            </div>
                            <div class="col-md-6">
                                <label for="MainName">Name :</label>
                                <input type="text" class="formControl" value="{{$indi->MainName}}" disabled name="MainName"/>
                            </div>
                            <div class="col-md-6">
                                <label for="MainIDNumber">ID Number :</label>
                                <input type="text" class="formControl" value="{{$indi->MainIDNumber}}" disabled name="MainIDNumber"/>
                            </div>
                            <div class="col-md-6">
                                <label for="MainAge">Age :</label>
                                <input type="text" class="formControl" value="{{$indi->MainAge}}" disabled name="MainAge"/>
                            </div>
                            <div class="col-md-6">
                                <label for="MainUMNGCWABO" class="container2">UMNGCWABO :
                                <input type="checkbox" class="formControl" value="{{$indi->MainUMGCWABO}}" disabled name="MainUMNGCWABO" value="Yes"/>
                                <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label for="MainCellNumber">Cell Number :</label>
                                <input type="text" class="formControl" value="{{$indi->MainCellNumber}}" disabled name="MainCellNumber"/>
                            </div>
                            <div class="col-md-6">
                                <label for="MainWorkNumber">Work Number :</label>
                                <input type="text" class="formControl" value="{{$indi->MainWorkNumber}}" disabled name="MainWorkNumber"/>
                            </div>
                            <div class="col-md-6">
                                <label for="MainPremium">Premium :</label>
                                <input type="text" class="formControl" value="{{$indi->MainPremium}}" disabled name="MainPremium"/>
                            </div>
                            <div class="col-md-6">
                                <label for="MainEmail">Email :</label>
                                <input type="text" class="formControl" value="{{$indi->MainEmail}}" disabled name="MainEmail"/>
                            </div>
                            <div class="col-md-6">
                                <label for="SapuNumber">SAPU Number :</label>
                                <input type="text" class="formControl" value="{{$indi->SapuNumber}}" disabled name="SapuNumber"/>
                            </div>
                            <div class="col-md-6">
                                <label for="PostalAdd">Postal Address :</label>
                                <input type="text" class="formControl" value="{{$indi->PostalAdd}}" disabled name="PostalAdd"/>
                            </div>
                            <div class="col-md-6">
                                <label for="Residential">Residential Address :</label>
                                <input type="text" class="formControl" value="{{$indi->Residential}}" disabled name="Residential"/>
                            </div>
                            <div class="col-md-6">
                                <label for="Residential">Status :</label>
                                <div onclick="openStatusEdit()" class="openBTN" id="openBTN" disabled>Status</div>
                                <!-- <select name="Status" class="formControl" disabled>
                                <option selected value="{{$indi->Status}}">{{$indi->Status}}</option>
                                <option value="Open">Open</option>
                                <option value="Client Consent">Client Consent</option>
                                <option value="Insurer Quote">Insurer Quote</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                                <option value="Pending">Pending</option>
                                
                                </select> -->
                            </div>

                    </div>
                </div>
                <div class="block" id="step2">
                    <div class="row">
                        <div class="col-md-12"><h6>PERSONAL DETAILS OF SPOUSE: </h6></div>
                        <div class="col-md-12"><hr /></div>
                        <div class="col-md-6">
                                <label>Surname :</label>
                                <input type="text" name="SPSurname" value="{{$sp->Surname}}" disabled class="formControl" >
                            </div>
                            <div class="col-md-6">
                                <label>First Name :</label>
                                <input type="text" name="SPName" value="{{$sp->Name}}" disabled class="formControl" >
                            </div>
                            <div class="col-md-6">
                                <label>ID Number :</label>
                                <input type="text" name="SPIDNumber" value="{{$sp->IDNumber}}" disabled 
                                       class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label for="SPUMNGCWABO" class="container2">UMNGCWABO	 :
                                <input type="checkbox" name="SPUMNGCWABO" value="{{$sp->UMNGCWABO}}" disabled class="formControl" value="Yes">
                                <span class="checkmark"></span>
                                </label>
                            </div>
                        <div class="col-md-6">
                                <label>Premium  :</label>
                                <input type="text" name="SPPremium" value="{{$sp->Premium}}" disabled class="formControl">
                            </div>
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
                                    @foreach($oc as $data)
                                        <tr>
                                            <td><input type="text" name="Name1" value="{{$data->Name}}" disabled  class="formControl"></td>
                                            
                                            <td><input type="text" name="IDNumber1" value="{{$data->IDNumber}}" disabled class="formControl"></td>
                                            <td><label class="container2"><input type="checkbox" name="check1" checked class="formControl" value="yes"><span class="checkmark"></span></label></td>
                                            <td><input type="text" name="Preminum1" value="{{$data->Premium}}" disabled class="formControl"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">	TOTAL IMMEDIATE FAMILY PREMIUM:</td>
                                            <td><input type="text" name="TotalPreminum" value="{{$data->TotalPremium}}" disabled  class="formControl"></td>
                                        </tr>
                                        @endforeach
                                        
                                        
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
                                @foreach($wc as $dataa)
                                    <tr>
                                        <td><input type="text" name="WName1" value="{{$dataa->Name}}" disabled  class="formControl"></td>
                                        
                                        <td><input type="text" name="WIDNumber1" value="{{$dataa->IDNumber}}" disabled  class="formControl"></td>
                                        <td><input type="text" name="WPre1" value="{{$dataa->Premium}}" disabled  class="formControl"></td>
                                    </tr>
                                    
                                    <tr>
                                            <td colspan="2">TOTAL WIDER CHILDREN PREMIUM:</td>
                                            <td><input type="text" name="WTotalPre" value="{{$dataa->TotalPremium}}" disabled  class="formControl"></td>
                                        </tr>
                                        @endforeach
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
                                    @foreach($ef as $dataa)
                                        <tr>
                                            <td><input type="text" name="FName1" value="{{$dataa->Name}}" disabled  class="formControl"></td>
                                            
                                            <td><input type="text" name="FIDNumber1" value="{{$dataa->IDNumber}}" disabled  class="formControl"></td>
                                            <td><input type="text" name="FRep1" value="{{$dataa->RepatriationPre}}" disabled  class="formControl"></td>
                                            <td>
                                            <select name="FUMN1" disabled class="formControl">
                                                
                                                <option selected value="{{$dataa->UMNGCWABO}}">{{$dataa->UMNGCWABO}}</option>
                                                <option value="Prem">Prem</option>
                                                <option value="Cover & Prem">Cover & Prem</option>
                                                </select>
                                            </td>
                                            <td><input type="text" name="FCovAm1" value="{{$dataa->CoverAmount}}" disabled   class="formControl"></td>
                                            <td><input type="text" name="FPrem1" value="{{$dataa->Premium}}" disabled  class="formControl"></td>
                                            <td><input type="text" name="FTotalPre1" value="{{$dataa->TotalPremium}}" disabled  class="formControl"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="6">TOTAL EXTENDED FAMILY PREMIUM</td>
                                            <td><input type="text" name="FTotalPrem" value="{{$dataa->TotalEXPremium}}" disabled  class="formControl"></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table> 
                                <div class="col-md-12">
                       
                            </div>     
                        </div>
                        <!-- <div class="col-md-6">
                                <label>PHYSICAL NUMBER :</label>
                                <input type="text" name="physicalNumber" class="formControl">
                            </div> -->
                            
                    </div>
                </div>
                <div class="block" id="step3">
                    <div class="row">
                        <div class="col-md-12"><h6><b>INCOME CONTINUATION BENEFIT:</b></h6></div>
                        <div class="col-md-12"><hr /></div>
                        <div class="col-md-12">
                                
                                <table>
                                    <thead>
                                        <tr>
                                            <td>BENEFIT PER MONTH</td>
                                            <td>PREMIUM</td>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ib as $dataa)
                                    <tr>
                                    <td><input type="text" name="FTotalPrem" value="R{{$dataa->BPM}}" disabled  class="formControl"></td>
                                    <td><input type="text" name="FTotalPrem" value="R{{$dataa->BPMpre}}" disabled  class="formControl"></td>
                                        
                                    </tr>
                                    @endforeach
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
                                            <td><input type="text" name="TotalFamily" value="R{{$tp->TotalFamily}}" disabled class="formControl" placeholder="R"></td>
                                        </tr>
                                        <tr>
                                            <td>Wider Children Premium</td>
                                            <td><input type="text" name="Wider" value="R{{$tp->WiderChildren}}" disabled class="formControl" placeholder="R"></td>
                                        </tr>
                                        <tr>
                                            <td>Extended Family Premium</td>
                                            <td><input type="text" name="Extended" value="R{{$tp->ExFamily}}" disabled class="formControl" placeholder="R"></td>
                                        </tr>
                                        <tr>
                                            <td>Income Continuation Premium (6 Months)</td>
                                            <td><input type="text" name="InCon" value="R{{$tp->IncomeCon}}" disabled class="formControl" placeholder="R"></td>
                                        </tr>
                                        <tr>
                                            <td>Airtime Premium</td>
                                            <td><input type="text" name="Airtime" value="R{{$tp->Airtime}}" disabled class="formControl" placeholder="R"></td>
                                        </tr>
                                        <tr>
                                            <td>Car Hire Premium</td>
                                            <td><input type="text" name="Car" value="R{{$tp->CarHire}}" disabled class="formControl" placeholder="R"></td>
                                        </tr>
                                        <tr>
                                            <td>GRAND TOTAL PREMIUM</td>
                                            <td><input type="text" name="GrandTotal" value="R{{$tp->GrandTotal}}" disabled  class="formControl" placeholder="R"></td>
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
                                <input type="text" name="BName" value="{{$bn->Name}}" disabled class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>SURNAME:</label>
                                <input type="text" name="BSurname" value="{{$bn->Surname}}" disabled class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>ID NUMBER: </label>
                                <input type="text" name="BIDNumber" value="{{$bn->IDNumber}}" disabled class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>RELATIONSHIP:</label>
                                <input type="text" name="BRel" value="{{$bn->Relationship}}" disabled class="formControl">
                            </div>
                        
                        
                        

                            
                    </div>
                </div>
                <div class="block" id="step4">
                    <div class="row">
                        <div class="col-md-12"><h6><b>PREMIUM PAYMENT</b></h6></div>
                        <div class="col-md-12"><hr /></div>
                        <div class="col-md-12">
                            
                        </div>
                            <div class="col-md-6">
                                <label>NAME :</label>
                                <input type="text" name="PName" value="{{$pp->Name}}" disabled class="formControl">
                            </div>
                            <div class="col-md-6">
                                <label>SURNAME:</label>
                                <input type="text" name="PSurname" value="{{$pp->Surname}}" disabled class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>RANK:</label>
                                <input type="text" name="PRank" value="{{$pp->Rank}}" disabled class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>STATION:</label>
                                <input type="text" name="PStation" value="{{$pp->Station}}" disabled class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>I.D NUMBER :</label>
                                <input type="text" name="PIDNumber" value="{{$pp->IDNumber}}" disabled class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>PERSAL NUMBER:</label>
                                <input type="text" name="PNumber" value="{{$pp->PerNumber}}" disabled class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>AMOUNT:</label>
                                <input type="text" name="PAmount" value="{{$pp->Amount}}" disabled class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>START DATE:</label>
                                <input type="text" name="PDate"  disabled class="formControl">
                            </div>
                            
                            
                            <div class="col-md-12"><h6><b>DEBIT ORDER AUTHORITY</b></h6></div>
                            <div class="col-md-12"><hr /></div>
                            <div class="col-md-12">
                                <label>ACCOUNTHOLDER NAME:</label>
                                <input type="text" name="AccHolderName" value="{{$do->AccHolderName}}" disabled class="formControl">
                            </div>
                            <div class="col-md-6">
                                <label>BANK NAME:</label>
                                <input type="text" name="BankName" value="{{$do->BankName}}" disabled class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>BRANCH NAME:</label>
                                <input type="text" name="BranchName" value="{{$do->BranchName}}" disabled class="formControl">
                            </div>
                            <div class="col-md-6">
                                <label>ACCOUNT NUMBER:</label>
                                <input type="text" name="AccNumber" value="{{$do->AccNumber}}" disabled class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>BRANCH CODE:</label>
                                <input type="text" name="BranchCode" value="{{$do->BranchCode}}" disabled class="formControl">
                            </div>
                            <div class="col-md-12">
                                <label>AMOUNT:</label>
                                <input type="text" name="AccAmount" value="{{$do->Amount}}" disabled class="formControl" placeholder="R">
                            </div>
                            <div class="col-md-6">
                                <label>ACCOUNT TYPE:</label>
                                <select name="AccType" disabled class="formControl">
                                <option selected value="{{$do->Amount}}" >{{$pp->Amount}}</option>
                                    <option  value="Cheque" >CHEQUE</option>
                                    <option value="Savings">SAVINGS</option>
                                    <option value="Transmission">TRANSMISSION</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>START DATE:</label>
                                <input type="date" name="AccDate"  value="{{$do->StartDate}}" disabledclass="formControl">
                            </div>
                            
                    </div>
                </div>
                <div class="block" id="tasksContainer">
                <div class="thatTitle">Reminders / Tasks</div>
                <hr class="whiteTable"/>
                <table class="whiteTable">
                    <thead>
                        <tr>
                            <td>ACTION</td>
                            <td>DATE</td>
                            <td>CLIENT NAME</td>
                            <td>ASSIGNED TO</td>
                            <td>POLICY TYPE</td>
                            <td>DUE DATE</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>LETTER OF DEMAND</td>
                            <td>2019-02-10</td>
                            <td>Jemy Forbay</td>
                            <td>Jemy Forbay</td>
                            <td>Personal Lines</td>
                            <td>2019-02-17</td>
                        </tr>
                        <tr>
                            <td>LETTER OF DEMAND</td>
                            <td>2019-02-10</td>
                            <td>Jemy Forbay</td>
                            <td>Jemy Forbay</td>
                            <td>Personal Lines</td>
                            <td>2019-02-17</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <div class="block" id="communicationCommunication">
                <div class="thatTitle">Communication</div>
                <hr class="whiteTable"/>
                <table class="whiteTable">
                    <thead>
                        <tr>
                            <td>ACTION</td>
                            <td>DATE</td>
                            <td>ASSIGNED TO</td>
                            <td>DEADLINE</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>LETTER OF DEMAND</td>
                            <td>2019-02-10</td>
                            <td>Jemy Forbay</td>
                            <td>2019-02-17</td>
                        </tr>
                        <tr>
                            <td>LETTER OF DEMAND</td>
                            <td>2019-02-10</td>
                            <td>Jemy Forbay</td>
                            <td>2019-02-17</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <popup id="popup">
                    <div class="popupContent">
                        <p>Message <span class="cloze" onClick="clozePopup()">&times;</span></p><br>
                        <p class="popuptxt">Are you sure you want to save these changes?</p><br><br>
                        <div class="popup_buttons"><button id="no" onclick="clozePopup()">Continue editing</button><button type="submit" id="yes" onclick="">Yes</button></div>
                    </div>
                </popup>
                </div>
                

        </div>
            

    </div>
    </form>
    <div id="productsOverlay">
    <div class="overlayContent">
                <button class="overlayclose" onclick="closenewLeadpopup()"><i class="fas fa-times"></i></button>
                <div class="pick">Upload</div>
                <form class="pick2" action="/process" enctype="multipart/form-data" method="POST">
                    <p>
                        <div for="doc" class="custom-file thatinputthing">
                            <input type="file" name="doc" id="doc" class="custom-file-input"  lang="es">
                            <label class="custom-file-label" for="customFileLang" id="file-upload-filename"></label>
                        </div>
                        <input type="text" hidden name="Indi_id" value="{{$indi->id}}" id="doc">
                    </p>
                    <button class="uploadBTn">Upload</button>
                    {{ csrf_field() }}
                </form>
        </div>

   
    
</div>
    <div class="statusModal" id="statusModal">
        <div class="statusModalContent" id="statusModalContent">
            <div class="row">
                <div class="col-md-12"><span class="cloze" onclick="clozePopup2()">&times;</span></div>
                <div class="col-md-6">
                <form class="" method="POST" action="/status">
                    <label>Status:</label>
                    <select name="Status" disabled  class="formControl">
                        <option selected value="{{$indi->Status}}">{{$indi->Status}}</option>
                        <option value="Open">Open</option>
                        <option value="Client Consent">Client Consent</option>
                        <option value="Insurer Quote">Insurer Quote</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="Pending">Pending</option>
                        <option value="Transfer">Transfer</option>
                    </select>
                    <input type="text" hidden   disabled name="Indi_id" value="{{$indi->MainIDNumber}}" id="doc">
                    <!-- <input type="date" disabled  name="datee" value="" id="doc"> -->
                </div>
                    <div class="col-md-6">
                        <label>Status Comment:</label>
                        <textarea name="StatusComment" class="formControl" style="padding-left: 10px;padding-top: 10px;" maxlength="500"></textarea>
                    </div>
                    <div class="col-md-12">
                        
                        <button class="statusUpdateBTN" >Submit</button>
                    </div>
                </form>
                <div class="col-md-12">
                    <hr/>
                </div>
                <div class="col-md-12">
                    @foreach($st as $s)
                    <div class="greyBlockWrapper">
                        <div class="greyBlock">
                            <p>Changed status to: {{$s->status}}</p>
                            <p>{{$s->comments}} </p>
                            <p class="NameTime"><b>{{$s->changed_by}},   {{$s->date}}</b></p>
                        </div>
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<script>
    var input = document.getElementById( 'doc' );
var infoArea = document.getElementById( 'file-upload-filename' );
input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  
  // the change event gives us the input it occurred in 
  var input = event.srcElement;
  
  // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
  var fileName = input.files[0].name;
  
  // use fileName however fits your app best, i.e. add it into a div
  infoArea.textContent = 'File name: ' + fileName;
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
    $('#openBTN').each(function() {
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
    function openStatusEdit(){
        document.getElementById('statusModal').style.display = "block";
    }
    function clozePopup2(){
        document.getElementById('statusModal').style.display = "none";
    }
    function viewPolicy(){
        document.getElementById('step1').style.display = "block";
        document.getElementsByTagName("Import")[0].style.display = "block";
        document.getElementsByTagName("Export")[0].style.display = "block";
        document.getElementsByClassName("PrevNextEdit")[0].style.display = "block";
        document.getElementById('tasksContainer').style.display = "none";
        document.getElementById('communicationCommunication').style.display = "none";
        
    } 
    function viewTasks(){
        document.getElementById('tasksContainer').style.display = "block";
        document.getElementById('step1').style.display = "none";
        document.getElementById('communicationCommunication').style.display = "none";
        document.getElementsByTagName("Import")[0].style.display = "none";
        document.getElementsByTagName("Export")[0].style.display = "none";
        document.getElementsByClassName("PrevNextEdit")[0].style.display = "none";
    }
    function viewComms(){
        document.getElementById('communicationCommunication').style.display = "block";
        document.getElementById('tasksContainer').style.display = "none";
        document.getElementById('step1').style.display = "none";
        document.getElementsByTagName("Import")[0].style.display = "none";
        document.getElementsByTagName("Export")[0].style.display = "none";
        document.getElementsByClassName("PrevNextEdit")[0].style.display = "none";
    }
    
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
</script>
</html>
