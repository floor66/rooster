<?php

class ShiftTypes extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $shift_type_id;

    /**
     *
     * @var string
     */
    protected $shift_type;

    /**
     * Method to set the value of field shift_type_id
     *
     * @param integer $shift_type_id
     * @return $this
     */
    public function setShiftTypeId($shift_type_id)
    {
        $this->shift_type_id = $shift_type_id;

        return $this;
    }

    /**
     * Method to set the value of field shift_type
     *
     * @param string $shift_type
     * @return $this
     */
    public function setShiftType($shift_type)
    {
        $this->shift_type = $shift_type;

        return $this;
    }

    /**
     * Returns the value of field shift_type_id
     *
     * @return integer
     */
    public function getShiftTypeId()
    {
        return $this->shift_type_id;
    }

    /**
     * Returns the value of field shift_type
     *
     * @return string
     */
    public function getShiftType()
    {
        return $this->shift_type;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rooster");
        $this->setSource("shift_types");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'shift_types';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ShiftTypes[]|ShiftTypes|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ShiftTypes|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
