<?php

namespace App\Services\Role;

interface IRoleService
{
    public function all(array $columns = ['*']);
    public function getByName(string $name, array $columns = ['*']);
    public function create(array $data);
    public function update(array $data, string $name);
    public function delete(string $name);
}
