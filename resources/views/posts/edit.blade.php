@extends('layouts.simple')

@section('content')


      <div class=".container-fluid">
          <div class="offset-md-4 col-md-4">
                {!! Form::model($post,['method'=>'PATCH','action'=>['PostController@update',$post->id],'files'=>true]) !!}


                 <div class="form-group">
                           {!! Form::label('title','Title:') !!}
                           {!! Form::text('title',null,['class'=>'form-control']) !!}

                       </div>


                    {{csrf_field()}}


                  <div class="form-group">

                          {!! Form::file('file',['class'=>'form-control']) !!}

                      </div>

                    {!! Form::submit('Submit!',['class'=>'btn btn-primary btn-block']) !!}


                   {!! Form::close() !!}


                {!! Form::close() !!}

          </div>
      </div>