<?php 

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UploadFile
{
    public function store(UploadedFile $file, string $path): string
    {
        return $file->store($path);
    }

    public function sorteAs(UploadedFile $file, string $path, string $customName): string
    {
        return $file->storeAs($path, $customName);
    }

    public function removeFile(string $filePath) : bool
    {
        if (Storage::exist($filePath)) {
            return Storage::delete($filePath);
        }

        return false;
    }
}