@if ($micropost->favorite_users()->where('users.id', Auth::id())->count() > 0)
                {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
                {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-sm"]) !!}
                {!! Form::close() !!}
            @else
                {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
                {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-sm"]) !!}
                {!! Form::close() !!}
            @endif