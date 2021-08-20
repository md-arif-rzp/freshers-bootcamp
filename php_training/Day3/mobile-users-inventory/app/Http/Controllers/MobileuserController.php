<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mobileuser;
use Illuminate\Support\Facades\DB;
class MobileuserController extends Controller
{
        function getAllUsers(){
            return mobileuser::all();
        }

        //function to add a user
        function addUser(Request $request){

            $count = DB::table('mobileusers')
                ->where('MobileNo' , $request->MobileNo)
                ->count();
            if ($count == 1)
            {
                return response()->json([
                    'Message' => "User with Mobile Number - $request->MobileNo already exists"
                ]);
            }

            $user=new mobileuser();
            $user->UserName=$request->UserName;
            $user->UserEmail=$request->UserEmail;
            $user->MobileNo= $request->MobileNo;
            //echo($user);
            $temp=$user->save();
            if($temp)
                return ["Message"=>"Data submitted successfully"];
            else
                return ["Message"=>"Data NOT submitted"];

        }

          //function to delete a user by username
        public function deluserbyUserName($UserName)
        {
            $count = DB::table('mobileusers')
                ->where('UserName' , $UserName)
                ->count();
            if ($count == 0)
            {
                return response()->json([
                    'message' => "User with username - $UserName does not exists"
                ]);
            }
            if ($count > 1)
            {
                return response()->json([
                    'message' => "More than one users with username - $UserName exist"
                ]);
            }
            DB::table('mobileusers')
                ->where('UserName' , $UserName)
                ->delete();

            return response()->json([
                'message' => "user with username-$UserName deleted"
            ]);
        }

    //function to delete a user by user email
    public function deluserbyUserEmail($UserEmail)
    {
        $count = DB::table('mobileusers')
            ->where('UserEmail' , $UserEmail)
            ->count();
        if ($count == 0)
        {
            return response()->json([
                'message' => "User with useremail - $UserEmail does not exists"
            ]);
        }
        if ($count > 1)
        {
            return response()->json([
                'message' => "More than one user with user email - $UserEmail exists"
            ]);
        }
        DB::table('mobileusers')
            ->where('UserEmail' , $UserEmail)
            ->delete();

        return response()->json([
            'message' => "user with user email-$UserEmail deleted"
        ]);
    }

    //function to delete a user by user number
    public function deluserbyMobileNo($MobileNo)
    {
        $count = DB::table('mobileusers')
            ->where('MobileNo' , $MobileNo)
            ->count();
        if ($count == 0)
        {
            return response()->json([
                'message' => "User with user number - $MobileNo does not exists"
            ]);
        }
        DB::table('mobileusers')
            ->where('MobileNo' , $MobileNo)
            ->delete();

        return response()->json([
            'message' => "user with user number -$MobileNo deleted"
        ]);
    }

        //function to get user by username
        public function getuserbyUserName($UserName)
        {
            $users = DB::table('mobileusers')->where('UserName' , $UserName )->get();
            if (count($users) == 0 )
            {
                return response()->json([
                    'message' => "No user found with this name-$UserName"
                ]);
            }
            return response()->json([
                'User' => $users
            ]);

        }

    //function to get user by useremail
    public function getuserbyUserEmail($email)
    {
        $users = DB::table('mobileusers')->where('UserEmail' , $email )->get();
        if (count($users) == 0 )
        {
            return response()->json([
                'message' => "No user found with this email- $email"
            ]);
        }

        return response()->json([
            'User' => $users
        ]);
        //return json_encode($users);


    }

    //function to get user by usernumber
    public function getuserbyMobileNo($MobileNo)
    {
        $users = DB::table('mobileusers')->where('MobileNo' , $MobileNo )->get();
        if (count($users) == 0 )
        {
            return response()->json([
                'message' => "No user found with this name-$MobileNo"
            ]);
        }
        return response()->json([
            'User' => $users
        ]);

    }
}
