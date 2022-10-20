<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->userRepository->create([
          'name' => 'user3',
          'email' => 'user12@email.com',
          'password' => Hash::make('20202020'),
          'email_verified_at' => now()
        ]);
    }
}
