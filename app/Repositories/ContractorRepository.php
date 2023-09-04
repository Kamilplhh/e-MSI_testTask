<?php

namespace App\Repositories;

use App\Interfaces\ContractorRepositoryInterface;
use App\Models\contractor;

class ContractorRepository implements ContractorRepositoryInterface 
{
    public function getAllContractors() 
    {
        return contractor::all();
    }

    public function deleteContractor($contractorId) 
    {
        contractor::destroy($contractorId);
    }

    public function createContractor(array $data) 
    {
        return contractor::create($data);
    }

    public function updateContractor($contractorId, array $data) 
    {
        return contractor::whereId($contractorId)->update($data);
    }
}