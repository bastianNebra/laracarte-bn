@extends('layouts.master',['title'=>'Contact'])

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2 col-sm-offset-1">
            <h2>Contact Page</h2>
            <p class="text-muted">If you have trouble with this services please contact <a href="mailto:123bastianlontsi@gmail.com">uns for help</a></p>

            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-1">
                        @if($errors->first())
                            <ol class="alert alert-danger">
                            
                                @if($errors->first('name'))
                                    <li>{{ $errors->first('name') }}</li>
                                @endif

                                @if($errors->first('email'))
                                    <li>{{ $errors->first('email') }}</li>
                                @endif

                                @if($errors->first('message'))
                                    <li>{{ $errors->first('message') }}</li>
                                @endif

                            </ol>
                        @endif
                </div>
            </div>

            <form action="{{ route('contact_path') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" id="name" placeholder="Jean claude" class="form-control">
                </div>

                <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" id="email" placeholder="Jeancleade@gmail.cm" class="form-control">
                </div>

                <div class="form-group {{ $errors->has('name')?'has-error':'' }}">
                    <label for="message" class="control-label sr-only">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control">My massage here....</textarea>
                </div>

                 <div class="form-group">
                    <input type="submit" value="Send Mail &raquo;" class="btn btn-block btn-primary">
                </div>
            </form>
        </div>
    </div>

@endsection
