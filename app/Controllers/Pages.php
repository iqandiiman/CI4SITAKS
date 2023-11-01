<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SINTAKS | ILMU POLITIK',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'SINTAKS | ILMU POLITIK'
        ];
        return view('pages/tentang', $data);
    }

    public function petunjuk()
    {
        $data = [
            'title' => 'SINTAKS | ILMU POLITIK'
        ];
        return view('pages/petunjuk', $data);
    }

    public function penelitian()
    {
        $data = [
            'title' => 'SINTAKS | ILMU POLITIK'
        ];
        return view('pages/penelitian', $data);
    }
}
