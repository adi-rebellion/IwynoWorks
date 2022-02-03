<?php

namespace App\Http\Controllers;

use App\Models\IwynoCompany;
use App\Models\IwynoFinInitiative;
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


    public function join_fin_initiative(Request $request)
    {
        $request_already_exist = IwynoFinInitiative::where('user_linkedin_profile',$request->fin_linkedin)->first();
        if(!$request_already_exist)
        {
            $new_join = new IwynoFinInitiative;
            $new_join->user_name = $request->fin_name;
            $new_join->user_email = $request->fin_email;
            $new_join->user_phone = $request->fin_phone;
            $new_join->user_linkedin_profile = $request->fin_linkedin;
            $new_join->user_summary = $request->fin_user_summary;
            $new_join->user_country =  $request->fin_country;
            $new_join->user_city =  '$request->fin_city';
            $new_join->user_link_tree =  $request->fin_user_link_tree;
            $new_join->user_skill = '$request->fin_skills';
            $new_join->user_value = $request->fin_value;
            $new_join->user_help = $request->fin_help;
            $new_join->user_currency =  $request->fin_user_currency;
            $new_join->user_hourly_rate = $request->fin_user_hour_rate;
            $new_join->check_hh = $request->check_hh;
            $new_join->save();

            return ['status' => 'success' , 'message' => 'Request submitted'];
        }
        else
        {
            return ['status' => 'error' , 'message' => 'Request already exist'];
        }
       

    }

   

}
