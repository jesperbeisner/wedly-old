<?php

declare(strict_types=1);

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use RuntimeException;

/**
 * @template T of Model
 */
abstract class AbstractRepository
{
    /**
     * @param class-string<T> $model
     */
    public function __construct(
        protected readonly string $model,
    ) {
    }

    /**
     * @return T
     */
    public function get(string|int $id)
    {
        $model = $this->model::findOrFail($id);

        if (!$model instanceof $this->model) {
            throw new RuntimeException(sprintf('Found model is not an instance of "%s"', $this->model));
        }

        return $model;
    }

    /**
     * @return ?T
     */
    public function find(string|int $id)
    {
        if (null === $model = $this->model::find($id)) {
            return null;
        }

        if (!$model instanceof $this->model) {
            throw new RuntimeException(sprintf('Found model is not an instance of "%s"', $this->model));
        }

        return $model;
    }

    /**
     * @return array<int, T>
     */
    public function findAll(): array
    {
        $models = [];

        foreach ($this->model::all() as $model) {
            if (!$model instanceof $this->model) {
                throw new RuntimeException(sprintf('Found model is not an instance of "%s"', $this->model));
            }

            $models[] = $model;
        }

        return $models;
    }

    public function save(Model $model): void
    {
        $model->save();
    }
}
