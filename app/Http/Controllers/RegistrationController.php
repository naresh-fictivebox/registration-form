<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Interface\RegisterServiceInterface;


class RegistrationController extends Controller
{
    private $RegisterServiceInterface;
    public function __construct(RegisterServiceInterface $RegisterServiceInterface)
    {
        $this->RegisterServiceInterface = $RegisterServiceInterface;
    }
    public function studentForm()
    {
        return view('student');
    }
    public function loginDetails()
    {
        return view('login');
    }
    public function loginDetailsSubmit(Request $request)
    {
        $this->RegisterServiceInterface->loginDetailsSubmit($request->all()); 

        
        return redirect('student-form');
    }
    public function logoutForm(Request $request)
    { Session::forget('user_id');
        Session::forget('username');
        return redirect('/');
    }

    public function studentFormSubmit(Request $request)
    {
       $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8', 
            'confirm_password' => 'required|same:password',
            'gender' => 'required|in:male,female,other',    
        ]);
        $this->RegisterServiceInterface->studentFormSubmit($request->all()); 
        return redirect('student-listing');
    }
    public function studentListing(Request $request)
    {
        $studentListing = $this->RegisterServiceInterface->studentListing();      
        return view('student-list',compact('studentListing'));
    }
    public function studentListEdit(Request $request, $id)
    {
        $editData = $this->RegisterServiceInterface->edit($id);
        return view('student-edit',compact('editData'));
    } 
    public function studentListDelete(Request $request, $id)
    {
       $this->RegisterServiceInterface->delete($id);
        $studentListing = $this->RegisterServiceInterface->studentListing();      
        return view('student-list',compact('studentListing'));
    }
    
    public function studentListUpdate(Request $request)
    {
        $this->RegisterServiceInterface->studentListUpdate($request->all());
        $studentListing = $this->RegisterServiceInterface->studentListing();      
        return view('student-list',compact('studentListing'));    
    }
}
