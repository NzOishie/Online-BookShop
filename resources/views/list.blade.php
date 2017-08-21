@extends('layouts.app')

@section('content')


        <div class="col-md-9">
            @php
                $books=App\Book::All();
            @endphp
            @foreach ($books as $book)
                <div class="well col-md-4" style="height: 450px">
                    <h3><?php echo $book->name; ?></h3>
                    <h3><img src="<?php echo $book->image; ?>" width="200" height="200" alt="" /></h3>
                    <h4>Price: <?php echo $book->price; ?>tk</h4>
                    <h5>Author: <?php echo $book->author; ?></h5>
                </div>
            @endforeach

        </div>

</div>
@endsection
