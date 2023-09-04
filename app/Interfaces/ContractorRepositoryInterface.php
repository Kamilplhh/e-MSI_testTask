<?php

namespace App\Interfaces;

interface ContractorRepositoryInterface
{
    public function getAllContractors();
    public function deleteContractor($contractorId);
    public function createContractor(array $data);
    public function updateContractor($contractorId, array $data);
}