<?php return [
	'pointScale' => 100,
	'categories' => [
		[
			'name' => 'PHP Sadness',
			'questions' => [
				[
					'question' => 'This function is merely shorthand for (!isset($v) || $v != true) and silenced warnings.',
					'answer'   => 'What is empty()?',
				],
				[
					'question' => 'PHP arbitrarily disallows throwing exceptions from this magic method, which is useful for casting objects.',
					'answer'   => 'What is __toString()?',
				],
				[
					'question' => 'Despite being a common convention to bundle static utility methods in other languages, these classes cannot be final in PHP.',
					'answer'   => 'What is abstract?',
				],
				[
					'question' => 'PHP\'s sort functions all operate in this manner, which make them unsuitable for concise chaining.',
					'answer'   => 'What is in-place?',
				],
				[
					'question' => 'This terribly ambiguously named function returns key/value pairs from a URL query string.',
					'answer'   => 'What is parse_str()?',
				],
			]
		],
		[
			'name' => 'Continuous Iteration',
			'questions' => [
				[
					'question' => 'This interface cannot be implemented directly, but only via Iterator or IteratorAggregate.',
					'answer'   => 'What is Traversable?',
				],
				[
					'question' => 'This class allows one or more iterators to be attached in a sequence for seamless traversal.',
					'answer'   => 'What is MultipleIterator?',
				],
				[
					'question' => 'This can be thought of as the NOP of SPL iterator classes.',
					'answer'   => 'What is EmptyIterator?',
				],
				[
					'question' => 'This class allows code to modify and unset values and keys while iterating over arrays and objects.',
					'answer'   => 'What is ArrayIterator?',
				],
				[
					'question' => 'This iterator iterates recursive iterators so you can iterate while you iterate.',
					'answer'   => 'What is RecursiveIteratorIterator?',
				],
			]
		],
		[
			'name' => 'Canada, eh?',
			'questions' => [
				[
					'question' => 'This language is the second most popular spoken language in Canada?',
					'answer'   => 'What is French?',
				],
				[
					'question' => 'This city with a metro population of 1.3 million is also the capital of Canada.',
					'answer'   => 'What is Ottowa?',
				],
				[
					'question' => 'This 91 year old British woman of German descent is Canada’s head of state',
					'answer'   => 'Who is Queen Elizabeth II?',
				],
				[
					'question' => 'This town on the Thames River also features a museum of Cheese and Agriculture',
					'answer'   => 'What is Ingersoll?',
				],
				[
					'question' => 'This Canadian law, passed in 2009, officially defines saying sorry as sympathy or regret, and not as an admission of guilt.',
					'answer'   => 'What is The Apology Act, 2009?',
				],
			]
		],
		[
			'name' => '',
			'questions' => [
				[
					'question' => '',
					'answer'   => '',
				],
				[
					'question' => '',
					'answer'   => '',
				],
				[
					'question' => '',
					'answer'   => '',
				],
				[
					'question' => '',
					'answer'   => '',
				],
				[
					'question' => '',
					'answer'   => '',
				],
			]
		],
		[
			'name' => 'Paying Attention',
			'questions' => [
				[
					'question' => 'Lorna Mitchell took us on a road trip through this country.',
					'answer'   => 'What is Database Country?',
				],
				[
					'question' => 'Matthew Weier O\'Phinney began his presentation on middleware by discussing this home improvement project.',
					'answer'   => 'What is deck repair?',
				],
				[
					'question' => 'Sara Golemon works for this company by day, while releasing PHP 7.2 (and sometimes 7.1) by night.',
					'answer'   => 'What is MongoDB?',
				],
				[
					'question' => 'Elizabeth Smith included references to this layer of the PHP runtime, then set about designing their replacement during a breakout session.',
					'answer'   => 'What are I/O Streams?',
				],
				[
					'question' => 'This presentation, by Moses Ngone, delved into IoT devices.',
					'answer'   => 'What is Developing Beyond the Web?',
				],
			]
		],
	]
];
