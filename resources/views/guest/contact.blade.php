
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 w-50 mx-auto">
                
                <form class="text-center mb-2" action="{{ route("guest.storeContact") }}" method="post">
                
                    @csrf

                    <div class="input-group mb-3">
                        <span class="input-group-text">Name</span>
                        <input type="text" class="form-control" name="userName">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Insert your mail</span>
                        <input type="text" class="form-control" name="userMail">
                    </div>

                    <div class="input-group mb-3">
                        <label for="userMessage">Mail message</label>
                        <textarea type="text" class="form-control" id="userMessage" name="userMessage"></textarea>
                    </div>
                
                    <button class="btn btn-primary" type="submit">Send</button>
                </form>
                <div class="text-center">
                    Data e ora (ricavate con Carbon): {{$now}}
                </div>
            </div>
        </div>
    </div>    
@endsection