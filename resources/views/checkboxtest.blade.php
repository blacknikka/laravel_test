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
                            <form name="testform" action="/checkbox" method="post">
                                <div class="form-group">
                                    <label for="postMessage">Post message</label>
                                    <input type="text" class="form-control" aria-describedby="emailHelp" name="postMessage" placeholder="please write something.">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" name="checktest">
                                    <label class="form-check-label">Check me out</label>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection