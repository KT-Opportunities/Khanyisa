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

use Illuminate\Support\Facades\Validator;



class SearchController extends Controller
{
    public function index()
    {

        return view('search');
        
    }
}
