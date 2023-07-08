@extends('welcome')
@section('data')
    <div class="container">
        <form action="/{{ $student->id }}" method="POST" enctype="multipart/form-data"
            class="w-100 mx-auto mt-3 border p-4 shadow-lg rounded-3">@csrf
            @method('PUT')
            <div class="row ">
                <div class="col-5">
                    <h3 class="text-center ps-4" style="font-family: Georgia, 'Times New Roman', Times, serif">
                        Update Your Details</h3>
                    <div class="mt-5">
                        <span><b>Your Profile Pic :</b></span>
                        <img class="w-100 img-fluid" {{-- src="https://img.freepik.com/premium-vector/man-working-laptop-cartoon-illustration_607277-148.jpg?w=2000" /> --}}
                            src={{ asset('storage/' . $student->profile_photo) }} />
                    </div>
                </div>
                <div class="col-6">
                    <div class="row mt-4 mx-auto">
                        <div class="p-1 col-12">
                            <label for="first_name" class="form-label"><b>First Name :</b></label>
                            <input type="text" name="first_name" placeholder="First Name" class="form-control"
                                value={{ $student->first_name }}>
                            @error('first_name')
                                <span class="text-danger pt-2">Filled Cannot Be Empty!!</span>
                            @enderror
                        </div>
                        <div class="p-1 col-12">
                            <label for="last_name" class="form-label"><b>Last Name :</b></label>
                            <input type="text" name="last_name" placeholder="Last Name" class="form-control"
                                value={{ $student->last_name }}>
                            @error('last_name')
                                <span class="text-danger pt-2">Filled Cannot Be Empty!!</span>
                            @enderror
                        </div>

                        <div class="p-1 col-6">
                            <label for="gender"><b>Gender :</b></label>
                            <div class="pt-3">
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="gender"
                                        value='male'{{ $student->gender == 'male' ? 'checked' : '' }}>
                                    <label for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="gender"
                                        value='female'{{ $student->gender == 'female' ? 'checked' : '' }}>
                                    <label for="male">Female</label>
                                </div>
                                @error('gender')
                                    <p class="text-danger pt-2">Please select Gender!!</p>
                                @enderror
                            </div>
                        </div>
                        <div class="p-1 col-6 mx-auto">
                            <label for="hobby"><b>Hobby :</b></label>
                            <div class="pt-3">
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="hobby[]" class="form-check-input"
                                        value='cricket'@foreach ($student->hobby as $hobby)
                                            {{ $hobby == 'cricket' ? 'checked' : '' }} @endforeach>
                                    <label for="hobby">Cricket</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="hobby[]" class="form-check-input"
                                        value='football'@foreach ($student->hobby as $hobby)
                                        {{ $hobby == 'football' ? 'checked' : '' }} @endforeach>
                                    <label for="hobby">Football</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="hobby[]" class="form-check-input"
                                        value='hockey'@foreach ($student->hobby as $hobby)
                                        {{ $hobby == 'hockey' ? 'checked' : '' }} @endforeach>
                                    <label for="hobby">Hockey</label>
                                </div>
                                @error('hobby')
                                    <span class="text-danger ot-2">Please select any one!!</span>
                                @enderror
                            </div>
                        </div>
                        <div class="p-1 col-6">
                            <label for="number" class="form-label"><b>Contact No :</b></label>
                            <input type="number" name="number" placeholder="Contact no" class="form-control"
                                value={{ $student->number }}>
                            @error('number')
                                <span class="text-danger pt-2">Filled Cannot Be Empty!!</span>
                            @enderror
                        </div>
                        <div class="p-1 col-6">
                            <label for="address" class="form-label"><b>Address :</b></label>
                            <textarea name="address" placeholder="Address" id="address" class="form-control">{{ $student->address }}</textarea>
                            @error('address')
                                <span class="text-danger ot-2">Please Enter your Address!!</span>
                            @enderror
                        </div>
                        <div class="p-1 col-6">
                            <label for="profile_photo" class="form-label"><b>Image Upload :</b></label>
                            <input type="file" name="profile_photo" placeholder="Select Your File" class="form-control"
                                value={{ $student->profile_photo }}>
                            @error('profile_photo')
                                <span class="text-danger ot-2">Select file!!</span>
                            @enderror
                        </div>
                        <div class="p-1 col-6">
                            <label for="password" class="form-label"><b>Password :</b></label>
                            <input type="password" name="password" placeholder="Password" class="form-control"
                                value={{ $student->password }}>
                            @error('number')
                                <span class="text-danger pt-2">Filled Cannot Be Empty!!</span>
                            @enderror
                        </div>
                        <div class="d-grid p-2">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
