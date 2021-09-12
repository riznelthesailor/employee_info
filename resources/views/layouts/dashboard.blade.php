<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>EIR Sample</title>
</head>
<body>
    <!-- header card -->
    <div class="container p-2">
    <div class="card sm:w-1/3 md:1/4 px-4 flex flex-wrap flex-col justify-between h-40">
        <div><h1 class="text-lg font-bold">Dashboard</h1></div>
        <div><p class="text-sm">Welcome {{ auth()->user()->username }}</p></div>

        <!-- LOGOUT function -->
        <div class="">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn-regular bg-red-200" type="submit">Log out</button>
        </form>
        </div>
    </div>
    </div>

    <!-- employee info table -->
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

                <!-- CREATE Employee -->
                <form action="{{ route('employee.create') }}" method="post">
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

            <!-- READ Employee -->
            <!--
                $employees comes from EmployeeController index() function
             -->
            @if($employees->count())
                @foreach($employees as $employee)
                    <tr>
                        <!-- READ from Employee collection -->
                        <td class="overflow-x-hidden py-2 px-4 text-sm">{{ $employee->name }}</td>
                        <td class="overflow-x-hidden py-2 px-4 text-sm">{{ $employee->job_title }}</td>
                        <!-- DELETE Employee -->
                        <td class="overflow-x-hidden py-2 px-4 text-sm">

                            <form action="{{ route('employee.destroy', $employee) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-10 p-2 rounded-full bg-red-200 text-xs">x</button>
                            </form>

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
<br/>
<br/>
</body>
</html>
