<?php

namespace App\Http\Controllers;

use App\Events\PushRequestEvent;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class RequestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    //
    public function save(){
        $model = new User();
        $model->username = 'ehsan';
        $model->full_name = 'zarei';
        $model->email = 'e.zarei88@gmail.com';
        $model->save();
    }
}
