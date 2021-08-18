<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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

     // function to delete a user
    public function deleteuser($id)
    {
        $count = DB::table('users')
            ->where('id' , $id)
            ->count();
        if ($count == 0)
        {
            return response()->json([
                'message' => "User with id-$id does not exists"
            ]);
        }
        DB::table('users')
            ->where('id' , $id)
            ->delete();

        return response()->json([
            'message' => "user with id-$id deleted"
        ]);
    }

    //function to get user by id
    public function getuserbyid($id)
    {
        $users = DB::table('users')->where('id' , $id )->get();
        if (count($users) == 0 )
        {
            return response()->json([
                'message' => "No user found with this id-$id"
            ]);
        }

        return response()->json([
            "id" => $users[0]->id,
            "First_Name" => $users[0]->First_Name,
            "Last_Name" => $users[0]->Last_Name
        ]);


    }
}
