<div>

    @if($errors->all())
        @foreach($errors->all() as $error)
            @component('admin.components.message',['type' => 'danger'])
                {{ $error }}
            @endcomponent
        @endforeach
    @endif

    @if(session()->exists('message'))
        @component('admin.components.message',['type' => session()->get('type')])
            {{ session()->get('message') }}
        @endcomponent
    @endif


    {{--    <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">--}}
    <form wire:submit.prevent="editProfile" enctype="multipart/form-data">
        {{--        @csrf--}}
        {{--        @method('PUT')--}}
        <div class="offset-2 col-8">

            <div style="{{ (session()->has('goCheckout') ? 'display:none' : '') }}">

                {{--                <img src="{{ url(asset($user->cover)) }}" width="150"/>--}}

                <h4 class="mb-4">Informações</h4>

                <div class="row mb-3">
                    <div class="col-6">
                        <div class="row"><input type="text" class="form-control" placeholder="Nome"
                                                name="name" wire:model.lazy.debounce.9999999ms="name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row"><input type="text" class="form-control" placeholder="Sobrenome"
                                                name="last_name" wire:model.lazy.debounce.9999999ms="last_name">
                        </div>

                    </div>
                </div>

                <div class="row mb-3">
                    <input type="text" class="form-control" placeholder="E-mail" name="email" disabled
                           wire:model.lazy.debounce.9999999ms="email">
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <div class="row"><input type="text" class="form-control" placeholder="CPF"
                                                name="document" disabled wire:model.lazy.debounce.9999999ms="document">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row"><input type="text" class="form-control"
                                                placeholder="Data de Nascimento"
                                                name="date_of_birth" disabled
                                                wire:model.lazy.debounce.9999999ms="date_of_birth">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <div class="row"><input type="text" class="form-control" placeholder="Telefone"
                                                name="telephone" wire:model.lazy.debounce.9999999ms="telephone">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row"><input type="text" class="form-control" placeholder="Celular"
                                                name="cell" wire:model.lazy.debounce.9999999ms="cell"></div>

                    </div>
                </div>

            </div>

            <h4 class="mb-4">Endereço</h4>

            <div class="row mb-3">
                <input type="text" class="form-control" placeholder="CEP" name="zipcode"
                       wire:model="zipcode" wire:keydown="zipcode2">
            </div>

            @if ($errorMsg)
                <span class="row mb-3 alert-warning">{{ $errorMsg }}</span>
            @endif

            <div class="row mb-3">
                <input type="text" class="form-control street" placeholder="Rua" name="street"
                       wire:model.lazy.debounce.9999999ms="street">
            </div>

            <div class="row mb-3">
                <div class="col-4">
                    <div class="row"><input type="text" class="form-control" placeholder="Número"
                                            name="number" wire:model.lazy.debounce.9999999ms="number">
                    </div>
                </div>
                <div class="col-8">
                    <div class="row"><input type="text" class="form-control" placeholder="Complemento"
                                            name="complement" wire:model.lazy.debounce.9999999ms="complement"></div>

                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <div class="row"><input type="text" class="form-control neighborhood"
                                            placeholder="Bairro"
                                            name="neighborhood" wire:model.lazy.debounce.9999999ms="neighborhood">
                    </div>
                </div>
                <div class="col-2">
                    <div class="row"><input type="text" class="form-control state" placeholder="Estado"
                                            wire:model.lazy.debounce.9999999ms="state"></div>
                </div>
                <div class="col-4">
                    <div class="row"><input type="text" class="form-control city" placeholder="Cidade"
                                            wire:model.lazy.debounce.9999999ms="city"></div>
                </div>
            </div>

            <div style="{{ (session()->has('goCheckout') ? 'display:none' : '') }}">

                <h4 class="mb-4">Foto</h4>

                <div class="mb-3">
                    <div class="mb-3">
                        <label for="cover" class="form-label">Imagem Principal</label>
                        <input name="cover" class="form-control" type="file" id="formFile">
                    </div>
                </div>

            </div>

            <div wire:loading>
                <div class="row">
                    @include('user.components.loader')
                </div>
            </div>

            <div wire:loading.remove>
                <div class="row">
                    <button class="btn btn-success w-100" type="submit">Alterar</button>
                </div>
            </div>

        </div>

    </form>

</div>
