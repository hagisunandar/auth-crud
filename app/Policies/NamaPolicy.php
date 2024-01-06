<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use App\Models\Prodi;

class NamaPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function view(User $user, Dosen $dosen){
        return $user->id == $dosen->user_id;
    }
}
