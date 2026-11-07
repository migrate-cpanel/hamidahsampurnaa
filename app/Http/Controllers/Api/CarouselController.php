<?php

namespace App\Http\Controllers\Api;

use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CarouselResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CarouselController extends Controller
{
     public function index()
    {
        $carousels = Carousel::latest()->paginate(5);
        return new CarouselResource(true, 'List Data Posts', $carousels);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'media'        => 'required|file|mimetypes:image/jpeg,image/png,image/gif,video/mp4,video/quicktime|max:89000000',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $media = $request->file('media');
        $media->storeAs('public/carousels', $media->hashName());

        $carousels = Carousel::create([
            'media'        => $media->hashName(),
        ]);

        return new CarouselResource(true, 'Data Post Berhasil Ditambahkan!', $carousels);
    }

    public function show($id)
    {
        $carousels = Carousel::find($id);

        if (!$carousels) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return new EventSekolahResource(true, 'Detail Data Post!', $carousels);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'media'     => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $carousels = Carousel::find($id);

        if (!$carousels) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        if ($request->hasFile('media')) {
            $media = $request->file('media');
            $media->storeAs('public/carousels', $media->hashName());

            Storage::delete('public/carousels/' . basename($carousels->media));

            $carousels->update([
                'media'        => $media->hashName(),
            ]);
        } else {
            $carousels->update([
                'media'     => $request->media,
            ]);
        }

        return new CarouselResource(true, 'Data Post Berhasil Diubah!', $carousels);
    }

    public function destroy($id)
    {
        $carousel = Carousel::find($id);

        if (!$carousel) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        Storage::delete('public/eventsekolahs/' . basename($carousel->media));
        $carousel->delete();

        return new CarouselResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
