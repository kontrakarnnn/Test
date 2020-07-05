<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\SendEmailTest;
use Mail;
use App\Cases;
class QueueJobs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $emails;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($emails)
    {
        //
         $this->emails = $emails;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
		$email = new SendEmailTest();
		Mail::to($this->emails)->send($email);
		return $this->emails;
    }
}
