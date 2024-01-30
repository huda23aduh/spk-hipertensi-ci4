<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?= $this->include('title') ?>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    
    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- STYLES -->
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<?= $this->include('header') ?>

<!-- CONTENT -->
<main>
    <section class="h-[47rem]">
        <div class="flex flex-col w-full gap-y-10 justify-center items-center algin-center bg-gray-200 p-5">
            <h2>Halaman Login</h2>

            <form method="post" action="/login">
                <div class="my-10">
                    <label>username : </label>

                    <input type="text" name="username">
                </div>

                <div class="my-10">
                    <label>password : </label>

                    <input type="password" name="password">
                </div>
                <div class="justify-center items-center">
                    <button class="bg-green-300 w-full rounded-[0.5rem] p-2" type="submit">Masuk</button>
                </div>
            </div>
            </form>
    </section>
</main>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<?= $this->include('footer') ?>


<!-- SCRIPTS -->

<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

<!-- -->

</body>
</html>
