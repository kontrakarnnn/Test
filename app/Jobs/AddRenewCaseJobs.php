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
use App\CaseAuth;
use App\Http\Controllers\CaseCenterController;
use App\Http\Controllers\InsuranceController;

class AddRenewCaseJobs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $caseid;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($caseid)
    {
        //
         $this->caseid = $caseid;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //dd($this->caseid);
        //		
		date_default_timezone_set('Asia/Bangkok');

        $day = date("d");
        $month = date("m");
        $year = date("Y");
        $date = $day.'/'.$month.'/'.$year;
        $fromcase = Cases::find($this->caseid);
        if($fromcase->renew_case_id == NULL)
        {
          $renewcase = new InsuranceController();
          $renewcase = $renewcase->storerenewcase($fromcase);
        }
      else
      {

      }
    }
}
