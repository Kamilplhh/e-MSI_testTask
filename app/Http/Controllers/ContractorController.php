<?php

namespace App\Http\Controllers;

use App\Interfaces\ContractorRepositoryInterface;
use Illuminate\Http\Request;

class ContractorController extends Controller
{
    private ContractorRepositoryInterface $contractorRepository;

    public function __construct(ContractorRepositoryInterface $contractorRepository)
    {
        $this->contractorRepository = $contractorRepository;
    }

    public function showData()
    {
        $contractors = $this->contractorRepository->getAllContractors();
        return view('kontrahenci', compact('contractors'));
    }
}
