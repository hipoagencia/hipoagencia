@extends('user.master.master')

@section('content')

    @if(!empty($user))

        <div class="container">
            <div class="row">

                <div class="offset-4 col-4">

                    <h4 class="mb-4">Informações</h4>

                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="row"><input type="text" class="form-control" placeholder="Nome" name="name"
                                                    value="{{ old('name') ?? $user->name }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row"><input type="text" class="form-control" placeholder="Sobrenome"
                                                    name="last_name" value="{{ old('last_name') ?? $user->last_name }}">
                            </div>

                        </div>
                    </div>

                    <div class="row mb-3">
                        <input type="text" class="form-control" placeholder="E-mail" name="email"
                               value="{{ old('email') ?? $user->email }}">
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="row"><input type="text" class="form-control" placeholder="CPF" name="document"
                                                    value="{{ old('document') ?? $user->document }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row"><input type="text" class="form-control" placeholder="Data de Nascimento"
                                                    name="date_of_birth" disabled
                                                    value="{{ old('date_of_birth') ?? $user->date_of_birth }}"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="row"><input type="text" class="form-control" placeholder="Telefone"
                                                    name="telephone" value="{{ old('telephone') ?? $user->telephone }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row"><input type="text" class="form-control" placeholder="Celular"
                                                    name="cell" value="{{ old('cell') ?? $user->cell }}"></div>

                        </div>
                    </div>

                    <h4 class="mb-4">Endereço</h4>

                    <div class="row">
                        <a href="#" class="btn btn-success w-100">Alterar</a>
                    </div>
                </div>
            </div>
        </div>

    @endif

@endsection
