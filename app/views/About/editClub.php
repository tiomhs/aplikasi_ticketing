<div class="container">
    <form action="<?= BASEURL; ?>/about/editClub" method="post">    
        <input type="hidden" value="<?= $data['clubId']['id']; ?>" name="id">
        <input type="text" name='club' value="<?= $data['clubId']['club']; ?>">
        <button type="submit">meluncur</button>
    </form>
</div>