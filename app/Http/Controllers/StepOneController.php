<?php

namespace App\Http\Controllers;

use App\Models\StepOne;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class StepOneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stepone.stepone');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        //validate requests ...


        //insert data
        $step = new StepOne;

        $step->business_name = $request->business_name;
        $step->business_owner = $request->business_owner;
        $step->business_address = $request->business_address;
        $step->business_contact = $request->business_contact;
        $step->business_logo = $request->business_logo;
        $step->business_concept = $request->business_concept;
        $step->financial_features = $request->financial_features;
        $step->financial_requirements = $request->financial_requirements;
        $step->current_business_position = $request->current_business_position;
        $step->major_achievements = $request->major_achievements;
        $step->general_overview = $request->general_overview;
        $step->company_name = $request->company_name;
        $step->type_of_legal_entity = $request->type_of_legal_entity;
        $step->significant_assets = $request->significant_assets;
        $step->mission_statement = $request->mission_statement;
        $step->ownership = $request->ownership;
        $step->company_strength = $request->company_strength;
        $step->industry_type = $request->industry_type;
        $step->opportunities = $request->opportunities;
        $step->industry = $request->industry;
        $step->market = $request->market;
        $step->business_focus = $request->business_focus;
        $step->business_success = $request->business_success;
        $step->business_unique = $request->business_unique;
        $step->customer_value = $request->customer_value;
        $step->value_proposition = $request->value_proposition;
        $step->revenue_source = $request->revenue_source;
        $step->major_costs = $request->major_costs;
        $step->business_profitability = $request->business_profitability;
        $step->business_investment = $request->business_investment;
        $step->criticial_success = $request->criticial_success;
        $step->founders_list = $request->founders_list;
        $step->manager_description = $request->manager_description;
        $step->investment_requirement = $request->investment_requirement;
        $step->organisation_chart = $request->organisation_chart;
        $step->product_service = $request->product_service;
        $step->target_market = $request->target_market;
        $step->customers_perception = $request->customers_perception;
        $step->operating_cyle = $request->operating_cyle;
        $step->neccesary_skills = $request->neccesary_skills;
        $step->outsource = $request->outsource;
        $step->cash_receipts = $request->cash_receipts;
        $step->pricing_strategy = $request->pricing_strategy;
        $step->sales_distribution = $request->sales_distribution;
        $step->promotion_strategy = $request->promotion_strategy;

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('business_logo')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('assets', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $step = new StepOne([

                "business_logo" => $request->file->hashName()
            ]);

            $step->save(); // Finally, save the record.
        }

        $step->user_id = auth()->id();
        $step->save();

        return redirect()->route('download');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\StepOne $stepOne
     * @return \Illuminate\Http\Response
     */
    public function show(StepOne $stepOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\StepOne $stepOne
     * @return \Illuminate\Http\Response
     */
    public function edit(StepOne $stepOne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\StepOne $stepOne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StepOne $stepOne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\StepOne $stepOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(StepOne $stepOne)
    {
        //
    }

    //download pdf
    public function download()
    {
        // retreive all records from db
        $data = User::all();

        // share data to view
        view()->share('test', $data);
        $pdf = PDF::loadView('test', $data);

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
        //return view('download');
    }

    public function d()
    {
        $plans = auth()->user()->stepones();


        return view('test');
    }
}
