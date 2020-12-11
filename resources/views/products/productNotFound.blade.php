@extends('layouts.app')
@section('content')
    <div class="center">
        <div class="text-center">
            <h4>該当商品が見つかりませんでした...</h4>
        </div>
        <div class="text-center mt-5">
            <h5>商品検索画面に戻り、やり直してください</h5>
        </div>
        <div class="text-center">
            {!! link_to_route('products.index', '商品検索画面へ', [], ['class'=>'btn btn-primary mt-2 mb-1 w-25%']) !!}
        </div>
    </div>
@endsection