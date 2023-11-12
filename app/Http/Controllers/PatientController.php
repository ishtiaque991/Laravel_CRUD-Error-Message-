<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index(){
        // Retrieve all records from the "patients" table using the Patient model
        $patients = Patient::all();
        // Return a view named 'patients.index' and pass the $patients data to the view
        return view('patients.index', ['patients' => $patients]);
        
    }

    public function create(){
        return view('patients.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'year' => 'required|numeric',
            'month' => 'required',
            'date' => 'required'
        ]);

        $newPatient = Patient::create($data);
        
        return redirect(route('patient.index'))->with('success', 'Patient Created Successfully');
    
    }

    public function edit(Patient $patient){
        return view('patients.edit', ['patient' => $patient]);

    }
    public function update(Patient $patient, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'year' => 'required|numeric',
            'month' => 'required',
            'date' => 'required'
        ]);

        $patient->update($data);

        return redirect(route('patient.index'))->with('success', 'Patient Updated Successfully');

    }
    public function destroy(Patient $patient){
        $patient->delete();
        return redirect(route('patient.index'))->with('success', 'Patient Deleted Successfully');
        
    }
}
