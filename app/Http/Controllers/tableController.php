<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tableController extends Controller
{
    public function index()
    {
        $columns = DB::connection()->getSchemaBuilder()->getColumnListing('kry');
        $details = DB::select("
    SELECT COLUMN_NAME, DATA_TYPE, CHARACTER_MAXIMUM_LENGTH, IS_NULLABLE
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_NAME = 'kry'
    ");
    dd($details);
    }
}
