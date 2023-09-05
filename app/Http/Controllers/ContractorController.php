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

    public function uploadContractor(Request $request)
    {
        $fileArray = $request->post();
        $fileArray['platnik'] = intval($fileArray['platnik']);

        $this->contractorRepository->createContractor($fileArray);
    }

    public function removeContractor($id)
    {
        $this->contractorRepository->deleteContractor($id);
        return redirect()->back();
    }

    public function updateContractor(Request $request)
    {
        $request->validate([
            'nip' => ['required', 'string', 'max:255'],
            'regon' => ['required', 'string', 'max:255'],
            'nazwa' => ['required', 'string', 'max:255'],
            'ulica' => ['required', 'string', 'max:255'],
            'nrDomu' => ['required', 'string', 'max:255'],
            'nrMieszkania' => ['required', 'string', 'max:255'],
        ]);
        $fileArray = $request->except(['_token']);
        $id = intval($fileArray['id']);

        if (isset($fileArray['platnik'])) {
            $fileArray['platnik'] = 1;
        } else {
            $fileArray['platnik'] = 0;
        }

        $this->contractorRepository->updateContractor($id, $fileArray);
        return redirect()->back();
    }
}
