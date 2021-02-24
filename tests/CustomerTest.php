<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Customer\Factories\CustomerFactory;
use Grixu\SociusModels\Customer\Models\Customer;
use Grixu\SociusModels\Tests\Helpers\ModelTest;
use Illuminate\Database\Eloquent\Model;

class CustomerTest extends ModelTest
{
    protected string $model = Customer::class;
    protected string $factory = CustomerFactory::class;
    protected string $table = 'customers';
    protected Model $modelInstance;
}
