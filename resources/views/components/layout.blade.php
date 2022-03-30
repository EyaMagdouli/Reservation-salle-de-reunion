<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/style.css') }}">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/
    font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLan
    w2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Workplace Reservation</title>
</head>
<body>
<script src="https://cdn.tailwindcss.com"></script>
    <!--navbar-->
    <div class="navbar">
        <div class="container flex">
            <a href='/'><h1 class="logo">MEDIANET</h1></a>
            <nav>
                <ul>
                    @auth
                    <form action="/logout" action="POST">
                        @csrf
                        <button type="submit">Log Out</button>
                    </form>
                    @else
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                    @endauth
                </ul>
            </nav>
        </div>
    </div>
    {{$slot}}
   <!--footer-->
    <footer class="footer bg-dark py-5">
         <div class="container grid grid-3">
             <div>
                 <a href="/"><h1>MEDIANET</h1></a>
             </div>
         </div>
    </footer>
</body>
</html>
