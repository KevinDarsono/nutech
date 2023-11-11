<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#" style="padding-left: 15px">
            <img src="<?= base_url('image/Logo.png') ?>" alt="" > SIMS PPOB
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active" aria-current="page" style="color: black" href="<?= base_url('topup') ?>">
                        Top Up
                    </a>
                </li>
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link" href="<?= base_url('transaction') ?>" style="color: black;">
                        Transaction
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('akun') ?>" style="color: red; font-weight: bold;">
                        Akun
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>