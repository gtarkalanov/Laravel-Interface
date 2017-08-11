<?php

namespace App\Http\Controllers\Behat;

use App\Yaml;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class YamlController extends Controller
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
        $user = Auth::user();
        $yamls = Yaml::where('group',$user->group)->get();
        return view('yamls.index', [
            'yamls' => $yamls
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('yamls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::user();
        $yaml = new Yaml;

        $yaml->profile = $request->profile;
        $yaml->base_url = $request->base_url;
        $yaml->username = $request->username;
        $yaml->password = $request->password;
        $yaml->group = $user->group;

        $yaml->save();
        return redirect()->route('yamls.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Yaml  $yaml
     * @return \Illuminate\Http\Response
     */
    public function show(Yaml $yaml)
    {
        return view('yamls.yamlview', [
            'yaml' => $yaml
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Yaml  $yaml
     * @return \Illuminate\Http\Response
     */
    public function edit(Yaml $yaml)
    {
        return view('yamls.edit', [
            'yaml' => $yaml
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Yaml  $yaml
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Yaml $yaml)
    {

        $user = Auth::user();

        $yaml->profile = $request->profile;
        $yaml->base_url = $request->base_url;
        $yaml->username = $request->username;
        $yaml->password = $request->password;
        $yaml->group = $user->group;
        $yaml->save();
        return redirect()->route('yamls.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Yaml  $yaml
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yaml $yaml)
    {
        //
    }
}
