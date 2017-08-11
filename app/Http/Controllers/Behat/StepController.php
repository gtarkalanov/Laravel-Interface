<?php

namespace App\Http\Controllers\Behat;

use App\Step;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class StepController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $max = 0;
        $steps = Step::all();
        foreach($steps as $step){
            $parameters = explode(",",$step->arguments);
            if($max < count($parameters)){
                $max = count($parameters);
            }
        }
        return view('steps.index', [
            'steps' => $steps,
            'max' => $max
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('steps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $step = new Step;

        $step->definition = $request->definition;
        $step->arguments = implode(",",$request->arguments);

        $step->save();
        return redirect()->route('steps.index');
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
     * @param Step $step
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Step $step)
    {
        return view('steps.edit', [
            'step' => $step
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Step $step
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Step $step)
    {


        $step->definition = $request->definition;
        $step->arguments = implode(",",$request->arguments);

        $step->save();
        return redirect()->route('steps.index');
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
