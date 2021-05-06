<?php

namespace App\Imports;

use App\Models\Zhurnal;
use Maatwebsite\Excel\Concerns\ToModel;

class ZhurnalImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Zhurnal([
            'daterow' => $row[0],
            'courserow' => $row[1],
            'grouprow' => $row[2],
            'namerow' => $row[3],
            'lectures' => $row[4],
        ]);
    }
}
