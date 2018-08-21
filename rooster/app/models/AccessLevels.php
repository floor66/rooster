<?php

class AccessLevels extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $access_level_id;

    /**
     *
     * @var string
     */
    protected $access_level;

    /**
     *
     * @var integer
     */
    protected $access_order;

    /**
     * Method to set the value of field access_level_id
     *
     * @param integer $access_level_id
     * @return $this
     */
    public function setAccessLevelId($access_level_id)
    {
        $this->access_level_id = $access_level_id;

        return $this;
    }

    /**
     * Method to set the value of field access_level
     *
     * @param string $access_level
     * @return $this
     */
    public function setAccessLevel($access_level)
    {
        $this->access_level = $access_level;

        return $this;
    }

    /**
     * Method to set the value of field access_order
     *
     * @param integer $access_order
     * @return $this
     */
    public function setAccessOrder($access_order)
    {
        $this->access_order = $access_order;

        return $this;
    }

    /**
     * Returns the value of field access_level_id
     *
     * @return integer
     */
    public function getAccessLevelId()
    {
        return $this->access_level_id;
    }

    /**
     * Returns the value of field access_level
     *
     * @return string
     */
    public function getAccessLevel()
    {
        return $this->access_level;
    }

    /**
     * Returns the value of field access_order
     *
     * @return integer
     */
    public function getAccessOrder()
    {
        return $this->access_order;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rooster");
        $this->setSource("access_levels");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'access_levels';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AccessLevels[]|AccessLevels|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AccessLevels|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
