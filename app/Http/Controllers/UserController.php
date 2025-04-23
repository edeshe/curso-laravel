<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $num = 8;
        $data = null;
        $vacia = 'hola';
        $nombres = ['Edgar', 'Roberto', 'Jorge'];
        return view('directives', compact('num', 'data', 'vacia', 'nombres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* DB::table('users')->insert([
            'name' => 'Edgar',
            'lastname' => 'Espino',
            'email' => 'edeshe77@gmail.com',
            'phone' => '+5299999999',
            // 'password' => Hash::make('123456'),
            'password' => '123456'
        ]); */

        /* $user = new User();
        $user->name = 'Fulanito';
        $user->lastname = 'Salas';
        $user->email = 'fulanito@gmail.com';
        $user->phone = '+527223712000';
        $user->password = Hash::make('123456');
        $user->save(); */

        /* $dato = [
            'name' => 'Edgar',
            'lastname' => 'Espino',
            'email' => 'edeshe77@gmail.com',
            'phone' => '+5299999999',
            'password' => Hash::make('123456'),
            // 'password' => '123456'
        ];
        User::create($dato); */
        dd($request->all());
        return "Guardado...";
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /* DB::table('users')->where('id', $id)->update([
            'name' => 'Jose',
            'lastname' => 'Salas',
        ]); */

        $user = User::find($id);
        $user->name = 'Fulanita';
        $user->lastname = 'de Menganito';
        // $user->password = Hash::make('123456');
        $user->save();

        return "Actualizado...";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // DB::table('users')->where('id', $id)->delete();

        $user = User::find($id);
        $user->delete();

        return "Eliminado...";
    }

    public function data()
    {
        // $users = DB::select('select * from users'); // SQL
        // $users = DB::table('users')->get(); // Query builder
        $users = User::all(); // Eloquend
        // Consultar un solo registro
        // $user = DB::select('select * from users where id=?', [1]); // SQL
        // $users = DB::table('users')->where('name', 'lastname')->get(); // Query builder
        // $user = User::find(2); // Eloquend

        
        // dd($users);
        return view("data", compact('users'));
    }
}
