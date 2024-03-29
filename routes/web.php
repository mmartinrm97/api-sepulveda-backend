<?php

use App\Jobs\GeneratePDFJob;
use App\Jobs\MergePDFsJob;
use App\Models\Good;
use App\Models\Warehouse;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Webklex\PDFMerger\PDFMerger;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {
    return view('welcome');
});

