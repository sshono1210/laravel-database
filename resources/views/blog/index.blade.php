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
                            <tr class="post">
                                <th class="col-xs-2">投稿１</th>
                                <td class="col-xs-3">ここにブログ記事が表示されます。・・・</td>
                                <td class="col-xs-1">2016-03-04</td>
                            </tr>
                            <tr class="post">
                                <th class="col-xs-2">投稿２</th>
                                <td class="col-xs-3">ここにブログ記事が表示されます。・・・</td>
                                <td class="col-xs-1">2016-03-04</td>
                            </tr>
                            <tr class="post">
                                <th class="col-xs-2">投稿３</th>
                                <td class="col-xs-3">ここにブログ記事が表示されます。・・・</td>
                                <td class="col-xs-1">2016-03-04</td>
                            </tr>
                            <tr class="post">
                                <th class="col-xs-2">投稿４</th>
                                <td class="col-xs-3">ここにブログ記事が表示されます。・・・</td>
                                <td class="col-xs-1">2016-03-04</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection