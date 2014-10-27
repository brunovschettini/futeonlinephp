<?php

abstract class EntityQuery {

    public $statement;

    public function __construct() {
        $this->statement = array(null, new PDOStatement());
    }

    public function getResultList() {
        $em = new EntityManager();
        $result = array();
        try {
            if ($this->statement[0] == null || !$this->statement[1]->execute()) {
                return array();
            }
            if ($this->statement[0] == "createNativeQuery") {
                $result = $this->statement[1]->fetchAll();
            }
            if ($this->statement[0] == "createQuery") {
                $listResult = $this->statement[1]->fetchAll(PDO::FETCH_OBJ);
                for ($i = 0; $i < sizeof($listResult); $i++) {
                    $result[] = $em->find(new users(), (int) $listResult[$i][0]);
                }
            }
            return $result;
        } catch (PDOException $e) {
            log($e);
        }
        return array();
    }

    public function getSingleResult() {
        try {
            if ($this->statement[0] == null || !$this->statement[1]->execute()) {
                return array();
            }
            if ($this->statement[0] == "createNativeQuery") {
                $pdoFetch = PDO::FETCH_ASSOC;
            }
            if ($this->statement[0] == "createQuery") {
                $pdoFetch = PDO::FETCH_OBJ;
            }
            $this->result = $this->statement[1]->fetchAll($pdoFetch);
            if ($this->result == null || sizeof($this->result) == 0 || sizeof($this->result) > 1) {
                return null;
            }
            return $this->statement[1]->fetch($pdoFetch);
        } catch (PDOException $e) {
            log($e);
        }
    }

}
