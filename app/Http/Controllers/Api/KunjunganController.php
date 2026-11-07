<?php

namespace App\Http\Controllers\Api;
use App\Models\Kunjungan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\KunjunganResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KunjunganController extends Controller
{
    public function index()
    {
        $kunjungans = Kunjungan::latest()->paginate(5);

        //return collection of posts as a resource
        return new KunjunganResource(true, 'List Data Posts', $kunjungans);
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'foto_kunjungan'     => 'required|file|mimetypes:image/jpeg,image/png,image/gif,video/mp4,video/quicktime|max:20480',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $foto_kunjungan = $request->file('foto_kunjungan');
        $foto_kunjungan->storeAs('public/kunjungans', $foto_kunjungan->hashName());

        //create post
        $kunjungan = Kunjungan::create([
            'foto_kunjungan'     => $foto_kunjungan->hashName(),
        ]);

        //return response
        return new KunjunganResource(true, 'Data Post Berhasil Ditambahkan!', $kunjungan);
    }

    /**
     * show
     *
     * @param  mixed $post
     * @return void
     */
    public function show($id)
    {
        //find post by ID
        $kunjungans = Kunjungan::find($id);

        //return single post as a resource
        return new KunjunganResource(true, 'Detail Data Post!', $kunjungans);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, $id)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'foto_kunjungan'     => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $kunjungans = Kunjungan::find($id);

        //check if image is not empty
        if ($request->hasFile('foto_kunjungan')) {

            //upload image
            $foto_kunjungan = $request->file('foto_kunjungan');
            $foto_kunjungan->storeAs('public/kunjungans', $foto_kunjungan->hashName());

            //delete old image
            Storage::delete('public/kunjungans/'.basename($kunjungan ->foto_kunjungan));

            //update post with new image
            $kunjungans->update([
                'foto_kunjungan'     => $foto_kunjungan->hashName(),
            ]);

        } else {

            //update post without image
            $programs->update([
                'foto_kunjungan'     => $request->nama_kunjungan,
            ]);
        }

        //return response
        return new KunjunganResource(true, 'Data Post Berhasil Diubah!', $kunjungans);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id)
    {

        //find post by ID
        $kunjungans = Kunjungan::find($id);

        //delete image
        Storage::delete('public/kunjungans/'.basename($kunjungans->foto_kunjungan));

        //delete post
        $kunjungans->delete();

        //return response
        return new KunjunganResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
