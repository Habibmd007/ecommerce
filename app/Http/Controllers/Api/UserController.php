<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Notifications\MailNotify;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $successStatus = 200;

    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => '',
            'data' => User::all()

        ]);
        // return User::all();
        // return 'api index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'username' => 'required|min:5',
            'password' => 'required|min:6',
            'image' => 'required|image|max:10240',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag()->all());
        }
        
        $image = $request->file('image');
        $img_name = uniqid('photo_', true).str_random(10).'.'.$image->getClientOriginalExtension();

        if ($image->isValid()) {
            $image->storeAs('images', $img_name);
        }

        $user = User::create([
            'email' => strtolower(trim($request->input('email'))),
            'phone' => trim($request->input('phone')),
            'username' => strtolower(trim($request->input('username'))),
            'password' => bcrypt($request->input('password')),
            'image' => $img_name,
            'email_verification_token' => str_random(32)
            ]);

            $user->notify(new MailNotify($user));
            return response()->json(['message' => 'Account created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            // 'username' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            // 'c_password' => 'required|same:password', 
        ]);

        if($validator->fails())
        { 
        return response()->json(['error'=>$validator->errors()], 401);            
        }

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')->accessToken; 
            
            return response()->json([
                            'success' => true,
                            'message' => 'User Autheticated',
                            'token' => $success,
                        ], $this->successStatus); 
        } 
        else{ 
            return response()->json([
                'success' => false,
                'message' => 'User not authorized',
            ], 401); 
        }
    }

    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);
            if ($validator->fails()) { 
                        return response()->json(['error'=>$validator->errors()], 401);            
                    }
            $input = $request->all(); 
                    $input['password'] = bcrypt($input['password']); 
                    $user = User::create($input); 
                    $success['token'] =  $user->createToken('MyApp')->accessToken; 
                    $success['name'] =  $user->name;
            return response()->json(['success'=>$success], $this->successStatus); 
                }

    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this->successStatus); 
    }
}
