@extends("welcome")
@section("title") Articles @endsection
@section("content")
    <div class="row mb-4">
        <div class="col-xl-6">
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
            @endif
            @if(Session::has('failed'))
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
                    </div>
                    @if(Route::has('login'))
                        @auth
                            <div class="col-xl-6 text-right">
                                <br>
                                <a href="{{route('articles.create')}}" class="bg-green-600 hover:bg-green-700 text-white font-light py-2 px-6 rounded focus:outline-none focus:shadow-outline"> Add New </a>
                            </div>
                        @endauth
                    @endif
                </div>
                <table class="text-left w-full border-collapse">
                    <thead>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"> Id </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"> Title </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"> Description </th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"> Action </th>
                    </thead>
                    <tbody>

                    @if($articles)
                        @foreach($articles as $article)
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-b border-grey-light"> {{$article->id}} </td>
                                <td class="py-4 px-6 border-b border-grey-light"> {{$article->title}} </td>
                                <td class="py-4 px-6 border-b border-grey-light"> {{$article->description}} </td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    @if(Route::has('login'))
                                        @auth
                                            <form action="{{route('articles.destroy', $article->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('articles.show', $article->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded" style="margin-left: 5px;"> View </a>
                                                <a href="{{route('articles.edit', $article->id)}}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 border border-yellow-500 rounded"style="margin-left: 5px;"> Edit </a>
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded"style="margin-left: 5px;"> Delete </button>
                                            </form>
                                        @endauth
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        {{$articles->links()}}
                    @else <p>Sorry, you don't have any articles</p>
                    @endif


                    </tbody>
                </table>

{{--                {!! $articles->links() !!}--}}
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
