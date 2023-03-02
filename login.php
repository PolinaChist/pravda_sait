<?php
include "heder and footer/head.php";
?>
<body>
<div class="wrapper">
    <?php include 'heder and footer/header.php'; ?>
    <main class="main">
        <section class="login">
                <div class="form__container _container">
                    <div class=" form-partners">
                        <h2 class="title-part__form">Авторизация</h2>
                        <form action="" class="login-input" method="post">
                            <div class="login__input">
                                <input name="login" type="text" placeholder="Логин" id="title">
                                <input type="text" name="password" placeholder="Пароль">
                            </div>
                            <div class="button__partners">
                                <button type="submit" class="partners__btn" name="auth_submit">Войти</button>
                            </div>




                        </form>

                    </div>

                </div>
        </section>
    </main>
    <?php include 'heder and footer/footer.php';  ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>
