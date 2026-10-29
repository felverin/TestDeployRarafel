@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="intro">
        <p class="eyebrow">A little about me</p>
        <h1>Hello, I’m <span class="placeholder">[Your Name]</span>.</h1>
        <p class="intro-copy">I’m a student who enjoys learning, asking questions, and turning new ideas into useful skills. This is a small space to share my background, the projects I have worked on, and how to get in touch.</p>
        <p class="text-link"><a href="{{ route('programs') }}">Explore my projects</a></p>
    </section>

    <section class="prose-section">
        <p class="eyebrow">In a few words</p>
        <h2>Curious by nature, growing through experience.</h2>
        <p>I believe every class, project, and conversation can teach me something worth carrying forward. I’m building my knowledge through coursework and looking for thoughtful ways to put it into practice.</p>
        <p>Use this introduction to share what you are learning, what motivates you, and what you hope to do next.</p>
    </section>
@endsection
