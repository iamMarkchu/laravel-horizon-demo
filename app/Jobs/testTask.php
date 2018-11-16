<?php

namespace App\Jobs;

use App\User;
use EasyWeChat\Factory;
use EasyWeChat\Kernel\Exceptions\InvalidArgumentException;
use EasyWeChat\Kernel\Exceptions\RuntimeException;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class testTask implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * @var int
     */
    private $waitSeconds;

    /**
     * Create a new job instance.
     *
     * @param int $waitSeconds
     */
    public function __construct(int $waitSeconds)
    {
        //
        $this->waitSeconds = $waitSeconds;
    }

    public function tags()
    {
        return ['render', 'test'];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        sleep($this->waitSeconds);
    }
}
