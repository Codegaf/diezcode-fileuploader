<?php

namespace codegaf\fileuploader;

use Illuminate\Support\ServiceProvider;

class FileUploaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/FileUploader/FileUploader.php';
        $this->publishes([
            __DIR__.'/app/FileUploader/FileUploader.php' => base_path('vendor/codegaf/fileuploader/src/FileUploader/FileUploader.php')
        ]);
    }
}
