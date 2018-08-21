<?php

class EmailAddresses extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $email_id;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var string
     */
    protected $email_address;

    /**
     * Method to set the value of field email_id
     *
     * @param integer $email_id
     * @return $this
     */
    public function setEmailId($email_id)
    {
        $this->email_id = $email_id;

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
     * Method to set the value of field email_address
     *
     * @param string $email_address
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        $this->email_address = $email_address;

        return $this;
    }

    /**
     * Returns the value of field email_id
     *
     * @return integer
     */
    public function getEmailId()
    {
        return $this->email_id;
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
     * Returns the value of field email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->email_address;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rooster");
        $this->setSource("email_addresses");
		
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
        return 'email_addresses';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return EmailAddresses[]|EmailAddresses|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return EmailAddresses|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
