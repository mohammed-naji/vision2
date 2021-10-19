<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <a href="/email">Email</a>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>Personal Data</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('cvurl') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Name</label>
                        <input name="name" value="{{ old('name') }}" placeholder="Name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input name="email" value="{{ old('email') }}" type="email" placeholder="Email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Phone</label>
                        <input name="phone" value="{{ old('phone') }}" placeholder="Phone" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Education</label>
                        <select name="education" class="form-control">
                            <option disabled selected>Select</option>
                            <option {{ (old('education') == 'Diplome') ? 'selected' : '' }} value="Diplome">Diplome</option>
                            <option {{ (old('education') == 'Bacholer') ? 'selected' : '' }} value="Bacholer">Bacholer</option>
                            <option {{ (old('education') == 'Master') ? 'selected' : '' }} value="Master">Master</option>
                            <option {{ (old('education') == 'PhD') ? 'selected' : '' }} value="PhD">PhD</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>CV</label>
                        <input name="cv" type="file" class="form-control">
                    </div>
                    <button class="btn btn-warning w-100">Save</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
