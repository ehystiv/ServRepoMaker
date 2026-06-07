<?php

it('can make service file', function () {
    $this->artisan('make:service', ['name' => 'TestService'])->assertSuccessful();

    expect(app_path('Http/Services/TestService.php'))->toBeFile();
});

it('can make repository file', function () {
    $this->artisan('make:repository', ['name' => 'TestRepository'])->assertSuccessful();

    expect(app_path('Http/Repositories/TestRepository.php'))->toBeFile();
});
