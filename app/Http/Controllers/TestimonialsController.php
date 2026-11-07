<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        $data = DB::table('testimonials')->orderby('testimonials.id', 'desc')->get();

        return view('testimonials.index', ['data' => $data]);
    }

    public function create()
    {
        return view('testimonials.add');
    }

    public function add(Request $request)
    {        

        date_default_timezone_set('Asia/Jakarta');
        if ($request->hasFile('parent_photo_url')) {
            //foto1
            $image_name = $_FILES['parent_photo_url']['name'];
            $tmp_name = $_FILES['parent_photo_url']['tmp_name'];
            $directory_name = public_path('/img/uploads/');
            $file_name = $directory_name . $image_name;
            move_uploaded_file($tmp_name, $file_name);

            $compress_file = 'testimoni' . date('YmdHis') . $image_name;
            $compressed_img = $directory_name . $compress_file;
            $compress_image = $this->compress($file_name, $compressed_img);
            $foto1 = "$compress_file";

            DB::table('testimonials')->insert([
                'content' => $request->content,
                'parent_name' => $request->parent_name,
                'parent_photo_url' => $foto1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'idadmins' => session()->get('id_user'),
            ]);

            unlink($file_name);
        }

        return redirect('testimonials/index')->with('add_sukses', 1);
    }

    public function edit($id)
    {
        $row = DB::table('testimonials')->where('testimonials.id', $id)->first();

        return view('testimonials.edit', [
            'row' => $row,
        ]);
    }

    public function update(Request $request)
    {    

        date_default_timezone_set('Asia/Jakarta');
        if ($request->hasFile('parent_photo_url')) {
            //foto1
            $image_name = $_FILES['parent_photo_url']['name'];
            $tmp_name = $_FILES['parent_photo_url']['tmp_name'];
            $directory_name = public_path('/img/uploads/');
            $file_name = $directory_name . $image_name;
            move_uploaded_file($tmp_name, $file_name);

            $compress_file = 'testimoni' . date('YmdHis') . $image_name;
            $compressed_img = $directory_name . $compress_file;
            $compress_image = $this->compress($file_name, $compressed_img);
            $foto1 = "$compress_file";

            DB::table('testimonials')
            ->where('id', $request->id)
            ->update([
                'content' => $request->content,
                'parent_name' => $request->parent_name,
                'parent_photo_url' => $foto1,
                'updated_at' => date('Y-m-d H:i:s'),
                'idadmins' => session()->get('id_user'),
            ]);

            unlink($file_name);
        }
        else{
            DB::table('testimonials')
                ->where('id', $request->id)
                ->update([
                    'content' => $request->content,
                    'parent_name' => $request->parent_name,
                    'updated_at' => date('Y-m-d H:i:s'),
                    'idadmins' => session()->get('id_user'),
                ]);
        }
        return redirect('testimonials/index')->with('edit_sukses', 1);
    }

    public function delete($id)
    {
        DB::table('testimonials')->where('id', $id)->delete();
        return redirect()->back()->with('delete_sukses', 1);
    }

    function compress($source_image, $compress_image)
    {
        $image_info = getimagesize($source_image);
        if ($image_info['mime'] == 'image/jpeg') {
            $source_image = imagecreatefromjpeg($source_image);
            imagejpeg($source_image, $compress_image, 20); //for jpeg or gif, it should be 0-100
        } elseif ($image_info['mime'] == 'image/png') {
            //$source_image = imagecreatefrompng($source_image);
            $source_image = @imagecreatefrompng($source_image);
            imagepng($source_image, $compress_image, 3);
        }
        return $compress_image;
    }
}
