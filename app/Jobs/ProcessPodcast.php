<?php

namespace App\Jobs;

use App\Mail\contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ProcessPodcast implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
public $name;
public $email;
public $message;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email,$message,$name)
    {
        $this->email=$email;
        $this->message=$message;
        $this->name=$name;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to('mohamed2562289mbn@gmail.com')->send(new contact($this->email,$this->message,$this->name));

    }
}
