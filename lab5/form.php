<?php


$sql = 'SELECT * FROM `friends` WHERE `id`=' . $_GET['id'];
$res = mysqli_query($connect, $sql);

if (mysqli_errno($connect))
  print_r(mysqli_error($connect));
$row = mysqli_fetch_assoc($res);
?>

<form action="index.php" method="POST">
  <input type="hidden" name="update">
  <input type="hidden" name="id" value="<?= $row["id"]; ?>">
  <div class="form-group">
    <label for="firstname">Фамилия</label>
    <input required type="text" class="form-control" id="firstname" name="firstname" value="<?= $row["firstname"]; ?>">
  </div>
  <div class="form-group">
    <label for="name">Имя</label>
    <input required type="text" class="form-control" id="name" name="name" value="<?= $row["name"]; ?>">
  </div>
  <div class="form-group">
    <label for="lastname">Отчество</label>
    <input required type="text" class="form-control" id="lastname" name="lastname" value="<?= $row["lastname"]; ?>">
  </div>
  <div class="form-group">
    <label for="gender">Пол</label>
    <select class="form-control" id="gender" name="gender" value="<?= $row["gender"]; ?>">
      <option <?php if ($row["gender"] == 'female')
        echo 'selected' ?>>Женский</option>
        <option <?php if ($row["gender"] == 'female')
        echo 'selected' ?>>Мужской</option>
      </select>
    </div>
    <div class="form-group">
      <label for="date">Дата рождения</label>
      <input type="date" class="form-control" id="date" name="date" value="<?= $row["date"]; ?>">
  </div>
  <div class="form-group">
    <label for="phone">Телефон</label>
    <input required type="tel" class="form-control" id="phone" name="phone" value="<?= $row["phone"]; ?>">
  </div>
  <div class="form-group">
    <label for="email">Эл. почта</label>
    <input required type="email" class="form-control" id="email" placeholder="name@example.com" name="email"
      value="<?= $row["email"]; ?>">
  </div>
  <div class="form-group">
    <label for="address">Адрес</label>
    <textarea required class="form-control" id="address" rows="3" name="address"><?= $row["address"]; ?></textarea>
  </div>
  <div class="form-group">
    <label for="comment">Комментарий</label>
    <textarea class="form-control" id="comment" rows="3" name="comment"><?= $row["comment"]; ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-3">Обновить</button>
</form>