<?php

namespace Inventory\Transit\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transit
 *
 * @ORM\Table(name="inventory_transit", indexes={@ORM\Index(name="vehicle_id_index", columns={"vehicle_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Transit extends \Kazist\Table\BaseTable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="vehicle_id", type="integer", length=11, nullable=false)
     */
    protected $vehicle_id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="transit_date", type="date", nullable=false)
     */
    protected $transit_date;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255, nullable=true)
     */
    protected $notes;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", length=11, nullable=true)
     */
    protected $created_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    protected $date_created;

    /**
     * @var integer
     *
     * @ORM\Column(name="modified_by", type="integer", length=11, nullable=true)
     */
    protected $modified_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    protected $date_modified;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set vehicleId
     *
     * @param integer $vehicleId
     *
     * @return Transit
     */
    public function setVehicleId($vehicleId)
    {
        $this->vehicle_id = $vehicleId;

        return $this;
    }

    /**
     * Get vehicleId
     *
     * @return integer
     */
    public function getVehicleId()
    {
        return $this->vehicle_id;
    }

    /**
     * Set transitDate
     *
     * @param \DateTime $transitDate
     *
     * @return Transit
     */
    public function setTransitDate($transitDate)
    {
        $this->transit_date = $transitDate;

        return $this;
    }

    /**
     * Get transitDate
     *
     * @return \DateTime
     */
    public function getTransitDate()
    {
        return $this->transit_date;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return Transit
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Get createdBy
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Get modifiedBy
     *
     * @return integer
     */
    public function getModifiedBy()
    {
        return $this->modified_by;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->date_modified;
    }
    /**
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        // Add your code here
    }
}

