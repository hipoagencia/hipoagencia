<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Profile extends Component
{
    public User $user;

    public $cover;
    public $name;
    public $last_name;
    public $email;
    public $document;
    public $date_of_birth;
    public $telephone;
    public $cell;
    public $zipcode;
    public $street;
    public $number;
    public $complement;
    public $neighborhood;
    public $state;
    public $city;
    public $streetTest;

    public $errorMsg;

    protected $rules = [
        'name' => 'required|min:3|max:191',
        'last_name' => 'required|min:3|max:191',
        //'cover' => 'max:1024|image',
        'zipcode' => 'required|min:8|max:9',
        'street' => 'required',
        'number' => 'required',
        'neighborhood' => 'required',
        'state' => 'required',
        'city' => 'required',
        'cell' => 'required',
    ];

    public function mount()
    {
        $this->cover = $this->user->cover;
        $this->name = $this->user->name;
        $this->last_name = $this->user->last_name;
        $this->email = $this->user->email;
        $this->document = $this->user->document;
        $this->date_of_birth = $this->user->date_of_birth;
        $this->telephone = $this->user->telephone;
        $this->cell = $this->user->cell;
        $this->zipcode = $this->user->zipcode;
        $this->street = $this->user->street;
        $this->number = $this->user->number;
        $this->complement = $this->user->complement;
        $this->neighborhood = $this->user->neighborhood;
        $this->state = $this->user->state;
        $this->city = $this->user->city;
    }


    public function editProfile()
    {
        $this->validate();

        $this->user->update([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'telephone' => $this->telephone,
            'cell' => $this->cell,
            'zipcode' => $this->zipcode,
            'street' => $this->street,
            'number' => $this->number,
            'complement' => $this->complement,
            'neighborhood' => $this->neighborhood,
            'state' => $this->state,
            'city' => $this->city,
        ]);

        //Volta para o checkout após completar o cadastro
        if (session('goCheckout'))
            return redirect()->route('user.checkout.cardDetails');

        session()->flash('message', 'Dados atualizados com sucesso');
    }

    public function zipcode2()
    {
        $this->errorMsg = null;

        if(strlen($this->zipcode) == 8) {
            try {
                $cep = $this->zipcode;
                $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

                $collection = json_decode($response);

                $this->street = $collection->logradouro;
                $this->neighborhood = $collection->bairro;
                $this->city = $collection->localidade;
                $this->state = $collection->uf;
            } catch (\Exception $e) {
                $this->errorMsg = "Digite o CEP corretamente.";
            }
        }
    }

    public function render()
    {
        return view('livewire.user.profile');
    }

}
