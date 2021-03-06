<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Product;
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
        return view('campaigns.index', ['campaigns' => $campaigns]);
    }

    public function create()
    {
        $products = DB::table('products')->get();
        return view('campaigns.create', ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'description' => 'required|min:5',
            'date_start' => 'required|date',
            'date_end' => 'required|date',
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
     * @param \App\Campaign $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        return view('campaigns.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Campaign $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        $campaignProductsIDs = DB::table('campaign_product')->where('campaign_id', '=', $campaign->id)->get('product_id');
        $products = DB::table('products')->get();

        return view('campaigns.update', ['campaign' => $campaign, 'products' => $products, 'campaignProductsIDs' => $campaignProductsIDs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Campaign $campaign
     * @return bool
     */
    public function update(Request $request, Campaign $campaign)
    {

        $products = Product::all();
        // detaching all products
        for ($i = 0; $i < count($products); $i++){
            $campaign->products()->detach($products[$i]);
        }
        $campaign->save(); // we have to save here before next step.

        // then attach the products
        for ($i = 0; $i < count($products); $i++)
        {
            if (isset ($request['product' . ($i+1)]))
            {
                $campaign->products()->attach([$request['product' . ($i+1)]]);
            }
        }
        $campaign->save();

        return redirect()->route('campaigns.index')->with('message', 'La campagne a bien été modifiée');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Campaign $campaign
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Campaign $campaign)
    {
        $campaign->products()->detach();
        $campaign->delete();
        return redirect()->route('campaigns.index')->with('message', 'La campagne a bien été supprimée');
    }
}
