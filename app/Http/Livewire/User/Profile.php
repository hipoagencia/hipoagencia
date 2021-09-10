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

    public $photo;

    public $errorMsg;

    protected $rules = [
        'user.name' => 'required|min:3|max:191',
        'user.email' => 'required',
        'user.document' => 'required',
        'user.date_of_birth' => 'required',
        'user.last_name' => 'required|min:3|max:191',
        'user.zipcode' => 'required|min:8|max:9',
        'user.street' => 'required',
        'user.number' => 'required',
        'user.neighborhood' => 'required',
        'user.state' => 'required',
        'user.city' => 'required',
        'user.cell' => 'required',
        'user.telephone' => 'required',
        //'data.cover' => 'nullable|sometimes|image|mimes:jpeg,bmp,png,jpg|max:2000'
    ];

    public function mount()
    {
        $this->user = User::users()->find(auth()->user()->id);
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
        return view('livewire.user.profile')->layout('user.master.master');
    }

}
