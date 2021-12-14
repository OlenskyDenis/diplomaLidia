<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Research;
use App\Models\Reservoir;
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
    public function index(Request $request)
    {
        $research = new Reservoir();
        $researches = $research->all();
        //$method = $request->method();

        if ($request->isMethod('post')) {
            // dd($_POST['agent_id']);
            exec("python storage/assets/py/analyse_string.py 2>&1 " . $_POST['agent_id'], $output);
            dd($output);
        }

        return view('pages.research2', ["reserv" => $researches]);
    }

    public function python()
    {
        $research = new Research();
        $deposits = DB::table('researches')
            ->join('reservoirs', 'researches.reservoir_id', '=', 'reservoirs.id')
            ->join('deposits', 'deposits.id', '=', 'reservoirs.deposit_id')
            ->select('deposits.name as deposit');
        dd($deposits);

        //     $process = new Process(['python', "storage/assets/py/analyse_string.py 2>&1"]);
        //   //  $process = new Process(['python', 'test.py', 'var1', 'var2', 'var3']);
        //   //  $command = "python storage\assets\py\test.py 2>&1";
        //     //$process = Process::fromShellCommandline($command);
        //     $process->run();
        //    dd( $process->getErrorOutput());
        //     //dd($process);
        //     // выполняет после окончания команды
        //     // if (!$process->isSuccessful()) {
        //     //     throw new \RuntimeException($process->getErrorOutput());
        //     // }



        //correlation and line trends
        //make csv-file
        $researches = $research
            ->join('reservoirs', 'researches.reservoir_id', '=', 'reservoirs.id')
            ->join('deposits', 'deposits.id', '=', 'reservoirs.deposit_id')
            ->select('researches.*', 'reservoirs.*', 'deposits.name as deposit')
            ->get();
        $csv = \League\Csv\Writer::createFromFileObject(new \SplFileObject('storage/assets/py/researches.csv', 'w'));
        $csv->insertOne(array_keys($researches[0]->getAttributes()));
        foreach ($researches as $research) {
            $csv->insertOne($research->toArray());
        }
        //execute python-script
        $cmd = 'python storage/assets/py/test.py 2>&1 ';
        $command = escapeshellcmd($cmd);
        $output = shell_exec($command);
        $array = preg_split("/\r\n|\n|\r/", $output);
        //dd($array);
        /*
        //chart1
        $all_reservoirs = Reservoir::query('SELECT COUNT(*)');

        $flights = Research::query('SELECT COUNT(*)')
            ->where('conformity', '>=', '0.5')
            ->limit(10)
            ->get();
        // dd($flights);

        //wronggggggggggggg
        // $p = Research::addSelect([
        //      'reservoir_id' => Reservoir::select('name')
        //          ->whereColumn('id', 'reservoir_id'),
        //     'deposit_name' => Reservoir::addSelect([
        //         'deposit_name1' => Deposit::select('name')
        //             ->whereColumn('id', 'deposit_id')
        //     ])
        // ])
        //     ->limit(1)
        //     ->get();
        $l = DB::table('reservoirs')
            ->join('deposits', 'reservoirs.deposit_id', '=', 'deposits.id')
            ->select('*')
            ->limit(2)
            ->get();

        $p = DB::table('researches')
            ->join('reservoirs', 'researches.reservoir_id', '=', 'reservoirs.id')
            ->join('deposits', 'reservoirs.deposit_id', '=', 'deposits.id')
            ->select('*')
            ->limit(2)
            ->get();
        dd($p);
*/


        $year = ['2015', '2016', '2017', '2018', '2019', '2021'];

        $user = [];
        foreach ($year as $key => $value) {
            $user[] = User::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"), $value)->count();
        }
        dump($array);
        return view('pages.research', [
            'year' => json_encode($year, JSON_NUMERIC_CHECK),
            'user' => json_encode($user, JSON_NUMERIC_CHECK),
            'corr' => $array[0],
            'elbow' => $array[1],
            'clustDot' => $array[2],
            'clustScat' => $array[3],
            'countByDate' => $array[4],
            'trendLines' => $array[5],
            'depGood' => $array[6]
        ]);
    }

    public function pythonlib()
    {

        // $result = \Python::run('/path/to/script.py');
        // $parameters = array('par1', 'par2');
        // $result = \Python::run('/path/to/script.py', $parameters);
        $service = new LaravelPython();
        $result = $service->run('public/storage/assets/py/analyse_string.py');
        dd($result);
        $parameters = array('par1', 'par2');
        $result = $service->run('public/storage/assets/py/analyse_string.py', $parameters);

        return view('pages.research', [
            'year' => json_encode($year, JSON_NUMERIC_CHECK),
            'user' => json_encode($user, JSON_NUMERIC_CHECK),
            'countRes' => json_encode($all_reservoirs)
        ]);
    }
}
