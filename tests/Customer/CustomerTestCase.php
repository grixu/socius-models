<?php

namespace Grixu\SociusModels\Tests\Customer;

use Grixu\SociusModels\Customer\Factories\CustomerFactory;
use Grixu\SociusModels\Customer\Models\Customer;
use Grixu\SociusModels\Tests\Helpers\ModelTestCase;
use Illuminate\Database\Eloquent\Model;

class CustomerTestCase extends ModelTestCase
{
    protected string $model = Customer::class;
    protected string $factory = CustomerFactory::class;
    protected string $table = 'customers';
    protected Model $modelInstance;
}
