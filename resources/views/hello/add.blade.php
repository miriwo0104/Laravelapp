@extends('layouts.helloapp')

@section('title', 'Index')

@section('menuber')
    @parent
    新規作成ページ
@endsection

@section('content')
<form action="/hello/add" method="post">
    <table>
        @csrf
        <tr><th>Name: </th><td><input type="text" name="name"></tr></td>
        <tr><th>Mail: </th><td><input type="text" name="mail"></tr></td>
        <tr><th>Age: </th><td><input type="text" name="age"></tr></td>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
</form>
@endsection

@section('footer')
    copyright 2020 miriwo.
@endsection