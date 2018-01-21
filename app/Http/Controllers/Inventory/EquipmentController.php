<?php

namespace InvOco\Http\Controllers\Inventory;

use Illuminate\Http\Request;
use InvOco\Http\Controllers\Controller;
use InvOco\Equipment;
use InvOco\Http\Services\Equipment as SEquipment;
use InvOco\Repositories\EquipmentsRepository;
use InvOco\Sector;

class EquipmentController extends Controller
{
    private $equipmentsRepository;
    private $equipment;

    public function __construct(EquipmentsRepository $equipmentsRepository, SEquipment $equipment)
    {
        $this->equipmentsRepository = $equipmentsRepository;
        $this->equipment = $equipment;
    }

    public function index()
    {
        $equipment = new Equipment();
        $sector = (new Sector())->all();

        return view('inventory.inventory_index', with([
            'equipment' => $equipment,
            'sectors' => $sector,
        ]));
    }


    public function search(Request $request)
    {
        $equipment = $this->equipment->findEquipment($request['codebar']);

        $sector = (new Sector())->all();

        return view('inventory.inventory_index', with([
            'equipment' => $equipment,
            'sectors' => $sector,
        ]));
    }
}
