<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="relproducts")
 */
class RelProduct
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(type="integer")
     */
    protected $pid;
    /**
     * @ORM\Column(type="integer")
     */
    protected $rid;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        return $this->id = $id;
    }

    public function getRid()
    {
        return $this->rid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setRid($rid)
    {
        $this->rid = $rid;
    }
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

}