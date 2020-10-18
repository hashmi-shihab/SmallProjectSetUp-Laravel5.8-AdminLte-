# Laravel5.8AdminLTE
 Laravel5.8 Intregated with AdminLTE

# Modify your RegistersUsers.php trait file  
public function showRegistrationForm()
    {
        if (Auth::id()==1)
        return view('auth.register');
        else
            return view('admin.users.unauthorised');
    }
public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        /*$this->guard()->login($user);*/ /*stop user to login after registration*/

        /*return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());*/
        return redirect('register')->with('message','has been registered');
    }
1. configure .env file from .env.example file(put your email password in it) 
2. composer install
3. php artisan migrate
4. composer dump-autoload
5. php artisan db:seed
6. http://127.0.0.1:8000/login
7. user:admin@gmail.com
8. pass:secret
(one super admin,super admin can create more admin)
