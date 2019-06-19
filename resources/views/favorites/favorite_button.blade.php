@if (Auth::id() != $micropost->id)
    @if (Auth::user()->is_favoriting($micropost->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete', 'class' => 'd-inline-block']) !!}
                {!! Form::submit('Unfavorite', ['class' => 'btn btn-success btn-sm']) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id], 'class' => 'd-inline-block']) !!}
                {!! Form::submit('Favorite', ['class' => 'btn btn-light btn-sm']) !!}
        {!! Form::close() !!}
    @endif
@endif

