<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<hr />
<?php if ($db) : ?>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <a href="filmes" class="btn btn-info">
                        <div class="col-xs-12 text-center">
                            <i class="fa fa-film fa-5x"></i>
                            <p>Filmes</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="filmes" class="btn btn-info">
                        <div class="col-xs-12 text-center">
                            <i class="fa fa-podcast fa-5x"></i>
                            <p>Podcast</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="filmes" class="btn btn-info">
                        <div class="col-xs-12 text-center">
                            <i class="fa fa-book fa-5x"></i>
                            <p>Livros</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="filmes" class="btn btn-info">
                        <div class="col-xs-12 text-center">
                            <i class="fa fa-music fa-5x"></i>
                            <p>Musicas</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="filmes" class="btn btn-info">
                        <div class="col-xs-12 text-center">
                            <i class="fa fa-coffee fa-5x"></i>
                            <p>Idéias</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="filmes" class="btn btn-info">
                        <div class="col-xs-12 text-center">
                            <i class="fa fa-paper-plane fa-5x"></i>
                            <p>Trilhas</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php else : ?> <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>
<?php endif; ?>
<?php include(FOOTER_TEMPLATE); ?>