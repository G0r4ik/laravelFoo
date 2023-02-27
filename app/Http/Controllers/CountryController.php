<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\CountryModel;


class CountryController extends Controller
{
    //
    public function country()
    {
        return CountryModel::all();
    }

    public function countryById($id)
    {
        return CountryModel::where('id', $id)->get();
    }

    public function upadateCountry(Request $req)
    {
        $country = CountryModel::where('id', 1)->get();
        
        $country->update([
            'name' => $req['name'],
            'name_en' => $req['name_en'],
            'alias' => $req['alias']
        ]);
        // return $country;
    }
    public function deleteCountry()
    {
        // return CountryModel::delete()
    }

    public function createCountry(Request $req)
    {
        // return $req;
        $country = CountryModel::create([
            'name' => $req['name'],
            'name_en' => $req['name_en'],
            'alias' => $req['alias']
        ]);
        return $country;
    }
}
