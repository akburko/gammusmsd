<?php

namespace AKBurko\Gammu;

class SMSD
{
    private $_db;
    /**
     * Create a new GammuSMSD Instance
     */
    public function __construct()
    {
        $this->_db = new \PDO("mysql:host=localhost;dbname=planetcms;charset=utf-8", "root");
    }

    /*
     *  Getting the list of the inbox table
     */
    public function getInboxList()
    {
        $stmt = $this->_db->prepare("SELECT * FROM `inbox` limit 1");
        return json_encode($stmt->fetchAll());
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase($phrase)
    {
        return $phrase;
    }
}
