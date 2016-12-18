@extends('layouts.default')
@section('title', $user->name)
@section('content')
<div class="row">
  <div class="col-md-offset-2 col-md-8">
    <div class="col-md-12">
      <div class="col-md-offset-2 col-md-8">
        <section class="user_info">
          @include('shared.user_info', ['user' => $user])
        </section>
        <section class="stats">
          @include('shared.stats', ['user' => $user])
        </section>
      </div>
    </div>
    <div class="col-md-12">
      @if (Auth::check())
        @include('users._follow_form')
      @endif

      @if (count($statuses) > 0)
        <ol class="statuses">
          @foreach ($statuses as $status)
            @include('statuses._status')
          @endforeach
        </ol>
        {!! $statuses->render() !!}
      @endif
    </div>
  </div>
</div>
@stop
