<?php

namespace App\Http\Controllers\V1\Auth;

use App\Models\Levels;
use Illuminate\Http\Request;
use App\Traits\StudentBirthday;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    use StudentBirthday;

    public function __construct()
    {
        setlocale(LC_TIME, 'es_Es.utf8');
        setlocale(LC_TIME, 'Spanish');
    }
    
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (!auth()->attempt($credentials)) {
            return redirect()->intended('login')->with(request('email'));
        }

        $StudentsBirthday = $this->BirthdayListbyMonth(now()->format('m'));

        $Expiredlevels    = Levels::where('ffin','<=',now()->format('Y-m-d'))->get();

        $AlertBirthday    = view('Components.AlertBirthday',compact('StudentsBirthday', 'Expiredlevels'));

        alert()->html(
            "Cumpleañeros de " . now()->formatLocalized('%B') . " : ",
            $AlertBirthday->render(),
            ''
        )->persistent('Close');
        
        return redirect()->route('dashboard');       
    }
}
