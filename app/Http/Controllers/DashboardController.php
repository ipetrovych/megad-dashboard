<?php

namespace App\Http\Controllers;

use App\Models\Light;
use App\Http\Requests;
use App\Services\MegaD;

class DashboardController extends Controller
{
    public function index()
    {
        $megaD = new MegaD();

        $lights = Light::orderBy('floor', 'asc')->get();
        $data = $megaD->getPortsState();

        foreach ($lights as $light) {
            $light->value = $data[$light->port];
        }

        return view('index', [
            'lights' => $lights
        ]);
    }
}
