<main>
    <div>
        <div style="margin: auto; width: 80%; max-width: 500px ; margin-top: 25vh">
            <form method="POST" action="/registration">
                <div class="form-group">
                    <label for="exampleInputEmail1">Почта</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com" required>
                <div class="form-group">
                    <label for="exampleInputEmail1">Имя</label>
                    <input name="first_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Иван" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Фамилия</label>
                    <input name="last_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Иванов" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Пароль</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Подтвердить пароль</label>
                        <input name="confirm_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                <button type="submit" style = "float: right" class="btn btn-primary">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</main>