@foreach(['success', 'danger', 'warning', 'info'] as $msg)
    @if (\Session::has($msg))
        <div class="alert alert-{{ $msg }}">
            提示： {{ \Session::get($msg) }}
        </div>
    @endif
@endforeach