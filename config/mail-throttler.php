<?php 

return [
	/**
	 * For each mail driver you can set separate throttle values.
	 * You only need to set values for what you want to rate limit by.  If nothing is set, no rate limiting will happen.
	 */
	'ses'=>[
		// 'messages_per_minute'=>100,
		// 'messages_per_second'=>5,
		// 'bytes_per_minute'=>1024 * 1024 * 10,
	],
	'smtp'=>[
		// 'messages_per_minute'=>100,
		// 'messages_per_second'=>5,
		// 'bytes_per_minute'=>1024 * 1024 * 10,
	],
	'mail'=>[
		// 'messages_per_minute'=>100,
		// 'messages_per_second'=>5,
		// 'bytes_per_minute'=>1024 * 1024 * 10,
	],
	'sendmail'=>[
		// 'messages_per_minute'=>100,
		// 'messages_per_second'=>5,
		// 'bytes_per_minute'=>1024 * 1024 * 10,
	],
	'mailgun'=>[
		// 'messages_per_minute'=>100,
		// 'messages_per_second'=>5,
		// 'bytes_per_minute'=>1024 * 1024 * 10,
	],
	'mandrill'=>[
		// 'messages_per_minute'=>100,
		// 'messages_per_second'=>5,
		// 'bytes_per_minute'=>1024 * 1024 * 10,
	],
	'log'=>[
		// 'messages_per_minute'=>100,
		// 'messages_per_second'=>5,
		// 'bytes_per_minute'=>1024 * 1024 * 10,
	],
];
