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
use App\Station_Variable;
use App\Station_Static;
use App\Meteo;

class GraphsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
    }

    public function graph_unique_table(){
        $data = DB::select("select name, id from station_statics");
        //$data = json_encode($data);
        return view(
            'station_list',
            ['data' => $data]
        );
    }

    public function maps(){
        $data = DB::select("select id, name , lat , lng from station_statics");
        return view(
            'maps',
            ['data' => $data]
        );
    }

    public function graph_unique($id){
        $name = DB::select("select name from station_statics where id = $id")[0]->name;
        $data = DB::select("select sv.created_at, sv.nb_bikeAvailable, temperature
        from station_variables sv, meteos m 
        where id_station = $id 
        and id_meteo = m.id
        ");
        $data = json_encode($data);
        //var_dump($data);
        //$data = Station_Variable::where('id_station', $id)->get();
        return view(
            'graphs',
            ['name' => $name, 'data' => $data]
        );
    }

    public function graph_hours(){
        return view(
            'graphs'
            ,['data' => DB::table('Station_Variables')->select('id','nb_bikeStandAvailable','nb_bikeAvailable')->get()]
        );
    }
}
