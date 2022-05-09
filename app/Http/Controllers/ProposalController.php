<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Job;
use App\Models\CoverLetter;
use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function store(Request $request, Job $job){

        $proposal = Proposal::created([
'job_id' => $job->id,
'validated' => false
        ]);

        CoverLetter::created([
            'proposal_id' => $this->proposal->id,
            'content' => $request->input('content'),
        ]);

        return redirect()->route('jobs.index');
    }


}
