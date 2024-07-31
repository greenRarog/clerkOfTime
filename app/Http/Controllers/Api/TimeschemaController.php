<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Timeschema;

class TimeschemaController extends Controller
{
    public function index()
    {
        return response()->json([
           "data" => Timeschema::all()
        ]);
    }
}
