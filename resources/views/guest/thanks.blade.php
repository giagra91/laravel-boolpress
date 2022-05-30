
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @if (session("message"))
                <div class=" col-6 mx-auto text-center alert alert-success">
                    {{ session("message") }}
                </div>
            @endif
            <div class="col-12 text-center">
                <h1>Grazie per averci contattato, a breve avrai le informazioni richieste.</h1>
            </div>
        </div>
    </div>    
@endsection