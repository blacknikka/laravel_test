@extends('master') 
@section('content')
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">hello!!</h4>
                    </div>

                    <table class="table">
                        @if (Auth::check())
                        <thead>
                            <th> {{\Auth::user()->name}}さん</th>
                        </thead>
                        <tr>
                            <th> <a href="/auth/logout">logoutする</a>
                            </th>
                        </tr>

                        @else
                        <thead>
                            ゲストさん
                        </thead>
                        <tr>
                            <th>
                                <a href="/auth/login">loginする</a><br />
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="/auth/register">登録</a> @endif
                            </th>
                        </tr>
                        <div class="form-group row">
                        </div>
                        <div class="form-group row">
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection