<div class="container">
    <form action="index.php" method="POST">
        <input type="hidden" name="save">
        <div class="form-group">
            <label for="firstname">Фамилия</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="name">Имя</label>
            <input required type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="lastname">Отчество</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="gender">Пол</label>
            <select class="form-control" id="gender" name="gender">
                <option>Женский</option>
                <option>Мужской</option>
            </select>
        </div>
        <div class="form-group">
            <label for="date">Дата рождения</label>
            <input required type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="phone">Телефон</label>
            <input required type="tel" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="email">Эл. почта</label>
            <input required type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
        </div>
        <div class="form-group">
            <label for="address">Адрес</label>
            <textarea required class="form-control" id="address" rows="3" name="address"></textarea>
        </div>
        <div class="form-group">
            <label for="comment">Комментарий</label>
            <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Сохранить</button>
    </form>
</div>