<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\SendEmailTest;
use Mail;
use App\Jobs\QueueJobs;
class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SendMail:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This laravel cronjob is used to Send Email';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       			   $emails = 'kontrakarn2540@gmail.com';
		           dispatch(new QueueJobs($emails));
      /*$email = new SendEmailTest();
      Mail::to('kontrakarn2540@gmail.com')->send($email);*/
            return  "Send Success".$emails;
    }
}
