<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as OrgRequest;   // TODO: Кривой нейминг, забыл, что будет повторное объявление, переименовать...
use Illuminate\Support\Facades\Auth;

class Requests extends Controller
{
    public function index() {
        return view('requests');
    }

    public function create(Request $request) {
        // TODO: https://laravel.com/docs/9.x/validation#available-validation-rules
        $request->validate([
            'name' => 'required|min:3|max:48',
            'email' => 'required|email|min:6|max:255',
            'phone_number' => 'required|string|min:9|max:14', // TODO: Запилить на данное поле регулярку
            'about_me' => 'required|min:10|max:255',
        ]);

        $data = $request->all();
        $orgRequest = $this->createOrgRequest($data);

        return redirect('/requests')->with('info', 'Ваша заявка находится на стадии рассмотрения');
    }

    public function createOrgRequest($data) {
        return OrgRequest::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'about_me' => $data['about_me'],
            'status' => '0',
            'author_id' => Auth::user()->id,
        ]);
    }
}
