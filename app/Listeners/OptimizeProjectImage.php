<?php

namespace App\Listeners;

use App\Events\ProjectSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;

class OptimizeProjectImage implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProjectSaved $event)
    {
        $manager = new ImageManager(new Driver());

        $image = $manager->read(Storage::get($event->project->image));

        $image->reduceColors(255)
            ->encodeByExtension('jpg', 75);
           

        Storage::put($event->project->image, $image->toJpeg());
    }
}
