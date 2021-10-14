<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $pageTitle = "Usuários";
        $title = "Bem vindo!";
        return view('users.index', ['title' => $title, 'pageTitle' => $pageTitle]);
    }

    public function show($id)
    {
        $pageTitle = "Usuário | ...";
        $users = [
            [
                'id' => 1,
                'name' => 'Peter',
                'age' => '20'
            ],
            [
                'id' => 2,
                'name' => 'Roer',
                'age' => '24'
            ],
            [
                'id' => 3,
                'name' => 'Instaled',
                'age' => '28'
            ],
        ];

        foreach ($users as $user) {
            if ($user['id'] == $id) {
                $fetched = $user;
                $pageTitle = "Usuário | " . $user['name'];
                break;
            }
        }

        return view('users.show', [
            'fetched' => isset($fetched) ? $fetched : "User of id: " . $id . ", dont exist",
            'pageTitle' => $pageTitle
        ]);
    }
}
