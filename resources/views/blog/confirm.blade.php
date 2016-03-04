@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Confirm</div>

                    <div class="panel-body">
                        <form action="/blog/complete" method="post">
                            {{csrf_field()}}

                        <div class="col-xs-12">
                            <div class="form-group">
                                <p><strong>タイトル</strong></p>
                                <p>{{ old('blogTitle')  }}</p>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                                <p><strong>内容</strong></p>
                                <p>{{ old('blogContents')  }}</p>
                            </div>
                        </div>

                        <div class="form-group col-xs-12">
                            <p><strong>更新日</strong></p>
                            <p>{{ old('blogUpdateDay')  }}</p>
                        </div>

                        <div class="form-group col-xs-6">
                            <button type="button" class="btn btn-default">戻る</button>
                            <button type="submit" class="btn btn-success">投稿する</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection