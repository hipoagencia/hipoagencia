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

                    <div class="row mb-3">
                        <input type="text" class="form-control zip_code_search" placeholder="CEP" name="zipcode"
                               value="{{ old('zipcode') ?? $user->zipcode }}">
                    </div>

                    <div class="row mb-3">
                        <input type="text" class="form-control street" placeholder="Rua" name="street"
                               value="{{ old('street') ?? $user->street }}">
                    </div>

                    <div class="row mb-3">
                        <div class="col-4">
                            <div class="row"><input type="text" class="form-control" placeholder="Número"
                                                    name="number" value="{{ old('number') ?? $user->number }}">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row"><input type="text" class="form-control" placeholder="Complemento"
                                                    name="complement" value="{{ old('complement') ?? $user->complement }}"></div>

                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="row"><input type="text" class="form-control neighborhood" placeholder="Bairro"
                                                    name="neighborhood" value="{{ old('neighborhood') ?? $user->neighborhood }}">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="row"><input type="text" class="form-control state" placeholder="Estado"
                                                    name="state" value="{{ old('state') ?? $user->state }}"></div>
                        </div>
                        <div class="col-4">
                            <div class="row"><input type="text" class="form-control city" placeholder="Cidade"
                                                    name="city" value="{{ old('city') ?? $user->city }}"></div>
                        </div>
                    </div>

                    <div class="row">
                        <a href="#" class="btn btn-success w-100">Alterar</a>
                    </div>
                </div>
            </div>
        </div>

    @endif

@endsection



@section('js')
    <script>
        $('.zip_code_search').blur(function () {

            function emptyForm() {
                $(".street").val("");
                $(".neighborhood").val("");
                $(".city").val("");
                $(".state").val("");
            }

            var zip_code = $(this).val().replace(/\D/g, '');
            var validate_zip_code = /^[0-9]{8}$/;

            if (zip_code != "" && validate_zip_code.test(zip_code)) {

                $(".street").val("");
                $(".neighborhood").val("");
                $(".city").val("");
                $(".state").val("");

                $.getJSON("https://viacep.com.br/ws/" + zip_code + "/json/?callback=?", function (data) {

                    if (!("erro" in data)) {
                        $(".street").val(data.logradouro);
                        $(".neighborhood").val(data.bairro);
                        $(".city").val(data.localidade);
                        $(".state").val(data.uf);
                    } else {
                        emptyForm();
                        alert("CEP não encontrado.");
                    }
                });
            } else {
                emptyForm();
                alert("Formato de CEP inválido.");
            }
        });

    </script>
@endsection
