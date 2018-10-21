<?php



interface IGetName{
    public function getName();
}

class User implements IGetName
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}


class Patient extends User {
    protected $securityNumber;

    public function __construct($name, $securityNumber)
    {
        parent::__construct($name);
        $this->securityNumber = $securityNumber;
    }

    public function getSecurityNumber()
    {
        return $this->securityNumber;
    }

}


function getUserName(IGetName $obj)
{
    return $obj->getName();
}