<?php


namespace App\Repository;

use App\User;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function all(): Collection;

    public function getList($offset, $limit);

    public function getById($id);

    public function store(User $user);

    public function update(User $user);

    public function delete(User  $user);

    public function deleteById($id);
}
