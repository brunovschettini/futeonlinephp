<?php

class Transaction {

    public function begin() {
        $this->beginTransaction();
    }

    public function commit() {
        $this->commit();
    }

    public function rollback() {
        $this->rollback();
    }

    // User anotattion
    //public void setRollbackOnly();
    //public function setRollbackOnly();
    //public boolean getRollbackOnly();
    //public function getRollbackOnly();
    //public boolean isActive();    
    //public function isActive();    
}
