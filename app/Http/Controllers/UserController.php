<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name'      => 'required|max:50|string',
            'email'     => 'required|email',
            'cpf'       => 'required|max:11|string',
            'telefone'  => 'required|max:11|string',
            'password'  => 'required|min:6|max:15|string',
        ]);

        if($validation->fails()) return response()->json(['status' => false, 'message' => 'Erro ao cadastrar usuário'], 401);

        $user = [
            'name'      => $request->all()["name"],
            'email'     => $request->all()["email"],
            'cpf'       => $request->all()["cpf"],
            'telefone'  => $request->all()["telefone"],
            'password'  => bcrypt($request->all()["password"]),
        ];

        $check = User::where('cpf', $user["cpf"])->orWhere('email', $user["email"])->exists();

        if($check) return response()->json(['status' => false, 'message' => 'Usuário já cadastrado!'], 401);

        User::create($user);

        return response()->json(['status' => true, 'message' => 'Usuário cadastrado com sucesso'], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
