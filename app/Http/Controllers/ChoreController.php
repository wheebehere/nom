<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChoreController extends Controller
{
    //
    public function chores() {
    	$mysqli = new \mysqli("127.0.0.1", "root", "whee4SQL", "nomorechaos_db");

		/* check connection */
		if ($mysqli->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
		}

		$results = $mysqli->query('SELECT * FROM choreowners INNER JOIN mainchores ON choreowners.choreID=mainchores.choreID WHERE userID = 1');
			if($results){
				while ($row = $results->fetch_object()){
				$chores[] = $row;
				}
				$results->close();
			}


		printf('<pre>%s</pre>', print_r($chores, 1));
	


    	return view('chores',compact('chores'));
	}
}
