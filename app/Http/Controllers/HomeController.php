<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        //загальна к-ть досліджень за родовищами
        $research = new Research();
        $deposits = $research
            ->join('reservoirs', 'researches.reservoir_id', '=', 'reservoirs.id')
            ->join('deposits', 'deposits.id', '=', 'reservoirs.deposit_id')
            ->select('deposits.name as deposit', DB::raw("COUNT(researches.id) as count"))
            ->groupby('deposits.name')
            ->get()
            ->toArray();

        $namesDep = [];
        $countByDep = [];
        foreach ($deposits as $dep) {
            $namesDep[] = $dep["deposit"];
            $countByDep[] = $dep["count"];
        }

        //кількість водойм з
        $deposits2 = $research
            ->join('reservoirs', 'researches.reservoir_id', '=', 'reservoirs.id')
            ->join('deposits', 'deposits.id', '=', 'reservoirs.deposit_id')
            ->select('deposits.name as deposit', 'researches.conformity', DB::raw("COUNT(researches.conformity) as count"))
            ->groupby('deposits.name', "researches.conformity")
            ->get()
            ->toArray();
        $namesDep2 = [];
        $countByDepGood = [];
        $countByDepBad = [];
        foreach ($deposits2 as $dep) {
            if (!in_array($dep["deposit"], $namesDep2))
                $namesDep2[] = $dep["deposit"];
            if ($dep["conformity"] == 1)
                $countByDepGood[] = $dep["count"];
            else
                $countByDepBad[] = $dep["count"];
        }

        return view('pages.home', [
            //1 chart
            'deposits' => json_encode($namesDep, JSON_NUMERIC_CHECK),
            'count' => json_encode($countByDep, JSON_NUMERIC_CHECK),
            //1 chart
            'deposits2' => json_encode($namesDep2, JSON_NUMERIC_CHECK),
            'countBad' => json_encode($countByDepBad, JSON_NUMERIC_CHECK),
            'countGood' => json_encode($countByDepGood, JSON_NUMERIC_CHECK),

        ]);
    }
}
