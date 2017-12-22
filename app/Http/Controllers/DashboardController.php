<?php

namespace InvOco\Http\Controllers;

use Illuminate\Http\Request;
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
        $equipments = (new Equipment())->with('sector')->get();

        $stocksTable = \Lava::DataTable();

        $stocksTable->addDateColumn('Day of Month')
            ->addNumberColumn('Projected')
            ->addNumberColumn('Official');

        // Random Data For Example
        for ($a = 1; $a < 30; $a++) {
            $stocksTable->addRow([
                '2015-10-' . $a, rand(800,1000), rand(800,1000)
            ]);
        }

        $chart = \Lava::LineChart('MyStocks', $stocksTable);

        $user = User::find(auth()->id());
        return view('dashboard', compact('user', 'chart'));
    }
}
