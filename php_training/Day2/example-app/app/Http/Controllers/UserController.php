<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //function to get all users
    function getAllUsers(){
        return User::all();
    }

    //function to add a user
    function addUser(Request $request){
        $req=$request->getContent();
        $reqq=json_decode($req);
        $user=new User();
        $user->id=$reqq->id;
        $user->First_Name=$reqq->First_Name;
        $user->Last_Name= $reqq->Last_Name;
        //echo($user);
        $temp=$user->save();
        if($temp)
            return ["Message"=>"Data submitted successfully"];
        else
            return ["Message"=>"Data NOT submitted"];

    }
}
