<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkshopRegistration;

class WorkshopRegistrationController extends Controller
{
    public function store(Request $request)
    {

        dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|min:10',
            'company' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:workshop_registrations',
        ]);

        dd($request->all());

        WorkshopRegistration::create($request->all());

        return redirect()->back()->with('success', 'Registro exitoso');
    }
}