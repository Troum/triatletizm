<?php

namespace App\Http\Controllers;

use App\Result;
use App\Gallery;
use App\Program;
use App\Train;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function programs()
    {
    	$programs = Program::all();
        return view('programs', compact('programs'));
    }

    public function about()
    {
        return view('about');
    }

    public function triatletizm()
    {
        return view('triatletizm');
    }

    public function feedback(Request $request)
    {
    	$posts = Result::paginate(1);
    	$gallery = Gallery::all();

    	if($request->ajax()) {
    		return view('page-parts.feedback', ['posts' => $posts])->render();
	    }

        return view('feedback', compact('posts', 'gallery'));
    }

    public function training()
    {
    	$trains = Train::all();
        return view('training', compact('trains'));
    }
    public function contacts()
    {
        return view('contacts');
    }

    public function open(Request $request)
    {
    	$program = Program::whereId($request->id)->first();
    	return response()->json(['description' => $program->full_description, 'title' => $program->name], Response::HTTP_OK);
    }
	public function buy(Request $request)
	{
		$train = Train::whereId($request->id)->first();
		return response()->json(['name' => $train->train, 'price' => $train->price], Response::HTTP_OK);
	}

}
