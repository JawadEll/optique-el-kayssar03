<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* background-color: #f0f0f0; */
        }

        .custom-alert {
            padding: 15px;
            border-radius: 4px;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="row my-4">
        @if (session()->has('success'))
            <div class="custom-alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
</body>
</html>
