<?php

namespace Inventory\Transfers\Products\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="inventory_transfers_products", indexes={@ORM\Index(name="product_id_index", columns={"product_id"}), @ORM\Index(name="transfer_id_index", columns={"transfer_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Products extends \Kazist\Table\BaseTable
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
     * @ORM\Column(name="product_id", type="integer", length=11, nullable=false)
     */
    protected $product_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="transfer_id", type="integer", length=11, nullable=false)
     */
    protected $transfer_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", length=11, nullable=true)
     */
    protected $quantity;

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
     * Set productId
     *
     * @param integer $productId
     *
     * @return Products
     */
    public function setProductId($productId)
    {
        $this->product_id = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Set transferId
     *
     * @param integer $transferId
     *
     * @return Products
     */
    public function setTransferId($transferId)
    {
        $this->transfer_id = $transferId;

        return $this;
    }

    /**
     * Get transferId
     *
     * @return integer
     */
    public function getTransferId()
    {
        return $this->transfer_id;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Products
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
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

