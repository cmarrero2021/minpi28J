<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VterritoriosMovilizacion;
use App\Models\VestadosMovilizacion;
use App\Models\VacumuladoEstado;
use App\Models\VtotalMovilizacionHora;
use App\Models\VacumuladoNucleo;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $movilizacion_tra=VterritoriosMovilizacion::select('tipo AS TIPO','total_movilizados AS MOVILIZADOS','total_pormovilizar AS FALTANTES')
        //     ->where('tipo','<>','total_electores')
        //     ->where('tipo','<>','total_estudiantes')
        //     ->where('tipo','<>','total_trabajadores')
        //     ->get();

        $estados_movilizacion = VestadosMovilizacion::all();
        $estados = VacumuladoEstado::all();
        $movilizacion_hora = VtotalMovilizacionHora::all();
        $movilizacion = VterritoriosMovilizacion::all();
        $nucleos = VacumuladoNucleo::all();
        foreach ($movilizacion as $registro) {
            ${$registro->territorio} = [
                'territorio' => $registro->territorio,
                'total' => $registro->total,
                'movilizados' => $registro->movilizados,
                'por_movilizar' => $registro->por_movilizar,
            ];
        }
        // $total = DB::select("SELECT count(*) AS total,count(*) FILTER (WHERE voto) AS movilizados,count(*) - count(*) FILTER (WHERE voto) AS por_movilizar FROM electores
        // ");
        // $total_electores = (array) $total[0];
        // $jgr_total_electores = $total_electores;
        // $jgr_total_estudiantes = $total_estudiantes;
        // $jgr_total_trabajadores = $total_trabajadores;
        // $jgr_total_administrativos = $total_administrativos;
        // $jgr_total_obreros = $total_obreros;
        // $jgr_total_jubilados = $total_jubilados;
        // $jgr_total_pensionados = $total_pensionados;
        // $gr_total_electores = json_encode($this->modificarArray($jgr_total_electores));
        // info($gr_total_electores);
        // $gr_total_estudiantes = json_encode($this->modificarArray($jgr_total_estudiantes));
        // $gr_total_trabajadores = json_encode($this->modificarArray($jgr_total_trabajadores));
        // $gr_total_administrativos = json_encode($this->modificarArray($jgr_total_administrativos));
        // $gr_total_obreros = json_encode($this->modificarArray($jgr_total_obreros));
        // $gr_total_jubilados = json_encode($this->modificarArray($jgr_total_jubilados));
        // $gr_total_pensionados = json_encode($this->modificarArray($jgr_total_pensionados));
        return view('home', compact(
            // 'total_electores',
            // 'total_estudiantes',
            // 'total_trabajadores',
            // 'total_administrativos',
            // 'total_docentes',
            // 'total_obreros',
            // 'total_jubilados',
            // 'total_pensionados',
            // 'gr_total_electores',
            // 'gr_total_estudiantes',
            // 'gr_total_trabajadores',
            // 'gr_total_administrativos',
            // 'gr_total_obreros',
            // 'gr_total_jubilados',
            // 'gr_total_pensionados',
            'movilizacion',
            'movilizacion_hora',
            'nucleos',
            'estados',
        ));
    }
    private function modificarArray($array)
    {
        if (array_key_exists('total', $array)) {
            unset($array['total']);
            $array['TOTAL MOVILIZADOS'] = $array['movilizados'];
            $array['POR MOVILIZAR'] = $array['por_movilizar'];
            unset($array['movilizados']);
            unset($array['por_movilizar']);
            return $array;
        }
    }

    public function elect_gen_mov() {
        $p=0;
        $mov_gen = VterritoriosMovilizacion::all();
        return json_encode($mov_gen);
    }
    public function elect_gen_tra() {
        $p=0;
    //     $mov_tra = Vmovilizacion::where('tipo','<>','total_electores')
    //     ->Where('tipo','<>','total_estudiantes')
    //     ->Where('tipo','<>','total_trabajadores')
    //     ->get();
    //     return json_encode($mov_tra);
    }
}
