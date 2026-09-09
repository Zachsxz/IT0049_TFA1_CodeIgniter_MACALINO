<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'John Admin',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier1',
                'full_name' => 'Sarah Lim',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier2',
                'full_name' => 'Mark Tan',
                'role' => 'Cashier',
            ],
            [
                'username' => 'manager1',
                'full_name' => 'Lisa Cruz',
                'role' => 'Manager',
            ],
            [
                'username' => 'staff1',
                'full_name' => 'Kevin Reyes',
                'role' => 'Staff',
            ],
        ];

        return view('users/index', ['users' => $users]);
    }
}
