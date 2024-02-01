<?php

namespace App\Repository;

use App\Interface\RegisterInterface;  
use App\Models\Register;
use session;
class RegisterRepository implements RegisterInterface
{
    public function studentFormSubmit($request)
    {
        $register = new Register;
        $register->first_name = $request['first_name'];
        $register->last_name = $request['last_name'];
        $register->email = $request['email'];
        $register->password = $request['password'];
        $register->confirm_password = $request['confirm_password'];
        $register->gender = $request['gender'];
        $register->save();
       
    }  
    public function loginDetailsSubmit($request)
{
    $user = Register::where('email', $request['email'])->first();
    
        session(['user_id' => $user->id, 'username' => $user->email]);
        return true;
    
}

    public function studentListUpdate($request)
    {
        $Id = $request['stdentId'];

        $updateArray = Array(
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'confirm_password' => $request['confirm_password'],            
            'gender' => $request['gender']            
        );
        Register::where('id',$Id)->update($updateArray);
        return true;
    }  

   
    public function studentListing() {
        $list = Register::select('*')->get();   
        return $list; 
    } 
    public function edit($id){
    
        return Register::find($id);
    }
    
    public function delete($id){
        return Register::where('id',$id)->delete();
    
    }
}
?>  


