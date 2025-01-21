<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tester;

class textController extends Controller
{
    public function homePage (){
        $testers = Tester::all();
        return view ('welcome',compact('testers'));
    }
    public function aboutPage (){
        return view ('nav.about-us');
    }
    public function contactPage (){
        return view ('nav.contact-us');
    }
    public function create(){
        return view('users.create');
    }
    public function save(){
        $name = request('name');
        $email = request('email');
        $phone_number = request('phone_number');

        Tester ::create([
            'name' =>$name,
            'email'=>$email,
            'phone_number'=>$phone_number
        ]);

        // second method

        // $user = new Tester;
        // $user ->name= $name;
        // $user ->email= $email;
        // $user ->phone_number= $phone_number;
        // $user -> save();


        // if need complete data 

    //    $user = Tester ::create([
    //         'name' =>$name,
    //         'email'=>$email,
    //         'phone_number'=>$phone_number
    //     ]);

    //     return $user;


    //another types working

    // Tester :: firstOrCreate([
    //     'email' => requset('email')
    // ],[

    //     'email' => request('email'),
    //     'phone_number' => request('phone_number'),

    // ]);


    // Tester :: updateOrCreate([
    //     'email' => requset('email')
    // ],[

    //     'email' => request('email'),
    //     'phone_number' => request('phone_number'),

    // ]);

    return redirect()->route('welcome')->with('message','user created succefully');

    }

    public function edit($userId){
         $user = Tester::findOrFail(decrypt($userId));
            return view('users.edit', compact('user'));
        
    }
}
