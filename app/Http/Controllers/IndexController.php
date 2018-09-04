<?php

namespace App\Http\Controllers;

use App\News;
use App\Result;
use App\Gallery;
use App\Program;
use App\Train;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller
{

	public function months()
	{
		$months = array(
			"01" => "Янв", "02" => "Фев",
			"03" => "Март", "04" => "Апр", "05" => "Мая", "06" => "Июня",
			"07" => "Июля", "08" => "Авг", "09" => "Сент",
			"10" => "Окт", "11" => "Нояб", "12" => "Дек"
		);

		return $months;
	}

    public function index()
    {
    	$news = News::all();
    	$months = $this->months();
        return view('index', compact('news','months'));
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
	public function show(Request $request)
	{
		$new = News::whereId($request->id)->first();
		return response()->json(['new' => $new], Response::HTTP_OK);
	}

}
