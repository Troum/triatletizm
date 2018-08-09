<?php

namespace App\Http\Controllers;


use App\Gallery;
use App\Http\Requests\FeedbackRequest;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\ProgramRequest;
use App\Http\Requests\TrainRequest;
use App\News;
use App\Program;
use App\Result;
use App\ResultsPhotos;
use App\Train;
use App\TrainsPhotos;
use ElForastero\Transliterate\TransliterationFacade;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('home');
	}

	public function dash($string)
	{
		return str_replace(' ','_', TransliterationFacade::make($string));
	}

	public function addNew(NewsRequest $request)
	{
		if(News::create([
			'title' => $request->title,
			'cover' => $this->dash($request->file('cover')->getClientOriginalName()),
			'short_new' => $request->short,
			'full_new' => $request->full
		]))
		{
			$new = DB::table('news')->latest()->limit(1)->first();

			$request->file('cover')->move('images/news/'.$new->slug.'/cover/', $this->dash($request->file('cover')->getClientOriginalName()));

			return response()->json(['success' => 'Новость успешно добавлена'], Response::HTTP_OK);
		}
		else
		{
			return response()->json(['error' => 'Произошла ошибка'], Response::HTTP_UNPROCESSABLE_ENTITY);
		}

	}

	public function addProgram(ProgramRequest $request)
	{
		if(Program::create([
			'name' => $request->program,
			'price' => $request->price,
			'short_description' => $request->short,
			'full_description' => $request->full
		]))
		{
			return response()->json(['success' => 'Программа успешно добавлена'], Response::HTTP_OK);
		}
		else
		{
			return response()->json(['error' => 'Произошла ошибка'], Response::HTTP_UNPROCESSABLE_ENTITY);
		}
	}

	public function addTrain(TrainRequest $request)
	{
		if(Train::create([
			'train' => $request->train,
			'price' => $request->price,
			'train_description' => $request->description
		]))
		{
			$train = DB::table('trains')->latest()->limit(1)->first();

			foreach($request->file('photos') as $photo)
			{
				TrainsPhotos::create([
					'train_id' => $train->id,
					'photo' => $this->dash($photo->getClientOriginalName())
				]);

				$photo->move('images/trains/'.$train->id.'/related/', $this->dash($photo->getClientOriginalName()));
			}

			return response()->json(['success' => 'Вид тренировки успешно добавлен'], Response::HTTP_OK);
		}
		else
		{
			return response()->json(['error' => 'Произошла ошибка'], Response::HTTP_UNPROCESSABLE_ENTITY);
		}

	}

	public function addFeedback(FeedbackRequest $request)
	{
		$instagram = $request->instagram;
		$facebook = $request->facebook;
		$vk = $request->vk;
		if(!empty($instagram) && empty($facebook) && empty($vk))
		{
			Result::create([
				'name' => $request->name,
				'cover' => $this->dash($request->file('cover')->getClientOriginalName()),
				'feedback' => $request->feedback,
				'instagram' => $instagram
			]);

			$result = DB::table('results')->latest()->limit(1)->first();

			$request->file('cover')->move('images/result/'.$result->id.'/cover/', $this->dash($request->file('cover')->getClientOriginalName()));
			$cover = Image::make(File::get(public_path('images/result/'.$result->id.'/cover/'.$result->cover)));
			$cover->fit(250,250);
			$cover->save(public_path('images/result/'.$result->id.'/cover/'.$result->cover));

			foreach ($request->file('photos') as $photo)
			{
				ResultsPhotos::create([
					'result_id' => $result->id,
					'photo' => $this->dash($photo->getClientOriginalName())
				]);

				$photo->move('images/result/'.$result->id.'/', $this->dash($photo->getClientOriginalName()));

			}

			return response()->json(['success' => 'Отзыв успешно добавлен'], Response::HTTP_OK);

		}
		if(empty($instagram) && !empty($facebook) && empty($vk))
		{
			Result::create([
				'name' => $request->name,
				'cover' => $this->dash($request->file('cover')->getClientOriginalName()),
				'feedback' => $request->feedback,
				'facebook' => $facebook
			]);

			$result = DB::table('results')->latest()->limit(1)->first();

			$request->file('cover')->move('images/result/'.$result->id.'/cover/', $this->dash($request->file('cover')->getClientOriginalName()));
			$cover = Image::make(File::get(public_path('images/result/'.$result->id.'/cover/'.$result->cover)));
			$cover->fit(250,250);
			$cover->save(public_path('images/result/'.$result->id.'/cover/'.$result->cover));
			foreach ($request->file('photos') as $photo)
			{
				ResultsPhotos::create([
					'result_id' => $result->id,
					'photo' => $this->dash($photo->getClientOriginalName())
				]);

				$photo->move('images/result/'.$result->id.'/', $this->dash($photo->getClientOriginalName()));
			}

			return response()->json(['success' => 'Отзыв успешно добавлен'], Response::HTTP_OK);
		}
		if(empty($instagram) && empty($facebook) && !empty($vk))
		{
			Result::create([
				'name' => $request->name,
				'cover' => $this->dash($request->file('cover')->getClientOriginalName()),
				'feedback' => $request->feedback,
				'vk' => $vk
			]);

			$result = DB::table('results')->latest()->limit(1)->first();

			$request->file('cover')->move('images/result/'.$result->id.'/cover/', $this->dash($request->file('cover')->getClientOriginalName()));
			$cover = Image::make(File::get(public_path('images/result/'.$result->id.'/cover/'.$result->cover)));
			$cover->fit(250,250);
			$cover->save(public_path('images/result/'.$result->id.'/cover/'.$result->cover));
			foreach ($request->file('photos') as $photo)
			{
				ResultsPhotos::create([
					'result_id' => $result->id,
					'photo' => $this->dash($photo->getClientOriginalName())
				]);

				$photo->move('images/result/'.$result->id.'/', $this->dash($photo->getClientOriginalName()));
			}

			return response()->json(['success' => 'Отзыв успешно добавлен'], Response::HTTP_OK);
		}
		if(!empty($instagram) && !empty($facebook) && empty($vk))
		{
			Result::create([
				'name' => $request->name,
				'cover' => $this->dash($request->file('cover')->getClientOriginalName()),
				'feedback' => $request->feedback,
				'instagram' => $instagram,
				'facebook' => $facebook,
			]);

			$result = DB::table('results')->latest()->limit(1)->first();

			$request->file('cover')->move('images/result/'.$result->id.'/cover/', $this->dash($request->file('cover')->getClientOriginalName()));
			$cover = Image::make(File::get(public_path('images/result/'.$result->id.'/cover/'.$result->cover)));
			$cover->fit(250,250);
			$cover->save(public_path('images/result/'.$result->id.'/cover/'.$result->cover));
			foreach ($request->file('photos') as $photo)
			{
				ResultsPhotos::create([
					'result_id' => $result->id,
					'photo' => $this->dash($photo->getClientOriginalName())
				]);

				$photo->move('images/result/'.$result->id.'/', $this->dash($photo->getClientOriginalName()));
			}

			return response()->json(['success' => 'Отзыв успешно добавлен'], Response::HTTP_OK);
		}
		if(empty($instagram) && !empty($facebook) && !empty($vk))
		{
			Result::create([
				'name' => $request->name,
				'cover' => $this->dash($request->file('cover')->getClientOriginalName()),
				'feedback' => $request->feedback,
				'facebook' => $vk,
				'vk' => $facebook
			]);

			$result = DB::table('results')->latest()->limit(1)->first();

			$request->file('cover')->move('images/result/'.$result->id.'/cover/', $this->dash($request->file('cover')->getClientOriginalName()));
			$cover = Image::make(File::get(public_path('images/result/'.$result->id.'/cover/'.$result->cover)));
			$cover->fit(250,250);
			$cover->save(public_path('images/result/'.$result->id.'/cover/'.$result->cover));
			foreach ($request->file('photos') as $photo)
			{
				ResultsPhotos::create([
					'result_id' => $result->id,
					'photo' => $this->dash($photo->getClientOriginalName())
				]);

				$photo->move('images/result/'.$result->id.'/', $this->dash($photo->getClientOriginalName()));
			}

			return response()->json(['success' => 'Отзыв успешно добавлен'], Response::HTTP_OK);
		}
		if(!empty($instagram) && empty($facebook) && !empty($vk))
		{
			Result::create([
				'name' => $request->name,
				'cover' => $this->dash($request->file('cover')->getClientOriginalName()),
				'feedback' => $request->feedback,
				'instagram' => $instagram,
				'vk' => $vk,
			]);

			$result = DB::table('results')->latest()->limit(1)->first();

			$request->file('cover')->move('images/result/'.$result->id.'/cover/', $this->dash($request->file('cover')->getClientOriginalName()));
			$cover = Image::make(File::get(public_path('images/result/'.$result->id.'/cover/'.$result->cover)));
			$cover->fit(250,250);
			$cover->save(public_path('images/result/'.$result->id.'/cover/'.$result->cover));
			foreach ($request->file('photos') as $photo)
			{
				ResultsPhotos::create([
					'result_id' => $result->id,
					'photo' => $this->dash($photo->getClientOriginalName())
				]);

				$photo->move('images/result/'.$result->id.'/', $this->dash($photo->getClientOriginalName()));
			}

			return response()->json(['success' => 'Отзыв успешно добавлен'], Response::HTTP_OK);
		}
		if(empty($instagram) && empty($facebook) && empty($vk))
		{
			Result::create([
				'name' => $request->name,
				'cover' => $this->dash($request->file('cover')->getClientOriginalName()),
				'feedback' => $request->feedback
			]);

			$result = DB::table('results')->latest()->limit(1)->first();

			$request->file('cover')->move('images/result/'.$result->id.'/cover/', $this->dash($request->file('cover')->getClientOriginalName()));
			$cover = Image::make(File::get(public_path('images/result/'.$result->id.'/cover/'.$result->cover)));
			$cover->fit(250,250);
			$cover->save(public_path('images/result/'.$result->id.'/cover/'.$result->cover));
			foreach ($request->file('photos') as $photo)
			{
				ResultsPhotos::create([
					'result_id' => $result->id,
					'photo' => $this->dash($photo->getClientOriginalName())
				]);

				$photo->move('images/result/'.$result->id.'/', $this->dash($photo->getClientOriginalName()));
			}

			return response()->json(['success' => 'Отзыв успешно добавлен'], Response::HTTP_OK);
		}
		if(!empty($instagram) && !empty($facebook) && !empty($vk))
		{
			Result::create([
				'name' => $request->name,
				'cover' => $this->dash($request->file('cover')->getClientOriginalName()),
				'feedback' => $request->feedback,
				'instagram' => $instagram,
				'facebook' => $facebook,
				'vk' => $vk,
			]);

			$result = DB::table('results')->latest()->limit(1)->first();

			$request->file('cover')->move('images/result/'.$result->id.'/cover/', $this->dash($request->file('cover')->getClientOriginalName()));
			$cover = Image::make(File::get(public_path('images/result/'.$result->id.'/cover/'.$result->cover)));
			$cover->fit(250,250);
			$cover->save(public_path('images/result/'.$result->id.'/cover/'.$result->cover));
			foreach ($request->file('photos') as $photo)
			{
				ResultsPhotos::create([
					'result_id' => $result->id,
					'photo' => $this->dash($photo->getClientOriginalName())
				]);

				$photo->move('images/result/'.$result->id.'/', $this->dash($photo->getClientOriginalName()));
			}

			return response()->json(['success' => 'Отзыв успешно добавлен'], Response::HTTP_OK);
		}

	}

	public function addPhotos(Request $request)
	{
		foreach ($request->file('photos') as $photo)
		{
			Gallery::create([
				'photo' => $this->dash($photo->getClientOriginalName())
			]);

			$photo->move('images/gallery/', $this->dash($photo->getClientOriginalName()));
		}

		return response()->json(['success' => 'Фотографии успешно добавлены'], Response::HTTP_OK);
	}


}
