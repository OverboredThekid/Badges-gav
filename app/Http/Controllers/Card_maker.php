<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Card_Details as card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Card_maker extends Controller
{
    function submit_data(Request $req)
    {

        try {
            foreach ($_POST as $i => $val) {
                $i = $_POST["$val"];
                $data = array("$i" => $val);
               // card::insert($data);
               var_dump($data);
            }
        } catch (Exception $e) {
            echo $e;
        } finally {

            // $data=array('pinh'=>$pinh, 'background'=>$background, 'character'=>$character);
            // return View::make("welcome")->with($data);
            return View::make('/Thank-you')->with($data);
        }
    }
    function test()
    {

        try {
            foreach ($_POST as $i => $val) {
                $i = $_POST["$val"];
                $data = array("$i" => $val);
               // card::insert($data);
               var_dump($data);
            }
        } catch (Exception $e) {
            echo $e;
        } finally {

            // $data=array('pinh'=>$pinh, 'background'=>$background, 'character'=>$character);
            // return View::make("welcome")->with($data);
           return var_dump($data);
        }
    }




}
