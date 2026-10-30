<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Customer::create(['full_name' => 'Alyssa Reyes', 'email' => 'alyssa.reyes@example.com', 'phone' => '0917 555 0101']);
        Customer::create(['full_name' => 'Benjamin Cruz', 'email' => 'benjamin.cruz@example.com', 'phone' => '0917 555 0102']);
        Customer::create(['full_name' => 'Carla Santos', 'email' => 'carla.santos@example.com', 'phone' => '0917 555 0103']);
        Customer::create(['full_name' => 'Daniel Garcia', 'email' => 'daniel.garcia@example.com', 'phone' => '0917 555 0104']);
        Customer::create(['full_name' => 'Erika Mendoza', 'email' => 'erika.mendoza@example.com', 'phone' => '0917 555 0105']);

        User::create(['username' => 'johnkenneth', 'full_name' => 'John Kenneth Bonguit']);
        User::create(['username' => 'justinjames', 'full_name' => 'Justin James Balatucan']);
        User::create(['username' => 'lancecordova', 'full_name' => 'Lance Cordova']);
        User::create(['username' => 'markmichael', 'full_name' => 'Mark Michael']);
        User::create(['username' => 'sofianavarro', 'full_name' => 'Sofia Navarro']);
    }
}
