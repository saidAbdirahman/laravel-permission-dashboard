@if(!empty(session('sucess')))
<div class="alert alert-sucess" role ="alert">
    {{ session('sucess')}}
</div>
@endif

@if(!empty(session('error')))
<div class="alert alert-danger" role ="alert">
    {{ session('error')}}
</div>
@endif  