<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="">
        <div class="text-5xl">
            List of Users:
        </div>
        <i class="font-thin">
            // list down the list of users inside "users" table
        </i>

        <table class="border border-black m-5">
            <tr>
                <th>id</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>user_name</th>
                <th>password</th>
                <th>role</th>
                <th>role-description</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td> {{ $user->id }} </td>
                <td> {{ $user->first_name }} </td>
                <td> {{ $user->last_name }} </td>
                <td> {{ $user->user_name }} </td>
                <td> {{ $user->password }} </td>
                <td> {{ $user->role_name ?? 'N/A' }} </td>
                <td> {{ $user->description ?? 'N/A' }} </td>
            </tr>
            @endforeach
        </table>

    </body>
</html>
