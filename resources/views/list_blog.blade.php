@extends('layout')


@section('content')
<x-list-row >
    @unless (count($blogs) == 0)
        @foreach ($blogs as $blog)
            <x-blog-card :blog="$blog" />
        @endforeach
    @else
        <p> thre si sno blogs</p>
    @endunless
</x-list-row>
@endsection
