<div class="container">
    <form action="<?= BASEURL; ?>/about/input" method="post">
        
        <input type="text" name='club'>
        <button type="submit">meluncur</button>
    </form>
    
    <table class="table table-border">
        <thead>
            <tr>
                <th>Nama Club</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($data['all'] as $club): ?>
                <tr>
                    <td><p><?= $club['club']; ?></p></td>
                    <td>
                        <a href="<?= BASEURL; ?>/about/edit/<?= $club['id']; ?>" class="btn btn-success">Edit</a>
                        <a href="<?= BASEURL; ?>/about/delete/<?= $club['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        
</div>