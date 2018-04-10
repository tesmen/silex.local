<?php

namespace Entity;

use TinyORM\ActiveRecord;

/**
 * Class User
 * @package Entity
 * @property $name
 * @property $last_name
 * @property $id
 *
 * @method static static[] findByFields(array $fields)
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

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     * @return User
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

}