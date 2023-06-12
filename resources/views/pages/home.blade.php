@extends( 'layout.app' )

@section('titlePage')
 Home
@endsection

@section( 'content' )




<h1 class="text-center text-uppercase fs-1 fw-bolder text-light mt-4">MOVIES</h1>



<div class="maincore col-8 m-auto d-flex flex-wrap gap-4 h-100 p-4 bg-dark justify-content-center">

    @foreach ($movies as $item)
        
        <div class="card col-3">
            <div class="card-body">
                <h4 class="card-title"> {{ $item['title'] }} </h4>
                <p class="card-text">OT: {{ $item['original_title'] }}</p>
                <p class="card-text">State: {{ $item['nationality'] }}</p>
                <p class="card-text">Date: {{ $item['date'] }}</p>
                <p class="card-text">Vote: {{ $item['vote'] }}</p>
            </div>
        </div>

    @endforeach

</div>



@endsection