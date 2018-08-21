<?php

class PhoneNumbers extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $phone_number_id;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var string
     */
    protected $phone_number;

    /**
     * Method to set the value of field phone_number_id
     *
     * @param integer $phone_number_id
     * @return $this
     */
    public function setPhoneNumberId($phone_number_id)
    {
        $this->phone_number_id = $phone_number_id;

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
     * Method to set the value of field phone_number
     *
     * @param string $phone_number
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    /**
     * Returns the value of field phone_number_id
     *
     * @return integer
     */
    public function getPhoneNumberId()
    {
        return $this->phone_number_id;
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
     * Returns the value of field phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rooster");
        $this->setSource("phone_numbers");
		
		$this->belongsTo(
			"user_id",
			"Users",
			"user_id"
		);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'phone_numbers';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PhoneNumbers[]|PhoneNumbers|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PhoneNumbers|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
