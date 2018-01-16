<?php

namespace InvOco\Http\Controllers\Inventory;

use Illuminate\Http\Request;
use InvOco\Http\Controllers\Controller;
use InvOco\Equipment;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipment = new Equipment();
        return view('inventory.inventory_index', compact('equipment'));
    }
}
