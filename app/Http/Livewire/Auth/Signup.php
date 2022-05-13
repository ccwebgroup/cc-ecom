<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Khsing\World\World;

class Signup extends Component
{
    public $country;
    public $cities=[];
    public $city;

    public function render()
    {
        if(!empty($this->country)) {
            $this->cities = City::where('country_id', $this->country)->get();
        }
        return view('livewire.auth.signup')
        ->withCountries(World::Countries());
    }
}
