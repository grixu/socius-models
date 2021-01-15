<?php

namespace Grixu\SociusModels\Tests;

use Grixu\SociusModels\Operator\Factories\BranchFactory;
use Grixu\SociusModels\Operator\Models\Branch;
use Grixu\SociusModels\Tests\Helpers\ModelTest;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BranchTest extends ModelTest
{
    protected string $model = Branch::class;
    protected string $factory = BranchFactory::class;
    protected string $table = 'branches';

    /** @test */
    public function operators_relationship(): void
    {
        $this->migrateOperator();
        $this->migrateCustomer();
        $modelInstance = $this->model::factory()->create();

        $this->assertEquals(BelongsToMany::class, get_class($modelInstance->operators()));
    }
}
