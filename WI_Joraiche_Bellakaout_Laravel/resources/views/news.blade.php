@extends('layouts.app')

@section('content')

@if(Auth::check())
@if(Auth::user()->is_admin === 'admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Laatste Nieuws') }}</div>

                <div class="card-body">
                <form action="news" method="post">
                        @csrf
                        <input type="text" name="Title" cols="30" placeholder="Write your title here">
                        <textarea name="newsBody" id="" cols="45" rows="20" class="form-control" placeholder="Body text"></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary">Add news</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endif

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Laatste Nieuws') }}</div>

                <div class="card-body">
                    @foreach($news as $new)
                    <h3>{{$new['Title']}}</h3>
                    
                    <p> {{$new['newsBody']}}<p>
                    <hr>
                    @if(Auth::check())
                    @if(Auth::user()->is_admin === 'admin')
                    <form action="DeleteN/{{$new['id']}}">
                    <button type="submit" class="btn btn-primary btn-sm">delete</button>
                    </form>
                    <br>
                    <form action="editNews/{{$new['id']}}">
                    <button type="submit" class="btn btn-secondary btn-sm">edit</button>
                    </form>

                    @endif 
                    @endif                   

                    <br>

                    
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>




@endsection