<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <link href="{{ asset('css/individual.css') }}" rel="stylesheet">
    <title>Khanyisa</title>
</head>
<body>
<sidenav>
        <ul>
            <li class="brand"><a href="home.php"><img src="{{ asset('img/Khanyisa1.png') }}" alt="Company Logo"></a></li>
                <li class="menu"><a href="{{ url('/home') }}"><img src="{{ asset('img/surface1.svg') }}" alt="Leads Logo">Leads</a></li>
                <li class="menu"><a href="debotList.php"><img src="{{ asset('img/Business.svg') }}" alt="Businesses Logo">Businesses</a></li>
                <li class="menu"><a href="{{ url('/individual') }}"><img src="{{ asset('img/person.svg') }}">Individuals</a></li>
                <li class="menu"><a href="debotList.php"><img src="{{ asset('img/XMLID_71_.svg') }}">Report</a></li>
                <li class="menu"><a href="creditorList.php"><img src="{{ asset('img/layer1.svg') }}">Reminder</a></li>
                <li class="menu"><a href="report.php"><img src="{{ asset('img/Payment.svg') }}">Claims</a></li>
            </ul>
        </sidenav>
        <nav>
        <a href="debotList.php"><p id='pageTitle'>Individuals</p></a>
            <a href="#"><Message><img src="{{ asset('img/Group 291.svg') }}"><br>Message</Message></a>
            <a href="#"><Import><img src="{{ asset('img/import.svg') }}"><br>Import</Import></a>
            <a href="#"><Export><img src="{{ asset('img/export.svg') }}"><br>Export</Export></a>
            <button onclick="openSearch()"><i class="fas fa-search"></i></button>
            <a href="{{ url('/dashboard') }}"><new onclick="newLeadpopup()"><i class="fas fa-plus" id="saveIcon"></i></new></a>
        </nav> 
        




<div class="row" id="mainBody">

 <div class="col-md-9">
