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

    public function graph_mean(){
        $name = "Moyenne des utilisations";
        $data = DB::select("SELECT AVG(sv.nb_bikeAvailable), m.id
                            FROM station_variables sv, meteos m
                            where sv.id_meteo = m.id
                            GROUP BY m.id");
        $meteoData = DB::select("SELECT m.id, m.temperature, m.created_at
                            FROM meteos m");
        $meteoLength = count($meteoData);
        //var_dump($data);
        foreach($data as $elem) {
            $elem->nb_bikeAvailable = $elem->{'AVG(sv.nb_bikeAvailable)'};
            unset($elem->{'AVG(sv.nb_bikeAvailable)'});
            for($i = 0; $i < $meteoLength; $i++) {
                //var_dump($meteoData[$i]);
                if($elem->id == $meteoData[$i]->id){
                    $elem->temperature = $meteoData[$i]->temperature;
                    $elem->created_at = $meteoData[$i]->created_at;
                }
            }
        }
        //var_dump($data);
        //echo"-------";
        $data = json_encode($data);
        return view(
            'graphs',
            ['data' => $data, 'name' => $name]
        );
    }

    function change_key( $array, $old_key, $new_key ) {
        if( ! array_key_exists( $old_key, $array ) )
            return $array;
        $keys = array_keys( $array );
        $keys[ array_search( $old_key, $keys ) ] = $new_key;
        return array_combine( $keys, $array );
    }

    public function graph_unique_table(){
        $data = DB::select("select name, id from station_statics");
        //$data = json_encode($data);
        return view(
            'station_list',
            ['data' => $data]
        );
    }

    public function graph_unique($id){
        $name = DB::select("select name from station_statics where id = $id")[0]->name;
        $name = "Graphique de la Station : " + $name;
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
