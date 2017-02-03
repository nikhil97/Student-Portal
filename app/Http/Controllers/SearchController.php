<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserSerchRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    public function search(UserSerchRequest $request)
    {
        $NAME      = $request->get('name');
        $BRANCH    = $request->get('branch');
        $YEAR      = $request->get('year_of_passing');
        $SKILLS    = $request->get('skills');
        $INTERESTS = $request->get('interests');

        $query = DB::table('users');

        if (!is_null($NAME) && $NAME !== "") {
            $query = $query->orwhere('name','like',"%$NAME%");
        }

        if (!is_null($BRANCH) && $BRANCH !== "") {
            $query = $query->orwhere('branch', $BRANCH);
        }

        if (!is_null($YEAR) && $YEAR !== "") {
            $query = $query->orwhere('year_of_passing' ,$YEAR);
        }

        if (!is_null($SKILLS) && $SKILLS !== "") {
            $query = $query->orwhere('skills','like',"%$SKILLS%");
        }

        if (!is_null($INTERESTS) && $INTERESTS !== "") {
            $query = $query->orwhere('interests','like',"%$INTERESTS%");
        }

        $users = $query->get();

        return view('result',compact('users'));

    }
}
