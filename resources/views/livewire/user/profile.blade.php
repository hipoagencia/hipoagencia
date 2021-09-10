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
    <form enctype="multipart/form-data">
        {{--        @csrf--}}
        {{--        @method('PUT')--}}
        <div class="offset-2 col-8">

            <div style="{{ (session()->has('goCheckout') ? 'display:none' : '') }}">

                @if($user->cover)
                    <img src="{{ $user->cover }}" width="120" class="mt-3 mb-3">
                @endif

                <h4 class="mb-4">Informações</h4>

                <div class="row mb-3">
                    <div class="col-6">
                        <div class="row"><input type="text" class="form-control" placeholder="Nome"
                                                name="name" wire:model.defer="user.name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row"><input type="text" class="form-control" placeholder="Sobrenome"
                                                name="last_name" wire:model.defer="user.last_name">
                        </div>

                    </div>
                </div>

                <div class="row mb-3">
                    <input type="text" class="form-control" placeholder="E-mail" name="email" disabled
                           wire:model.defer="user.email">
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <div class="row"><input type="text" class="form-control" placeholder="CPF"
                                                name="document" disabled wire:model.defer="user.document">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row"><input type="text" class="form-control"
                                                placeholder="Data de Nascimento"
                                                name="date_of_birth" disabled
                                                wire:model.defer="user.date_of_birth">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <div class="row"><input type="text" class="form-control" placeholder="Telefone"
                                                name="telephone" wire:modeldefer="user.telephone">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row"><input type="text" class="form-control" placeholder="Celular"
                                                name="cell" wire:model.defer="user.cell"></div>

                    </div>
                </div>

            </div>

            <h4 class="mb-4">Endereço</h4>

            <div class="row mb-3">
                <input type="text" class="form-control" placeholder="CEP" name="zipcode"
                       wire:model="user.zipcode" wire:keydown="zipcode2">
            </div>

            @if ($errorMsg)
                <span class="row mb-3 alert-warning">{{ $errorMsg }}</span>
            @endif

            <div class="row mb-3">
                <input type="text" class="form-control street" placeholder="Rua" name="street"
                       wire:model.defer="user.street">
            </div>

            <div class="row mb-3">
                <div class="col-4">
                    <div class="row"><input type="text" class="form-control" placeholder="Número"
                                            name="number" wire:model.defer="user.number">
                    </div>
                </div>
                <div class="col-8">
                    <div class="row"><input type="text" class="form-control" placeholder="Complemento"
                                            name="complement" wire:model.defer="user.complement"></div>

                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <div class="row"><input type="text" class="form-control neighborhood"
                                            placeholder="Bairro"
                                            name="neighborhood" wire:model.defer="user.neighborhood">
                    </div>
                </div>
                <div class="col-2">
                    <div class="row"><input type="text" class="form-control state" placeholder="Estado"
                                            wire:model.defer="user.state"></div>
                </div>
                <div class="col-4">
                    <div class="row"><input type="text" class="form-control city" placeholder="Cidade"
                                            wire:model.defer="user.city"></div>
                </div>
            </div>

            <div style="{{ (session()->has('goCheckout') ? 'display:none' : '') }}">

                <h4 class="mb-4">Foto</h4>

                <div class="mb-3">
                    <div class="mb-3">
                        <label for="cover" class="form-label">Imagem Principal</label>
                        <input name="cover" class="form-control" type="file" id="formFile" wire:model="photo">

                        @if($photo)
                            <img src="{{ $photo->temporaryUrl() }}" width="120" class="mt-3">
                        @endif
                    </div>
                </div>

            </div>

{{--            <div wire:loading wire:target="editProfile">--}}
            <div wire:loading>
                <div class="row">
                    @include('user.components.loader')
                </div>
            </div>

            <div wire:loading.remove>
                <div class="row">
                    <button class="btn btn-success w-100" type="submit" wire:click.prevent="editProfile">Alterar</button>
                </div>
            </div>

        </div>

    </form>

</div>
