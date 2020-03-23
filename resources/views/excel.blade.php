<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    <title></title>
    
    <style>
   
   @font-face {
 font-family: 'Roboto_Reg';
 src: local('Roboto_Reg'), url(../fonts/roboto.regular.ttf) format('truetype');
}

body{
  font-family: Arial, sans-serif;
}

table{
    background-color: white;
    width: 100%;
    color:#434962;
    
}

table th{
    padding-top: 10px;
    font-size: 14px;
    border: 1px solid black;
    
    
    
}

#indi td{
  width: 100%;
  text-align: center;
  margin-left: 20px;
  font-size: 13px;
  border-bottom: 1px solid black;
  border-right: 1px solid black;
}
#th{
    
    border: 5px solid black;
    background-color: #343643;
    color:white;
    height: 40px;
    
}



      header, .add{
        display: inline-block;
      }

      header{
        border-bottom: 5px solid #e7cc03;
      }

      footer{
        display: inline-block;
        border-top: 5px solid #e7cc03;
        position: fixed;
        width: 100%;
        bottom: 55px;
        text-align: center;
      }

      .foot{
        display: inline-block;
        text-align: center;
        width: 91%;
        color: rgb(68, 67, 128);
        font-size: 12px;
        
        
      }

      span{
        visibility: hidden;
      }

      .db{
        width: 100%;
        margin-left: 20px;
      }

      .dblogo{
        width: 30%
      }
      .sapu{
        
        width: 12%
      }

      .klogo{
        width: 12%;
        float: left;
      }

      .add{
        margin-top: 0%;
        position: relative;
        margin-left: 50px;
      }

      .add p{
        line-height: 10px;
        font-size: 12px;
      }

      .mem{
        text-align: center;
        font-size: 20px;
        margin-top: 20px;
      }

      .hea{
        margin-bottom: 5px;
        padding: 5px;
      }

      #indi{
        font-size: 11px;
      }

      #indi td{
        padding: 10px;
        
      }

      .hea b{
        margin-left: 5px;
      }
      
      .ll{
        font-size: 12px;
        font-weight: bold;
      }

      
    </style>
  </head>
  <body>
  <header>
  <div class="db">
    <img class="dblogo" src="{{ asset('img/DibananiLogo.png') }}" alt="Dibanani Logo"/>
    <img class="sapu" src="{{ asset('img/sapuLogo.png') }}" alt="Sapu Logo"/>
    <div class="add">
      <p>227 Lynnwood Road, Brooklyn, 0181</p>
      <p>Phone Number: 087 110 0973 or 012 940 2616 or 012 362 0143</p>
      <p>Fax: 086 673 2150</p>
      <p>E-mail: info@sapufuneral.co.za</p>
    </div>
  </div>
</header>

<div class="row">
  <div class="col-md-12"><h1 class="mem">Membership Certificate</h1></div>
  <div class="col-md-3">
    <div class="hea">Policy Number: <b>{{$indi->policy_num}}</b></div>
    <div class="hea">Policy Type: <b>{{$indi->ProType}}</b></div>
    <div class="hea">Principal Member's Name: <b>{{$indi->MainName}}</b></div>
    <div class="hea">Total Premium: <b>R{{$tp->GrandTotal}}</b></div>
    <div class="hea">Contract Inception Date: <b>{{$indi->created_at}}</b></div>
  </div>
</div>
<div class="ll">People assured for funeral cover by the Principal Member above:</div>
<table>
        <tr id="th">
            <th>NAME</th>
            <th>RELATIONSHIP</th>
            <th>COVER TYPE</th>
            <th>ID NO</th>
            <th>BENEFIT</th>
            <th>PREMIUM</th>
            <th>DATE CREATED</th>
            
        </thead>

        <tr style="border-bottom: 1px solid red" id="indi">
          <td>{{$indi->MainName}}</td>
          <td>Principal</td>
          <td>Full Family</td>
          <td>{{$indi->MainIDNumber}}</td>
          <td>{{$indi->SchemeOption}}</td>
          <td>{{$indi->MainPremium}}</td>
          <td>{{$indi->created_at}}</td>
        </tr>
        
        
        <tr id="indi">
          <td>{{$sp->Name}}</td>
          <td>Spouse</td>
          <td>Full Family</td>
          <td>{{$sp->IDNumber}}</td>
          <td>{{$indi->SchemeOption}}</td>
          <td>0</td>
          <td>{{$indi->created_at}}</td>
        </tr>
        @foreach($oc as $contact)
        <tr id="indi">
          <td>{{$contact->Name}}</td>
          <td>Child</td>
          <td>Full Family</td>
          <td>{{$contact->IDNumber}}</td>
          <td>{{$indi->SchemeOption}}</td>
          <td>{{$contact->Premium}}</td>
          <td>{{$indi->created_at}}</td>
        </tr>
        @endforeach

        @foreach($wc as $contact)
        <tr id="indi">
          <td>{{$contact->Name}}</td>
          <td>Child</td>
          <td>Wider Children</td>
          <td>{{$contact->IDNumber}}</td>
          <td>R5000</td>
          <td>{{$contact->Premium}}</td>
          <td>{{$indi->created_at}}</td>
        </tr>
        @endforeach

        @foreach($ef as $contact)
        <tr id="indi">
          <td>{{$contact->Name}}</td>
          <td>Dependant</td>
          <td>Extended Family</td>
          <td>{{$contact->IDNumber}}</td>
          <td>{{$contact->CoverAmount}}</td>
          <td>{{$contact->Premium}}</td>
          <td>{{$indi->created_at}}</td>
        </tr>
        @endforeach
        
        
        
        
    </tbody>
  </table>



    <footer>
      <img class="klogo" src="{{ asset('img/khanyisaLogo.jpg') }}" alt="Dibanani Logo"/>
      <p class="foot">
      Tel: (011) 482 5452 <span>hello</span> 	Fax: 086 542 0506  <span>hello</span>  	147 Bram Fischer Drive, Ferndale, 2194<br>
      lifeadmin@khanyisabrokers.co.za<br>
      An Authorised Financial Services Provider:  License Number – 31213<br>
      Company Registration Number: 2017/237388/07	<br>VAT Number: - 4850255011

      </p>

    </footer>
  </body>
</html>