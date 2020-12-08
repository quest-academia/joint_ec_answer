@extends('layouts.app')
@section('content')

    <div class="center">
        <div class="text-center text-dark">
            <h3>商品検索画面</h3>
        </div>

        {!! Form::open(['route'=>'search', 'method' => 'get']) !!}
            <div class="row">
                <div class="col-md-6 offset-md-1 ">
                    <div class="form-group mt-4">
                        <div class="form-inline">
                            <h6 class="">キーワード検索</h6>
                                {!! Form::text('description',null,['class'=>'form-control ml-2', 'style'=>'width:60%']) !!}
                        </div>

                        <div class="form-inline mt-2">
                            <p class="mt-3 mr-4">商品カテゴリ</p>
                            <select type="text" class="" name="category_id" style='width:60%'>
                                <option>未選択</option>
                                @foreach($categories as $key=>$category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 mt-4">
                    <div class="text-md-left text-center">
                        {!! Form::submit('検索',['class'=> 'text-center btn btn-primary']) !!}
                    </div>
                </div>
            </div>
        {!! Form::close() !!}

    </div>
@endsection