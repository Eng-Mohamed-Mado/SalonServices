<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Eloquent\Backend\ShowServicesRepo;
use Illuminate\Http\Request;

class ShowServiceController extends Controller
{
    protected $showServicesRepo;
    public function __construct(ShowServicesRepo $showServicesRepo)
    {
        $this->showServicesRepo = $showServicesRepo;
    }
    public function index(){
        return $this->showServicesRepo->index();
    }

    // ------------ {Update Services}
    public function updatePhotography($id,$request,$filename){
        return $this->showServicesRepo->updatePhotography($id,$request,$filename);
    }

    // ------------ {Delete Services}
    public function deleteVideo($id){
        return $this->showServicesRepo->deleteVideo($id);
    }
    public function deletePhotography($id,$filename){
        return $this->showServicesRepo->deletePhotography($id,$filename);
    }
    public function deleteProgramming($id){
        return $this->showServicesRepo->deleteProgramming($id);
    }
    public function deleteMarketing($id){
        return $this->showServicesRepo->deleteMarketing($id);
    }
}
