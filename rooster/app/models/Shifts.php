<?php

class Shifts extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $shift_id;

    /**
     *
     * @var integer
     */
    protected $schedule_id;

    /**
     *
     * @var integer
     */
    protected $schedule_template_id;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var integer
     */
    protected $num_users;

    /**
     *
     * @var string
     */
    protected $date;

    /**
     *
     * @var string
     */
    protected $timestamp_start;

    /**
     *
     * @var string
     */
    protected $timestamp_end;

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
     * Method to set the value of field schedule_id
     *
     * @param integer $schedule_id
     * @return $this
     */
    public function setScheduleId($schedule_id)
    {
        $this->schedule_id = $schedule_id;

        return $this;
    }

    /**
     * Method to set the value of field schedule_template_id
     *
     * @param integer $schedule_template_id
     * @return $this
     */
    public function setScheduleTemplateId($schedule_template_id)
    {
        $this->schedule_template_id = $schedule_template_id;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field num_users
     *
     * @param integer $num_users
     * @return $this
     */
    public function setNumUsers($num_users)
    {
        $this->num_users = $num_users;

        return $this;
    }

    /**
     * Method to set the value of field date
     *
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Method to set the value of field timestamp_start
     *
     * @param string $timestamp_start
     * @return $this
     */
    public function setTimestampStart($timestamp_start)
    {
        $this->timestamp_start = $timestamp_start;

        return $this;
    }

    /**
     * Method to set the value of field timestamp_end
     *
     * @param string $timestamp_end
     * @return $this
     */
    public function setTimestampEnd($timestamp_end)
    {
        $this->timestamp_end = $timestamp_end;

        return $this;
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
     * Returns the value of field schedule_id
     *
     * @return integer
     */
    public function getScheduleId()
    {
        return $this->schedule_id;
    }

    /**
     * Returns the value of field schedule_template_id
     *
     * @return integer
     */
    public function getScheduleTemplateId()
    {
        return $this->schedule_template_id;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field num_users
     *
     * @return integer
     */
    public function getNumUsers()
    {
        return $this->num_users;
    }

    /**
     * Returns the value of field date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Returns the value of field timestamp_start
     *
     * @return string
     */
    public function getTimestampStart()
    {
        return $this->timestamp_start;
    }

    /**
     * Returns the value of field timestamp_end
     *
     * @return string
     */
    public function getTimestampEnd()
    {
        return $this->timestamp_end;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rooster");
        $this->setSource("shifts");
		
		$this->hasManyToMany(
			"shift_id",
			"UserAvailability",
			"shift_id", "user_id",
			"Users",
			"user_id"
		);
		
		$this->hasOne(
			"schedule_id",
			"Schedules",
			"schedule_id"
		);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'shifts';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Shifts[]|Shifts|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Shifts|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
