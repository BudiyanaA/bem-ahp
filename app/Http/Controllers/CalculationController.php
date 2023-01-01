<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weight;

class CalculationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calculations = [];
        $weights = Weight::with(['alternative', 'administration', 'portfolio'])->get();
        foreach($weights as $w) {
            $adm = $this->getAdministration($w->administration?->code);
            $knw = $this->getKnowledge($w->knowledge);
            $psi = $this->getPsikotest($w->psikotest);
            $int = $this->getInterview($w->interview);
            $pto = $this->getPortfolio($w->portfolio?->code);
            $total = $adm + $knw + $psi + $int + $pto;
            array_push($calculations, [
                'alternative' => $w->alternative?->name,
                'administration' => $adm,
                'knowledge' => $knw,
                'psikotest' => $psi,
                'interview' => $int,
                'portfolio' => $pto,
                'total' => $total,
                'result' => $this->getResult($total),
            ]);
        }

        return view('calculation.index', compact('calculations'));
    }

    private function getResult($value) {
        if ($value >= 3 && $value <= 5) {
            return "Lulus di pilihan departemen pertama";
        } else if ($value >= 2 && $value <= 2.99) {
            return "Lulus di pilihan departemen kedua";
        } else {
            return "Tidak Lulus";
        }
    }

    private function getAdministration($code) {
        switch ($code) {
            case "A":
                return 1;
                break;
            case "B":
                return 0.55;
                break;
            case "C":
                return 0.27;
                break;
            case "D":
                return 0.14;
                break;
            default:
                return 0;
        }
    }

    private function getKnowledge($value) {
        if ($value >= 91 && $value <= 100) {
            return 1;
        } else if ($value >= 81 && $value <= 90) {
            return 0.55;
        } else if ($value >= 71 && $value <= 80) {
            return 0.27;
        } else {
            return 0.14;
        }
    }

    private function getPsikotest($value) {
        if ($value >= 87 && $value <= 100) {
            return 1;
        } else if ($value >= 73 && $value <= 86) {
            return 0.55;
        } else if ($value >= 69 && $value <= 72) {
            return 0.27;
        } else {
            return 0.14;
        }
    }

    private function getInterview($value) {
        if ($value >= 90 && $value <= 100) {
            return 1;
        } else if ($value >= 80 && $value <= 89) {
            return 0.55;
        } else if ($value >= 70 && $value <= 79) {
            return 0.27;
        } else {
            return 0.14;
        }
    }

    private function getPortfolio($code) {
        switch ($code) {
            case "A":
                return 1;
                break;
            case "B":
                return 0.55;
                break;
            case "C":
                return 0.27;
                break;
            case "D":
                return 0.14;
                break;
            default:
                return 0;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
