<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Pastikan hanya Super Admin yang dapat mengakses
     * manajemen user.
     */
    private function authorizeSuperAdmin(): void
    {
        abort_unless(
            auth()->check() &&
            auth()->user()->role === 'super_admin',
            403,
            'Anda tidak memiliki izin untuk mengakses manajemen user.'
        );
    }

    /**
     * Menampilkan daftar user/admin.
     */
    public function index()
    {
        $this->authorizeSuperAdmin();

        $users = User::latest()->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Menampilkan form tambah user.
     */
    public function create()
    {
        $this->authorizeSuperAdmin();

        return view('admin.users.create');
    }

    /**
     * Menyimpan user baru.
     */
    public function store(Request $request)
    {
        $this->authorizeSuperAdmin();

        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email',
            ],

            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
            ],

            'role' => [
                'required',
                'in:super_admin,admin_informasi,admin_pengaduan,admin_bantuan,admin_layanan',
            ],
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'role' => $validated['role'],
        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit user.
     */
    public function edit(User $user)
    {
        $this->authorizeSuperAdmin();

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Memperbarui user.
     */
    public function update(Request $request, User $user)
    {
        $this->authorizeSuperAdmin();

        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email,' . $user->id,
            ],

            'role' => [
                'required',
                'in:super_admin,admin_informasi,admin_pengaduan,admin_bantuan,admin_layanan',
            ],

            'password' => [
                'nullable',
                'string',
                'min:8',
                'confirmed',
            ],
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->role = $validated['role'];

        /*
         * Password hanya diubah jika diisi.
         * Model User sudah memiliki cast 'hashed',
         * sehingga tidak perlu Hash::make() di sini.
         */
        if (!empty($validated['password'])) {
            $user->password = $validated['password'];
        }

        $user->save();

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Data user berhasil diperbarui.');
    }

    /**
     * Menghapus user.
     */
    public function destroy(User $user)
    {
        $this->authorizeSuperAdmin();

        /*
         * Super Admin tidak boleh menghapus akun
         * yang sedang digunakan.
         */
        if (auth()->id() === $user->id) {
            return back()->withErrors([
                'user' => 'Akun yang sedang digunakan tidak dapat dihapus.',
            ]);
        }

        /*
         * Jangan izinkan menghapus Super Admin terakhir.
         */
        if ($user->role === 'super_admin') {
            $jumlahSuperAdmin = User::where(
                'role',
                'super_admin'
            )->count();

            if ($jumlahSuperAdmin <= 1) {
                return back()->withErrors([
                    'user' => 'Super Admin terakhir tidak dapat dihapus.',
                ]);
            }
        }

        $user->delete();

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User berhasil dihapus.');
    }
}