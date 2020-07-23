
<div class="row">
    @foreach($profile as $p)
    <div class="col-md-12">
        <h5>address:{{ $p->address }}</h5>
    </div>
    @endforeach
</div>