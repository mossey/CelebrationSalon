<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src='/js/jquery.min.js'></script>

    <script src='/js/bootstrap.js'></script>
</head>
<body>
<div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
        <h1>this is the form</h1>
        {{Form::open(array('action' => 'StylistsController@store','files'=>true,'method'=>'post'))}}


        <formgroup>
            {{ csrf_field() }}
            {{Form::text('name','', array('class' => 'form-control'))}}
            {{Form::text('description','', array('class' => 'form-control'))}}
            {{ Form::file('image', array("class"=>"form-control")) }}



            <button class="btn-primary btn-block"></button>
           </formgroup>
            <button class="btn-block btn btn-primary">SUBMIT</button>
        {{Form::close()}}
    </div>
    <div class="col- md-4">

    </div>
</div>
</body>
</html>
