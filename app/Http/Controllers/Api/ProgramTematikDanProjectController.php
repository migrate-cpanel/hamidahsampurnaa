<?php

namespace App\Http\Controllers\Api;
use App\Models\ProgramTematikDanProject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProgramTematikDanProjectResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProgramTematikDanProjectController extends Controller
{
   public function index()
    {
        $programs = ProgramTematikDanProject::latest()->paginate(5);

        //return collection of posts as a resource
        return new ProgramTematikDanProjectResource(true, 'List Data Posts', $programs);
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
            'foto_program'     => 'required|file|mimetypes:image/jpeg,image/png,image/gif,video/mp4,video/quicktime|max:20480',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $foto_program = $request->file('foto_program');
        $foto_program->storeAs('public/programs', $foto_program->hashName());

        //create post
        $program = ProgramTematikDanProject::create([
            'foto_program'     => $foto_program->hashName(),
        ]);

        //return response
        return new ProgramTematikDanProjectResource(true, 'Data Post Berhasil Ditambahkan!', $program);
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
        $programs = ProgramTematikDanProject::find($id);

        //return single post as a resource
        return new ProgramTematikDanProjectResource(true, 'Detail Data Post!', $programs);
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
            'foto_program'     => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $programs = ProgramTematikDanProject::find($id);

        //check if image is not empty
        if ($request->hasFile('foto_program')) {

            //upload image
            $foto_program = $request->file('foto_program');
            $foto_program->storeAs('public/programs', $foto_program->hashName());

            //delete old image
            Storage::delete('public/programs/'.basename($programs->foto_program));

            //update post with new image
            $programs->update([
                'foto_program'     => $foto_program->hashName(),
            ]);

        } else {

            //update post without image
            $programs->update([
                'foto_program'     => $request->foto_program,
            ]);
        }

        //return response
        return new ProgramTematikDanProjectResource(true, 'Data Post Berhasil Diubah!', $programs);
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
        $programs = ProgramTematikDanProject::find($id);

        //delete image
        Storage::delete('public/programs/'.basename($programs->foto_program));

        //delete post
        $programs->delete();

        //return response
        return new ProgramTematikDanProjectResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
