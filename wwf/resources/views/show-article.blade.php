@extends("welcome")
@section("title") Show Article @endsection
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 text-right">
                <br>
                <a href="{{route('articles.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"> Back to Articles </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="font-normal text-3xl text-grey-darkest leading-loose my-3 w-full"> Show Article </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <label class="block text-md font-light mb-2" for="title"> Title </label>
                            <input type="text" readonly name="title" class="w-full bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" id="title" value="@if(!empty($article)) {{$article->title}} @endif">
                        </div>
                        <div class="mb-4">
                            <label class="block text-md font-light mb-2" for="description"> Description </label>
                            <textarea class="w-full bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" readonly name="description" id="description">@if(!empty($article)) {{$article->description}} @endif</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
