<?php namespace Core\Security;

use Lexik\Bundle\JWTAuthenticationBundle\Security\User\JWTUserInterface;

/**
 * Class JwtUser
 *
 * @category GSG
 * @package Core\Security
 * @copyright Copyright (с) 2018, ProtocolOne and/or affiliates. All rights reserved.
 * @author Vadim Sabirov <vadim.sabirov@protocol.one>
 * @version 1.0
 */
final class JwtUser implements JWTUserInterface
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var array
     */
    private $roles;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return JwtUser
     */
    public function setId(string $id): JwtUser
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     * @return JwtUser
     */
    public function setRoles(array $roles): JwtUser
    {
        $this->roles = $roles;
        return $this;
    }

    public function __construct($id, array $roles = [])
    {
        $this->id = $id;
        $this->roles = $roles;
    }

    public static function createFromPayload($id, array $payload): JwtUser
    {
        return new self(
            $id,
            $payload['roles']
        );
    }

    public function getPassword()
    {}

    public function getSalt()
    {}

    public function getUsername()
    {}

    public function eraseCredentials()
    {}


}