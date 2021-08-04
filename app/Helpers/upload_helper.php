<?php
if (!function_exists('upload_files')) {
    function upload_files($file)
    {
        $upload_path      = WRITEPATH.'uploads';
        $file_name        = 'files_' . round(microtime(true) * 1000);

        if ($file->isValid() && ! $file->hasMoved()) {
            $file->move($upload_path, $file_name);
            
            $name_file = $file->getName();
            $res = array(
                'respons' => true,
                'data'    => $name_file
            );
        } else {
            $res = array(
                'respons' => false,
                'data'    => $file->getErrorString()
            );
        }

        return $res;
    }
}

if (!function_exists('upload_photo')) {
    function upload_photo($file, $width = 100, $height = 250, $thumb = TRUE)
    {
        $imgLib = \Config\Services::image();

        $upload = upload_files($file);
        if ($upload['respons']) {
            $file_name = $upload['data'];
            if ($thumb) {
                $new_name = $file_name.'_thumb';
            } else {
                $new_name = $file_name;
            }
            $imgLib ->withFile(WRITEPATH.'uploads/'.$file_name)
                    ->resize($width, $height, true, 'width')
                    ->save(WRITEPATH.'uploads/'.$new_name);

            $res = array(
                'respons' => true,
                'data'    => $file_name
            );
        } else {
            $res = array(
                'respons' => false,
                'data'    => $upload['data']
            );
        }
        return $res;
    }
}

if (!function_exists('upload_crop_photo')) {
    function upload_crop_photo($file, $width = 0, $height = 0, $position = 'center', $thumb = TRUE)
    {

        $imgLib = \Config\Services::image();

        $upload = upload_files($file);
        if ($upload['respons']) {
            $file_name = $upload['data'];
            if ($thumb) {
                $new_name = $file_name.'_thumb';
            } else {
                $new_name = $file_name;
            }
            $imgLib ->withFile(WRITEPATH.'uploads/'.$file_name)
                    ->fit($width, $height, $position)
                    ->save(WRITEPATH.'uploads/'.$new_name);

            $res = array(
                'respons' => true,
                'data'    => $file_name
            );
        } else {
            $res = array(
                'respons' => false,
                'data'    => $upload['data']
            );
        }
        return $res;
    }
}

function get_extension($filename)
{
    $ext = explode('.', strtolower($filename));
    $ext = '.' . end($ext);
    return $ext;
}
