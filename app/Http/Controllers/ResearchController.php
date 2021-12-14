<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;
//added 13/12/2021 16:05
use App\Models\User;
use DB;
use Carbon\Carbon;
//added 13/12/2021 16:05
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use robertogallea\LaravelPython\Services\LaravelPython;

class ResearchController extends Controller
{

    //added 13/12/2021 16:05
    public function index()
    {
        $year = ['2015', '2016', '2017', '2018', '2019', '2021'];

        $user = [];
        foreach ($year as $key => $value) {
            $user[] = User::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"), $value)->count();
        }

        return view('pages.research2', [
            'year' => json_encode($year, JSON_NUMERIC_CHECK),
            'user' => json_encode($user, JSON_NUMERIC_CHECK)
        ]);
    }

    public function python()
    {
        $research = new Research();
        $researches = $research->all();
        $csv = \League\Csv\Writer::createFromFileObject(new \SplFileObject('storage/assets/py/researches.csv', 'w'));
        $csv->insertOne(array_keys($researches[0]->getAttributes()));
        foreach ($researches as $research) {
            $csv->insertOne($research->toArray());
        }

        $cmd = 'python storage/assets/py/analyse_string.py';
        $command = escapeshellcmd($cmd);
        $output = shell_exec($command);

        return view('pages.research');
    }
}
