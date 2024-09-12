<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Initial Setup | Home</title>
    <link rel="stylesheet" href="/dist/output.css">
</head>
<body class="bg-stone-900">
    <div class="flex flex-col justify-center items-center mt-20">
        <p class="text-white font-bold tracking-widest mb-5">PHP | NGINX | MySQL | PhpMyAdmin | Tailwind | Docker</p>
        <h1 class="text-4xl text-amber-500 font-bold">Welcome to the Home!</h1>
        <?php echo '<p class="text-stone-600 font-medium mt-5">This is a simple page for initial setup.</p>'; ?>
        <footer class="mt-40 text-center">
            <p class="text-stone-400 font-medium tracking-widest">Made by &copy; Arthur Markiz |
                <a href="https://github.com/arthurmarkiz"
                class="text-purple-500 text-light underline"> Github</a>
            </p>
            <div class="mt-10 text-center font-lighter tracking-widest">
                <?php include 'includes/db.inc.php'; ?>
            </div>
        </footer>
    </div>
</body>
</html>