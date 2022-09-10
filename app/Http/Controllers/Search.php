<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Search extends Controller
{
    public function index() {
        // TODO: get event from model
        $data = [
          [
              'id' => 1,
              'display' => 'Альметьевский хакатон'
          ], [
              'id' => 2,
                'display' => 'Экспозиция интерактивного центра Альметрика'
            ],
        ];

        return response()->json($data);
    }
}
