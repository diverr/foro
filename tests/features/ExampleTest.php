<?php

class ExampleTest extends FeatureTestCase
{

    function test_basic_example()
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
