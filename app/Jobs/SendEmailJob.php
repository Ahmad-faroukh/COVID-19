<?php

namespace App\Jobs;

use App\Mail\SubscriberMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $address , $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($address,$data)
    {
        $this->address = $address;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->address)->send(new SubscriberMail($this->data));
    }
}
