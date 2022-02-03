<?php

namespace App\Http\Controllers;

use App\Models\IwynoCompany;
use Illuminate\Http\Request;
use App\Models\IwynoService;
use App\Models\IwynoTechnology;
use App\Models\IwynoValue;
use App\Models\JobCountry;
use App\Models\JobSkill;
use App\Models\JobCity;
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

    public function iwyno_values(Request $request)
    {
        $values = IwynoValue::where('status','active')->get();
       
       
        return view('front.values',['values' => $values]);
    }

    public function iwyno_software_development(Request $request)
    {
        return view('front.software-development');
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

    public function fetch_iwyno_skill(Request $request)
    {
        $search = $request->search;
        $data = [];
        if($request->has('search')){
            $search = $request->search;
            $skill = JobSkill::orderby('name','asc')->select('name','id')
                    ->where([

                        ['name', 'like', '%' .$search . '%'],


                        ])
                    ->get();
        }
        return response()->json($skill);
    }

    public function fetch_iwyno_city(Request $request)
    {
        $cities = JobCity::where("country_id",$request->country_id)
        ->pluck("name","id");
        
                    
        return json_encode($cities);
    }

   

}
