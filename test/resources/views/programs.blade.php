@extends('layouts.app')

@section('title', $title)

@section('content')
    <section class="page-heading">
        <p class="eyebrow">Portfolio</p>
        <h1>My projects</h1>
        <p>A selection of projects I have completed as part of my coursework.</p>
    </section>

    <section class="project-section" aria-labelledby="projects-title">
        <div class="section-heading">
            <div>
                <p class="eyebrow">Project list</p>
                <h2 id="projects-title">Projects</h2>
            </div>
            <p>{{ count($programs) }} {{ \Illuminate\Support\Str::plural('program', count($programs)) }}</p>
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Project title</th>
                        <th scope="col">Project code</th>
                        <th scope="col">Course</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($programs as $program)
                        <tr>
                            <td>{{ $program['title'] }}</td>
                            <td>{{ $program['code'] }}</td>
                            <td>{{ $program['course'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td class="empty-row" colspan="3">No programs have been added yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
