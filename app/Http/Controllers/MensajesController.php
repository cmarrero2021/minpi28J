<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensajes;

class MensajesController extends Controller
{
    public function index() {
        $mensajes=Mensajes::all();
        return view ('mensajes');
    }
    public function mens_tabla(Request $request)
    {
        $offset = $request->input('offset', 0);
        $limit = $request->input('limit', 10);
        $query = Mensajes::query();
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($query) use ($search) {
                $query
                    ->orWhere('nacionalidad', 'Ilike', '%' . $search . '%')
                    ->orWhere('cedula', 'Ilike', '%' . $search . '%')
                    ->orWhere('telefono', 'Ilike', '%' . $search . '%')
                    ->orWhere('fecha', 'Ilike', '%' . $search . '%')
                    ->orWhere('hora', 'Ilike', '%' . $search . '%')
                ;
            });            
        } 
        if ($request->has('filter')) {
            $filters = json_decode($request->filter, true);foreach ($filters as $column => $value) {
                $query->where($column, 'like', '%' . $value . '%');
            }
        }
        $total = $query->count();
        if ($request->has('limit')) {
            $mensajes = $query->skip($offset)->take($limit)->get();
        } else {
            $mensajes = $query->get();
        }
        return response()->json([
            'total' => $total,
            'rows' => $mensajes
        ]);
    }
    public function process_sms(Request $request) {
        $text = $request->query('text');
        $sender = $request->query('sender');
        $date = $request->query('date');
        $time = $request->query('time');
        \Log::info('SMS recibido', [
            'text' => $text,
            'sender' => $sender,
            'date' => $date,
            'time' => $time,
        ]);
        return response("SMS processed successfully.", 200)->header('Content-Type', 'text/plain');
    }

}
