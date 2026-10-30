<?php
namespace App\Controllers;

use CodeIgniter\Controller;
class Presensi extends Controller
{
    public function absen()
    {
        $data ['nim']   = "25.230.0145";
        $data ['nama']  = "Muhammad Izurrohman";
        echo view('presensi', $data); 
    }
}