@extends('layouts.master_layout')

@section('contents')

    @includeWhen(last(request()->segments()) == 'blog', 'main.blogContent')

    @includeUnless(last(request()->segments()) == 'blog', 'main.viewBlogContent')

@endsection
