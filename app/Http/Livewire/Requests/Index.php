<?php

namespace App\Http\Livewire\Requests;

use App\Models\Request as OrgRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $openRequest;

    public function render()
    {
        if(Auth::check()) {
            $this->openRequest = OrgRequest::where([
                ['author_id', '=', Auth::id()],
                ['status', '=', '0']
            ])->first();
        }

        return view('livewire.requests.index');
    }
}
