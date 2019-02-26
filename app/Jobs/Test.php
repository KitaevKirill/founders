<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class Test implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $test;
//    protected $img;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($test)
    {
//      Если не работает подправить конфиг в Бутстрап кэше на датабэйс

        $this->test = $test;

//        $img->resize(1501, 603)->mask("storage/brushes/$direct/00$idf.png");
//        $img->save(public_path("storage/brushes/temp.png"));
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       info($this->test);
    }
}
