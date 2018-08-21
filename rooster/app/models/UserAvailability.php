<?php

class UserAvailability extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $user_availability_id;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var integer
     */
    protected $shift_id;

    /**
     *
     * @var integer
     */
    protected $available;

    /**
     *
     * @var integer
     */
    protected $selected;

    /**
     * Method to set the value of field user_availability_id
     *
     * @param integer $user_availability_id
     * @return $this
     */
    public function setUserAvailabilityId($user_availability_id)
    {
        $this->user_availability_id = $user_availability_id;

        return $this;
    }

    /**
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Method to set the value of field shift_id
     *
     * @param integer $shift_id
     * @return $this
     */
    public function setShiftId($shift_id)
    {
        $this->shift_id = $shift_id;

        return $this;
    }

    /**
     * Method to set the value of field available
     *
     * @param integer $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Method to set the value of field selected
     *
     * @param integer $selected
     * @return $this
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;

        return $this;
    }

    /**
     * Returns the value of field user_availability_id
     *
     * @return integer
     */
    public function getUserAvailabilityId()
    {
        return $this->user_availability_id;
    }

    /**
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field shift_id
     *
     * @return integer
     */
    public function getShiftId()
    {
        return $this->shift_id;
    }

    /**
     * Returns the value of field available
     *
     * @return integer
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Returns the value of field selected
     *
     * @return integer
     */
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rooster");
        $this->setSource("user_availability");
		
		$this->belongsTo(
			"user_id",
			"Users",
			"user_id"
		);
		
		$this->belongsTo(
			"shift_id",
			"Shifts",
			"shift_id"
		);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_availability';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserAvailability[]|UserAvailability|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserAvailability|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
