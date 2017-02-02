<?php

namespace App\Http\Controllers;

use Auth;
use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'filter');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required | max:30',
            'description' => 'max:500',
            'contact' => 'required | max:15',
            'email' => 'required',
            ]);
        Auth::user()->jobs()->create($request->input());
        return redirect('/home');
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
        if( auth()->user()->id == Job::findOrFail($id)->user_id ){
            $job = Job::findOrFail($id);
            return view('jobs.edit', compact('job'));
        }
        return back();
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
       $this->validate($request, [
        'title' => 'required | max:30',
        'description' => 'max:500',
        'contact' => 'required | max:15',
        'email' => 'required',
        ]);
       $job = Job::findOrFail($id);
       $job->fill($request->input());
       $job->save();
       return redirect('/home');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect('/home');
    }

    /**
     * Filter the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request){
        $contract = $request->contract;
        $salary = $request->salary;
        $city = $request->city;
        $category = $request->category;
        $orderBy = $request->orderBy;

        $jobs = Job::when($contract, function ($query) use ($contract) {
            return $query->where('contract', $contract);
        })->when($salary, function ($query) use ($salary) {
            return $query->whereIn('salary', $salary);
        })->when($city, function ($query) use ($city) {
            return $query->where('city', $city  );
        })->when($category, function ($query) use ($category) {
            return $query->whereIn('category', $category);
        })->orderBy($orderBy, 'desc')
        ->get();

        return $jobs;
    }
}
