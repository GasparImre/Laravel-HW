@extends("welcome")
@section("title") Show User @endsection
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 text-right">
                <br>
                <a href="{{route('users.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"> Back to Users </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="font-normal text-3xl text-grey-darkest leading-loose my-3 w-full"> Show User </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <label class="block text-md font-light mb-2" for="name"> Name </label>
                            <input type="text" readonly name="name" class="w-full bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" id="name" value="@if(!empty($user)) {{$user->name}} @endif">
                        </div>
                        <div class="mb-4">
                            <label class="block text-md font-light mb-2" for="email"> Email </label>
                            <input type="text" readonly name="email" class="w-full bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" id="email" value="@if(!empty($user)) {{$user->email}} @endif">
                        </div>
                        <div class="mb-4">
                            <label class="block text-md font-light mb-2" for="name"> Password </label>
                            <input type="password" readonly name="password" class="w-full bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" id="password" value="@if(!empty($user)) {{$user->password}} @endif">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
