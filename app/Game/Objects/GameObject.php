<?php
namespace Game\Objects;

class GameObject
{
    protected $model;

    public function __get(string $name)
    {
        return $this->model->$name;
    }

    public function __set(string $name, $value): void
    {
        $this->model->$name = $value;
        $this->model->save();
    }

    public function __toString()
    {
        return json_encode($this->model);
    }
}