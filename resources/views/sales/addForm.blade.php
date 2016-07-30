<link rel="stylesheet" href="/css/bootstrap.css">
<script src='/js/jquery.min.js'></script>

<script src='/js/bootstrap.js'></script>
<script src="/js/angular.min.js"></script>

@foreach($products as $product)


<div class="row">
    <div class="col-lg-4">

    </div>
    <div class="col-lg-4" style="text-align: center;">
        <H1>Buy {!! $product->productName !!}</H1>

        <H3> {!! $product->productName !!} </H3>

        Cost Ksh {!! $product->productCost !!}
       <div class="row">
           <button class="btn btn-block btn-primary"> Proceed to buy</button>
       </div>

        <div class="row ">
           {{Form::open( array())}}
            <formgroup>
                {{ csrf_field() }}
                {{Form::hidden('name',$product->productName)}}

                {{Form::text('quantity','', array('class' => 'form-control', "ng-model"=>"quantity","placeholder"=>"Quantity"))}}
                <P>jkjdhkjashdkjh <span ng-bind="quantity"></span></P>




            </formgroup>

            {{Form::close() }}

        </div>
    </div>
    <div class="col-md-4">

    </div>
</div>
@endforeach