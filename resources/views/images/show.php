<div class="image-page flex column">
    <div class="header flex row">
        <p class="title"><?= $data->header ?></p>
        <p class="date"><?= date_format(date_create($data->date), "d/m/Y | H:i" )?></p>
    </div>
    <img src="<?= IMAGES . $data->filename ?>" class="image">
</div>