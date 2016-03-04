@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New post</div>
                    <div class="panel-body">
                        <form action="/blog/confirm" method="post">
                            {{csrf_field()}}

                        <div class="col-xs-12">
                            <div class="form-group">
                            <lavel for="blogTitle"><strong>タイトル</strong></lavel>
                            <textarea class="form-control" id="blogTitle" name="blogTitle" rows="1"></textarea>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                            <lavel for="blogContents"><strong>内容</strong></lavel>
                            <textarea class="form-control" id="blogContents" name="blogContents" rows="20"></textarea>
                            </div>
                        </div>

                        <div class="form-group col-xs-12">
                            <lavel for="blogUpdateDay"><strong>更新日</strong></lavel>
                            <input class="form-control" id="blogUpdateDay" name="blogUpdateDay" placeholder="yyyy-mm-dd"></input>
                        </div>

                        <div class="form-group col-xs-6">
                            <button type="button" class="btn btn-default">戻る</button>
                            <button submit="button" class="btn btn-primary">確認画面へ</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection