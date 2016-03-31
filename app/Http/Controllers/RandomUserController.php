<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Factory;

class RandomUserController extends Controller {

    /**
    * Initial page
    */
    public function getIndex() {
        return view("user");
    }

    /**
     * Posts the results
     */
    public function postUsers(Request $request) {

        // Validate record count
        $this->validate($request, [
            'recordCount' => 'numeric|required|min:1|max:1000',
            // export checkbox no need validating since it can simply either be on or off
        ]);

        // Create the data
    	$userNum = $request->input('recordCount');
    	$faker = Factory::create();
        $users = [];
        for($i = 0; $i < $userNum; $i++){
            $row = [];

            $row[] = $faker->unique()->firstname;
            $row[] = $faker->unique()->lastname;
            $row[] = $faker->unique()->email;
            $row[] = $faker->unique()->phoneNumber;
            $row[] = $faker->unique()->city;
            $row[] = $faker->unique()->state;

            $users[] = $row;
        }

        // Export
        if(!empty($request->input('export'))){
            self::exportUsers($users);
            return;
        }

        return view("user", ["userdata" => $users]);
    }

    private function exportUsers($users) {
        header("Content-type: application/vnd.ms-excel");
        header("Content-disposition: attachment; filename=\"RandomUsers.xls\"");

        foreach($users as $user){
            foreach($user as $data){
                echo $data . "\t";
            }
            echo "\n";
        }
    }
}