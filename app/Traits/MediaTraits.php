<?php

namespace App\Traits;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;


trait MediaTraits
{

    private function trimSlash($str)
    {
        return trim($str, '/') . '/';
    }

    public function saveMedia($file, $opt = [])
    {

        $res = (object) [
            'status' => false,
            'message' => '',
        ];

        $options = (object) [
            'dir' => $opt['dir'] ?? '',
            'type' => $opt['type'] ?? 'webp',
            'quality' => $opt['quality'] ?? 80,

        ];

        // dd($opt);
        // dd($options);
        try {
            DB::beginTransaction();
            $img = Image::make($file);

            $base_path = 'uploads/path/' . date('Y-m') . '/' . $this->trimSlash($options->dir);
            // $base_real_path = 'uploads/real-path/' . date('Y-m') . '/' . $this->trimSlash($options->dir);

            if (!is_dir($base_path)) {
                File::makeDirectory($base_path, 493, true);
            }
            // if (!is_dir($base_real_path)) {
            //     File::makeDirectory($base_real_path, 493, true);
            // }

            $file_name = hexdec(uniqid()) . '.' . $options->type;

            // save original file
            // $img->save(public_path($base_real_path . $file_name));

            // save optimized image
            $img->encode($options->type, $options->quality);
            $img->save(public_path($base_path . $file_name));

            $res->path = $base_path . $file_name;
            // $res->real_path = $base_real_path . $file_name;

            $media = Media::create([
                'path' => $res->path,
                // 'real_path' => $res->real_path,
                'user_id' => auth()->id(),
            ]);

            // dd($opt['delete'], $opt['delete']);

            if (isset($opt['delete']) && $opt['delete']) {
                $this->deleteMedia($opt['delete']);
            }

            $res->id = $media->id;
            $res->status = true;
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            $res->message = $th->getMessage();
        }

        // dd($res);
        return $res;
    }

    // public function uploadFile($file, $opt = [])
    // {
    //     $res = $this->std();
    //     $res->status = false;
    //     $res->message = '';
    //     $options = new stdClass;

    //     $options->dir = isset($opt['dir']) ? $opt['dir'] : '';

    //     try {

    //         $base_path = 'uploads/' . date('Y-m') . '/' . $this->trimSlash($options->dir);

    //         if (!is_dir($base_path)) {
    //             File::makeDirectory($base_path, 493, true);
    //         }

    //         $file_name = time() . rand(100, 999) . '.' . $file->getClientOriginalExtension();

    //         $file->move($base_path, $file_name);

    //         $res->path = $base_path . $file_name;
    //         $res->real_path = $base_path . $file_name;

    //         $media = Media::create([
    //             'path' => $res->path,
    //             'real_path' => $res->real_path,
    //             'user_id' => auth()->id(),
    //         ]);

    //         if (isset($opt['delete']) && $opt['delete']) {
    //             $this->deleteMedia($opt['delete']);
    //         }

    //         $res->id = $media->id;
    //         $res->status = true;
    //     } catch (\Throwable $th) {
    //         $res->message = $th->getMessage();
    //     }

    //     return $res;
    // }

    public function deleteMedia($id)
    {
        $res = (object) [
            'status' => false,
            'message' => '',
        ];

        try {

            $media = Media::findOrFail($id);

            // dd($media);
            if ($media) {
                // dd($media->real_path);

                if (file_exists($media->path)) {

                    unlink($media->path);
                }
                if (file_exists($media->real_path)) {

                    unlink($media->real_path);
                }

                $media->delete();
                $res->status = true;
            }
            // dd('Okay');

        } catch (\Throwable $th) {
            $res->message = $th->getMessage();
        }

        return $res;
    }

    // public function uploadImage(Request $request, $input, $dir, $type = 'webp')
    // {
    //     if ($request->hasFile($input)) {
    //         $file = $request->file($input);
    //         $img = Image::make($file);
    //         $img->encode($type, 80);

    //         $path = 'uploads/' . $dir . '/' . time() . '.' . $type;
    //         $img->save(public_path($path));

    //         return $path;
    //     }

    //     return false;
    // }
}
