@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <section class="page-heading">
        <p class="eyebrow">Contact</p>
        <h1>Let’s connect.</h1>
        <p>I’m glad you stopped by. If you’d like to talk about my projects, share an opportunity, or simply say hello, you can reach me here.</p>
    </section>
 
    <section class="prose-section contact-details">
        <h2>Email</h2>
        <p>Replace this sample address with your preferred contact details.</p>
        <p><a href="mailto:your.email@example.com">your.email@example.com</a></p>
        <h2>Looking ahead</h2>
        <p>I’m always open to a thoughtful conversation and new opportunities to learn. I look forward to hearing from you.</p>
    </section>

    <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['created_at'] }}</td>
                            <td>{{ $user['updated_at'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td class="empty-row" colspan="4">No users have been added yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
@endsection
