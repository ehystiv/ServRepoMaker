<?php

it('can make service file', function () {
    $this->artisan('make:service', ['name' => 'TestService'])->assertSuccessful();

    // expect(
    //     File::exists(
    //         path: app_path("Http/Repositories/TestService.php"),
    //     ),
    // )->toBeTrue();
});

it('can make repository file', function () {
    $this->artisan('make:service', ['name' => 'TestRepository'])->assertSuccessful();

    // expect(
    //     "app/Http/Repositories/TestRepository.php"
    // )->toBeFile();
});
