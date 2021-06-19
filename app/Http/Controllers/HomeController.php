<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

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

    public function subscribe (Request $request){
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:190'],
            'email' => ['required', 'string', 'email', 'max:190', 'unique:subscribers'],
        ]);

        if ($validator->fails()) {
            return back()->with('info', $validator->messages()->all()[0])->withInput();
        }

        $subscriber = Subscriber::create($request->all());


        return redirect()->back();
    }

    public function mail(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => ['required', 'string', 'max:190'],
            'message' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return back()->with('info', $validator->messages()->all()[0])->withInput();
        }

        $users = Subscriber::all();
        $data['title'] = $request->title;
        $data['message'] = $request->message;

        foreach ($users as $user){
            SendEmailJob::dispatchAfterResponse($user->email,$data);
        }

        return redirect()->back();
    }
}
