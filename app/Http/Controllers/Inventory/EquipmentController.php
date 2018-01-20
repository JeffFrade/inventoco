<?php

namespace InvOco\Http\Controllers\Inventory;

use Illuminate\Http\Request;
use InvOco\Http\Controllers\Controller;
use InvOco\Equipment;
use InvOco\Sector;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipment = new Equipment();
        $sector = (new Sector())->all();

        return view('inventory.inventory_index', with([
            'equipment' => $equipment,
            'sectors' => $sector,
        ]));
    }
}
