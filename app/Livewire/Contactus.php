<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class Contactus extends Component
{
    public $name;
    public $email;
    public $message;
    public $success;
    protected $rules = [
        'name' => 'required|min:3|max:255',
        'email' => 'required|email|unique:contacts',
        'message' => 'required|min:5',
    ];
    public function save()
    {
        $validated = $this->validate();
        Contact::create($validated);
        $this->success = 'Your message has been sent successfully!';
        $this->clearInputs();
    }
    public function clearInputs()
    {
        $this->name = '';
        $this->email = '';
        $this->message = '';
    }
    public function render()
    {
        return view('livewire.contactus');
    }
}
