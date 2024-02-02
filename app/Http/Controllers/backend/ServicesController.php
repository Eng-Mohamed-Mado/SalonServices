<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Eloquent\Frontend\ServicesRepo;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    protected $servicesRepo;
    public function __construct(ServicesRepo $servicesRepo)
    {
        $this->servicesRepo = $servicesRepo;
    }

        // Get All Data
        public function index(){
            return $this->servicesRepo->index();
        }

        // marketing Data
        public function marketing(){
            return $this->servicesRepo->marketing();
        }

        // programming Data
        public function programming(){
            return $this->servicesRepo->programming();
        }

        // photography Data
        public function photography(){
            return $this->servicesRepo->photography();
        }

        // video Data
        public function video(){
            return $this->servicesRepo->video();
        }

}
