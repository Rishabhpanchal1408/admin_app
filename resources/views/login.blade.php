@extends('welcome')
@section('data')
    <form action="/login/store" method="POST" class="w-25 mx-auto mt-4 border shadow-lg p-3">@csrf @method('POST')
        <div class="text-center">
            <img class="w-75 mx-auto"
                src="https://img.freepik.com/premium-vector/man-working-laptop-cartoon-illustration_607277-148.jpg?w=2000" />
        </div>
        <div class="mb-3">
            <label for="number" class="form-label"><b>Contact No :</b></label>
            <input type="number" name="number" class="form-control" id="floatingInput" placeholder="Contact No">
            @error('number')
                <p class="text-danger pt-2">Should be same as registered!!</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label"><b>Password</b></label>
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            @error('password')
                <p class="text-danger pt-2">Shoul be same as Registered!!</p>
            @enderror
        </div>

        <div class="d-grid">
            <button class="btn btn-success btn-login text-uppercase fw-bold" type="submit">Sign
                in</button>
        </div>
        <hr class="my-3">
        <p class="text-center"><b>Don't Have An Account ? Register Now</b></p>
        <div class="d-grid mb-2">
            <a href="/create" class="btn btn-google btn-primary btn-register text-uppercase fw-bold"> Register Now </a>
        </div>
    </form>
@endsection
