<?php

namespace App\Controllers;

use App\Models\KontenModel;

class KontenController extends BaseController
{
    public function index()
    {
        $product = new KontenModel();
        echo $product->getData();
        return view('konten');
    }
    public function insertdata()
    {
        $product = new KontenModel();
        $insert = $product->insert([
            'judul' => 'futsal pak temi',
            'isi' => 'dwdnwandnwjndjawndjnwjdnawnjdnjnjwndnjdnjadnjwdbwdbhbbjbdwbdbwjdbwjbdwbdbwa'
        ]);
        if ($insert) {
            echo "Data Berhasil diinsert";
        } else {
            echo "<pre>";
            echo print_r($product->errors());
            echo "</pre>";
        }
    }
}
