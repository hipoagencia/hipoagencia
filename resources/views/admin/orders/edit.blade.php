@extends('admin.master.master')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Pedidos</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Início</a></li>
                        <li class="breadcrumb-item active">Pedidos Cadastrados</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">

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

                <div class="card-body">
                    <form action="{{ route('admin.orders.update', ['order' => $order->id]) }}" method="POST"
                          autocomplete="false">

                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $order->id }}">

                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab"
                                   aria-selected="true">
                                    <span class="d-block d-sm-none"><i class="fas fa-user"></i></span>
                                    <span class="d-none d-sm-block">Informações</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Items do Pedido</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="home1" role="tabpanel">
                                <h3 class="mb-3">Informações</h3>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Código PagSeguro</label>
                                            <input name="price" class="form-control"
                                                   value="{{ old('code') ?? $order->code   }}" disabled>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Forma de Pagamento</label>
                                            <input name="price" class="form-control"
                                                   value="{{ old('type') ?? $order->type   }}" disabled>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Usuário</label>

                                            <select class="select2 form-control select2-multiple" name="user"
                                                    data-placeholder="Choose ...">

                                                @foreach($users as $user)
                                                    <option
                                                        value="{{ $user->id }}" {{ ($user->id == $order->user ? 'selected' : '') }}>{{ $user->name }} {{ $user->last_name }}</option>
                                                @endforeach

                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" name="status">
                                                <option disabled>Selecione</option>
                                                <option value="1" {{ ( old('status') == 'Aguardando pagamento' ? 'selected' : ($order->status == 'Aguardando pagamento' ? 'selected' : '' )) }}>
                                                    Aguardando pagamento
                                                </option>
                                                <option value="2" {{ ( old('status') == 'Em análise' ? 'selected' : ($order->status == 'Em análise' ? 'selected' : '' )) }}>
                                                    Em análise
                                                </option>
                                                <option value="3" {{ ( old('status') == 'Paga' ? 'selected' : ($order->status == 'Paga' ? 'selected' : '' )) }}>
                                                    Paga
                                                </option>
                                                <option value="4" {{ ( old('status') == 'Disponível' ? 'selected' : ($order->status == 'Disponível' ? 'selected' : '' )) }}>
                                                    Disponível
                                                </option>
                                                <option value="5" {{ ( old('status') == 'Em disputa' ? 'selected' : ($order->status == 'Em disputa' ? 'selected' : '' )) }}>
                                                    Em disputa
                                                </option>
                                                <option value="6" {{ ( old('status') == 'Devolvida' ? 'selected' : ($order->status == 'Devolvida' ? 'selected' : '' )) }}>
                                                    Devolvida
                                                </option>
                                                <option value="7" {{ ( old('status') == 'Cancelada' ? 'selected' : ($order->status == 'Cancelada' ? 'selected' : '' )) }}>
                                                    Cancelada
                                                </option>
                                                <option value="8" {{ ( old('status') == 'Debitado' ? 'selected' : ($order->status == 'Debitado' ? 'selected' : '' )) }}>
                                                    Debitado
                                                </option>
                                                <option value="9" {{ ( old('status') == 'Retenção temporária' ? 'selected' : ($order->status == 'Retenção temporária' ? 'selected' : '' )) }}>
                                                    Retenção temporária
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Total R$</label>
                                            <input name="total" class="form-control"
                                                   value="{{ old('total') ?? $order->total }}">
                                        </div>
                                    </div>


                                    <div class="mb-3 mt-3">
                                        <textarea id="elm1" class="my-editor" name="observation">{{ old('observation') ?? $order->observation }}</textarea>
                                    </div>




                                </div>


                            </div>


                            <div class="tab-pane" id="messages1" role="tabpanel">
                                <h3 class="mb-3">Items do Pedido</h3>
                                <div class="row">

                                    @foreach($order->products()->get() as $item)

                                        <div class="col-lg-3">
                                            <div class="card border border-primary">
                                                <div class="card-header bg-transparent border-primary">
                                                    <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>{{ $item->produc->name }}</h5>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title mt-0">{{ $item->product_amount }} x R$ {{ $item->price }}</h5>
                                                    <p class="card-text">Total: R$ {{ $item->price_total }}</p>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach

                                </div>
                            </div>
                        </div>


                        <div>
                            <button type="submit" class="btn btn-primary w-md">Alterar</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>

    </div>

@endsection

