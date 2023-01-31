<div class="container">
    <form action="<?= BASEURL; ?>/about/input" method="post">
        
        <input type="text" name='club'>
        <button type="submit">meluncur</button>
    </form>
    
    <?php foreach ($data['all'] as $club): ?>
        <h1><?= $club['club']; ?></h1>
    <?php endforeach; ?>
</div>