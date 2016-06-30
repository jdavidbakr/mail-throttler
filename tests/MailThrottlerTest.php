<?php

class AddressVerificationTest extends TestCase
{
	public function testMessagesPerMinute()
	{
		$messages_per_minute = config('mail-throttler.'.config('mail.driver').'.messages_per_minute');
		if(!$messages_per_minute) {
			$this->markTestSkipped("To run this test you must set messages_per_minute for the driver you are using.  This test should take a full minute to execute and will send the number of messages you have set plus one.");
		}
		$start = time();
		for($i = 0; $i < $messages_per_minute + 1; ++$i) {
			\Mail::raw('Test Message', function ($message) {
			    $message->from('john@johndoe.com', 'John Doe');
			    $message->sender('john@johndoe.com', 'John Doe');
			
			    $message->to('john@johndoe.com', 'John Doe');
			
			    $message->cc('john@johndoe.com', 'John Doe');
			    $message->bcc('john@johndoe.com', 'John Doe');
			
			    $message->replyTo('john@johndoe.com', 'John Doe');
			
			    $message->subject('Subject');
			});
		}
		$end = time();
		$total_time = $end - $start;
		$this->assertGreaterThanOrEqual(60, $total_time);
	}
}