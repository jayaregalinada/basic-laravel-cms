<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $currentUser;

    protected $template = 'dashboard.';

    public function __construct()
    {
        $this->currentUser = Auth::user();
        $this->middleware('dashboard');
    }

    public function view($view, $data = [])
    {
        return view($this->template . $view, $data);
    }
}
