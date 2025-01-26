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

   public function edit($id)
    {
        $tester = Tester::findOrFail($id);
        return view('edit', compact('tester'));
    }

    public function update(Request $request, $id)
    {
        $tester = Tester::findOrFail($id);
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|numeric'
        ]);

        $tester->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number
        ]);

        return redirect()->route('welcome')->with('message', 'User updated successfully');
    }

    public function delete($id)
    {
        $tester = Tester::findOrFail($id);
        $tester->delete();

        return redirect()->route('welcome')->with('message', 'User deleted successfully');
    }
}
