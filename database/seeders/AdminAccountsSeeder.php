<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use RuntimeException;

class AdminAccountsSeeder extends Seeder
{
    public function run(): void
    {
        $accounts = [
            [
                'name' => 'Admin SiCantik',
                'email' => 'admin@esdm.go.id',
                'role' => 'super_admin',
            ],
            [
                'name' => 'Admin Informasi',
                'email' => 'informasi@esdm.go.id',
                'role' => 'admin_informasi',
            ],
            [
                'name' => 'Admin Pengaduan',
                'email' => 'pengaduan@esdm.go.id',
                'role' => 'admin_pengaduan',
            ],
            [
                'name' => 'Admin Bantuan Kelistrikan',
                'email' => 'bantuan@esdm.go.id',
                'role' => 'admin_bantuan',
            ],
            [
                'name' => 'Admin Layanan Online',
                'email' => 'layanan@esdm.go.id',
                'role' => 'admin_layanan',
            ],
        ];

        foreach ($accounts as $account) {
            if (User::where('email', $account['email'])->exists()) {
                $this->command?->warn(
                    "Akun {$account['email']} sudah ada; dilewati."
                );
                continue;
            }

            $envKey = 'ADMIN_PASSWORD_' . strtoupper(
                str_replace(['@', '.', '-'], '_', $account['email'])
            );

            $password = env($envKey);

            if (! is_string($password) || $password === '') {
                throw new RuntimeException(
                    "Password {$account['email']} belum dikonfigurasi."
                );
            }

            User::create([
                ...$account,
                'password' => Hash::make($password),
            ]);

            $this->command?->info(
                "Akun {$account['email']} berhasil dibuat."
            );
        }
    }
}