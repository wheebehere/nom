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

		//select mySQL data for today's date and only display today




		
		$dailyresults = $mysqli->query('SELECT * FROM choreowners INNER JOIN mainchores ON choreowners.choreID=mainchores.choreID WHERE choreFreq = "Daily"');
		//SELECT * FROM choreowners INNER JOIN mainchores ON choreowners.choreID=mainchores.choreID WHERE userID = 1 AND choreFreq = "Daily"
			if($dailyresults){
				while ($dailyrow = $dailyresults->fetch_object()){
				$dailychores[] = $dailyrow;
				}
				$dailyresults->close();
			}

		//printf('<pre>%s</pre>', print_r($dailychores, 1));

		
		$weeklyresults = $mysqli->query('SELECT * FROM choreowners INNER JOIN mainchores ON choreowners.choreID=mainchores.choreID WHERE choreFreq = "Weekly"');
		//SELECT * FROM choreowners INNER JOIN mainchores ON choreowners.choreID=mainchores.choreID WHERE userID = 1 AND choreFreq = "Daily"
			if($weeklyresults){
				while ($weeklyrow = $weeklyresults->fetch_object()){
				$weeklychores[] = $weeklyrow;
				}
				$weeklyresults->close();
			}


		$monthlyresults = $mysqli->query('SELECT * FROM choreowners INNER JOIN mainchores ON choreowners.choreID=mainchores.choreID WHERE choreFreq = "Monthly"');
		//SELECT * FROM choreowners INNER JOIN mainchores ON choreowners.choreID=mainchores.choreID WHERE userID = 1 AND choreFreq = "Daily"
			if($monthlyresults){
				while ($monthlyrow = $monthlyresults->fetch_object()){
				$monthlychores[] = $monthlyrow;
				}
				$monthlyresults->close();
			}

		
		$yearlyresults = $mysqli->query('SELECT * FROM choreowners INNER JOIN mainchores ON choreowners.choreID=mainchores.choreID WHERE choreFreq = "Yearly"');
		//SELECT * FROM choreowners INNER JOIN mainchores ON choreowners.choreID=mainchores.choreID WHERE userID = 1 AND choreFreq = "Daily"
			if($yearlyresults){
				while ($yearlyrow = $yearlyresults->fetch_object()){
				$yearlychores[] = $yearlyrow;
				}
				$yearlyresults->close();
			}


	return view('chores',compact('dailychores', 'weeklychores', 'monthlychores', 'yearlychores'));


	}
}
