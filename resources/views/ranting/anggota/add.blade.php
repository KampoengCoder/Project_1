@extends('ranting.layouts.main')

@section('container')
    <div class="w-full mt-8 px-4 md:px-0 md:container">
        <form action="/admin/cabang/add" method="POST" class=" rounded-md h-screen  shadow-best" enctype="multipart/form-data">
            <h1 class="text-center font-semibold text-2xl text-gray-900 dark:text-white">Tambah Anggota</h1>
            @csrf

            <div class="mt-4">
                <label for="nama" class="text-gray-900 dark:text-white">Nama</label>
                <input type="text" name="nama" id="nama"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 
                    @error('nama')
                    peer
                     @enderror"
                    value="{{ old('nama') }}" />

                @error('nama')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <div class="mt-4">
                <label for="nia" class="text-gray-900 dark:text-white">NIA</label>
                <input type="text" name="nia" id="nia"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                    @error('nia')
                    peer
                     @enderror"
                    value="{{ old('nia') }}" />

                    @error('nia')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mt-4">
                <label for="ranting" class="text-gray-900 dark:text-white">Ranting</label>
                <input type="text" name="ranting" id="ranting"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                    @error('ranting')
                    peer
                     @enderror"
                    value="{{ old('ranting') }}" />

                    @error('ranting')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mt-4">
                <label for="alamat" class="text-gray-900 dark:text-white">Alamat</label>
                <input type="alamat" name="alamat" id="alamat"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                    @error('alamat')
                    peer
                     @enderror"
                    value="{{ old('alamat') }}" />

                    @error('alamat')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mt-4">
                <label for="ttl" class="text-gray-900 dark:text-white">Tempat Tanggal Lahir</label>
                <input type="date" name="ttl" id="ttl"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500
                    @error('name')
                    peer
                     @enderror"
                    value="{{ old('ttl') }}" />

                    @error('ttl')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mt-4">
                <label for="tingkatan" class="text-gray-900 dark:text-white">Tingkatan</label>
                <input type="tingkatan" name="tingkatan" id="tingkatan"
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('tingkatan')
                    peer
                     @enderror"
                    value="{{ old('tingkatan') }}" />

                    @error('tingkatan')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="flex gap-x-4 mt-4">
                <button type="submit" class="bg-green-600 py-2 px-4 rounded-md text-white">kirim</button>
                <a href="/admin/cabang" class="bg-red-600 px-4 py-2 text-white rounded-md">batal</a>
            </div>
        </form>
    </div>
@endsection