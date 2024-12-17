<?php
    namespace App\Http\Controllers\Admin;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Foundation\Validation\ValidatesRequests;
    use Illuminate\Support\Facades\Hash;
    use App\Models\Admin; 
    class AdminAuthController extends Controller
    {
        use ValidatesRequests;
        public function getLogin(){
            return view('admin.auth.login');
        }

        public function postLogin(Request $request)
        {
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required|string|min:8',
            ]);
    
            if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                // Successful login, redirect to adminpage
                return redirect()->route('adminpage');

            } else {
                // Authentication failed
                return back()->with('error', 'Invalid email or password.');
            }
        }

        public function adminLogout(Request $request)
        {
            auth()->guard('admin')->logout();
            Session::flush();
            Session::put('success', 'You are logout sucessfully');
            return redirect(route('adminLogin'));
        }

    }
    