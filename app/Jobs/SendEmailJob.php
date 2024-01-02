<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $maildata;
    /**
     * Create a new job instance.
     */
    public function __construct($maildata)
    {
        $this->maildata = $maildata;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        /* you can use it for user mail
         *  Mail::to(auth()->user()->email)->send(new SendMail($this->maildata));
         */
        Mail::to('mehedihasanhimel250@gmail.com')->send(new SendMail($this->maildata));
    }
}
