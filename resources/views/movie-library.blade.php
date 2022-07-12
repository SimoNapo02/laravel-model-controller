<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Movie Library</title>
</head>
<body class="h-screen text-center ">
    <main class="bg-gradient-to-r from-violet-500 to-fuchsia-500 h-full">
        <h1 class="text-4xl uppercase px-8 py-4 my-8 bg-white rounded-lg inline-block shadow-md shadow-slate-800  ">Cineteca Boolean</h1>
        <div class="container mx-auto ">
            <section class="grid grid-cols-5 gap-4   rounded-lg">
                @foreach ($movies as $movie)
                <div class="card  border border-black bg-white/70 rounded-lg p-4 flex flex-col justify-between shadow-md shadow-slate-800 ">
                    <h2 class="text-lg font-bold ">{{ $movie->title }}</h2>
                    <h3 class="pb-4">{{ $movie->original_title }}</h2>
                        <div>
                            <span> Anno: {{ date('Y',strtotime($movie->date)) }}</span>
                            <br>
                            <span >Voto: {{ $movie->vote }} &starf;</span>
                        </div>

                </div>
                    
                @endforeach

            </section>
        </div>
    </main>
</body>
</html>