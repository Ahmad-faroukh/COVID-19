<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    public function index()
    {
        $statsResponse = Http::get('https://api.covid19api.com/summary');
        $stats = $statsResponse->json();

        $countriesResponse = Http::get('https://api.covid19api.com/countries');
        $countries = $countriesResponse->json();
        return view('main',compact('stats','countries'));
    }

    public function get_statistics(Request $request)
    {
//        $fromdate = date('Y/m/d', strtotime($request->fromdate));
//        $todate = date('Y/m/d', strtotime($request->todate));
//        $query = "https://api.covid19api.com/country/{$request->country}?from={$fromdate}T00:00:00Z&to={$todate}T00:00:00Z";
//        $summaryResponse = Http::get($query);

        $summaryResponse = Http::get("https://api.covid19api.com/country/$request->country");
        $summaryDates = $summaryResponse->json();
        $temp = collect($summaryDates);
        $countrySummary = $temp->last();

        $statsResponse = Http::get('https://api.covid19api.com/summary');
        $stats = $statsResponse->json();

        $countriesResponse = Http::get('https://api.covid19api.com/countries');
        $countries = $countriesResponse->json();
        return view('main',compact('stats','countries','countrySummary'));
    }
}
