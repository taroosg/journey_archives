@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
        <form action="{{ url('journeys/update') }}" method="POST">
            <!-- 出発地関連 -->
            <div class="form-group">
                <label for="departure">出発地*</label>
                <input type="text" id="departure" name="departure" class="form-control" value="{{$journey->departure}}">
            </div>
            <div class="form-group">
                <label for="dep_time">出発時間*</label>
                <input type="time" id="dep_time" name="dep_time" class="form-control" value="{{$journey->dep_time}}">
            </div>
            <div class="form-group">
                <label for="dep_comment">コメント</label>
                <input type="text" id="dep_comment" name="dep_comment" class="form-control" value="{{$journey->dep_comment}}">
            </div>
            <!--/出発地関連-->
            <!-- 経路関連 -->
            <div class="form-group">
                <label for="route">経路*</label>
                <input type="text" id="route" name="route" class="form-control" value="{{$journey->route}}">
            </div>
            <div class="form-group">
                <label for="r_comment">コメント</label>
                <input type="text" id="r_comment" name="r_comment" class="form-control" value="{{$journey->r_comment}}">
            </div>
            <!--/経路関連-->

            <!-- 目的地関連 -->
            <div class="form-group">
                <label for="destination">出発地</label>
                <input type="text" id="destination" name="destination" class="form-control" value="{{$journey->destination}}">
            </div>
            <div class="form-group">
                <label for="des_time">Number</label>
                <input type="time" id="des_time" name="des_time" class="form-control" value="{{$journey->des_time}}">
            </div>
            <div class="form-group">
                <label for="des_comment">Amount</label>
                <input type="text" id="des_comment" name="des_comment" class="form-control" value="{{$journey->des_comment}}">
            </div>
            <!--/目的地関連-->
            <!-- Saveボタン/Backボタン -->
            <div class="well well-sm">
                <a class="btn btn-link pull-right" href="{{ url('/') }}">
                    <i class="glyphicon glyphicon-backward"></i>  Back
                </a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <!-- id 値を送信 -->
            <input type="hidden" name="id" value="{{$journey->id}}" /> <!--/ id 値を送信 -->
            <!-- CSRF -->
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection