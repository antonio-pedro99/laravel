<!DOCTYPE html>
<html>
<head>
    <title>@yield("title")</title>
    @yield("style")
    <style>
        /* CSS styles for the todo app */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            align-self: center;
            float: center;
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
        .todo-list {
            list-style-type: none;
            padding: 0;
        }
        
        .todo-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        
        .todo-item input[type="checkbox"] {
            margin-right: 10px;
        }
        
        .todo-item.completed {
            text-decoration: line-through;
            opacity: 0.5;
        }
        .input-txt {
            width: 70%;
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .input-txt:focus {
            outline: none;
            border-color: #4caf50;
        }

        .btn {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .secondary-btn {
            background-color: #f44336;
            padding: 10px 20px;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .primary-btn {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group {
            margin-bottom: 20px;
            
        }

        .top-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #4caf50;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @yield("content")
    </div>
</body>
</html>