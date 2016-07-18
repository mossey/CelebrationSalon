<link rel="stylesheet" href="/css/bootstrap.css">
<script src='/js/jquery.min.js'></script>

<script src='/js/bootstrap.js'></script>

<div class="row">
    <div class="col-lg-4">

    </div>
    <div style="align-text: center;" class="col-lg-4">
        <h1> Add new products</h1>
        {{Form::open(array('action' => 'productsController@store','files'=>true,'method'=>'post'))}}
        <formgroup>
            {{ csrf_field() }}
            {{Form::text('name','', array('class' => 'form-control', "placeholder"=>"Product Name"))}}
            {{Form::textarea('description','', array('class' => 'form-control' ,"placeholder"=>"Product Description"))}}
            {{Form::number('cost','', array('class' => 'form-control',"placeholder"=>"cost"))}}
            {{Form::number('quantity','', array('class' => 'form-control',"placeholder"=>"Quantity"))}}
            {{ Form::file('image', array("class"=>"form-control", "placeholder"=>"Select product image")) }}




        </formgroup>
        <button class="btn-block btn btn-primary">Add new product</button>

        {{Form::close()}}
    </div>

    <div class="col-md-4">

    </div>

</div>