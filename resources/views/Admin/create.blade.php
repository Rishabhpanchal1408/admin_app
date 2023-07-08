@extends('welcome')
@section('data')
    <form action="/store/admin" method="POST" class="w-25 mx-auto mt-4 border shadow-lg p-3">@csrf @method('POST')
        <div class="text-center">
            <img class="w-75 mx-auto"
                src="https://img.freepik.com/premium-vector/man-working-laptop-cartoon-illustration_607277-148.jpg?w=2000" />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label"><b>Email :</b></label>
            <input type="email" name="email" placeholder="Email" class="form-control">
            @error('email')
                <p class="text-danger pt-2">Invalid Email!!</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label"><b>Password :</b></label>
            <input type="password" name="password" placeholder="Password" class="form-control">
            @error('password')
                <p class="text-danger pt-2">Invalid Password !!</p>
            @enderror
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                in</button>
        </div>
    </form>
@endsection
