@if ($alert = Session::get('alert-failed'))
    <div class="alert alert-warning alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> x </button>
        {{ $alert }}. </div>
@endif