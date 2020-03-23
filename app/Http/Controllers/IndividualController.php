<?php

namespace App\Http\Controllers;

use App\Individual;
use App\Spouse;
use App\OwnChildern;
use App\WiderChildren;
use App\ExtendedFamily;
use App\IncomeBenefit;
use App\TotalPreCal;
use App\BenNom;
use LynX39\LaraPdfMerger\Facades\PdfMerger;
use Illuminate\Support\Facades\Auth;
use App\PrePayment;
use App\DebitOrderAuth;
// use Barryvdh\DomPDF\PDF as PDF;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Validation\Validator;
use Cyberduck\LaravelExcel\ImporterFacade;
use Importer;
use Carbon\Carbon;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Validator;

class IndividualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $individuals = Individual::all();
        $individuals = DB::select('select * from individuals where NewLead = :id', ['id' => "No"]);

        return view('individual', compact('individuals'));
        
    }

    public function policy($id)
    {
        // $individuals = Individual::all();
        $policys = DB::table('individuals')->where('id', $id)->first();

        return view('policy', compact('policys'));
        
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

          //dd($request->get('MainPremium'));
        $Individual = new Individual([
         
        'ApplicationType' => $request->get('ApplicationType1'),
        'SchemeOption' => $request->get('SchemeOption'),
         'Region' => $request->get('Region'),
         'CellNumber' => $request->get('CellNumber'),
         'Email' => $request->get('Email'),
         'ShopSteward' => $request->get('ShopSteward'),
         'agent' => $request->get('agent'),
         'MainRegion' => $request->get('MainRegion'),
         'MainStation' => $request->get('MainStation'),
         'policy_num' => $request->get('PolicyNum'),
         'MainSurname' => $request->get('MainSurname'),
         'MainName' => $request->get('MainName'),
         'MainIDNumber' => $request->get('MainIDNumber'),
         'MainAge' => $request->get('MainAge'),
         'MainUMGCWABO' => $request->get('MainUMGCWABO'),
         'MainCellNumber' => $request->get('MainCellNumber'),
         'MainWorkNumber' => $request->get('MainWorkNumber'),
         'MainPremium' => $request->get('MainPremium'),
         'MainEmail' => $request->get('MainEmail'),
         'SapuNumber' => $request->get('SapuNumber'),
         'PostalAdd' => $request->get('PostalAdd'),
         'Residential' => $request->get('Residential'),
         'NewLead' => 'Yes',
         'Status' => 'Pending',
         'ProType' => 'Dibanani Funeral',
         
        ]);
         
         //dd($request->get('ApplicationType1'));
        $Individual->save();

        if($request->get('SPName') != null){
        $Spouse = new Spouse([
            'Indi_ID' => $Individual->MainIDNumber,
            'Surname' => $request->get('SPSurname'),
            'IDNumber' => $request->get('SPIDNumber'),
            'Name' => $request->get('SPName'),
            'UMNGCWABO' => $request->get('SPUMNGCWABO'),
            'Premium' => $request->get('SPPremium'),

        ]);
        }

        $Spouse->save();

        if($request->get('Name1') != null){
            $OwnChildren = new OwnChildern([
                'Indi_ID' => $Individual->MainIDNumber,
                'IDNumber' => $request->get('IDNumber1'),
                'Name' => $request->get('Name1'),
                'UMNGCWABO' => $request->get('check1'),
                'Premium' => $request->get('Preminum1'),
                'TotalPremium' => $request->get('TotalPreminum'),
    
            ]);

            $OwnChildren->save();

        };

        if($request->get('Name2') != null){

            $OwnChildren = new OwnChildern([
                'Indi_ID' => $Individual->MainIDNumber,
                
                'IDNumber' => $request->get('IDNumber2'),
                'Name' => $request->get('Name2'),
                'UMNGCWABO' => $request->get('check2'),
                'Premium' => $request->get('Preminum2'),
                'TotalPremium' => $request->get('TotalPreminum'),
    
            ]);

            $OwnChildren->save();

        };

        if($request->get('Name3') != null){

            $OwnChildren = new OwnChildern([
                'Indi_ID' => $Individual->MainIDNumber,
                
                'IDNumber' => $request->get('IDNumber3'),
                'Name' => $request->get('Name3'),
                'UMNGCWABO' => $request->get('check3'),
                'Premium' => $request->get('Preminum3'),
                'TotalPremium' => $request->get('TotalPreminum'),
    
            ]);

            $OwnChildren->save();

        };

        if($request->get('Name4') != null){

            $OwnChildren = new OwnChildern([
                'Indi_ID' => $Individual->MainIDNumber,
                
                'IDNumber' => $request->get('IDNumber4'),
                'Name' => $request->get('Name4'),
                'UMNGCWABO' => $request->get('check4'),
                'Premium' => $request->get('Preminum4'),
                'TotalPremium' => $request->get('TotalPreminum'),
    
            ]);

            $OwnChildren->save();

        };

        if($request->get('Name5') != null){

            $OwnChildren = new OwnChildern([
                'Indi_ID' => $Individual->MainIDNumber,
                
                'IDNumber' => $request->get('IDNumber5'),
                'Name' => $request->get('Name5'),
                'UMNGCWABO' => $request->get('check5'),
                'Premium' => $request->get('Preminum5'),
                'TotalPremium' => $request->get('TotalPreminum'),
    
            ]);

            $OwnChildren->save();

        };

        if($request->get('Name6') != null){

            $OwnChildren = new OwnChildern([
                'Indi_ID' => $Individual->MainIDNumber,
                
                'IDNumber' => $request->get('IDNumber6'),
                'Name' => $request->get('Name6'),
                'UMNGCWABO' => $request->get('check6'),
                'Premium' => $request->get('Preminum6'),
                'TotalPremium' => $request->get('TotalPreminum'),
    
            ]);

            $OwnChildren->save();

        };

        if($request->get('WName1') != null){

            $WiderChildren = new WiderChildren([
                'Indi_ID' => $Individual->MainIDNumber,
                
                'IDNumber' => $request->get('WIDNumber1'),
                'Name' => $request->get('WName1'),
                
                'Premium' => $request->get('WPre1'),
                'TotalPremium' => $request->get('WTotalPre'),
    
            ]);

            $WiderChildren->save();

        };

        if($request->get('WName2') != null){

            $WiderChildren = new WiderChildren([
                'Indi_ID' => $Individual->MainIDNumber,
                
                'IDNumber' => $request->get('WIDNumber2'),
                'Name' => $request->get('WName2'),
                
                'Premium' => $request->get('WPre2'),
                'TotalPremium' => $request->get('WTotalPre'),
    
            ]);

            $WiderChildren->save();

        };

        if($request->get('WName3') != null){

            $WiderChildren = new WiderChildren([
                'Indi_ID' => $Individual->MainIDNumber,
                
                'IDNumber' => $request->get('WIDNumber3'),
                'Name' => $request->get('WName3'),
                
                'Premium' => $request->get('WPre3'),
                'TotalPremium' => $request->get('WTotalPre'),
    
            ]);

            $WiderChildren->save();

        };

        if($request->get('WName4') != null){

            $WiderChildren = new WiderChildren([
                'Indi_ID' => $Individual->MainIDNumber,
                
                'IDNumber' => $request->get('WIDNumber4'),
                'Name' => $request->get('WName4'),
                
                'Premium' => $request->get('WPre4'),
                'TotalPremium' => $request->get('WTotalPre'),
    
            ]);

            $WiderChildren->save();

        };

        if($request->get('FName1') != null){

            $ExtendedFamily = new ExtendedFamily([
                'Indi_ID' => $Individual->MainIDNumber,
                'Name' => $request->get('FName1'),
                'IDNumber' => $request->get('FIDNumber1'),
                'RepatriationPre' => $request->get('FRep1'),
                'UMNGCWABO' => $request->get('FUMN1'),
                'CoverAmount' => $request->get('FCovAm1'),
                'Premium' => $request->get('FPrem1'),
                'TotalPremium' => $request->get('FTotalPre1'),
                'TotalEXPremium' => $request->get('FTotalPrem'),
    
            ]);

            $ExtendedFamily->save();

        };

        if($request->get('FName2') != null){

            $ExtendedFamily = new ExtendedFamily([
                'Indi_ID' => $Individual->MainIDNumber,
                'Name' => $request->get('FName2'),
                'IDNumber' => $request->get('FIDNumber2'),
                'RepatriationPre' => $request->get('FRep2'),
                'UMNGCWABO' => $request->get('FUMN2'),
                'CoverAmount' => $request->get('FCovAm2'),
                'Premium' => $request->get('FPrem2'),
                'TotalPremium' => $request->get('FTotalPre2'),
                'TotalEXPremium' => $request->get('FTotalPrem'),
    
            ]);

            $ExtendedFamily->save();

        };

        if($request->get('FName3') != null){

            $ExtendedFamily = new ExtendedFamily([
                'Indi_ID' => $Individual->MainIDNumber,
                'Name' => $request->get('FName3'),
                'IDNumber' => $request->get('FIDNumber1'),
                'RepatriationPre' => $request->get('FRep3'),
                'UMNGCWABO' => $request->get('FUMN3'),
                'CoverAmount' => $request->get('FCovAm3'),
                'Premium' => $request->get('FPrem3'),
                'TotalPremium' => $request->get('FTotalPre3'),
                'TotalEXPremium' => $request->get('FTotalPrem'),
    
            ]);

            $ExtendedFamily->save();

        };

        if($request->get('FName4') != null){

            $ExtendedFamily = new ExtendedFamily([
                'Indi_ID' => $Individual->MainIDNumber,
                'Name' => $request->get('FName4'),
                'IDNumber' => $request->get('FIDNumber4'),
                'RepatriationPre' => $request->get('FRep4'),
                'UMNGCWABO' => $request->get('FUMN4'),
                'CoverAmount' => $request->get('FCovAm4'),
                'Premium' => $request->get('FPrem4'),
                'TotalPremium' => $request->get('FTotalPre4'),
                'TotalEXPremium' => $request->get('FTotalPrem'),
    
            ]);

            $ExtendedFamily->save();

        };

        if($request->get('BPMone') != null || $request->get('BPMtwo') != null || $request->get('BPMthree') != null || $request->get('BPMfour') != null ){
            $BPM = "";
            $BPMpre = "";
            $OPBenfit = "";
            $OPcover = "";
            $OPpre = "";

            if($request->get('BPMone') == "one"){
                $BPM = "1000";
                $BPMpre = "10.90";
            }
            elseif($request->get('BPMtwo') == "two"){
                $BPM = "2000";
                $BPMpre = "21.80";
            }
            elseif($request->get('BPMthree') == "three"){
                $BPM = "3000";
                $BPMpre = "32.70";
            }
            elseif($request->get('BPMtfour') == "four"){
                $BPM = "4000";
                $BPMpre = "43.60";
            }

            if($request->get('air') == "one"){
                $OPBenfit = "Airtime";
                $OPcover = "250";
                $OPpre = "7.60";
            }
            elseif($request->get('car') == "one"){
                $OPBenfit = "Car Hire";
                $OPcover = "7,500";
                $OPpre = "34.10";
            }

            //dd($BPM);

            $IncomeBenefit = new IncomeBenefit([
                'Indi_ID' => $Individual->MainIDNumber,
                'BPM' => $BPM,
                'BPMpre' => $BPMpre,
                'OPBenfit' => $OPBenfit,
                'OPcover' => $OPcover,
                'OPpre' => $OPpre,
                
    
            ]);

            $IncomeBenefit->save();
            

        };

        $TotalPreCal = new TotalPreCal([
            'Indi_ID' => $Individual->MainIDNumber,
            'TotalFamily' => $request->get('TotalFamily'),
            'WiderChildren' => $request->get('Wider'),
            'ExFamily' => $request->get('Extended'),
            'IncomeCon' => $request->get('InCon'),
            'Airtime' => $request->get('Airtime'),
            'CarHire' => $request->get('Car'),
            'GrandTotal' => $request->get('GrandTotal'),
            

        ]);

        $TotalPreCal->save();

        $BenNom = new BenNom([
            'Indi_ID' => $Individual->MainIDNumber,
            'Name' => $request->get('BName'),
            'Surname' => $request->get('BSurname'),
            'IDNumber' => $request->get('BIDNumber'),
            'Relationship' => $request->get('BRel'),
            'Airtime' => $request->get('Airtime'),
            'CarHire' => $request->get('Car'),
            'GrandTotal' => $request->get('GrandTotal'),
            

        ]);

        $BenNom ->save();

        $PrePayment = new PrePayment([
            'Indi_ID' => $Individual->MainIDNumber,
            'Name' => $request->get('PName'),
            'Surname' => $request->get('PSurname'),
            'Rank' => $request->get('PRank'),
            'Station' => $request->get('PStation'),
            'IDNumber' => $request->get('PIDNumber'),
            'PerNumber' => $request->get('PNumber'),
            'Amount' => $request->get('PAmount'),
            'StartDate' => $request->get('PDate'),
            
            

        ]);

        $PrePayment ->save();

        $DebitOrderAuth = new DebitOrderAuth([
            'Indi_ID' => $Individual->MainIDNumber,
            'AccHolderName' => $request->get('AccHolderName'),
            'BankName' => $request->get('BankName'),
            'BranchName' => $request->get('BranchName'),
            'AccNumber' => $request->get('AccNumber'),
            'BranchCode' => $request->get('BranchCode'),
            'Amount' => $request->get('AccAmount'),
            'AccType' => $request->get('AccType'),
            'StartDate' => $request->get('AccDate'),
        ]);


        $DebitOrderAuth ->save();
        $Individual->TotalPrem = $request->get('AccAmount');
        
        $ds = Carbon::createFromDate($Individual->create_at)->addMonths(6);
        //    dd($ds);
        
        $de = Str::limit($ds, 10,);
        $replaced = Str::replaceFirst('...', '', $de);
        
        $Individual->waiting_period = $replaced;
        $Individual->save();

        //dd($request->get('SPName'));
        //dd($Individual->id);
        

        return redirect('/home')->with('success', 'New lead saved!');

       
    }
    

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = $request->doc;
         dd($fileName);
           dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function newleads()
    {
        $ss = DB::table('shop_stewards')->orderBy('FullName','ASC')->get();
        $region = DB::table('regions')->orderBy('region_name','ASC')->get();
        $station = DB::table('stations')->orderBy('station_name','ASC')->get();
        $users = DB::table('users')->orderBy('name')->get();
        return view('newleads', compact('ss', 'region', 'station', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$indi = DB::select('select * from individuals where Indi_ID = :id', ['id' => $id]);
        $indi = DB::table('individuals')->where('MainIDNumber', $id)->first();
        $sp = DB::table('spouses')->where('Indi_ID', $id)->first();
        $oc = DB::table('own_childerns')->where('Indi_ID', $id)->get();
        $wc = DB::table('wider_childrens')->where('Indi_ID', $id)->get();
        $ef = DB::table('extended_families')->where('Indi_ID', $id)->get();
        $ib = DB::table('income_benefits')->where('Indi_ID', $id)->get();
        $tp = DB::table('total_pre_cals')->where('Indi_ID', $id)->first();
        $bn = DB::table('ben_noms')->where('Indi_ID', $id)->first();
        $pp = DB::table('pre_payments')->where('Indi_ID', $id)->first();
        $do = DB::table('debit_order_auths')->where('Indi_ID', $id)->first();
        $ss = DB::table('shop_stewards')->where('ID_No', '6207095126087')->first();
        $st = DB::table('statuses')->where('indi_id', $id)->get();




        // $indi = DB::table('individuals')
        //     ->join('spouses', 'individuals.id', '=', 'spouses.Indi_ID')
        //     ->join('pre_payments', 'individuals.id', '=', 'spouses.Indi_ID')
        //     ->select('individuals.*', 'spouses.*', 'pre_payments.*')
        //     ->first();
        //dd($do->AccHolderName);
        return view('edit', compact('indi', 'sp', 'oc', 'wc', 'ef', 'ib', 'tp', 'bn', 'pp','do','ss','st')); 
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $indi = DB::table('individuals')->where('Indi_ID', $id)->first();
        
        
        //    ($request->all()); 
         $indi = Individual::where('id', $id)->first();
         //dd($request->get('ApplicationType'));
        // $up->country = $request->get('country');
        $indi->ApplicationType = $request->get('ApplicationType');
        $indi->SchemeOption = $request->get('SchemeOption');
        $indi->Region = $request->get('Region');
        $indi->CellNumber = $request->get('CellNumber');
        $indi->Email = $request->get('Email');
        $indi->MainRegion = $request->get('MainRegion');
        $indi->MainStation = $request->get('MainStation');
        $indi->policy_num = $request->get('PolicyNum');
        $indi->MainSurname = $request->get('MainSurname');
        $indi->MainName = $request->get('MainName');
        $indi->MainIDNumber = $request->get('MainIDNumber');
        $indi->MainAge = $request->get('MainAge');
        $indi->MainUMGCWABO = $request->get('MainUMGCWABO');
        $indi->MainCellNumber = $request->get('MainCellNumber');
        $indi->MainWorkNumber = $request->get('MainWorkNumber');
        $indi->MainPremium = $request->get('MainPremium');
        $indi->MainEmail = $request->get('MainEmail');
        $indi->SapuNumber = $request->get('SapuNumber');
        $indi->PostalAdd = $request->get('PostalAdd');
        $indi->Residential = $request->get('Residential');

        
         

        //  $uniqueFileName = $request->file('doc')->getClientOriginalName();
        //  $destination = base_path() . '/public/uploads';
        // $request->get('doc')->move($destination,$uniqueFileName);

        // $indi->SignedDoc = $uniqueFileName;
         
        // dd($uniqueFileName);
        
         $indi->save();

         if ($indi->NewLead == "Yes") {
            return redirect()->back()->with('success', 'Policy details updated!');
         }else {
            return redirect()->back()->with('success', 'Policy details updated!');
         }



        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function destroy(Individual $individual)
    {
        //
    }

    public function download($file)
    {
      return response()->download(storage_path("app/upload/{$file}"));
        // view("files.download", compact('$download'));
    }

    public function downloadPDF($id){

        $indi = DB::table('individuals')->where('MainIDNumber', $id)->first();
        $sp = DB::table('spouses')->where('Indi_ID', $id)->first();
        $oc = DB::table('own_childerns')->where('Indi_ID', $id)->get();
        $wc = DB::table('wider_childrens')->where('Indi_ID', $id)->get();
        $ef = DB::table('extended_families')->where('Indi_ID', $id)->get();
        $ib = DB::table('income_benefits')->where('Indi_ID', $id)->get();
        $tp = DB::table('total_pre_cals')->where('Indi_ID', $id)->first();
        $bn = DB::table('ben_noms')->where('Indi_ID', $id)->first();
        $pp = DB::table('pre_payments')->where('Indi_ID', $id)->first();
        $do = DB::table('debit_order_auths')->where('Indi_ID', $id)->first();
        $ss = DB::table('shop_stewards')->where('ID_No', '6207095126087')->first();
        // dd($tp);
  
        $pdf = PDF::loadView('pdf', compact('indi', 'sp', 'oc', 'wc', 'ef', 'ib', 'tp', 'bn', 'pp','do','ss'),[
            'format' => 'A4-L',
            'orientation' => 'L',
            'mode' => 'c']);
        $pdf->save(storage_path("app/certificates/").$indi->MainName.' '.'(Khanyisa Member Certificate).pdf');





        // $pdfFile1Path = storage_path("app/certificates/").$indi->MainName.' '.'(Khanyisa Member Certificate).pdf';
        // $pdfFile2Path = storage_path("app/certificates/Terms & Conditions - Dibanani Funeral");

        // $pdfM= PDFMerger::init();

        // // Add 2 PDFs to the final PDF
        // $pdfM->addPDF($pdfFile1Path, 'all');
        // $pdfM->addPDF($pdfFile2Path, 'all');

        // $pdfM->merge();

        // // Generate download of "mergedpdf.pdf"
        // $pdfM->save($indi->MainName.' '.'(Khanyisa Member Certificate).pdf', "download");
        return $pdf->stream($indi->MainName.' '.'(Khanyisa Member Certificate).pdf');
        //return view('pdf', compact('indi', 'sp', 'oc', 'wc', 'ef', 'ib', 'tp', 'bn', 'pp','do','ss')); 
  
      }

      public function reports(){
        $indi = DB::table('individuals')->get();

        return view('reports',compact('indi'));
    }
  public function reportGen($id){
        $data = [
            'id' => $id
        ];
        $indi = DB::table('individuals')->get();
        $shopStewart = DB::table('shop_stewards')->get();
        $users = DB::table('users')->get();
        return view('reportGen',$data,compact('indi','shopStewart','users'));
    }

    public function importFile(Request $request){
    //     $request->user(); //returns an instance of the authenticated user...
    //     auth()->user();  //returns an instance of the authenticated user...
    //     auth()->user()->id ;
    //     $id = Auth::id();
    //  dd(auth()->user()->name);
        return view('test.excel');

    }

    public function importExcel(Request $request){

    //     $request->user(); //returns an instance of the authenticated user...
    //  $request->user()->id;
     
        $validator =  Validator::make($request->all(), [
            'file' => 'required|max:5000|mimes:xlsx,xls,csv'
        ]);
        

        $file = $request->file('file');
        
        $dateTime = date('Ymd_His');
        $fileName = $dateTime.'-'.$file->getClientOriginalName();
        $save = public_path('upload');
        $file->move($save, $fileName);  
        
        $excel = Importer::make('Excel');
        $excel->load($save."/".$fileName);
        //$excel->load($request->file('file'));
        $collection = $excel->getCollection();
        
        // dd($collection);
        // dd(sizeof($collection));

        foreach ($collection as $row ) {
            dump($collection[1][3]);
         
            try {
                dump($collection[$row]);
                $replaced = Str::replaceFirst('\'', '', $collection[$row][3]);
                print_r($replaced);
                $replacedd = Str::replaceFirst('', '', $collection[$row][7]);
                $indi = DB::table('individuals')->where('MainIDNumber', $replaced)->first();
                // print_r($indi);
                // dd($indi->TotalPrem);

                if($indi->TotalPrem == $replacedd){
                    dd('done');
                }
                // dd($indi->MainIDNumber[1]);
                
                
                

                // if($indi->MainIDNumber)
                

                // dd($replacedd);
                
            } catch (\Exception $th) {
                dd(['error' => $th->getMessage()]);
             return redirect()->back()->with(['error' => $th->getMessage()]);
            }
         }
        // if(sizeof($collection[1]) == 5){
        //     for ($row=1; $row<sizeof($collection) ; $row++) { 
        //        try {
        //            dd($collection[$row]);
        //        } catch (\Exception $th) {
        //         return redirect()->back()->with(['error' => $th->getMessage()]);
        //        }
        //     }

        // }else {
        //     return redirect()->back()->with(['error' => [0 =>'Please provide accurate data']]);
        // }



        return redirect()->back()->with(['success'=>'File uploaded']);

        // if($validator->passes()){

        // }else {
        //     # code...
        // }
    }
    public function downloadPDF2(Request $request){
        // auth()->user();  
        // $id = auth()->user()->id ;
        // $cuser = DB::table('users')->where('id', $id)->first();
        switch ($request->input('action')) {
            case 'ExportPDF':
                $indi = '';
                $viewFilterOne = $request->get('viewFilterOne');
                $ShopStewardFilterOne = $request->get('ShopStewardFilterOne');
                $dates = explode("~",$request->get('dates'));
                $AgentFliterOne = $request->get('AgentFliterOne');
                $StationFliterOne =  $request->get('stationFilterOne');
                $RegionFliterOne =  $request->get('regionFilterOne');
                $premiumFilterOne = $request->get('premiumFilterOne');
                $startDate = $dates[0];
                $endDate = $dates[1];
                
                if($viewFilterOne == "NewLeads"){
                    $indi = 'Yes';
                }else{
                    $indi = 'No';
                }
                $final = Individual::where([
                    ['NewLead', 'LIKE',$indi],
                    ['ShopSteward','LIKE',$ShopStewardFilterOne],
                    ['MainStation','LIKE',$StationFliterOne],
                    ['agent', 'LIKE', $AgentFliterOne],
                    ['MainRegion','LIKE',$RegionFliterOne],
                    ['created_at','>=',$startDate],
                    ['created_at','<=',$endDate],
                ])
                ->get();
                $pdf = PDF::loadView('pdf2', compact('final', 'ShopStewardFilterOne', 'startDate', 'AgentFliterOne','endDate','StationFliterOne','RegionFliterOne','indi'));
                    // $pdf->save(storage_path("app/certificates/").$indi->MainName.' '.'(Khanyisa Report).pdf');
                return $pdf->stream('(Khanyisa Report).pdf');
                // return view('pdf');
                break;
    
            case 'ExportCSV':
                $indi = '';
                $viewFilterOne = $request->get('viewFilterOne');
                $ShopStewardFilterOne = $request->get('ShopStewardFilterOne');
                $dates = explode("~",$request->get('dates'));
                $AgentFliterOne = $request->get('AgentFliterOne');
                $StationFliterOne =  $request->get('stationFilterOne');
                $RegionFliterOne =  $request->get('regionFilterOne');
                $premiumFilterOne = $request->get('premiumFilterOne');
                $startDate = $dates[0];
                $endDate = $dates[1];
                
                if($viewFilterOne == "NewLeads"){
                    $indi = 'Yes';
                }else{
                    $indi = 'No';
                }
                $indiTable = DB::table('individuals')->where([
                    ['NewLead', 'LIKE',$indi],
                    ['ShopSteward','LIKE',$ShopStewardFilterOne],
                    ['MainStation','LIKE',$StationFliterOne],
                    ['agent', 'LIKE', $AgentFliterOne],
                    ['MainRegion','LIKE',$RegionFliterOne],
                    ['created_at','>=',$startDate],
                    ['created_at','<=',$endDate],
                ])->select();
                $excel = Exporter::make('Excel');
                $excel->loadQuery($indiTable);
                return $excel->stream("Report.xlsx");
                break;
        }
      
 }

}
