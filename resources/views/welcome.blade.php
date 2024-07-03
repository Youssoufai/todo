<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div>

        <header class="w-full bg-black text-white p-9">
            <h1>Todo List</h1>
        </header>
        <div>
            <input type="radio" name="task">
            <span>Call Mum</span>
            <button class="bg-black text-white px-8 rounded py-2">Delete</button>
        </div>
        <div>
            <input type="radio" name="task">
            <span>Buy Groceries</span>
            <button class="bg-black text-white px-8 rounded py-2">Delete</button>
        </div>
        <div>
            <input type="radio" name="task">
            <span>Finnish the report</span>
            <button class="bg-black text-white px-8 rounded py-2">Delete</button>
        </div>
    </div>
</body>

</html>
