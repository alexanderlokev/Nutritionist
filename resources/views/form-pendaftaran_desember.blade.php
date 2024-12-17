<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <title>Register</title>
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>

    <body class="antialiased">
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>{{__('form.judul')}}</h1>
                <p>Current Locale: {{ app()->getLocale() }}</p>
                <hr>

                <form action="{{ route('mahasiswa_desembers.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="nama">{{__('form.input.nama_lengkap')}}:</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        value="{{ old('nama') }}">
                        @error('nama')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>

                    <br>

                    <div class="form-group">
                        <label>{{__('form.input.jenis_kelamin')}}:</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L"
                                {{ old('jenis_kelamin')=='L' ? 'checked': '' }}>
                                <label class="form-check-label" for="laki_laki">{{__('form.input.pilihan_jenis_kelamin.laki_laki')}}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P"
                                {{ old('jenis_kelamin')=='P' ? 'checked': '' }}>
                                <label class="form-check-label" for="perempuan">{{__('form.input.pilihan_jenis_kelamin.perempuan')}}</label>
                            </div>
                            @error('jenis_kelamin')
                                <div class="text-danger">{{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="email">{{__('form.input.email')}}:</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" 
                        value="{{ old('email') }}">
                        @error('password')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Register</button>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>