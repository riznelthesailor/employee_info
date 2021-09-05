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
                <form action="" method="">
                    <th class="overflow-x-hidden py-2 px-2">
                        <input type="text" placeholder="type name" class="input p-2 text-xs" />
                    </th>
                    <th class="overflow-x-hidden py-2 px-2">
                        <input type="text" placeholder="type job title" class="input p-2 text-xs" />
                    </th>
                    <th class="overflow-x-hidden py-2 px-4">
                        <button type="submit" class="w-10 p-2 bg-green-200 rounded-full text-xs">+</button>
                    </th>
                </form>
            </tr>
            <tr>
                <td class="overflow-x-hidden py-2 px-4 text-sm">Leafre</td>
                <td class="overflow-x-hidden py-2 px-4 text-sm">Bulbasaur</td>
                <td class="overflow-x-hidden py-2 px-4 text-sm">
                    <button class="w-10 p-2 rounded-full bg-red-200 text-xs">x</button>
                </td>
            </tr>
            <tr>
                <td class="overflow-x-hidden py-2 px-4 text-sm">Renzo</td>
                <td class="overflow-x-hidden py-2 px-4 text-sm">Pikachu</td>
                <td class="overflow-x-hidden py-2 px-4 text-sm"><button class="w-10 p-2 rounded-full bg-red-200 text-xs">x</button></td>
            </tr>
            <tr>
                <td class="overflow-x-hidden py-2 px-4 text-sm">Gunther</td>
                <td class="overflow-x-hidden py-2 px-4 text-sm">Squirtle</td>
                <td class="overflow-x-hidden py-2 px-4 text-sm"><button class="w-10 p-2 rounded-full bg-red-200 text-xs">x</button></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
