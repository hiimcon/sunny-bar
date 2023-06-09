<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
<?php include 'header.php'; ?>
<link rel="stylesheet" href="styles/locations.css?<?php echo time(); ?>">

<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>

    <main class="main-content">

        <h1 class="main-content__header">Locations</h1>

        <section class="card">
            <img class="card__image" src="images/store-BB.jpg" alt="Bay and Bloor store">

            <div class="card__contact">
                <h2 class="contact__intersection">Bay & Bloor</h2>
    
                <div class="contact__hours">
                    <p>Monday to Thursday: 1PM - 7PM</p>
                    <p>Friday to Sunday: 11AM - 10PM</p>
                </div>
    
                <div class="contact__info">
                    <p>85 Cumberland St, Toronto, ON M5R 3N7</p>
                    <p>(123) 123 1233</p>
                </div>
    
                <a class="contact__cta"
                    href="https://www.google.com/maps/place/85+Cumberland+St,+Toronto,+ON+M5R+3N7/@43.6704885,-79.3928261,17z/data=!3m1!4b1!4m5!3m4!1s0x882b34afbd03f0ad:0x346410ad8057b507!8m2!3d43.6704885!4d-79.3902512">Visit Us</a>
            </div>
        </section>

        <section class="card card--reverse">
            <img class="card__image" src="images/store-OQ.jpg" alt="Ossington and Queen store">

            <div class="card__contact">
                <h2 class="contact__intersection">Ossington & Queen</h2>

                <div class="contact__hours">
                    <p>Monday to Thursday: 3PM - 9PM</p>
                    <p>Friday to Sunday: 11AM - 11PM</p>
                </div>
    
                <div class="contact__info">
                    <p>90 Ossington Ave Toronto, ON M6J 2Z4</p>
                    <p>(678) 678 6788</p>
                </div>
    
                <a class="contact__cta"
                    href="https://www.google.com/maps/place/90+Ossington+Ave,+Toronto,+ON+M6J+2Z4/@43.6461931,-79.4223036,17z/data=!3m1!4b1!4m6!3m5!1s0x882b34fe9d56891b:0x220922558324883c!8m2!3d43.6461931!4d-79.4197287!16s%2Fg%2F11c4l6z3vy">Visit Us</a>
            </div>
        </section>

    </main>

    <?php include 'footer.php'; ?>
</body>

</html>