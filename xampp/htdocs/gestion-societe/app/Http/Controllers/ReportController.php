<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Afficher la liste des rapports.
     */
    public function index()
    {
        // Exemple de données à afficher dans la vue
        $reports = [
            ['name' => 'Rapport des ventes', 'link' => '#'],
            ['name' => 'Rapport des stocks', 'link' => '#'],
            ['name' => 'Rapport des employés', 'link' => '#'],
        ];

        return view('reports.index', compact('reports'));
    }
}

