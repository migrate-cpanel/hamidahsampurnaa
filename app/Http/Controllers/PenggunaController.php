<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = DB::table('admins')
        ->join('tbl_role', 'tbl_role.id', '=', 'admins.id_role')
        ->select('admins.*', 'tbl_role.nama_role')
        ->orderby('admins.name', 'asc')
        ->get();

        return view('pengguna.index', ['data' => $data]);
    }

    public function create()
    {
        $role = DB::table('tbl_role')->get();

        return view('pengguna.add', ['role' => $role]);
    }

    public function add(Request $request)
    {
        if ($request->hasFile('admin_photo_url')) {
            //admin_photo_url
            $image_name = $_FILES['admin_photo_url']['name'];
            $tmp_name = $_FILES['admin_photo_url']['tmp_name'];
            $directory_name = public_path('/img/uploads/');
            $file_name = $directory_name . $image_name;
            move_uploaded_file($tmp_name, $file_name);

            $compress_file = 'admin' . date('YmdHis') . $image_name;
            $compressed_img = $directory_name . $compress_file;
            $compress_image = $this->compress($file_name, $compressed_img);
            $admin_photo_url = "$compress_file";

            DB::table('admins')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'id_role' => $request->id_role,
                'password' => Hash::make($request->password),
                'admin_photo_url' => $admin_photo_url,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),              
            ]);

            unlink($file_name);
        }
       

        return redirect('pengguna/index')->with('add_sukses', 1);
    }

    public function edit($id)
    {
        $row = DB::table('admins')->where('admins.id', $id)->first();
        $role = DB::table('tbl_role')->get();

        return view('pengguna.edit', [
            'row' => $row,
            'role' => $role,
        ]);
    }

    public function update(Request $request)
    {
        
            if ($request->hasFile('admin_photo_url')) {
                //admin_photo_url
                $image_name = $_FILES['admin_photo_url']['name'];
                $tmp_name = $_FILES['admin_photo_url']['tmp_name'];
                $directory_name = public_path('/img/uploads/');
                $file_name = $directory_name . $image_name;
                move_uploaded_file($tmp_name, $file_name);
    
                $compress_file = 'admin' . date('YmdHis') . $image_name;
                $compressed_img = $directory_name . $compress_file;
                $compress_image = $this->compress($file_name, $compressed_img);
                $admin_photo_url = "$compress_file";

                DB::table('admins')
                    ->where('id', $request->id)
                    ->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'id_role' => $request->id_role,
                        'password' => Hash::make($request->password),
                        'admin_photo_url' => $admin_photo_url,
                        'updated_at' => date('Y-m-d H:i:s'),           
                    ]); 
    
                unlink($file_name);
            }
            else{
                DB::table('admins')
                    ->where('id', $request->id)
                    ->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'id_role' => $request->id_role,
                        'password' => Hash::make($request->password),
                        'updated_at' => date('Y-m-d H:i:s'),           
                    ]); 
            }

        return redirect('pengguna/index')->with('edit_sukses', 1);
    }

    public function delete($id)
    {
        DB::table('admins')->where('id', $id)->delete();
        return redirect()->back()->with('delete_sukses', 1);
    }

    function compress($source_image, $compress_image)
    {
        $image_info = getimagesize($source_image);
        if ($image_info['mime'] == 'image/jpeg') {
            $source_image = imagecreatefromjpeg($source_image);
            imagejpeg($source_image, $compress_image, 20); //for jpeg or gif, it should be 0-100
        } elseif ($image_info['mime'] == 'image/png') {
            $source_image = imagecreatefrompng($source_image);
            imagepng($source_image, $compress_image, 3);
        }
        return $compress_image;
    }
}
