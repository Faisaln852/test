<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    {{-- {!!form::open(['method'=>'post','action'=>'UserController.store)'])!!}
    <div>
        {!!form::label('title','Title')!!}
        {!!form::text('title',null)!!}

    </div>
    <div>
{{!!form::submit('Submit')!!}}
    </div>
    {!!form::close()!!} --}}

    <div class="container">
        <div class="row py-5">
            <div class="col-md-8 mx-auto">
                {!! Form::open(['route' => 'user.store','method'=>'post']) !!}
                <div class="form-control">
                    {!! form::label('name', 'Name') !!}
                    {!! Form::text('name',null,['class'=>'form-control','placeholder' => 'enter name']) !!}
                    @if ($errors->has('name'))
                    <div class="alert alert-danger alert-dismissible fade show"role="alert">
                        {{ $errors->first('name') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                     @endif
                </div>
                <div class="form-control">
                    {!! Form::label('email', 'Email') !!}
                    {!! form::email('email',null,['class'=>'form-control','placeholder' => 'enter email']) !!}
                    @if ($errors->has('email'))
                    <div class="alert alert-danger alert-dismissible fade show"role="alert">
                        {{ $errors->first('email') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                     @endif
                </div>
                <div class="form-control">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password',['class'=>'form-control','placeholder' => 'enter password']) !!}
                    @if ($errors->has('password'))
                    <div class="alert alert-danger alert-dismissible fade show"role="alert">
                        {{ $errors->first('password') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                     @endif
                </div>
                <div class="form-control">
                    {!! Form::label( 'Confirm Password') !!}
                    {!! form::password('confirm-password',['class'=>'form-control','placeholder' => 'enter password']) !!}
                    @if ($errors->has('confirm-password'))
                    <div class="alert alert-danger alert-dismissible fade show"role="alert">
                        {{ $errors->first('confirm-password') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                     @endif
                </div>
                {!! Form::submit('submit',['class'=>'btn btn-success']) !!}

                {!! form::close() !!}

            </div>
        </div>

    </div>
    {{-- {!! Form::open(['route' => 'user.store','method'=>'post']) !!} --}}






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
   <script>
        window.setTimeout(function() {
          $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
          });
        }, 1000);
      </script>

</body>
</html>
