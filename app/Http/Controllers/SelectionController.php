<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternative;
use App\Models\Weight;
use Auth;

class SelectionController extends Controller
{
    public function index()
    {
        $process = [
            [
                "image" => "button_administrasi.png",
                "link" => "https://bit.ly/Seleksi-Administrasi-BEM-UPI-Cibiru"
            ],
            [
                "image" => "button_pengetahuan.png",
                "link" => "https://bit.ly/Tes-Pengetahuan-BEM-UPI-Cibiru"
            ],
            [
                "image" => "button_psikotest.png",
                "link" => "https://bit.ly/Psikotest-BEM-UPI-Cibiru"
            ],
            [
                "image" => "button_wawancara.png",
                "link" => "https://bit.ly/Interview-Scheduling-BEM-UPI-Cibiru"
            ],
            [
                "image" => "button_portofolio.png",
                "link" => "https://bit.ly/Seleksi-Portofolio-BEM-UPI-Cibiru"
            ],
            [
                "image" => "button_informasi.png",
                "link" => "/info"
            ],
        ];
        return view('selection.index', compact('process'));
    }

    public function info()
    {
        return view('selection.info');
    }


    public function result()
    {
        $alt = Alternative::where('user_id', Auth::id())->first();

        $weight = Weight::with(['alternative', 'administration', 'portfolio'])
            ->where('alternative_id', $alt->id)
            ->first();

        if ($weight) {
            $adm = $this->getAdministration($weight->administration?->code);
            $knw = $this->getKnowledge($weight->knowledge);
            $psi = $this->getPsikotest($weight->psikotest);
            $int = $this->getInterview($weight->interview);
            $pto = $this->getPortfolio($weight->portfolio?->code);
            $total = $adm + $knw + $psi + $int + $pto;
    
            $result = $this->getResult($total);

            $data['isResult'] = true;
            $data['status'] = $result;
        } else {
            $data['isResult'] = false;
            $data['status'] = "";
        }
        
        return view('selection.result', $data);
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
            return 0.49;
        } else if ($value >= 71 && $value <= 80) {
            return 0.25;
        } else {
            return 0.18;
        }
    }

    private function getPsikotest($value) {
        if ($value >= 87 && $value <= 100) {
            return 1;
        } else if ($value >= 73 && $value <= 86) {
            return 0.52;
        } else if ($value >= 69 && $value <= 72) {
            return 0.27;
        } else {
            return 0.12;
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
                return 0.59;
                break;
            case "C":
                return 0.34;
                break;
            case "D":
                return 0.21;
                break;
            default:
                return 0;
        }
    }
}
