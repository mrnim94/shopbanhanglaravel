<?php

namespace App\Imports;

use App\CategoryProductModel;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelImports implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CategoryProductModel([
            'meta_keywords' => $row[0],
            'category_name' => $row[1],
            'slug_category_product' => $row[2],
            'category_desc' => $row[3],
            'category_status' => $row[4],
        ]);
    }
}
