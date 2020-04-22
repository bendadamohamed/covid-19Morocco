<?php

namespace App\Http\Controllers;

use App\Charts\CoronaChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CoronaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coronaVirusApi = Http::get('https://api.covid19api.com/summary')
            ->json();
        $country = Http::get('https://api.covid19api.com/total/country/morocco')
            ->json();
        // dd($country[0]['Confirmed']);
        $global = $coronaVirusApi['Global'];
        // dd($country[0]);
        $dataConfirmed = collect([]);
        $dataDeaths = collect([]);
        $dataRecovered = collect([]);
        $date = collect([]);
        foreach ($country as $item) {
            $dataConfirmed->push($item['Confirmed']);
            $dataDeaths->push($item['Deaths']);
            $dataRecovered->push($item['Recovered']);
            $dd = date("m-d", strtotime($item['Date']));
            $date->push($dd);
        }
        // dd($data);
        //   dd($country);

        $chart = new CoronaChart;
        $chart->title('Morocco',16,'#3D4852',true,"'Helvetica Neue', 'Helvetica', 'Arial', sans-serif");
        $chart->labels($date);
        $chart->dataset('Deaths', 'line', $dataDeaths)->options([
            'backgroundColor' => '#eb3434',
        ]);
        $chart->dataset('Recovered', 'line', $dataRecovered)->options([
            'backgroundColor' => '#3cf05a',
        ]);
        $chart->dataset('Confirmed', 'line', $dataConfirmed)->options([
            'backgroundColor' => '#93d8fa',
            'show' => false
        ]);
        return view('app', ['global' => $global, 'country' => $country, 'chart' => $chart]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
