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

    public function createContractor(array $file) 
    {
        return contractor::create($file);
    }

    public function updateContractor($contractorId, array $file) 
    {
        return contractor::whereId($contractorId)->update($file);
    }
}