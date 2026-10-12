<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'portfolio:create-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create or reset the admin user account for Filament panel';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $email = 'admin@parhan.com';
        $password = 'parhan280805';

        $user = User::updateOrCreate(
            ['email' => $email],
            [
                'name' => 'Parhan Admin',
                'password' => Hash::make($password),
            ]
        );

        $this->info('Admin user successfully configured!');
        $this->line("Email:    {$email}");
        $this->line("Password: {$password}");

        return self::SUCCESS;
    }
}
