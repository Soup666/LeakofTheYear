<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $username;

    #[ORM\Column(type: 'json')]
    private $roles = [];

    #[ORM\Column(type: 'string')]
    private $password;

    #[ORM\Column(type: 'string', length: 255)]
    private $email;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $firstName;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $lastName;

    #[ORM\Column(type: 'boolean')]
    private $archived = false;

    #[ORM\Column(type: 'boolean')]
    private $suspended = false;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getUsername(): ?string
    {
        return $this->username;
    }
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }
    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }
    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }
    public function hasRole(string $role): bool
    {
        $roles = $this->getRoles();

        return in_array($role, $roles);
    }
    public static function getRolesAvailable(): array
    {
        return [
            "ROLE_USER" => "User",
            "ROLE_ADMIN" => "Admin"
        ];
    }

    public function isAdmin(): bool {
        return $this->hasRole('ROLE_ADMIN');
    }

    public function getNamedRoles(): array
    {
        $roles = $this->getRoles();

        $names = User::getRolesAvailable();

        foreach ($roles as &$r){
            if(isset($names[$r]))
                $r = $names[$r];
        }

        return $roles;

    }
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }
    public function getRoleOptions(): array
    {
        $roles = $this->getRoles();

        $roleOptions = [];

        foreach (User::getRolesAvailable() as $key => $val){
            if(in_array($key, $roles))
                $roleOptions[] = $key;
        }

        return $roleOptions;
    }
    public function setRoleOptions(array $roles): self
    {
        $this->roles = array_values($roles);

        return $this;
    }
    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(?string $password): self
    {

        if(empty($password)) return $this;

        $this->password = $password;

        return $this;
    }
    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }
    public function getFullName(): ?string
    {
        return trim($this->firstName . ' ' . $this->lastName);
    }
    public function getInitials(): ?string {
        return strtoupper(substr($this->firstName, 0, 1) . substr($this->lastName, 0, 1));
    }
    /**
     * @return bool
     */
    public function isArchived(): bool
    {
        return $this->archived;
    }
    public function setArchived(bool $archived): self
    {
        $this->archived = $archived;

        return $this;
    }
    public function isSuspended(): bool
    {
        return $this->suspended;
    }
    public function setSuspended(bool $suspended): self
    {
        $this->suspended = $suspended;

        return $this;
    }
}
