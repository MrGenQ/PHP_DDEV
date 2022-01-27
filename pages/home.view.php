<script>import "bootstrap-icons/font/bootstrap-icons.css";</script>
<?php require 'views/_partials/head.view.php';?>

<div class="container">
    <div style="display: flex; justify-content: center; padding: 5%; gap: 10px;">
    <h3>Company list</h3>
<button type="submit" class="btn btn-primary" onclick="window.location='/add-task';">New Company</button>

    </div>
    <form method="post" type="submit">
    <div class="input-group" style="display: flex; justify-content: center">
        <div class="form-outline">
            <input type="search" id="form1" class="form-control" placeholder="Įmonės pavadinimas"/>
        </div>
        <button type="submit" class="btn btn-secondary" name="submit"><span class="bi-search"></span> Search</button>
    </div>
    </form>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Pavadinimas</th>
                <th scope="col">Įmonės Kodas</th>
                <th scope="col">Unikalus Kodas</th>
                <th scope="col">Adresas</th>
                <th scope="col">Telefonas</th>
                <th scope="col">El.Paštas</th>
                <th scope="col">Veikla</th>
                <th scope="col">Vadovas</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($tasks -> allTasks() as $task):?>
            <tr>
                <td><?=$task['pavadinimas'];?></td>
                <td><?=$task['kodas'];?></td>
                <td><?=$task['pvm_kodas'];?></td>
                <td><?=$task['adresas'];?></td>
                <td><?=$task['telefonas'];?></td>
                <td><?=$task['pastas'];?></td>
                <td><?=$task['veikla'];?></td>
                <td><?=$task['vadovas'];?></td>
                <td><a href="/delete-task/id/<?=$task['id'];?>" onclick="return confirm('Are you sure you want to romove it?')">Remove</a></td>

            </tr>
            <?php endforeach;?>
            </tbody>
        </table>

</div>
<?php require 'views/_partials/htmlEnd.php';?>
