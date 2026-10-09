<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login admin.
     *
     * Setiap kali /admin/login dibuka,
     * form login selalu ditampilkan.
     */
    public function showLogin(Request $request)
    {
        // Jika masih ada session login sebelumnya,
        // keluarkan terlebih dahulu agar form login muncul.
        if (Auth::check()) {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return view('admin.auth.login');
    }

    /**
     * Proses login admin.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | CEK EMAIL DAN PASSWORD
        |--------------------------------------------------------------------------
        */

        if (!Auth::attempt($credentials, false)) {
            return back()
                ->withErrors([
                    'email' => 'Email atau password yang dimasukkan salah.',
                ])
                ->withInput($request->only('email'));
        }

        /*
        |--------------------------------------------------------------------------
        | REGENERATE SESSION
        |--------------------------------------------------------------------------
        */

        $request->session()->regenerate();

        /*
        |--------------------------------------------------------------------------
        | AMBIL USER YANG BERHASIL LOGIN
        |--------------------------------------------------------------------------
        */

        $user = Auth::user();

        /*
        |--------------------------------------------------------------------------
        | CEK ROLE
        |--------------------------------------------------------------------------
        */

        switch ($user->role) {

            /*
            |--------------------------------------------------------------------------
            | SUPER ADMIN
            |--------------------------------------------------------------------------
            */

            case 'super_admin':

                ActivityLog::record(
                    'Autentikasi',
                    'login',
                    'Super Admin login ke sistem'
                );

                return redirect()->route('admin.dashboard');


            /*
            |--------------------------------------------------------------------------
            | ADMIN INFORMASI
            |--------------------------------------------------------------------------
            */

            case 'admin_informasi':

                ActivityLog::record(
                    'Autentikasi',
                    'login',
                    'Admin Informasi login ke sistem'
                );

                return redirect()->route('admin.informasi.index');


            /*
            |--------------------------------------------------------------------------
            | ADMIN PENGADUAN
            |--------------------------------------------------------------------------
            */

            case 'admin_pengaduan':

                ActivityLog::record(
                    'Autentikasi',
                    'login',
                    'Admin Pengaduan login ke sistem'
                );

                return redirect()->route('admin.pengaduan.index');


            /*
            |--------------------------------------------------------------------------
            | ADMIN BANTUAN
            |--------------------------------------------------------------------------
            */

            case 'admin_bantuan':

                ActivityLog::record(
                    'Autentikasi',
                    'login',
                    'Admin Bantuan login ke sistem'
                );

                return redirect()->route(
                    'admin.pengajuan-bantuan.index'
                );


            /*
            |--------------------------------------------------------------------------
            | ADMIN LAYANAN
            |--------------------------------------------------------------------------
            */

            case 'admin_layanan':

                ActivityLog::record(
                    'Autentikasi',
                    'login',
                    'Admin Layanan login ke sistem'
                );

                return redirect()->route(
                    'admin.pengajuan-layanan.index'
                );


            /*
            |--------------------------------------------------------------------------
            | ROLE TIDAK DIKENALI
            |--------------------------------------------------------------------------
            */

            default:

                Auth::logout();

                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return redirect()
                    ->route('login')
                    ->withErrors([
                        'email' => 'Role akun admin belum dikonfigurasi.',
                    ]);
        }
    }

    /**
     * Logout admin.
     */
    public function logout(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | CATAT AKTIVITAS LOGOUT
        |--------------------------------------------------------------------------
        */

        if (Auth::check()) {

            $user = Auth::user();

            $namaRole = match ($user->role) {

                'super_admin'
                    => 'Super Admin',

                'admin_informasi'
                    => 'Admin Informasi',

                'admin_pengaduan'
                    => 'Admin Pengaduan',

                'admin_bantuan'
                    => 'Admin Bantuan',

                'admin_layanan'
                    => 'Admin Layanan',

                default
                    => 'Admin',
            };

            ActivityLog::record(
                'Autentikasi',
                'logout',
                $namaRole . ' logout dari sistem'
            );
        }

        /*
        |--------------------------------------------------------------------------
        | LOGOUT
        |--------------------------------------------------------------------------
        */

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}