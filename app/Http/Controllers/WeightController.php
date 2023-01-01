<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternative;
use App\Models\Administration;
use App\Models\Portfolio;
use App\Models\Weight;
use App\Models\User;

class WeightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['weights'] = Weight::with(['alternative', 'administration', 'portfolio'])->get();
        return view('weight.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['alternatives'] = User::where('role', 'USER')->get()->pluck('name', 'id');
        $data['administrations'] = Administration::get()->pluck('name', 'id');
        $data['portfolios'] = Portfolio::get()->pluck('name', 'id');
        return view('weight.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'alternative_id' => 'required|exists:users,id',
            'administration_id' => 'required|exists:administrations,id',
            'portfolio_id' => 'required|exists:portfolios,id',
            'knowledge' => 'required',
            'psikotest' => 'required',
            'interview' => 'required',
        ]);

        try {

            Weight::create([
                'alternative_id' => $request->alternative_id,
                'administration_id' => $request->administration_id,
                'portfolio_id' => $request->portfolio_id,
                'knowledge' => $request->knowledge,
                'psikotest' => $request->psikotest,
                'interview' => $request->interview,
            ]);
    
            return redirect(route('bobot.index'))
                ->withSuccess("Data berhasil ditambahkan");
                
        } catch(\Exception $e) {
            return redirect()->back()->withError('Data gagal ditambahkan');
        }
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
        $data['alternatives'] = User::where('role', 'USER')->get()->pluck('name', 'id');
        $data['administrations'] = Administration::get()->pluck('name', 'id');
        $data['portfolios'] = Portfolio::get()->pluck('name', 'id');
        $data['weight'] = Weight::find($id);
        return view('weight.edit', $data);
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
        $validated = $request->validate([
            'alternative_id' => 'required|exists:users,id',
            'administration_id' => 'required|exists:administrations,id',
            'portfolio_id' => 'required|exists:portfolios,id',
            'knowledge' => 'required',
            'psikotest' => 'required',
            'interview' => 'required',
        ]);

        try {

            $weight = Weight::find($id);
            $weight->update([
                'alternative_id' => $request->alternative_id,
                'administration_id' => $request->administration_id,
                'portfolio_id' => $request->portfolio_id,
                'knowledge' => $request->knowledge,
                'psikotest' => $request->psikotest,
                'interview' => $request->interview,
            ]);
    
            return redirect(route('bobot.index'))
                ->withSuccess("Data berhasil diubah");
                
        } catch(\Exception $e) {
            return redirect()->back()->withError('Data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $weight = Weight::find($id);
            $weight->delete();
            return 'success';

        } catch (\Exception $e) {
            return 'failed';
        }
    }
}
