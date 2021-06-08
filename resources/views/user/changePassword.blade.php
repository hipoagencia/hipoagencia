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

                    <div class="row">
                       <button class="btn btn-success w-100" type="submit">Trocar Senha</button>
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
