<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CountryName extends Component
{
    public $countryName = "Morocco";
    public function render()
    {
        $country = Http::get('https://api.covid19api.com/countries')
            ->json();
        //  dd($country);
        $cc = Http::get('https://api.covid19api.com/summary')
            ->json();
        //  dd($cc['Countries']);
        $value = "";
        foreach ($cc['Countries'] as $item) {
            if ($item['Country'] ===$this->countryName) {
                $value = $item;
            }
        }
        return view('livewire.country-name', compact('country', 'value','countryName'));
    }
}
