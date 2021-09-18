<nav class="navbar navbar-default menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" style="background-color: #cf641c;"></span>
                <span class="icon-bar" style="background-color: #cf641c;"></span>
                <span class="icon-bar" style="background-color: #cf641c;"></span>
            </button>
            <a class="navbar-brand scrollink" href="#home">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/logo-bras.png" alt="Tons do Brás">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul id="#menuCenter" class="nav navbar-nav navbar-right">
                <li><a class="scrollink active" href="#home">Home</a></li>
                <li><a class="scrollink" href="#empreendimento">Empreendimento</a></li>
                <li><a class="scrollink" href="#video">Vídeo</a></li>
                <li><a class="scrollink" href="#plantas">Plantas</a></li>
                <li><a href="#" data-toggle="modal" data-target="#modalFicha">Ficha Técnica</a></li>
                <li><a class="scrollink" href="#localizacao">Localização</a></li>
                <li><a class="scrollink" href="#contato">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="home" class="faixa-lancamento">
    <div class="box">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 padding-off">
                    <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 text-center wow animate__animated animate__bounceInLeft">
                        <p>Lançamento - Brás</p>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center wow animate__animated animate__bounceInRight">
                        <a class="btn" href="https://vemplan.sigavi360.com.br/Chat/NovoAtendimento/1133?midia=land_tons" target="_blank">
                            corretores<br />
                            online
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center wow animate__animated animate__bounceInRight">
                        <a class="btn" href="#" data-toggle="modal" data-target="#modalTourVirtual">
                            Assista <br />Tour virtual
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="container-fluid padding-off box-galeria">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 wow animate__animated animate__bounceInUp">
                <div class="galeria">
                    <section class="galeria-home slider">
                        <div>
                            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/galeria/05.jpg" alt="Perspectiva Artística">
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>














<div id="contato" class="container contato wow animate__animated animate__fadeInUpBig">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <h5>ENTRE EM CONTATO PARA DEIXAR<br />
                SUA VIDA MAIS COLORIDA.</h5>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 padding-off margin-top-30">
            <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                <div class="group-form">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input id="nome" type="text" class="nome form-control" name="nome" required="required" placeholder="Nome*" />
                        </div>
                        <div class="form-group">
                            <input id="email" type="email" class="email form-control" name="email" required="required" placeholder="Email*" />
                        </div>
                        <div class="form-group">
                            <input id="telefone" class="phone form-control" type="tel" name="phone" placeholder="Telefone" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss" placeholder="Mensagem"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-9 col-md-10 padding-off dt hidden-xs"></div>
                        <div class="col-xs-12 col-sm-3 col-md-2 dt1">
                            <div class="form-group">
                                <button type="submit" class="btn_enviar btn" title="enviar" name="enviar_email" value="enviar">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>

<!-- <div id="cookies" class="cookies">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 box">
        <div class="col-xs-12 col-sm-9 col-md-9">
            <p>
                Este site utiliza cookies para melhorar sua experiência de navegação, permitir um início de sessão seguro, recolher estatísticas e oferecer conteúdo adequado aos seus interesses. Ao continuar sua navegação, considera-se aceito nossos e a nossa <a href="<?php echo base_url(); ?>politicadeprivacidade">Política de Privacidade</a>.
            </p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <a href="#" class="btn_cookie btn center-block">Aceito</a>
        </div>
    </div>
</div> -->