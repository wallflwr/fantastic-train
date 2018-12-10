<?php 
      <div id="name" class="tabcontent">
      <h3>Details</h3>
    <li><div class="details"><label> Name</label><span>{{ $error->name }}</span></div>
        <div class="details"><label> Email</label><span>{{ $error->email }}</span></div>
        <div class="details"><label> Address</label><span>{{ $error->address }}</span></div>
        <div class="details"><label> Age</label><span>{{ $error->age }}</span></div>
        <div class="details"><label> Phone</label><span>{{ $error->phonenum }}</span></div>


     {!! Form::open() !!}
        {!! Form::submit('Edit', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}</li>
   {!! Form::open() !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}</li>
    @endforeach
  </ul>
  