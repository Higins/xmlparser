<?php
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Product {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    /**
     * @ORM\Column(type="integer")
     */
    protected $pid;
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function getPid()
    {
        return $this->pid;
    }

    public function setPid($pid) {
        $this->pid = $pid;
    }

}