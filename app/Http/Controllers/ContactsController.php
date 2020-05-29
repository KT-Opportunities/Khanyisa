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
use App\PrePayment;
use App\DebitOrderAuth;
use App\Region;
use App\Station;
use App\User;
use App\ShopSteward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $ss = DB::table('shop_stewards')->orderBy('id','DESC')->paginate(8);
        $users = DB::table('users')->orderBy('id','DESC')->paginate(20);
        $region = DB::table('regions')->orderBy('id','DESC')->get();
        $station = DB::table('stations')->orderBy('id','DESC')->get();
        
        // $ss = ShopSteward::paginate(15);
        //var_dump($ss);
        return view('contacts', compact('ss', 'users', 'region', 'station'));
        
    }

    public function newregion(Request $request){
        $shop = new Region([

            'region_name' => $request->get('region_name'),
            ]);
    
            $shop->save();
            return redirect()->back()->with('success', 'Region added!');
    }

    public function newstation(Request $request){
        $shop = new Region([

            'station_name' => $request->get('station_name'),
            ]);
    
            $shop->save();
            return redirect()->back()->with('success', 'Station added!');
    }

    public function newsteward(Request $request)
    {

        $shop = new ShopSteward([

        'FullName' => $request->get('name'),
        'Gender' => $request->get('gender'),
        'ID_No' => $request->get('id'),
        'Persal_No' => $request->get('persal'),
        'Cell' => $request->get('cell'),
        'Email' => $request->get('email'),
        'Province' => $request->get('province'),
        'Region' => $request->get('region'),
        'Info_Rec' => $request->get('Info'),
        'Training' => $request->get('training'),
        'Comments' => $request->get('comments'),
        'Station' => $request->get('station'),

        ]);

        $shop->save();
        return redirect()->back()->with('success', 'Shop steward added!');
    }

    public function newagent(Request $request)
    {
        $use = new User([
            'name' => $request->get('Aname'),
            'email' => $request->get('Aemail'),
            'password' => bcrypt($request->get('Apassword')),

        ]);

        
        $use->save();
        return redirect()->back()->with('success', 'Agent added!');
    }

    public function editsteward(Request $request, $id)
    {
        $ss = ShopSteward::where('id', $id)->first();
         //dd($request->get('ApplicationType'));
        // $up->country = $request->get('country');
        
        $ss->FullName = $request->get('name');
        $ss->Gender = $request->get('gender');
        $ss->ID_No = $request->get('id');
        $ss->Persal_No = $request->get('persal');
        $ss->Cell = $request->get('cell');
        $ss->Email = $request->get('email');
        $ss->Province = $request->get('province');
        $ss->Region = $request->get('region');
        $ss->Info_Rec = $request->get('Info');
        $ss->Training = $request->get('training');
        $ss->Comments = $request->get('comments');
        $ss->Station = $request->get('station');

        $ss->save();
        return redirect()->back()->with('success', 'Shop steward details updated!');

    }

    public function contactsview($id)
    {
        $ss = DB::table('shop_stewards')->where('id', $id)->first();
        return view('contactsview', compact('ss'));
    }

    public function delete($id)
    {
        $ss = DB::table('shop_stewards')->where('id', $id)->first();
        $ss = ShopSteward::find($id);
        $ss->delete($ss->id);
       
        return redirect()->back()->with('success', 'Shop steward deleted!');
    }





}
