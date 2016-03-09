@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Blog</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr class="post">
                                <th class="col-xs-2">タイトル</th>
                                <td class="col-xs-3">内容</td>
                                <td class="col-xs-1">更新日</td>
                            </tr>
                            @foreach($pageList as $page)
                            <tr class="post">
                                <th class="col-xs-2">{{$page->blogTitle}}</th>
                                <td class="col-xs-3">{{$page->blogContents}}</td>
                                <td class="col-xs-1">{{$page->blogUpdateDay}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection