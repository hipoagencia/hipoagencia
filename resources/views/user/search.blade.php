@extends('user.master.master')

@section('content')





    <div class="container">
        <div class="row">
            <div class="col-12">

                <h1>Search</h1>

                There are {{ $searchResults->count() }} results.

                <br><br>

                @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                    <h2>{{ $type }}</h2>

                    @foreach($modelSearchResults as $searchResult)
                        <ul>
                            <li><a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a></li>
                        </ul>
                    @endforeach
                @endforeach


                <form action="">



                    <div class="row mb-3 mt-5">
                        <div class="col-6">
                            <div class="row"><input type="text" class="form-control" placeholder="Pesquisa" name="search"
                                                    value="{{ old('search')}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <button class="btn btn-success w-100" type="submit">Trocar Senha</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection
