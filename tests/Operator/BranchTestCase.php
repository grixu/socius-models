<?php

namespace Grixu\SociusModels\Tests\Operator;

use Grixu\SociusModels\Operator\Factories\BranchFactory;
use Grixu\SociusModels\Operator\Models\Branch;
use Grixu\SociusModels\Tests\Helpers\ModelTestCase;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BranchTestCase extends ModelTestCase
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
