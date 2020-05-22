<?php

namespace App\Mail;

use App\Models\PopularTour;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationCreated extends Mailable
{
    use Queueable, SerializesModels;

    protected $popularTour;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(PopularTour $popularTour)
    {
        $this->popularTour = $popularTour;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail');
    }
}
