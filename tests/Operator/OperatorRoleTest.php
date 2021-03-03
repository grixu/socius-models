<?php

namespace Grixu\SociusModels\Tests\Operator;

use Grixu\SociusModels\Operator\Factories\OperatorRoleFactory;
use Grixu\SociusModels\Operator\Models\OperatorRole;
use Grixu\SociusModels\Tests\Helpers\ModelTestCase;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OperatorRoleTest extends ModelTestCase
{
    protected string $model = OperatorRole::class;
    protected string $factory = OperatorRoleFactory::class;
    protected string $table = 'operator_roles';

    /** @test */
    public function operators_relationship(): void
    {
        $this->migrateOperator();
        $modelInstance = $this->model::factory()->create();

        $this->assertEquals(HasMany::class, get_class($modelInstance->operators()));
    }
}
