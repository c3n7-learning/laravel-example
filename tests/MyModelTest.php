<?php

use Tefabi\Example\Models\MyModel;

use function Pest\Laravel\assertModelExists;

it('can create a model', function () {
    $myModel = MyModel::factory()->create();

    assertModelExists($myModel);
});

it('can return uppercased name', function () {
    /** @var MyModel $myModel */
    $myModel = MyModel::factory()->create(['name' => 'John']);

    $name = $myModel->getUppercasedName();
    expect($name)->toEqual('JOHN');
});
