<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();
        
        return view('activities.index',
        ["activities"=>$activities]
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date= $request->all();

        $newActivity= new Activity();
        $newActivity->title=$date["title"];
        $newActivity->price=$date["price"];
        $newActivity->productor=$date["productor"];
        $newActivity->img=$date["img"];
        $newActivity->save();

        
        return  redirect()->route("activities.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {

        return view('activities.show', ['activity'=>$activity]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activity $activity)
    {
        return view('activities.edit', ['activity'=>$activity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $activity)
    {
        $activity= Activity::findOrFail($activity);
        $activity->delete();

        return  redirect()->route("activities.index");

        // return view('activities.destroy', ['activity'=>$activity]);
    }
}
