<?php

class Schedules extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $schedule_id;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $created_on;

    /**
     *
     * @var string
     */
    protected $finalized_on;

    /**
     *
     * @var string
     */
    protected $for_month;

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
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field created_on
     *
     * @param string $created_on
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->created_on = $created_on;

        return $this;
    }

    /**
     * Method to set the value of field finalized_on
     *
     * @param string $finalized_on
     * @return $this
     */
    public function setFinalizedOn($finalized_on)
    {
        $this->finalized_on = $finalized_on;

        return $this;
    }

    /**
     * Method to set the value of field for_month
     *
     * @param string $for_month
     * @return $this
     */
    public function setForMonth($for_month)
    {
        $this->for_month = $for_month;

        return $this;
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
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field created_on
     *
     * @return string
     */
    public function getCreatedOn()
    {
        return $this->created_on;
    }

    /**
     * Returns the value of field finalized_on
     *
     * @return string
     */
    public function getFinalizedOn()
    {
        return $this->finalized_on;
    }

    /**
     * Returns the value of field for_month
     *
     * @return string
     */
    public function getForMonth()
    {
        return $this->for_month;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rooster");
        $this->setSource("schedules");
		
		$this->hasOne(
			"schedule_template_id",
			"ScheduleTemplates",
			"schedule_template_id"
		);
		
		$this->hasMany(
			"schedule_id",
			"Shifts",
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
        return 'schedules';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Schedules[]|Schedules|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Schedules|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
