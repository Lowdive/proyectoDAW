<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of orderDAO
 *
 * @author A07025007
 */
class orderDAO {

    private $Db;

    function __construct($DB_CON)
    {
        $this->Db = $DB_CON;
    }

    public function addOrder($discID, $discPrice, $name, $email){
        try{
            $statement = $this->Db->prepare("INSERT INTO discorder(orderID, discID, discPrice,name, email) VALUES (null,:disc,:price,:name,:mail)");
            $statement->bindparam(":disc", $discID);
            $statement->bindparam(":price", $discPrice);
            $statement->bindparam(":name", $name);
            $statement->bindparam(":mail", $email);
            $statement->execute();   
            return true;
        } catch (PDOException $ex){
            echo $ex->getMessage();
            die($ex->getMessage()); 
        }
    }

    public function getOrder($orderID){
        try{
            $statement = $this->Db->prepare("SELECT * FROM discorder WHERE orderID=:order");
            $statement->bindparam(":order", $orderID);
            $statement->execute();
            $dataRows = $statement->fetch(PDO::FETCH_ASSOC);
            return $dataRows;

        } catch (PDOException $ex){
            echo $ex->getMessage();
            die($ex->getMessage()); 
        }
    }   
}
