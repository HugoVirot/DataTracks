<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $campaigns = Campaign::with('products')->get();
        return view ('campaigns.index', ['campaigns' => $campaigns]);
    }

    public function create()
    {
        $products = DB::table('products')->get();
        return view('campaigns.create', ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([     //method not found : ignorer, marche quand même (idem digidog)
            'description' => 'required|min:5',
            'date_start' => '',
            'date_end' => '',     //erreur si mdp identique à l'ancien
        ]);

        $campaign = new Campaign;
        $campaign->description = $request->input('description');
        $campaign->date_start = $request->input('date_start');
        $campaign->date_end = $request->input('date_end');
        $campaign->save();

        $products = DB::table('products')->get();

        for ($i = 0; $i < count($products); $i++) {
            if (isset ($request['product' . $i])) {
                $campaign->products()->attach([$request['product' . $i]]);
            }
        }
        return redirect()->route('campaigns.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        return view('campaigns.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        return view('campaign.update', ['campaign' => $campaign]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        //
    }
}
