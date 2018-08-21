<?php

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var string
     */
    protected $auth_code;

    /**
     *
     * @var string
     */
    protected $nickname;

    /**
     *
     * @var string
     */
    protected $full_name;

    /**
     *
     * @var integer
     */
    protected $access_level_id;

    /**
     *
     * @var integer
     */
    protected $role_id;

    /**
     *
     * @var integer
     */
    protected $disabled;

    /**
     *
     * @var string
     */
    protected $date_of_birth;

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
     * Method to set the value of field auth_code
     *
     * @param string $auth_code
     * @return $this
     */
    public function setAuthCode($auth_code)
    {
        $this->auth_code = $auth_code;

        return $this;
    }

    /**
     * Method to set the value of field nickname
     *
     * @param string $nickname
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Method to set the value of field full_name
     *
     * @param string $full_name
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->full_name = $full_name;

        return $this;
    }

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
     * Method to set the value of field role_id
     *
     * @param integer $role_id
     * @return $this
     */
    public function setRoleId($role_id)
    {
        $this->role_id = $role_id;

        return $this;
    }

    /**
     * Method to set the value of field disabled
     *
     * @param integer $disabled
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;

        return $this;
    }

    /**
     * Method to set the value of field date_of_birth
     *
     * @param string $date_of_birth
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->date_of_birth = $date_of_birth;

        return $this;
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
     * Returns the value of field auth_code
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->auth_code;
    }

    /**
     * Returns the value of field nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Returns the value of field full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->full_name;
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
     * Returns the value of field role_id
     *
     * @return integer
     */
    public function getRoleId()
    {
        return $this->role_id;
    }

    /**
     * Returns the value of field disabled
     *
     * @return integer
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Returns the value of field date_of_birth
     *
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rooster");
        $this->setSource("users");
		
		$this->hasMany(
			"user_id",
			"EmailAddresses",
			"user_id"
		);
		
		$this->hasMany(
			"user_id",
			"PhoneNumbers",
			"user_id"
		);
		
		$this->hasManyToMany(
			"user_id",
			"UserAvailability",
			"user_id", "shift_id",
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
        return 'users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]|Users|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
