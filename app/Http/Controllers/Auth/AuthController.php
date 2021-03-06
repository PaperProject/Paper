<?php namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\AuthenticateUser;
use Illuminate\Http\Request;

class AuthController extends Controller {

    /**
     * the model instance
     * @var User
     */
    protected $user;
    /**
     * The Guard implementation.
     *
     * @var Authenticator
     */
    protected $auth;

    /**
     * Create a new authentication controller instance.
     *
     * @param  Authenticator  $auth
     * @return void
     */
    public function __construct(Guard $auth, User $user)
    {
        $this->user = $user;
        $this->auth = $auth;

        $this->middleware('guest', ['except' => ['getLogout']]);
    }

    /**
     * Connect user with socialite.
     *
     * @return App\AuthenticateUser
     */
     public function log(AuthenticateUser $authenticateUser, Request $request, $provider = null) {
        return $authenticateUser->execute($request->all(), $this, $provider);
     }

     /**
      * Redirect a user to homepage.
      *
      * @return Response
      */
     public function userHasLoggedIn($user) {
        \Session::flash('success', 'Welcome, ' . $user->first_name . " " . $user->last_name);
        return redirect('/');
     }

    /**
     * Show the application registration form.
     *
     * @return Response
     */
    public function getRegister()
    {
        $months = array("1" => "Janvier",
          "2" => "Février",
          "3" => "Mars",
          "4" => "Avril",
          "5" => "Mai",
          "6" => "Juin",
          "7" => "Juillet",
          "8" => "Août",
          "9" => "Septembre",
          "10" => "Octobre",
          "11" => "Novembre",
          "12" => "Décembre"
        );
        return view('auth/register', compact("months"));
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  RegisterRequest  $request
     * @return Response
     */
    public function postRegister(RegisterRequest $request)
    {
        $this->user->first_name = $request->first_name;
        $this->user->last_name = $request->last_name;
        $this->user->username = $request->username;
        $this->user->email = $request->email;
        $this->user->password = bcrypt($request->password);
        $this->user->save();
        //$this->auth->login($this->user);
        //return redirect('/dash-board');
        return view('auth/register');
    }

    /**
     * Show the application login form.
     *
     * @return Response
     */
    public function getLogin()
    {
        return view('auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  LoginRequest  $request
     * @return Response
     */
    public function postLogin(LoginRequest $request)
    {
        if ($this->auth->attempt($request->only('email', 'password')))
        {
            return redirect('/dash-board');
        }

        return redirect('/login')->withErrors([
            'email' => 'The credentials you entered did not match our records. Try again?',
        ]);
    }

    /**
     * Log the user out of the application.
     *
     * @return Response
     */
    public function getLogout()
    {
        $this->auth->logout();

        return redirect('/');
    }

}
