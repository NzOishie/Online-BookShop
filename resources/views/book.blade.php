@extends('layouts.app')

@section('content')



            @php
                $book=App\Book::find(1);
            @endphp

                <div class="well "S>
                    <h1 style="color: #a00221;"><?php echo $book->name; ?></h1>
                    <br>

                    <h2 ><img src="<?php echo $book->image; ?>" width="400" height="400" alt="" /></h2>
                    <div class="col-md-offset-3">
                        <h3 ><strong style="color: #a00221;">Catagory: </strong> <?php echo $book->catagory; ?>tk</h3>
                        <h3 ><strong style="color: #a00221;">Details:</strong> <h4>
                            <?php echo $book->details; ?></h4></h3>
                        <h4 ><strong style="color: #a00221;">Author: </strong> <?php echo $book->author; ?></h4>
                        <h4 ><strong style="color: #a00221;">Publisher: </strong> <?php echo $book->publisher; ?></h4>
                        <h4 ><strong style="color: #a00221;">Price: </strong> <?php echo $book->price; ?>tk</h4>
                    </div>

                </div>




</div>
@endsection
