<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;

trait Uploader
{
    /**
     * Uploads an image to the disk
     *
     * @param  UploadedFile|array<mixed>|null  $file
     * @param  array<string, mixed>  $options
     * @return string|null
     */
    public function uploadImage($file, array $options = [])
    {
        $env = strtolower(config('app.env', 'production'));

        if (! $file instanceof UploadedFile) {
            Log::error('Cannot upload multiple files at once!');

            return null;
        }

        $folder = $options['folder'] ?? 'uploads';

        if ($env === 'production') {
            $disk = $options['disk'] ?? 'supabase';
        } else {
            $disk = $options['disk'] ?? 'public';
        }

        $name = $options['name'] ?? time() . '_' . $file->hashName();
        $path = $file->storeAs($folder, $name, $disk);

        if (! $path) {
            return null;
        }

        return $path;
    }
}
