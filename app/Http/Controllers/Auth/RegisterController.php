<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Admin;
use App\Ownedgov;
use App\Youthreg;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/homepage';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:ownedgov');
        $this->middleware('guest:youthreg');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showYouthregRegisterForm()
    {
        return view('auth.register', ['url' => 'youthreg']);
    }

    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showOwnedgovRegisterForm()
    {
        return view('auth.register', ['url' => 'ownedgov']);
    }



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

     /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'admin_id' => $request->admin_id,
            'programs' => $request->programs,
            'resources' => $request->resources,
            'applications' =>$request->applications,
            'opportunities' => $request->opportunities,
            'phonenumber' => $request->phonenumber,
        ]);
        return redirect()->intended('login/admin');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createYouthreg(Request $request)
    {
        $this->validator($request->all())->validate();
        Youthreg::create([
            'name' => $request->name,
            'firstname' =>$request->firstname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender'  => $request->gender,
            'phonenumber' => $request->phonenumber,
            'dateofbirth' => $request->dateofbirth,
            'Address' => $request->Address,
            'biometriccap' => $request->biometriccap,
            'localgovernment' => $request->localgovernment,
            'Qualification' => $request->Qualification,
            'employmentstatus' => $request->employmentstatus,
            'workexperience' => $request->workexperience,
            'nearestministry' => $request->nearestministry,
            'interestarea'  => $request->interestarea,
            'is_edited' => $request->is_edited,
        ]);
        return redirect()->intended('login/youthreg');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createOwnedgov(Request $request)
    {
        $this->validator($request->all())->validate();
        Ownedgov::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'organizationname' => $request->organizationname,
            'phonenumber' => $request->phonenumber,
            'Address' => $request->Address,
            'localgovernment' =>$request->localgovernment,
            'profile_of_leadership' =>$request->profile_of_leadership,
            'projectdone' =>$request->projectdone,
            'partnership_area' =>$request->partnership_area,
            'nearestministry' => $request->nearestministry,
            'interestarea' =>$request->interestarea,
            
        ]);
        return redirect()->intended('login/ownedgov');
    }

//     // for differnt registration
//     public function register(Request $request)
//  {
//      $this->validator($request->all())->validate();

//      //Determine User type
//      if($request->ownedgov === 'ownedgov'){
//         event(new Registered($user = $this->create($request->all())));  
//      }
//      elseif($request->youthreg === 'youthgov'){
//         event(new Registered($user = $this->create($request->all())));  
//      }
//      elseif($request->admin === 'admin'){
//         event(new Registered($user = $this->create($request->all())));  
//      }

//      $this->guard()->login($user);

//      return $this->registered($request, $user)
//                      ?: redirect($this->redirectPath());
//  }

 
}


