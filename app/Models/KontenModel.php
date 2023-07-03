<?php

namespace App\Models;

use CodeIgniter\Model;

class KontenModel extends Model
{
    protected $table = 'konten';
    protected $primaryKey = 'id_konten';
    protected $returnType = 'object';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $deletedField = 'deleted_at';


    protected $validationRules = [
        'judul' => 'required|min_length[10]',
        'isi' => 'required|50',
    ];
    protected $validationMessages = [
        'judul' => [
            'required' => 'judul wajib di isi',
            'min_length' => 'Minimal 10 karakter'
        ],

        'isi' => [
            'required' => 'isi harus di isi',
            'min_length' => 'minimal 20 karakter'
        ]
    ];
    protected $skipValidation = false;

    public function getData()
    {
        return 'Ini adalah Method getData didalam ProductModel';
    }
}
