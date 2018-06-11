<?php

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct() {

}

public function build()
{
    return $this->from('example@example.com')
        ->subject('Test Mail')
        ->view('email.testmail');

}}