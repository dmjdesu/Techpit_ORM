<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Thread; 
use Illuminate\Support\Facades\Auth;

class Threads extends Component
{

    public $ids;
    public $body;
    public $modalStatus;
    

    public function render()
    {
	$threads = Thread::orderBy('id', 'DESC')->get(); //追加
	return view('livewire.threads.index', compact('threads'));
    }
    
    public function openModal() //modalStatusをtrueにしmodalを表示する
    {
        $this->resetInputFields();
        $this->modalStatus = true;
    }
    public function closeModal() //modalStatusをfalseにしmodalを閉じる
    {
        $this->modalStatus = false;
    }
    
    public function resetInputFields() //Inputタグの中身を空にする
    {
        $this->body = '';
    }
    public function store() //バリデーションをした後に、生徒のデータを保存
    {
        $validatedData = $this->validate([
            'body' => 'required',
        ]);
	$validatedData['user_id'] = Auth::id();
        Thread::create($validatedData);
        session()->flash('message', '新規投稿に成功しました。');
        $this->resetInputFields();
        $this->closeModal();
    }

}
