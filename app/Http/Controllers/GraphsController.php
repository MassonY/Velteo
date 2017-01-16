<?php
/**
 * Created by PhpStorm.
 * User: Epulapp
 * Date: 08/12/2016
 * Time: 15:03
 */

namespace App\Http\Controllers;
use DB;
use App\Quotation;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class GraphsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
    }

    public function graph_hours(){
        return view(
            'graphs'
            ,['data' => DB::table('Station_Variables')->select('id','nb_bikeStandAvailable','nb_bikeAvailable')->get()]
        );
    }
}
