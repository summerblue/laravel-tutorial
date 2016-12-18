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
      </div>
    </div>
    <div class="col-md-12">
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
