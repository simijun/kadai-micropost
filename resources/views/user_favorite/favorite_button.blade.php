@if (Auth::user()->is_favorite($micropost->id))
  {{-- お気に入り解除 --}}
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete' ]) !!}
        {!!Form::submit('unfavorite' ,['class' => "btn btn-primary btn-block"]) !!}
    {!! Form::close() !!}
    
@else
  {{-- お気にいり登録 --}}
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id], ]) !!}
        {!!Form::submit('favorite' ,['class' => "btn btn-primary btn-block"]) !!}
    {!! Form::close() !!}
@endif