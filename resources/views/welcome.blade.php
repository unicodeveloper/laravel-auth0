@extends('layouts.app')

@section('content')
<script src="https://cdn.auth0.com/js/lock-9.1.min.js"></script>
<script type="text/javascript">

  var lock = new Auth0Lock('PATkFym2gZQS3lEIUCS68qrSl8jgVD7P', 'unicodeveloper.auth0.com');


  function signin() {
    lock.show({
        callbackURL: 'http://laravel-auth0.dev/auth0/callback'
      , responseType: 'code'
      , authParams: {
        scope: 'openid email'  // Learn about scopes: https://auth0.com/docs/scopes
      }
    });
  }
</script>
<button onclick="window.signin();">Login</button>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">List of Game of Thrones Characters</div>

                    @if(Auth::check())
                    
                      <table class="table">
                          <tr>
                              <th>Character</th>
                              <th>Real Name</th>
                          </tr>
                          @foreach($characters as $key => $value)
                            <tr>
                              <td>{{ $key }}</td><td>{{ $value }}</td>
                            </tr>
                          @endforeach
                      </table>
                    @endif


            </div>
            @if(Auth::guest())
              <a href="/login" class="btn btn-info"> You need to login to see the list 😜😜 >></a>
            @endif
        </div>
    </div>
</div> -->
@endsection
