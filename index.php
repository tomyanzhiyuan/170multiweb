<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tom Yan, CSC 170 Project 3</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include "inc/header.php"; ?>
    <?php include "inc/nav.php"; ?>

    <main class="container">
        <div class="home-content">
            <div class="slideshow">
                <img src="images/slideshow/livebench.png" alt="LiveBench AI" class="active">
                <img src="images/slideshow/darksouls.jpg" alt="Dark Souls">
                <img src="images/slideshow/helldivers2.2.jpg" alt="Helldivers 2">
                <img src="images/slideshow/knicks.png" alt="New York Knicks">
            </div>

            <div class="excerpts-container">
                <section class="excerpt">
                    <h2>LiveBench: AI Model Performance Benchmark</h2>
                    <p>In the rapidly evolving field of artificial intelligence (AI), the development and assessment of
                        Large
                        Language Models (LLMs) have become paramount. Ensuring these models perform accurately and
                        efficiently
                        across diverse tasks necessitates robust benchmarking tools. One such tool that has emerged to
                        address
                        this need is LiveBench, a dynamic and contamination-free benchmark designed to evaluate LLMs
                        comprehensively.</p>
                    <a href="livebench.php">Read more about LiveBench AI →</a>
                </section>

                <section class="excerpt">
                    <h2>Dark Souls</h2>
                    <p>The world of Dark Souls is a world of cycles. Kingdoms rise and fall, ages come and go, and even
                        time
                        can
                        end and restart as the flame fades and is renewed. These cycles are linked to the First Flame, a
                        mysterious manifestation of life that divides and defines separate states such as heat and cold,
                        or
                        life
                        and death.</p>
                    <a href="darksouls.php">Explore the world of Dark Souls →</a>
                </section>

                <section class="excerpt">
                    <h2>Helldivers 2</h2>
                    <p>Helldivers 2 is a 2024 cooperative third-person shooter game developed by Arrowhead Game Studios
                        and
                        published by Sony Interactive Entertainment for the PlayStation 5 and Windows. The game is the
                        direct
                        sequel to Helldivers (2015). Set in the 22nd century, the story follows the Helldivers, an elite
                        force
                        of shock troops dispatched to combat various threats to humanity.</p>
                    <a href="helldivers.php">Learn more about Helldivers 2 →</a>
                </section>

                <section class="excerpt">
                    <h2>New York Knicks</h2>
                    <p>The New York Knickerbockers, commonly referred to as the New York Knicks, are an American
                        professional
                        basketball team based in the New York City borough of Manhattan. The Knicks compete in the
                        National
                        Basketball Association (NBA) as a member of the Atlantic Division of the Eastern Conference. The
                        team
                        plays its home games at Madison Square Garden, an arena they share with the New York Rangers of
                        the
                        National Hockey League (NHL).</p>
                    <a href="knicks.php">Read about the New York Knicks →</a>
                </section>
            </div>
        </div>
    </main>

    <?php include "inc/footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/menu-highlighter.js"></script>
    <script src="js/jquery.slideshow.js"></script>
</body>

</html>