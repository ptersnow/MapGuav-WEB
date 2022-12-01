<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Marker;

class MarkerController extends Controller
{

  public function __construct() {
  }

  public function index() {
      $markers = Marker::all();
      return response()->json($markers);
  }

    public function create(Request $request) {
        $marker = new Marker;
        $marker->name = $request->input('name');
        $marker->address = $request->input('address');
        $marker->lat = $request->input('lat');
        $marker->lng = $request->input('lng');
        $marker->user_id = 1;
        $marker->save();
        return response()->json($marker);
      }

      public function show($id) {
        $marker = Marker::find($id);
        return response()->json($marker);
      }
    
      public function update(Request $request, $id) {
        $marker= Marker::find($id);
        $marker->name = $request->input('name');
        $marker->address = $request->input('address');
        $marker->lat = $request->input('lat');
        $marker->lng = $request->input('lng');
        $marker->save();
        return response()->json($marker);
      }
    
      public function destroy($id) {
        $marker = Marker::find($id);
        $marker->delete();
        return response()->json('Ponto removido com sucesso');
      }
    

    
}
