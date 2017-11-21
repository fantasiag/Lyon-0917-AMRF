<?php

namespace AMRF\PublicRooterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favorite
 *
 * @ORM\Table(name="favorite")
 * @ORM\Entity(repositoryClass="AMRF\PublicRooterBundle\Repository\FavoriteRepository")
 */
class Favorite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="favorites")
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity="Project")
     */
    private $project;

    /**
     * @ORM\OneToOne(targetEntity="Company")
     */
    private $company;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }




    /**
     * Set user
     *
     * @param \AMRF\PublicRooterBundle\Entity\User $user
     *
     * @return Favorite
     */
    public function setUser(\AMRF\PublicRooterBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AMRF\PublicRooterBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->project = new \Doctrine\Common\Collections\ArrayCollection();
        $this->company = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add project
     *
     * @param \AMRF\PublicRooterBundle\Entity\Project $project
     *
     * @return Favorite
     */
    public function addProject(\AMRF\PublicRooterBundle\Entity\Project $project)
    {
        $this->project[] = $project;

        return $this;
    }

    /**
     * Remove project
     *
     * @param \AMRF\PublicRooterBundle\Entity\Project $project
     */
    public function removeProject(\AMRF\PublicRooterBundle\Entity\Project $project)
    {
        $this->project->removeElement($project);
    }

    /**
     * Get project
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Add company
     *
     * @param \AMRF\PublicRooterBundle\Entity\Company $company
     *
     * @return Favorite
     */
    public function addCompany(\AMRF\PublicRooterBundle\Entity\Company $company)
    {
        $this->company[] = $company;

        return $this;
    }

    /**
     * Remove company
     *
     * @param \AMRF\PublicRooterBundle\Entity\Company $company
     */
    public function removeCompany(\AMRF\PublicRooterBundle\Entity\Company $company)
    {
        $this->company->removeElement($company);
    }

    /**
     * Get company
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set project
     *
     * @param \AMRF\PublicRooterBundle\Entity\Project $project
     *
     * @return Favorite
     */
    public function setProject(\AMRF\PublicRooterBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Set company
     *
     * @param \AMRF\PublicRooterBundle\Entity\Company $company
     *
     * @return Favorite
     */
    public function setCompany(\AMRF\PublicRooterBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }
}
