@extends('ranting.layouts.main')

@section('container')
    <div class="w-full mt-8 pb-4 p-6 h-screen">

        <div
            class="items-center justify-between p-4 bg-white dark:bg-gray-800 border border-gray-200 relative rounded-lg shadow-sm dark:border-gray-700 sm:p-6 ">
            <div class="w-full">
                <h1 class="text-white font-semibold text-xl">Data Anggota</h1>

                <form class="" action="/admin/cabang">

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-4 justify-between my-5">
                        <div class="mt-4">

                            <label for="nama"
                                class="dark:text-white text-grey-900 font-semibold inline-block">Nama</label>
                            <input type="text" id="nama" name="nama"
                                class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-12"
                                placeholder="Ex : Paijo" value="{{ request('nama') }}">

                        </div>

                        <div class="mt-4">

                            <label for="ranting"
                                class="dark:text-white text-grey-900 font-semibold inline-block">Ranting</label>
                            <input type="text" id="ranting" name="ranitng"
                                class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-12"
                                placeholder="Ex : Gembong" value="{{ request('ranting') }}">

                        </div>



                        <div class="mt-4">

                            <label for="nia"
                                class="dark:text-white text-grey-900 font-semibold inline-block">NIA</label>
                            <input type="text" id="nia" name="nia"
                                class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-12"
                                placeholder="12.313.2012.1212" value="{{ request('nia') }}">

                        </div>


                    </div>

                    <div class="flex w-full gap-x-8">

                        <button
                        class="focus:outline-none text-white bg-green-600 p-2 h-12 rounded-lg text-base flex  font-semibold py-3 gap-x-2"
                        type="button">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            viewBox="0 0 576 512" fill="white">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>

                        <span>Cetak Kartu Anggota</span>

                    </button>



                        <a href="#"
                            class="focus:outline-none text-white bg-red-700 rounded-lg text-base font-semibold py-3 px-2">Reset
                            Filter</a>

                        <button type="submit"
                            class="focus:outline-none text-white bg-yellow-500 text-center py-2.5 rounded-lg text-base font-semibold p-2 h-12 ">
                            Cari Data
                        </button>



                    </div>





                </form>


                {{-- <a href="#"
                class="focus:outline-none text-white bg-yellow-500 rounded-lg text-base font-semibold px-5 py-2 mr-2 mb-2"type="button">
                
            </a> --}}



            </div>

        </div>

        <div class="flex flex-col mt-6">
            <div class="overflow-x-auto rounded-lg">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        No
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Foto
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Nama
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Tingkatan
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Ranting
                                    </th>

                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        NIA
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium tracking-wider text-center text-gray-500 uppercase dark:text-white">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr class="bg-white dark:bg-gray-800 border-b-[1px] border-gray-600">
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    </td>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    </td>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    </td>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    </td>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    </td>

                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    </td>
                                    <td
                                        class="p-4 text-sm text-center font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        <form action="#" method="POST">
                                            <button type="submit" class="bg-red-600 p-2 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                                    class="fill-white">
                                                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path
                                                        d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>


                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>



    </div>
@endsection
