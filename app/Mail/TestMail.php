<?php
use Illuminate\Mail\Mailable;

class TestMail extends Mailable
{
    use Illuminate\Bus\Queueable;
    use Illuminate\Queue\SerializesModels;

    public function __construct() {

}

public function build()
{
    return $this->from('example@example.com')
        ->subject('Test Mail')
        ->view('email.testmail');

}}