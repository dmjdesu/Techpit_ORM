<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread; 

class Threads extends Component
{
    public function render()
    {
	$threads = Thread::orderBy('id', 'DESC')->get(); //追加
	return view('livewire.threads.index', compact('threads'));
    }
}
