<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="container px-8"> 

            <header class="py-6 mb-6">
                <h1 class="text-2xl">Notfiy</h1>
            </header>
            <main class="flex">
                <aside class="w-64 pt-8">

                    <section class="mb-8">

                        <h5 class="uppercase font-bold mb-6 text-base">The Brand</h5>

                        <ul class="list-reset">
                            <li class="text-sm pb-4">
                                <router-link class="text-black" to="/" exact>Logo</router-link>
                            </li>
                            <li class="text-sm pb-4">
                                <router-link class="text-black" to="/Logo-Symbol">Logo-Symbol</router-link>
                            </li>
                            <li class="text-sm pb-4">
                                <router-link class="text-black" to="/Colors">Colors</router-link>
                            </li>
                            <li class="text-sm pb-4">
                                <router-link class="text-black" to="/Loaders-and-animation">Loaders-And-Animation
                                </router-link>
                            </li>
                        </ul>

                    </section>

                    <section>

                        <h5 class="uppercase font-bold mb-6 text-base">Dooles</h5>

                        <ul class="list-reset">
                            <li class="text-sm pb-4">
                                <router-link class="text-black" to="/Mascot">Mascot</router-link>
                            </li>
                            <li class="text-sm pb-4">
                                <router-link class="text-black" to="/Typography">Typography</router-link>
                            </li>
                            <li class="text-sm pb-4">
                                <router-link class="text-blackt" to="/Wallpapers">Wallpapers</router-link>
                            </li>
                            <li class="text-sm pb-4">
                                <router-link class="text-black" to="/Illustrution">Illustrution</router-link>
                            </li>
                        </ul>

                    </section>
                </aside>

                <div class="primary flex-1">
                    <router-view></router-view>
                </div>

            </main>

            <hr>

        </div>
    </div>

    <script src="/js/app.js"></script>
</body>

</html>
