<?php

namespace Entity;

use TinyORM\ActiveRecord;

/**
 * Class User
 * @package Entity
 * @property $name
 * @property $id
 *
 */
class User extends ActiveRecord
{
    static $tableName = 'users';

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

}