<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function solutionOne()
    {
        $ch = curl_init('http://103.219.147.17/api/json.php');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $response = curl_exec($ch);
        $decode = json_decode($response);
        $data = $decode->data;
        preg_match_all('#speed=([^\s]+)#', $data, $matches);
        $newArray = [];
        foreach ($matches[1] as $key => $value) {
            if ($value >= 60) {
                $newArray[] = $value;
                echo $value . "\n";
            }
        }
        echo "Total:" . count($newArray);
        curl_close($ch);
    }

    public function solutionTwo()
    {
        $array = array('0' => 'z1', '1' => 'Z10', '2' => 'z12', '3' => 'Z2', '4' => 'z3');
        uasort($array, function ($x, $y) {
            if (strlen($x) === strlen($y)) {
                return 0;
            }
            return strlen($x) < strlen($y) ? -1 : 1;
        });
        print_r($array);
    }

    public function solutionThree()
    {
        return view("ip_validate");
    }
}
