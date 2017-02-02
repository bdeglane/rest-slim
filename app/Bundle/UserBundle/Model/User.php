<?php


namespace App\Bundle\UserBundle\Model;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class User
 * @package App\Bundle\UserBundle\Model
 *
 * @ORM\Table(name="app_user")
 * @ORM\Entity(repositoryClass="UserRepo")
 */
class User
{
    /**
     * @var integer
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    private $id;
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @var string
     * @ORM\Column(type="string",unique)
     */
    private $login;
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $password;

    public function __construct($params = [])
    {
        $this->hydrate($params);
    }

    /**
     * @param array $params
     */
    public function hydrate(array $params)
    {
        foreach ($params as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }

    /**
     * @return string
     */
    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
}