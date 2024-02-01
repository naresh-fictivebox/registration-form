<?php
namespace App\Services;
 
use App\Interface\RegisterInterface;
use App\Interface\RegisterServiceInterface;

 class RegisterServices implements RegisterServiceInterface

 {
    private $RegisterInterface;

    public function __construct(RegisterInterface $RegisterInterface) 
    {
        $this->RegisterInterface = $RegisterInterface;
    }

    public function studentFormSubmit($request)
    {
        $this->RegisterInterface->studentFormSubmit($request);
    }

    public function studentListUpdate($request)
    {
        $this->RegisterInterface->studentListUpdate($request);
    }    
    public function studentListing()
    {
        return $this->RegisterInterface->studentListing();
    }
    public function edit($id)
    {
        return $this->RegisterInterface->edit($id);
    }

    public function delete($id)
    {
        return $this->RegisterInterface->delete($id);
    }                                                        
    public function list()
    {
        return $this->RegisterInterface->list();
        
    }
    public function loginDetailsSubmit($request)
    {
        $this->RegisterInterface->loginDetailsSubmit($request);
    }


 }
?>