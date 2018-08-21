<?php

class ScheduleTemplates extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $schedule_template_id;

    /**
     *
     * @var string
     */
    protected $name;

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
     * Returns the value of field schedule_template_id
     *
     * @return integer
     */
    public function getScheduleTemplateId()
    {
        return $this->schedule_template_id;
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rooster");
        $this->setSource("schedule_templates");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'schedule_templates';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ScheduleTemplates[]|ScheduleTemplates|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ScheduleTemplates|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
