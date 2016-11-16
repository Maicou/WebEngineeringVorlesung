<?php

class CustomerDAOImpl extends AbstractDAO implements CustomerDAOInterface {

    public function readCustomer($id) {
        $stmt = $this->pdoInstance->prepare(''
                . 'SELECT * FROM `customers` WHERE id = :id'
        );
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetchObject('Customer');
    }
    
    public function findAll(){
        $stmt = $this->pdoInstance->prepare(''
                . 'SELECT * FROM `customers` WHERE id = :id'
        );
       
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Customer');
    }

    public function createCustomer(\Customer $customer) {
        
    }

    public function deleteCustomer(\Customer $customer) {
        
    }

    public function updateCustomer(\Customer $customer) {
        
        
    }

}
