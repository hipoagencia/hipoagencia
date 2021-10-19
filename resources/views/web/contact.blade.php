@extends('web.master.master')

@section('content')


    <div class="pt-70 pb-70 blog-line-top">
        <div class="container">
            <div class="section-title">
                <h2>Fale Conosco</h2>
            </div>
            <div class="row justify-content-center">

                <form id="contactForm" novalidate="true">
                    <div class="row col-lg-6 offset-lg-3">

                        <div class="form-group mb-3">
                            <input type="text" name="name" id="name" class="form-control" required=""
                                   placeholder="Nome completo">
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="name" id="name" class="form-control" required=""
                                   placeholder="Empresa">
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="name" id="name" class="form-control" required=""
                                   placeholder="E-mail">
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="name" id="name" class="form-control" required=""
                                   placeholder="Telefone">
                        </div>

                        <div class="form-group mb-3">
                            <select name="" id=""  class="form-control">
                                <option value="" class="">Perfil (Selecione)</option>
                                <option value="" class="">Paciente</option>
                                <option value="" class="">Médico e Profissional de Saúde</option>
                                <option value="" class="">Hospitais, clínicas, convênios e distribuidores</option>
                                <option value="" class="">Outros</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <select name="" id=""  class="form-control">
                                <option value="" class="">Informações de Produto (Selecione)</option>
                                <option value="" class="">Segunda via de carteirinha</option>
                                <option value="" class="">Instruções de uso</option>
                                <option value="" class="">Pedidos</option>
                                <option value="" class="">Dúvidas</option>
                                <option value="" class="">Sugestões</option>
                                <option value="" class="">Reclamações</option>
                                <option value="" class="">Fornecedores</option>
                                <option value="" class="">Carreiras</option>
                                <option value="" class="">Outros</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="name" id="name" class="form-control" required=""
                                   placeholder="Digite sua mensagem">
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">Enviar <i class="bx bx-send"></i><span></span></button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>


                    </div>
                </form>

            </div>
        </div>
    </div>



    @include('web.components.newsletter')

@endsection
