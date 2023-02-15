<?php

class guestbook
{
    private $username;
    private $message;
    private $date;

    public function __construct($u, $m, $d)
    {
        $this->username = $u;
        $this->message = $m;
        $this->date = $d;
    }
    public function getUsername()
    {
        return $this->username;
    }


    function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }









}