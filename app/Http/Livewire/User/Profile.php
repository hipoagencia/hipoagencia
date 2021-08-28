<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public User $user;
    public array $data = [];

    public $photo;

    public $errorMsg;

    protected $rules = [
        'data.name' => 'required|min:3|max:191',
        'data.last_name' => 'required|min:3|max:191',
        'data.zipcode' => 'required|min:8|max:9',
        'data.street' => 'required',
        'data.number' => 'required',
        'data.neighborhood' => 'required',
        'data.state' => 'required',
        'data.city' => 'required',
        'data.cell' => 'required',
        //'data.cover' => 'nullable|sometimes|image|mimes:jpeg,bmp,png,jpg|max:2000'
    ];

    public function mount()
    {
        $this->data['cover'] = $this->photo;
        $this->data['name'] = $this->user->name;
        $this->data['last_name'] = $this->user->last_name;
        $this->data['email'] = $this->user->email;
        $this->data['document'] = $this->user->document;
        $this->data['date_of_birth'] = $this->user->date_of_birth;
        $this->data['telephone'] = $this->user->telephone;
        $this->data['cell'] = $this->user->cell;
        $this->data['zipcode'] = $this->user->zipcode;
        $this->data['street'] = $this->user->street;
        $this->data['number'] = $this->user->number;
        $this->data['complement'] = $this->user->complement;
        $this->data['neighborhood'] = $this->user->neighborhood;
        $this->data['state'] = $this->user->state;
        $this->data['city'] = $this->user->city;
    }

    public function editProfile()
    {
        $this->validate();

        //dd(Storage::disk('')->delete($this->user->cover));

        if($this->photo){
            if(Storage::disk('public')->exists($this->user->cover))
                Storage::disk('public')->delete($this->user->cover);

            $photo = $this->photo->store('user', 'public');
            $this->data['cover'] = $photo;
        }

        $this->user->update($this->data);

        //Volta para o checkout após completar o cadastro
        if (session('goCheckout'))
            return redirect()->route('user.checkout.cardDetails');

        session()->flash('message', 'Dados atualizados com sucesso');
    }

    public function zipcode2()
    {
        $this->errorMsg = null;

        if (strlen($this->zipcode) == 8) {
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
