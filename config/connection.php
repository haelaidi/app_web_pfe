<?php

require 'query.php';

class _DbCnx extends PDO
{
    const PARAM_host = 'localhost';
    const PARAM_port = '3306';
    const PARAM_db_name = 'dbpfe';
    const PARAM_user = 'root';
    const PARAM_db_pass = '';

    public function __construct($options = null)
    {
        parent::__construct('mysql:host=' . _DbCnx::PARAM_host . ';port=' . _DbCnx::PARAM_port . ';dbname=' . _DbCnx::PARAM_db_name,
            _DbCnx::PARAM_user,
            _DbCnx::PARAM_db_pass, $options);
    }

    public function upsertQuery($query)
    {
        try {

            console_log("QUERY SQL : " . $query);

            $result = parent::exec($query);

            console_log($result);

            return $result;

        } catch (PDOException $e) {

            console_log("ERROR : " . $e->getMessage());

            return false;

        }

    }

    public function selectQuery($query)
    {
        try {

            console_log("QUERY SQL : " . $query);

            $result = parent::query($query)->fetchAll(PDO::FETCH_OBJ);


            console_log($result);

            return $result;

        } catch (PDOException $e) {

            console_log("ERROR : " . $this->getMessage());

            return [];

        }
    }
}

try {

    $dbcnx = new _DbCnx();

    $dbcnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo '<script type="text/javascript">alert("Connexion échoue à la base de donnée: ' . $e->getMessage() . '")</script>';
    exit;

}



function console_log($data)
{

    $output = "";

    if (is_array($data)) {

        $output = 'console.log("=> is array");';

        foreach ($data as $row => $link) {

            $output .= 'console.log(' . json_encode($link, JSON_HEX_TAG) . ');';

        }

    } else {

        if (is_object($data))
            $output = 'console.log("=> is object");';

        $output .= 'console.log(' . json_encode($data, JSON_HEX_TAG) . ');';

    }

    echo '<script>' . $output . '</script>';
}