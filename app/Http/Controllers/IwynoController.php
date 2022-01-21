<?php

namespace App\Http\Controllers;

use App\Models\IwynoCompany;
use Illuminate\Http\Request;
use App\Models\IwynoService;
use App\Models\IwynoTechnology;
use App\Providers\GlobalServiceProvider;

class IwynoController extends Controller
{
    public function __construct()
    {
       
    }

    public function iwyno_service(Request $request)
    {
        $services = IwynoService::where('status','1')->get();
       
        return view('front.services',['services' => $services]);
    }

    public function iwyno_company(Request $request)
    {
        $company = IwynoCompany::where('seo_name',$request->company)->first();
       
       
        return view('front.company',['company' => $company]);
    }

    public function iwyno_technology(Request $request)
    {
        $technology = IwynoTechnology::where('status','1')->get();
        foreach($technology as $tech)
        {
            $GlobalService = new GlobalServiceProvider;
            $tech->seo_tech = $GlobalService->seo_friendly_url($tech->name);
            $tech->save();

        }
       
        return view('front.technology',['technology' => $technology]);
    }

    

    public function iwyno_tech_page(Request $request)
    {
        return $request->tech_name;
    }
}
