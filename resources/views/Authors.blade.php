@extends('layouts.app')

@section('content')


        <div class="col-md-9">
            <h1 style="color: #a00221;"><strong>Authors</strong></h1>
            @php
                $authors=App\Author::All();
            @endphp
            <div class="list-group col-md-6">
                @foreach ($authors as $author)
                    <div class="well " style="height: 500px">
                        <h3><?php echo $author->firstname." ".$author->lastname; ?></h3>
                    <h3><img src="<?php echo $author ->image; ?>" width="200" height="200" alt="" /></h3>
                        <h4><strong>Bio:</strong> <?php echo $author->details; ?></h4>
                        <h4><strong>BirthDate</strong> <?php echo $author->birthdate; ?>tk</h4>
                        <h4><strong>Deathdate</strong> <?php echo $author->deathdate; ?></h4>
                    </div>
                @endforeach

            </div>

        </div>

</div>
@endsection
