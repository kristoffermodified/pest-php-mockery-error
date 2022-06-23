<?php

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

uses(DatabaseTransactions::class);

it('works', function () {
    expect(1)->toBeOne();
});

it('breaks', function () {
    User::factory()->create();

    mock(User::class)
        ->expects('foo')
        ->once();
});

it('is delayed works', function () {
    User::factory()->create();

    expect(1)->toBeOne();
});
