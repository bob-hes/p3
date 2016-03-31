<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Badcow\LoremIpsum\Generator;

class LoremIpsumController extends Controller {

    /**
    * Initial page
    */
    public function getIndex() {
        return view("lorem");
    }

    /**
     * Posts the results
     */
    public function postText(Request $request) {
    	
    	$this->validate($request, [
        	'paragraphCount' => 'numeric|required|min:1|max:99',
    	]);

    	$paraNum = $request->input('paragraphCount');
    	$gen = new Generator();
    	$para = $gen->getParagraphs($paraNum);
        return view("lorem", ["para" => $para]);
    }
}