<form class="" method="POST" action="{{ url('/create') }}">
            <div class="block" id="step1">
    <div class="row">
        <div class="col-md-12"><h6>Policy Holder Details</h6></div>
            <div class="col-md-12"><hr /></div>
            <div class="col-md-6"> 
                <label for="ApplicationType">Select Application Type:</label>   
                <select name="ApplicationType1" required>
                  <option selected value="NewApplication">New Application</option>
                  <option value="Ammenment">Ammenment</option>
                  <option value="Transfer">Transfer</option>

                </select>
            </div>
            <div class="col-md-6"> 
                <label for="SchemeOption">Select Scheme Option:</label>   
                <select name="SchemeOption" class="formControl" required>

                <option selected value="A: R8 000">A: R8 000</option>
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
                <input type="text" class="formControl" name="Region" required/>
            </div>
            <div class="col-md-6">
                <label for="CellNumber">Cell Number :</label>
                <input type="text" class="formControl" name="CellNumber" required/>
            </div>
            <div class="col-md-6">
                <label for="Email">Email :</label>
                <input type="text" class="formControl" name="Email" required/>
            </div>
            <div class="col-md-12">
                <h6 id="APPLICATION_FOR_VOLUNTARY"> APPLICATION FOR VOLUNTARY FUNERAL ASSURANCE WITH EXTENDED FAMILY BENEFITS</h6>
            </div>
            <div class="col-md-6">
                <label for="MainRegion">Region :</label>
                <input type="text" class="formControl" name="MainRegion" required/>
            </div>
            <div class="col-md-6">
                <label for="MainStation">Station :</label>
                <input type="text" class="formControl" name="MainStation" required/>
            </div>
            <div class="col-md-6">
                <label for="MainDepartment">Department :</label>
                <input type="text" class="formControl" name="MainDepartment" required/>
            </div>
            <div class="col-md-6">
                <label for="MainSurname">Surname :</label>
                <input type="text" class="formControl" name="MainSurname" required/>
              </div>
            <div class="col-md-6">
                <label for="MainName">Name :</label>
                <input type="text" class="formControl" name="MainName" required/>
            </div>
            <div class="col-md-6">
                <label for="MainIDNumber">ID Number :</label>
                <input type="text" class="formControl" name="MainIDNumber" required/>
            </div>
            <div class="col-md-6">
                <label for="MainAge">Age :</label>
                <input type="text" class="formControl" name="MainAge" required/>
            </div>
            <div class="col-md-6">
                <label for="MainUMNGCWABO">UMNGCWABO :</label>
                <input type="text" class="formControl" name="MainUMNGCWABO" required/>
            </div>
            <div class="col-md-6">
                <label for="MainCellNumber">Cell Number :</label>
                <input type="text" class="formControl" name="MainCellNumber" required/>
            </div>
            <div class="col-md-6">
                <label for="MainWorkNumber">Work Number :</label>
                <input type="text" class="formControl" name="MainWorkNumber" required/>
            </div>
            <div class="col-md-6">
                <label for="MainPremium">Premium :</label>
                <input type="text" class="formControl" name="MainPremium" required/>
            </div>
            <div class="col-md-6">
                <label for="MainEmail">Email :</label>
                <input type="text" class="formControl" name="MainEmail" required/>
            </div>
            <div class="col-md-6">
                <label for="SapuNumber">SAPU Number :</label>
                <input type="text" class="formControl" name="SapuNumber" required/>
              </div>
            <div class="col-md-6">
                <label for="PostalAdd">Postal Address :</label>
                <input type="text" class="formControl" name="PostalAdd" required/>
            </div>
            <div class="col-md-6">
                <label for="Residential">Residential Address :</label>
                <input type="text" class="formControl" name="Residential" required/>
            </div>
            <div class="col-md-12">
                <div class="btn" id="update" onClick="showstep2()">Next Step</div>
            </div>

    </div>
          </div>
          <div class="block" id="step2">
                    <div class="row">
                        <div class="col-md-12"><h6>PERSONAL DETAILS OF SPOUSE: </h6></div>
                        <div class="col-md-12"><hr /></div>
                        <div class="col-md-6">
                                <label>Surname :</label>
                                <input type="text" name="SPSurname" class="formControl" >
                            </div>
                            <div class="col-md-6">
                                <label>First Name :</label>
                                <input type="text" name="SPName" class="formControl" >
                            </div>
                            <div class="col-md-6">
                                <label>ID Number :</label>
                                <input type="text" name="SPIDNumber" 
                                       class="formControl" >
                            </div>
                        <div class="col-md-6">
                                <label>UMNGCWABO	 :</label>
                                <input type="text" name="SPUMNGCWABO" class="formControl" >
                            </div>
                        <div class="col-md-6">
                                <label>Premium  :</label>
                                <input type="text" name="SPPremium" class="formControl" >
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
                                        <tr>
                                            <td><input type="text" name="Name1" class="formControl" ></td>
                                            
                                            <td><input type="text" name="IDNumber1" class="formControl"></td>
                                            <td><input type="checkbox" name="check1" class="formControl" value="yes"></td>
                                            <td><input type="text" name="Preminum1" class="formControl"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Name2" class="formControl"></td>
                                            
                                            <td><input type="text" name="IDNumber2" class="formControl"></td>
                                            <td><input type="checkbox" name="check2" class="formControl" value="yes"></td>
                                            <td><input type="text" name="Preminum2" class="formControl"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Name3" class="formControl"></td>
                                            
                                            <td><input type="text" name="IDNumber3" class="formControl"></td>
                                            <td><input type="checkbox" name="check3" class="formControl" value="yes"></td>
                                            <td><input type="text" name="Preminum3" class="formControl"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Name4" class="formControl"></td>
                                            
                                            <td><input type="text" name="IDNumber4" class="formControl"></td>
                                            <td><input type="checkbox" name="check4" class="formControl" value="yes"></td>
                                            <td><input type="text" name="Preminum4" class="formControl"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Name5" class="formControl"></td>
                                            
                                            <td><input type="text" name="IDNumber5" class="formControl"></td>
                                            <td><input type="checkbox" name="check5" class="formControl" value="yes"></td>
                                            <td><input type="text" name="Preminum5" class="formControl"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="Name6" class="formControl"></td>
                                            
                                            <td><input type="text" name="IDNumber6" class="formControl"></td>
                                            <td><input type="checkbox" name="check6" class="formControl" value="yes"></td>
                                            <td><input type="text" name="Preminum6" class="formControl"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">	TOTAL IMMEDIATE FAMILY PREMIUM:</td>
                                            <td><input type="text" name="TotalPreminum" class="formControl"></td>
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
                                        <td><input type="text" name="WName1" class="formControl"></td>
                                        
                                        <td><input type="text" name="WIDNumber1" class="formControl"></td>
                                        <td><input type="text" name="WPre1" class="formControl"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="WName2" class="formControl"></td>
                                        
                                        <td><input type="text" name="WIDNumber2" class="formControl"></td>
                                        <td><input type="text" name="WPre2" class="formControl"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="WName3" class="formControl"></td>
                                        
                                        <td><input type="text" name="WIDNumber3" class="formControl"></td>
                                        <td><input type="text" name="WPre3" class="formControl"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="WName4" class="formControl"></td>
                                        
                                        <td><input type="text" name="WIDNumber4" class="formControl"></td>
                                        <td><input type="text" name="WPre4" class="formControl"></td>
                                    </tr>
                                    <tr>
                                            <td colspan="3">TOTAL WIDER CHILDREN PREMIUM:</td>
                                            <td><input type="text" name="WTotalPre" class="formControl"></td>
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
                                            
                                            <td><input type="text" name="FIDNumber1" class="formControl"></td>
                                            <td><input type="text" name="FRep1" class="formControl"></td>
                                            <td>
                                            <select name="FUMN1" class="formControl">
                                                <option selected value="Cover">Cover</option>
                                                <option value="Prem">Prem</option>
                                                <option value="Cover & Prem">Cover & Prem</option>
                                                </select>
                                            </td>
                                            <td><input type="text" name="FCovAm1" class="formControl"></td>
                                            <td><input type="text" name="FPrem1" class="formControl"></td>
                                            <td><input type="text" name="FTotalPre1" class="formControl"></td>
                                        </tr>
                                        <tr>
                                        <td><input type="text" name="FName2" class="formControl"></td>
                                            
                                            <td><input type="text" name="FIDNumber2" class="formControl"></td>
                                            <td><input type="text" name="FRep2" class="formControl"></td>
                                            <td>
                                            <select name="FUMN2" class="formControl">
                                                <option selected value="Cover">Cover</option>
                                                <option value="Prem">Prem</option>
                                                <option value="Cover & Prem">Cover & Prem</option>
                                                </select>
                                            </td>
                                            <td><input type="text" name="FCovAm2" class="formControl"></td>
                                            <td><input type="text" name="FPrem2" class="formControl"></td>
                                            <td><input type="text" name="FTotalPre2" class="formControl"></td>
                                        </tr>
                                        <tr>
                                        <td><input type="text" name="FName3" class="formControl"></td>
                                            
                                            <td><input type="text" name="FIDNumber3" class="formControl"></td>
                                            <td><input type="text" name="FRep3" class="formControl"></td>
                                            <td>
                                            <select name="FUMN3" class="formControl">
                                                <option selected value="Cover">Cover</option>
                                                <option value="Prem">Prem</option>
                                                <option value="Cover & Prem">Cover & Prem</option>
                                                </select>
                                            </td>
                                            <td><input type="text" name="FCovAm3" class="formControl"></td>
                                            <td><input type="text" name="FPrem3" class="formControl"></td>
                                            <td><input type="text" name="FTotalPre3" class="formControl"></td>
                                        </tr>
                                        <tr>
                                        <td><input type="text" name="FName4" class="formControl"></td>
                                            
                                            <td><input type="text" name="FIDNumber4" class="formControl"></td>
                                            <td><input type="text" name="FRep4" class="formControl"></td>
                                            <td>
                                            <select name="FUMN4" class="formControl">
                                                <option selected value="Cover">Cover</option>
                                                <option value="Prem">Prem</option>
                                                <option value="Cover & Prem">Cover & Prem</option>
                                                </select>
                                            </td>
                                            <td><input type="text" name="FCovAm4" class="formControl"></td>
                                            <td><input type="text" name="FPrem4" class="formControl"></td>
                                            <td><input type="text" name="FTotalPre4" class="formControl"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7">TOTAL EXTENDED FAMILY PREMIUM</td>
                                            <td><input type="text" name="FTotalPrem" class="formControl"></td>
                                        </tr>
                                    </tbody>
                                </table> 
                                <div style="font-size:12px">Repatriation benefit for extended family members can be added @ R2.30 per member.</div>     
                        </div>
                        <!-- <div class="col-md-6">
                                <label>PHYSICAL NUMBER :</label>
                                <input type="text" name="physicalNumber" class="formControl">
                            </div> -->
                            <div class="col-md-12"><div class="btn" id="update" onClick="showstep3()">Next Step</div></div>
                    </div>
                </div>
                <div class="block" id="step3">
                    <div class="row">
                        <div class="col-md-12"><h6>CONSENT QUESTION</h6></div>
                        <div class="col-md-12"><hr /></div>
                        <div class="col-md-2">
                                <label>TITLE :</label>
                                <input type="text" name="title" class="formControl">
                            </div>
                            <div class="col-md-4">
                                <label>NAME :</label>
                                <input type="text" name="name" class="formControl">
                            </div>
                            <div class="col-md-6">
                                <label>PASSPORT NUMBER :</label>
                                <input type="text" name="passportNumber" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>SURNAME :</label>
                                <input type="text" name="surname" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>PERMIT NUMBER :</label>
                                <input type="text" name="permitNumber" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>I.D NUMBER :</label>
                                <input type="text" name="IDNumber" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>NATIONALITY:</label>
                                <input type="text" name="nationality" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>BANK NAME :</label>
                                <input type="text" name="bankName" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>MARITAL STATUS :</label>
                                <input type="text" name="maritalStatus" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>ACCOUNT NUMBER :</label>
                                <input type="text" name="accNumber" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>PHYSICAL NUMBER :</label>
                                <input type="text" name="physicalNumber" class="formControl">
                            </div>
                            <div class="col-md-12"><div class="btn" id="update" onClick="showstep4()">Next Step</div></div>
                    </div>
                </div>
                <div class="block" id="step4">
                    <div class="row">
                        <div class="col-md-12"><h6>DETAILS OF CO-INSURED AND OTHER INSURED</h6></div>
                        <div class="col-md-12"><hr /></div>
                        <div class="col-md-2">
                                <label>TITLE :</label>
                                <input type="text" name="title" class="formControl">
                            </div>
                            <div class="col-md-4">
                                <label>NAME :</label>
                                <input type="text" name="name" class="formControl">
                            </div>
                            <div class="col-md-6">
                                <label>PASSPORT NUMBER :</label>
                                <input type="text" name="passportNumber" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>SURNAME :</label>
                                <input type="text" name="surname" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>PERMIT NUMBER :</label>
                                <input type="text" name="permitNumber" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>I.D NUMBER :</label>
                                <input type="text" name="IDNumber" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>NATIONALITY:</label>
                                <input type="text" name="nationality" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>BANK NAME :</label>
                                <input type="text" name="bankName" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>MARITAL STATUS :</label>
                                <input type="text" name="maritalStatus" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>ACCOUNT NUMBER :</label>
                                <input type="text" name="accNumber" class="formControl">
                            </div>
                        <div class="col-md-6">
                                <label>PHYSICAL NUMBER :</label>
                                <input type="text" name="physicalNumber" class="formControl">
                            </div>
                            <div class="col-md-12"><div class="btn"  id="confirmBTN" onClick="openPopup()">CONFIRM</div></div>
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
            <div class="col-md-3" id="concent">
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
        
       

        


</body>
<script>
        var modal = document.getElementById('popup');
        document.getElementById("pageTitle").innerHTML = (localStorage.getItem("policyType") + " LINES APPLICATION").toUpperCase();;
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
        function showstep2(){
                
                document.getElementById('step2').style.display = "block";
                document.getElementById('step1').style.display = "none";
                document.getElementsByClassName('blueBorder').style.height = "10%";
        }
        function showstep3(){
            
            document.getElementById('step3').style.display = "block";
            document.getElementById('concent').style.display = "block";
            document.getElementById('step2').style.display = "none";
            document.getElementsByClassName('blueBorder').style.height = "15%";
        }
        function showstep4(){
            document.getElementById('step4').style.display = "block";
            document.getElementById('step3').style.display = "none";
            document.getElementById('concent').style.display = "none";
            
            document.getElementsByClassName('blueBorder').style.height = "20%";
        }
        function CONFIRM(){

        }
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        
    </script>
</html>
