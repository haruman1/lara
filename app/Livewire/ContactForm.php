<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $isOpen = false;
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|min:3',
        'email' => 'required|email',
        'message' => 'required|string|min:5',
    ];

    public function openModal()
    {
        $this->reset(['name', 'email', 'message']);
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function send()
    {
        $this->validate();

        // Kirim email
        Mail::raw("
            Name: {$this->name}
            Email: {$this->email}
            Message: {$this->message}
        ", function ($mail) {
            $mail->to('arwih@gmail.com')
                ->subject('Contact Form Message');
        });

        session()->flash('success', 'Pesan berhasil dikirim!');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
