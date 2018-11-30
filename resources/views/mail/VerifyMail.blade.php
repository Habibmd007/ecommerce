<h2>Registration succsessfull</h2>
<p>
    Dear {{$user->name}} <br>
    activate your account by clicking your following link <br>

    <a href="{{config('app.url')}}/verify/{{$user->verification_token}}">
        Click here
    </a>
</p>