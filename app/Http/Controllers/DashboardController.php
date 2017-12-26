<?php

namespace InvOco\Http\Controllers;

use Illuminate\Http\Request;
use InvOco\Charts\Chart;
use InvOco\User;
use InvOco\Equipment;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$equipments = (new Equipment())->with('sector')->get();
        $stocksTable = \Lava::DataTable();

        //$chartArray = [
        //   'date' => 'Day of Month'];


        //$x = (new Chart())->mountChart($chartArray, $stocksTable);

        //$x;

        $stocksTable->addDateColumn('Day of Month')
            ->addNumberColumn('Projected')
            ->addNumberColumn('Official');

        for ($a = 1; $a < 30; $a++) {
            $stocksTable->addRow([
                '2015-10-' . $a, rand(800,1000), rand(800,1000)
            ]);
        }

        $chart = \Lava::LineChart('MyStocks', $stocksTable);

        $user = User::getUser();
        return view('dashboard', compact('user', 'chart'));
    }
}
