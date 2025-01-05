<h1>Hi User {{auth()->user()->fname}}</h1>
<form action="{{route('logout')}}" METHOD="POST">
    @csrf
    <button type="submit">Deconnexion</button>
</form>
