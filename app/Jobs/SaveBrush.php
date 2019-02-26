<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SaveBrush implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 1;

    protected $post_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($post_id)
    {
        $this->post_id = $post_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if (file_exists(public_path('/storage/brushes/0/finBrushH.png'))) {
            Image::make(public_path('/storage/brushes/0/finBrushH.png'))->save(public_path("storage/brushes/$this->post_id/finBrushH.png"));
            unlink(public_path('/storage/brushes/0/finBrushH.png'));
//            $file = Storage::disk('local')->get('public/brushes/0/finBrushH.png');
//            Storage::disk('local')->put('public/brushes/' . $this->post_id . '/brush.jpg', $file);
        }

        if (file_exists(public_path('/storage/brushes/0/finBrushV.png'))) {
            Image::make(public_path('/storage/brushes/0/finBrushV.png'))->save(public_path("storage/brushes/$this->post_id/finBrushV.png"));
            unlink(public_path('/storage/brushes/0/finBrushV.png'));
//            $file = Storage::disk('local')->get('public/brushes/0/finBrushH.png');
//            Storage::disk('local')->put('public/brushes/' . $this->post_id . '/brush.jpg', $file);
        }
    }
}
