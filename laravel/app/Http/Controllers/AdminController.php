<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function properties()
{
    $properties = [
        [
            'id' => 1,
            'name' => 'Modern House Dasma',
            'location' => 'Dasmariñas',
            'price' => 3500000,
            'type' => 'House & Lot'
        ],
        [
            'id' => 2,
            'name' => 'Luxury Condo Gentri',
            'location' => 'General Trias',
            'price' => 4800000,
            'type' => 'Condo'
        ]
    ];

    return view('admin.properties.index', compact('properties'));
}

public function agents()
{
    $agents = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'role' => 'Luxury Specialist',
            'location' => 'Dasmariñas',
            'phone' => '09123456789'
        ],
        [
            'id' => 2,
            'name' => 'Anna Smith',
            'role' => 'Residential Expert',
            'location' => 'General Trias',
            'phone' => '09987654321'
        ]
    ];

    return view('admin.agents.index', compact('agents'));
}

public function inquiries()
{
    $inquiries = [
        [
            'id' => 1,
            'name' => 'Juan Dela Cruz',
            'email' => 'juan@example.com',
            'phone' => '09123456789',
            'message' => 'Interested in Modern House Dasma',
            'property' => 'Modern House Dasma',
            'date' => '2026-05-25'
        ],
        [
            'id' => 2,
            'name' => 'Maria Santos',
            'email' => 'maria@example.com',
            'phone' => '09999888777',
            'message' => 'Looking for condo in Gentri',
            'property' => 'Luxury Condo Gentri',
            'date' => '2026-05-24'
        ]
    ];

    return view('admin.inquiries.index', compact('inquiries'));
}
}
