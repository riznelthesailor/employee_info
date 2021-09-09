<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>EIR Sample</title>
</head>
<body>
    <!--
    Dashboard
    <br/>
    {{ auth()->user()->username }}
    <br/>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Log out</button>
    </form>
    -->
    <table class="table-fixed w-full">
        <thead class="text-left">
            <tr>
                <th class="w-4/12 overflow-x-hidden py-2 px-4 text-sm">Name</th>
                <th class="w-4/12 overflow-x-hidden py-2 px-4 text-sm">Job Title</th>
                <th class="w-3/12 overflow-x-hidden py-2 px-4 text-sm"></th>
            </tr>
        </thead>
        <tbody class="text-left">
            <tr class="bg-gray-100">
                <form action="{{ route('employee') }}" method="post">
                @csrf
                    <th class="overflow-x-hidden py-2 px-2">
                        <input name="name" id="name" type="text" placeholder="type name" value="{{ old('name') }}" class="input p-2 text-xs @error('name') bg-red-100 @enderror" />
                    </th>
                    <th class="overflow-x-hidden py-2 px-2">
                        <input name="job_title" id="job_title" type="text" placeholder="type job title" value="{{ old('job_title') }}" class="input p-2 text-xs @error('job_title') bg-red-100 @enderror" />
                    </th>
                    <th class="overflow-x-hidden py-2 px-4">
                        <button type="submit" class="w-10 p-2 bg-green-200 rounded-full text-xs">+</button>
                    </th>
                </form>
            </tr>
            @if($employees->count())
                @foreach($employees as $employee)
                    <tr>
                        <td class="overflow-x-hidden py-2 px-4 text-sm">{{ $employee->name }}</td>
                        <td class="overflow-x-hidden py-2 px-4 text-sm">{{ $employee->job_title }}</td>
                        <td class="overflow-x-hidden py-2 px-4 text-sm">
                            <button class="w-10 p-2 rounded-full bg-red-200 text-xs">x</button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3" class="overflow-x-hidden py-2 px-4 text-sm">There are no employees listed.</td>
                </tr>
            @endif
        </tbody>
    </table>
</body>
</html>
