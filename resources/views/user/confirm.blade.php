@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header bg-dark text-white">ユーザ登録確認</div>

                <div class="card-body">
                    <form role="form" method="POST" action="{{ url('user/complete') }}">
                        {!! csrf_field() !!}

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label text-lg-right">名前</label>

                            <div class="col-lg-6">
                                {{ Session::get('name') }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label text-lg-right">メールアドレス</label>
                            <div class="col-lg-6">
                            {{ Session::get('email') }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label text-lg-right">パスワード</label>
                            <div class="col-lg-6">
                                {{ Session::get('password') }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6 offset-lg-4">
                                <button type="submit" class="btn btn-primary">
                                    登録する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection