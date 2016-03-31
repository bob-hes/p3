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
    	$userNum = $request->input('userNum');
    	$faker = Factory::create();

        $users = [];
        for($i = 0; $i < $userNum; $i++){
            $users[] = $faker->unique()->name;
        }

        return implode("<p>", $users);
    }
}