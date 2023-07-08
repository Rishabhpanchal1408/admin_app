@extends('welcome')
@section('data')
    <div class="container mt-4">
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>Sr.no</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Number</th>
                    <th>Gender</th>
                    <th>Hobby</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->number }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->hobby }}</td>
                        <td>{{ $student->address }}</td>
                        <td><img src={{ asset('storage/' . $student->profile_photo) }} alt="Img" style="width:100px"
                                class="d-block mx-auto">
                        </td>
                        <td class="d-flex justify-content-between">
                            <a href="/edit/{{ $student->id }}" class="btn btn-primary">Edit</a>
                            <form action="/{{ $student->id }}" method="POST">@csrf @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
