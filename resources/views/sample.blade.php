@extends('master') 
@section('content')
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            sample
                        </div>
                        <div class="card-body">
                            <form name="testform" action="/test" method="post">
                                {{ csrf_field() }} 名前:
                                <input class="card-text" type="text" name="name" size="30"><span>{{$errors->first('name')}}</span>
                                <button class="btn btn-primary" type="submit" name="testaction" value="testdoing">send</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection