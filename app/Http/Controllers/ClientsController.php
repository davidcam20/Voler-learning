<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Client;
use App\Models\Paciente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Client::all();
        return view('admin.pacientes.index',['pacientes' => $pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //        $request->validate([
//            'first_name' => ['required', 'string', 'max:255'],
//            'last_name' => ['required', 'string', 'max:255'],
//            'school' => ['required', 'string', 'max:255'],
//            'parent_guardian_name' => ['required', 'string', 'max:255'],
//            'parent_guardian_phone' => ['required', 'string', 'max:255'],
//            'parent_guardian_email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
//            'location' => ['required', 'string', 'max:255'],
//        ]);

        $password = Str::random(12);

        $user = User::create([
            'name' => $request->parent_guardian_name,
            'email' => $request->parent_guardian_email,
            'password' => Hash::make($password),
        ]);

        //Agregar rol de padre
        $user->assignRole(2);

        $paciente = new Client();
        $paciente->first_name = $request->get('first_name');
        $paciente->last_name = $request->get('last_name');
        $paciente->birthday = $request->get('birthday');
        $paciente->school = $request->get('school');
        $paciente->level = $request->get('level');
        $paciente->objetives = $request->get('objetives');
        $paciente->parent_guardian_name = $request->get('parent_guardian_name');
        $paciente->parent_guardian_email = $request->get('parent_guardian_email');
        $paciente->parent_guardian_phone = $request->get('parent_guardian_phone');
        $paciente->user_id = $user->id;
        $paciente->location_id = $request->get('location_id');
        $paciente->save();

        Mail::to($request->get('parent_guardian_email'))->send(new WelcomeMail($user, $password));

        return redirect()->route('pacientes.index')->with('status', 'El paciente se creó con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paciente = Client::findOrFail($id);

        return view('admin.pacientes.edit',['paciente' => $paciente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paciente = Client::findOrFail($id);

        $paciente->first_name = $request->get('first_name');
        $paciente->last_name = $request->get('last_name');
        $paciente->birthday = $request->get('birthday');
        $paciente->school = $request->get('school');
        $paciente->level = $request->get('level');
        $paciente->objetives = $request->get('objetives');
        $paciente->parent_guardian_name = $request->get('parent_guardian_name');
        $paciente->parent_guardian_email = $request->get('parent_guardian_email');
        $paciente->parent_guardian_phone = $request->get('parent_guardian_phone');
        $paciente->location_id = $request->get('location_id');
        $paciente->update();

        $user = User::findOrFail($id);
        $user->name = $request->get('parent_guardian_name');
        $user->email = $request->get('parent_guardian_email');
        $user->update();

        return redirect()->route('pacientes.index')->with('status', 'El paciente se actualizó con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
