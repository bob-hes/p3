<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Factory;

class RandomUserController extends Controller {

    /**
    * Responds to requests to GET /books
    */
    public function getIndex() {
        return view("user");
    }

    /**
     * Responds to requests to GET /books/show/{id}
     */
    public function postShow(Request $request) {

        $this->validate($request, [
            'recordCount' => 'numeric|required|min:1|max:1000',
        ]);

    	$userNum = $request->input('recordCount');
    	$faker = Factory::create();

        $users = [];
        for($i = 0; $i < $userNum; $i++){
            $users[] = $faker->unique()->name;
        }

        return view("user", ["userdata" => $users]);
    }
}