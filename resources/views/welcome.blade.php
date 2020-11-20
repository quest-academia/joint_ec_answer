@extends('layouts.app')
@section('content')
    <div class="center">

        <div class="text-center text-dark">
            <h1>やんばるエキスパート　ECサイト</h1>
        </div>

        @guest
            <div class="row mt-5">
                <div class="col-md-6 text-center">
                    <h5>まだアカウントをお持ちでない方はこちら</h5>
                    <h5 class="btn btn-primary w-50% mt-3">新規登録</h5>
                </div>

                <div class="col-md-6 text-center">
                    <h5>すでにアカウントをお持ちの方はこちら</h5>
                    <h5 class="btn btn-primary w-50% mt-3">ログイン</h5>
                </div>
            </div>
        @else
            <div class="row mt-5">
                <div class="col-md-6 text-center">
                    <h5>ご利用いただき、ありがとうございます</h5></br>
                    <h5>右上のメニューから商品を検索したり、注文したり出来ます</h5>
                </div>
            </div>
        @endguest

    </div>
@endsection