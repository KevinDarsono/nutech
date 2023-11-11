<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>
        Nutech App - <?= $this->renderSection("title") ?>
    </title>
    
    <?= $this->include("page/layouts/partials/css/style") ?>

    <?= $this->renderSection("css") ?>

</head>

<body>

    <?= $this->include("page/layouts/partials/navbar") ?>
    
    <div class="container pt-3 pb-3">
        
        <?= $this->renderSection("content") ?>
       
    </div>

    <?= $this->include("page/layouts/partials/javascript/style") ?>

    <?= $this->renderSection("javascript") ?>
</body>

</html>