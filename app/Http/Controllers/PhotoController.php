<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\State;
use App\Traits\ControllerTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

class PhotoController extends Controller
{
    use ControllerTrait;

    /**
     * Upload View.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function upload()
    {
        $states = ControllerTrait::getStates();

        return view('photo.upload', ['states' => $states]);
    }

    /**
     * Save Photos.
     *
     * @param Request $request
     * @return mixed
     */
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

    /**
     * User Album View.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function album()
    {
        $userPhotos = Photo::where('user_id', Auth::user()->id)->get();
        $states = ControllerTrait::getStates();

        return view('photo.album', ['userPhotos' => $userPhotos, 'states' => $states]);
    }

    /**
     * Single Photo View.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function single($id)
    {
        $photo = ControllerTrait::searchPhoto($id);
        $similarPhotos = Photo::where('state_id', $photo->state_id)
            ->where('id', '<>', $photo->id)
            ->get();

        return view('photo.single', ['photo' => $photo, 'similarPhotos' => $similarPhotos]);
    }

    /**
     * Edit Photo View.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $photo = ControllerTrait::searchPhoto($id);

        return view('photo.edit', ['photo' => $photo]);
    }

    public function update(Request $request, $id)
    {
        $photo = ControllerTrait::searchPhoto($id);

        $this->validate($request, [
            'image' => 'required|image',
            'state' => 'required',
            'description' => 'string|max:500'
        ]);



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
