# Laravel5.8AdminLTE
 Laravel5.8 Intregated with AdminLTE


1. composer install
2. configure .env file from .env.example file(put your email password in it) 
3. Modify your RegistersUsers.php trait file 
# public function showRegistrationForm()
    {
        if (Auth::id()==1)
        return view('auth.register');
        else
            return view('admin.users.unauthorised');
    }
# public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        /*$this->guard()->login($user);*/ /*stop user to login after registration*/
        /*return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());*/
        return redirect('register')->with('message','has been registered');
    }
4. Modify your AuthenticatesUsers.php trait file
# public function logout(Request $request)
     {
         $this->guard()->logout();
         $request->session()->invalidate();
         return $this->loggedOut($request) ?: redirect('login');
     }
5. php artisan migrate
6. composer dump-autoload
7. php artisan db:seed
8. http://127.0.0.1:8000/login
9. user:admin@gmail.com
10. pass:secret
(one super admin,super admin can create more admin)
