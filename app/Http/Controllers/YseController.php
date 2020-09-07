<?php

namespace Yse\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yse\Http\Requests\PostulaRequest;
use Yse\Models\User;

class YseController extends Controller
{
    //

    public function home (Request $request) {
        return view('yse.home');
    }

    public function postula (Request $request) {
        return view('yse.postula');
    }

    public function save (PostulaRequest $request) {
         
        $user = User::where('email', $request->email)->first();
        if(!$user){
            $user = User::create($request->all()+['password' => '', 'type'=>'postulante', 'job'=>$request->job]);
        }                
    
        $path = Storage::putFileAs(
            'cvs', $request->file('cv'), time().'_'.$user->id .'.'.$request->cv->extension()
        );

        return redirect()->back()->with('status', 200);

    }
}
