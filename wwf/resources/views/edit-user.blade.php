@extends("welcome")
@section("title") Update User @endsection
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
                <form action="{{route('users.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card shadow">
                        @if(Session::has('success'))
                            <div class="container" id="alertbox">
                                <div class="container bg-green-500 flex items-center text-white text-sm font-bold px-4 py-3 relative"
                                     role="alert">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path
                                            d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                                    </svg>
                                    <p>{{Session::get('success')}}</p>

                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3 closealertbutton">
				<svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20">
					<title>Close</title>
					<path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
				</svg>
			</span>
                                </div>
                            </div>

                        @elseif(Session::has('failed'))
                            <div class="container" id="alertbox">
                                <div class="container bg-red-500 flex items-center text-white text-sm font-bold px-4 py-3 relative" role="alert">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path
                                            d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                                    </svg>
                                    <p>{{Session::get('failed')}}</p>

                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3 closealertbutton">
				<svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20">
					<title>Close</title>
					<path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
				</svg>
			</span>
                                    @endif
                                    <div class="card-header">
                                        <h4 class="font-normal text-3xl text-grey-darkest leading-loose my-3 w-full"> Update User </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <label class="block text-md font-light mb-2" for="name"> Name </label>
                                            <input type="text" name="name" class="w-full bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" id="name" value="@if(!empty($user)) {{$user->name}} @endif">
                                            {!!$errors->first("name", "<div class='flex items-center bg-red-500 border-l-4 border-red-700 py-2 px-3 shadow-md mb-2'><span class='text-white max-w-xs '>:message </span></div>")!!}
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-md font-light mb-2" for="email"> Email </label>
                                            <input type="text" name="email" class="w-full bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" id="email" value="@if(!empty($user)) {{$user->email}} @endif">
                                            {!!$errors->first("email", "<div class='flex items-center bg-red-500 border-l-4 border-red-700 py-2 px-3 shadow-md mb-2'><span class='text-white max-w-xs '>:message </span></div>")!!}
                                        </div>
                                       
                                    </div>
                                    <div class="flex items-center justify-between mb-5">
                                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-light py-2 px-6 rounded focus:outline-none focus:shadow-outline"> Update </button>
                                    </div>
                                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous">
    </script>

    <script>
        $(".closealertbutton").click(function (e) {
            // $('.alertbox')[0].hide()
            // e.preventDefault();
            pid = $(this).parent().parent().hide(500)
            console.log(pid)
            // $(".alertbox", this).hide()
        })
    </script>
@endsection
