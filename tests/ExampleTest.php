<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = factory(\App\User::class)->create([
          'name'    => 'David Santiago',
          'email'   => 'david@davidsantiago.net',
        ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see('David')
            ->see('david@davidsantiago.net');
    }
}
