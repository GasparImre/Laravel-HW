@extends("welcome")
@section("title") Messages @endsection
@section("content")
    <table class="text-left w-full border-collapse">
        <thead>
        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"> Name </th>
        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"> Email </th>
        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"> Message </th>
        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"> Sent </th>
        </thead>
        <tbody>
        @if(count($messages) > 0)
            @foreach($messages as $message)
                <tr class="hover:bg-grey-lighter">
                    <td class="py-4 px-6 border-b border-grey-light"> {{$message->fullname}} </td>
                    <td class="py-4 px-6 border-b border-grey-light"> {{$message->email}} </td>
                    <td class="py-4 px-6 border-b border-grey-light"> {{$message->message}} </td>
                    <td class="py-4 px-6 border-b border-grey-light"> {{$message->created_at}} </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection
