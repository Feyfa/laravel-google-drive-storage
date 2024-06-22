<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
        }
        body {
            margin-top: 3.5rem
        }



        form.form-upload {
            margin: 0 auto;
            width: 50%;
            padding: 1rem;
            border-radius: .3rem;
            gap: 1rem;
            background-color: rgb(250,250,250);
            box-shadow: 2px 2px 2px rgba(10,10,10,.1);
            border: 1px solid #999; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        form.form-upload button {
            border: 1px solid #666;
            border-radius: .2rem;
            padding: .4rem .8rem;
            background-color: #eee;
            cursor: pointer;
        }
        form.form-upload button:hover {
            background-color: #ddd;
        }
        form.form-upload small {
            color: red;
        }

        .navbar {
            gap: 2rem;
            top: 0;
            left: 0;
            right: 0;
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 3rem;
            background-color: rgb(15, 96, 209);
        }
        .navbar a {
            display: inline-block;
            font-size: 1.5rem;
            color: white
        }

        .image-container {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1rem;
            padding: 1rem;
        }
        .image form.form-list {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            border: none;
            background-color: none;
        }
        .image form.form-list button {
            border: none;
            background: none;
        }
        .image form.form-list button i {
            cursor: pointer;
        }
        .image img {
            margin-top: .3rem;
            border: 1px solid #aaa;
            width: 20rem;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="/">upload</a>
        <a href="/list">list</a>
    </div>

    @yield('container')
</body>
</html>