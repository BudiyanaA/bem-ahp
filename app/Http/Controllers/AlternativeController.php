<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternative;
use App\Models\User;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['alternatives'] = Alternative::all();
        return view('alternative.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['users'] = User::where('role', 'USER')->get()->pluck('name', 'id');
        return view('alternative.create', $data);
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
            'code' => 'required|unique:alternatives,code|max:255',
            'user_id' => 'required|unique:alternatives,user_id|exists:users,id',
        ]);

        try {

            Alternative::create([
                'code' => $request->code,
                'user_id' => $request->user_id,
            ]);
    
            return redirect(route('alternatif.index'))
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
        $data['alternative'] = Alternative::find($id);
        return view('alternative.edit', $data);
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
            'code' => 'required|max:255|unique:alternatives,code,' . $id,
            'name' => 'required',
        ]);

        try {

            $alternative = Alternative::find($id);
            $alternative->update([
                'code' => $request->code,
                'name' => $request->name,
            ]);
    
            return redirect(route('alternatif.index'))
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
            $alternative = Alternative::find($id);
            $alternative->delete();
            return 'success';

        } catch (\Exception $e) {
            return 'failed';
        }
    }
}
