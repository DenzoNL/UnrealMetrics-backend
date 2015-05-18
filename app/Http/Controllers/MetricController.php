<?php namespace UnrealMetrics\Http\Controllers;

use UnrealMetrics\Http\Requests;
use UnrealMetrics\Http\Controllers\Auth;
use UnrealMetrics\Metric;

use Illuminate\Http\Request;

class MetricController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Metric::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        // Simple code for now. Still needs determining game_id by api_key and saving identical metrics as a repetition
        $metric = new Metric;
        $metric->name = $request->input('name');
        $metric->category = $request->input('category');
        $metric->level = $request->input('level');
        $metric->value = $request->input('value');
        $metric->repetitions = $request->input('repetitions');
        $metric->game_id = $request->input('game_id');
        $metric->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
