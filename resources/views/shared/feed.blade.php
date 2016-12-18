@if (count($feed_items))
<ol class="statuses">
  @foreach ($feed_items as $status)
    @include('statuses._status', ['user' => $status->user])
  @endforeach
  {!! $feed_items->render() !!}
</ol>
@endif
