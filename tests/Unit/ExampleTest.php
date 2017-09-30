<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
	use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
    	$first = factory(\App\Post::class)->create();

    	$second = factory(\App\Post::class)->create([
    		'created_at' => \Carbon\Carbon::now()->subMonth()
    	]);
        
        $posts = Post::archives();

    	$this->assertEquals([
    		[
    			"year" => $first->created_at->format('Y'),
			    "month" => $first->created_at->format('F'),
			    "published" => 4
    		],
    		
    		[
    			"year" => $second->created_at->format('Y'),
			    "month" => $second->created_at->format('F'),
			    "published" => 4
    		]
    	], $posts);
    }
}