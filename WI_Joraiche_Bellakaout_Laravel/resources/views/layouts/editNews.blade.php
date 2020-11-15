@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit News') }}</div>

                <div class="card-body">
                    <form action="/editNews" method="post">
                        @csrf
                        <input type="hidden" name="idnEdit" value="{{$news['id']}}">
                        <input type="text" name="newsTedit" value="{{$news['Title']}}">
                        <textarea name="newsBodyEdit" id="" cols="30" rows="10" class="form-control">{{$news['newsBody']}}</textarea>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form> 
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection