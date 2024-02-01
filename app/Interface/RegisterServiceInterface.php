<?php
namespace App\Interface;

Interface RegisterServiceInterface
{
    public function studentFormSubmit($request);
     public function studentListing();
     public function edit($id);
    public function delete($id);
    public function studentListUpdate($request);
    
    public function loginDetailsSubmit($request);
}