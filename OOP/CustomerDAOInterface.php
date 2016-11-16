<?php


include_once "../model/customer.php";

interface CustomerDAOInterface {

    public function createCustomer(Customer $customer);

    public function readCustomer($id);

    public function updateCustomer(Customer $customer);

    public function deleteCustomer(Customer $customer);

    public function findAll();
}
