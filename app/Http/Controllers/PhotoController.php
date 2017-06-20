<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\State;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

class PhotoController extends Controller
{
    /**
     * Upload View.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function upload()
    {
        $states = State::get();

        return view('upload', compact('states'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image',
            'state' => 'required',
            'description' => 'string|max:500'
        ]);

        $image = $request->file('image');

        if (!is_null($image)) {
            $imageName = time().'.'.$image->getClientOriginalExtension();
//            Image::make($image)->resize(800, 500)->save(public_path('/img/ups/'.$imageName));
            Image::make($image)->resize(800, 500, function ($constrait) {
                $constrait->aspectRatio();
//            })->filter(new DemoFilter())->save(public_path('/img/ups/'.$imageName));
            })->save(public_path('/img/ups/'.$imageName));

            Photo::create([
                'name' => $imageName,
                'description' => $request->input('description'),
                'user_id' => auth()->user()->id,
                'state_id' => $request->input('state')
            ]);

            return Redirect::route('home');
        }
    }

    public function proof()
    {
        State::insert([
            [   'name' => 'Viajes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'name' => 'Compras',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'name' => 'Trabajo',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'name' => 'Casa',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'name' => 'Calle',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'name' => 'Familia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'name' => 'Amigos',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'name' => 'Estudios',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);

        return 'OK';
    }
}
