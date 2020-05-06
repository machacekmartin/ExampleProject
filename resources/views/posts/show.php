<div class="show post-page flex column">
    <div class="header flex row">
        <p class="title"><?= $data->header ?></p>
        <p class="date"><?= date_format(date_create($data->date), "d/m/Y | H:i" )?></p>
    </div>
    <p class="content"><?= $data->content ?></p>

    <div class="responds">
        <h1><s>Responds</s></h1>
    </div>
</div>