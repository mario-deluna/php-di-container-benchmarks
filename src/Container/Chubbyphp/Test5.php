<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Chubbyphp;

use DiContainerBenchmarks\Fixture\Class10;

final class Test5 extends AbstractChubbyphpTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->get(Class10::class);
    }
}
