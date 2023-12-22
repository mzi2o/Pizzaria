<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizzaria</title>
   <style>
       .img {
            background-image: url('{{ asset("/img/bg.jpg") }}');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed; /* Add this line for a parallax effect */
            min-height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .img h1 {
            margin-top: -150px;
        }

        .img p {
            max-width: 700px;
            text-align: center;
            margin-top: 30px;
        }

        button {
            background-color: orange;
            color: white;
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 15px;
            cursor: pointer;
        }
        .our{
            display: flex;
            justify-content: center;
            text-align: center
           

        }
        .our .image{
            width: 200px;
        }
        .our .content{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: peru;
            color: white;
            border-radius: 20px;
            width: 350px;
            margin-right: 30px
        }
        .titel{
            text-align: center;
            margin-top: 10px;
            color: orange
        }
    </style>
</head>
<body>
    @extends('Master_page')
    @section('title','Home')
    @section('content')
    <div class="img">
        <h1>A pizza a day, keeps the Sadness away.</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi distinctio rem veniam commod Quia cumque quidem dicta laboru, velit accusamus labore voluptate!</p>
        <button>Order now</button>
    </div>
    <h1 class="titel">Our Produits</h1>
    <div class="our">
        <div class="our_p1">
            <img src="{{ asset('img/a1.jpg') }}" class="image" alt="">
            <div class="content">
                <h1>Pizaa</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, libero! Quis mollitia autem provident itaque. Voluptate temporibus dignissimos tempore, debitis explicabo libero, exercitationem rerum aspernatur repudiandae adipisci ex, enim quidem.</p>
            </div>
        </div>
        <div class="our_p2">
            <img src="{{ asset('img/a5.jpg') }}" class="image" alt="">
            <div class="content">
                <h1>Shawarma</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, libero! Quis mollitia autem provident itaque. Voluptate temporibus dignissimos tempore, debitis explicabo libero, exercitationem rerum aspernatur repudiandae adipisci ex, enim quidem.</p>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
