<?php

namespace App\Jobs;

use Illuminate\Http\Request;
use App\Models\RequestTrack;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldQueue;

class TrackRequest implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var Request
     */
    protected $url;

    /**
     * Create a new job instance.
     *
     * @param Request $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        RequestTrack::create([
            'url' => $this->url,
        ]);
    }
}
