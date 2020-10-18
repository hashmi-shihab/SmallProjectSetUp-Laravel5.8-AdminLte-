# Laravel5.8AdminLTE
 Laravel5.8 Intregated with AdminLTE

#Modify your RegistersUsers.php trait file  
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
    
1. composer install
2. php artisan migrate
3. composer dump-autoload
4. php artisan db:seed
5. http://127.0.0.1:8000/login
6. user:admin@gmail.com
7. pass:secret
(one super admin,super admin can more admin)
