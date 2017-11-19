<?php
/**
 * Created by PhpStorm.
 * User: HJKLI
 * Date: 2017/11/19
 * Time: 1:31
 */

namespace App\Http\Controllers\Dome;

use App\Models\Podcast;
use App\Jobs\ProcessPodcast;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PodcastController extends Controller
{

    public function __construct() {
    }


    /**
     *
     */
    public function store(Request $request) {

        $all = $request->all();

        $podcast = Podcast::find(1);


        ProcessPodcast::dispatch($podcast)->onConnection('database');

//        dump($podcast);
    }

}