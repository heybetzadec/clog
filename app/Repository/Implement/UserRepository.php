<?php


namespace App\Repository\Implement;


use App\User;
use App\Repository\UserRepositoryInterface;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    public function getList($offset, $limit)
    {
        return $this->model->toJson();
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    public function store(User $user)
    {
        // TODO: Implement store() method.
    }

    public function update(User $user)
    {
        // TODO: Implement update() method.
    }

    public function delete(User $user)
    {
        // TODO: Implement delete() method.
    }

    public function deleteById($id)
    {
        // TODO: Implement deleteById() method.
    }
}
