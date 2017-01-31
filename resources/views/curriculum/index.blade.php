@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Curriculum</div>

                <div class="panel-body">
                    <!-- if there are creation errors, they will show here -->
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::open(array('class' => 'form','url'=>'curriculum/create','method'=>'post')) !!}
                        <div class="form-group">
                            {!! Form::label('Curriculum name') !!}
                            {!! Form::text('name', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Curriculum name')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Submit',
                              array('class'=>'btn btn-primary')) !!}
                        </div>
                    {!! Form::close() !!}

                    <div>
                        @include('curriculum.list')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
