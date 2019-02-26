<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

//use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class MakeBrush implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 1;

    protected $direct;
    protected $idf;
    protected $path1;
    protected $path2;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($direct, $idf, $path1, $path2)
    {
//      Если не работает подправить конфиг в Бутстрап кэше на датабэйс

        $this->direct = $direct;
        $this->idf = $idf;
        $this->path1 = $path1;
        $this->path2 = $path2;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Image::make(public_path($this->path1))->save(public_path($this->path2) . 'fullBrush.png');

        Image::make(public_path($this->path1))->fit(255, 255)->save(public_path($this->path2) . 'square.png');

        $img = Image::make(public_path($this->path1));
        if ($this->direct == 'Horizontal') {
            $img->fit(1300, 600);//1300, 600);
            $img->mask(public_path("storage/brushes/$this->direct/00$this->idf.png"));
            $img->save(public_path($this->path2) . 'finBrushH.png');
        } else {
            $img->fit(540, 740);//(540, 740);
            $img->mask(public_path("storage/brushes/$this->direct/00$this->idf.png"));
            $img->save(public_path($this->path2) . 'finBrushV.png');
        }
    }
}
