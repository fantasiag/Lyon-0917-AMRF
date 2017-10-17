<?php
$alphabet = [
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
]; ?>
<!-- form serach--->
<section class="row ">
    <h2 class="center-align">Annuaire des partenaires</h2>
    <div class="jumbotron">
        <div class="row">
            <p>Trier par lettres</p>
            <ul class="pagination text-center">
                <!--<li class="active"><a href="#!">active</a></li>-->
                <?php foreach ($alphabet as $result): ?>
                    <li class="waves-effect"><a href="#!"><?php echo $result ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="form-group row">
            <p>Trier par thématiques</p>
            <div class="funkyradio">
                <div class="col-md-4">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="checkbox" id="checkbox1" />
                        <label for="checkbox1">AMENAGEMENT DU TERRITOIRE</label>
                    </div>
                    <div class="funkyradio-success">
                        <input type="checkbox" name="checkbox" id="checkbox2" />
                        <label for="checkbox2">CULTURE</label>
                    </div>
                    <div class="funkyradio-success">
                        <input type="checkbox" name="checkbox" id="checkbox3" />
                        <label for="checkbox3">DEMOCRATIE LOCALE</label>
                    </div>
                    <div class="funkyradio-success">
                        <input type="checkbox" name="checkbox" id="checkbox4" />
                        <label for="checkbox4">EDUCATION</label>
                    </div>
                    <div class="funkyradio-success">
                        <input type="checkbox" name="checkbox" id="checkbox5" />
                        <label for="checkbox5">ECONOMIE</label>
                    </div>
                </div><!--end of col1-->
                <div class="col-md-4">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="checkbox" id="checkbox6" />
                        <label for="checkbox6">ENVIRONNEMENT</label>
                    </div>
                    <div class="funkyradio-success">
                        <input type="checkbox" name="checkbox" id="checkbox7" />
                        <label for="checkbox7">EUA ET ASSAINISSEMENT</label>
                    </div>
                    <div class="funkyradio-success">
                        <input type="checkbox" name="checkbox" id="checkbox8" />
                        <label for="checkbox8">MOBILITE</label>
                    </div>
                    <div class="funkyradio-success">
                        <input type="checkbox" name="checkbox" id="checkbox9" />
                        <label for="checkbox9">NUMERIQUE</label>
                    </div>
                    <div class="funkyradio-success">
                        <input type="checkbox" name="checkbox" id="checkbox10" />
                        <label for="checkbox10">RELATIONS INTERNATIONALES</label>
                    </div>
                </div><!--end of col2-->
                <div class="col-md-4">
                    <div class="funkyradio-success">
                        <input type="checkbox" name="checkbox" id="checkbox11" />
                        <label for="checkbox11">SANTE</label>
                    </div>
                    <div class="funkyradio-success">
                        <input type="checkbox" name="checkbox" id="checkbox12" />
                        <label for="checkbox12">SOCIAL</label>
                    </div>
                    <div class="funkyradio-success">
                        <input type="checkbox" name="checkbox" id="checkbox13" />
                        <label for="checkbox13">SERVICES DE PROXIMITE</label>
                    </div>
                    <div class="funkyradio-success">
                        <input type="checkbox" name="checkbox" id="checkbox14" />
                        <label for="checkbox14">TOURISME</label>
                    </div>
                </div><!--end of col3-->
            </div><!--end of funkyradio-->
        </div><!--end row/ form-group multi choice-->
    </div>
</section>
<!-- results -->
<section class="row">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading row" role="tab" id="headingOne">
                <div class="col-xs-4">
                    <img src="http://via.placeholder.com/70x70">
                </div>
                <div class="col-xs-4">
                    <h3 class="panel-title">Nom du partenaire</h3>
                </div>
                <div class="col-xs-2 col-xs-offset-2 plus">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                       aria-expanded="true" aria-controls="collapseOne">
                        "En savoir Plus ..."
                    </a>
                </div>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body row ">
                    <div class=" col-xs-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem eaque eos est ex fuga
                            impedit
                            magni odio pariatur repudiandae? Animi aperiam aut eius eos explicabo facere magnam
                            repudiandae
                            sit, tempore.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aspernatur beatae
                            ducimus
                            eos fugit, id iste iusto laborum, nemo nostrum obcaecati officia quae quaerat quibusdam quis
                            soluta temporibus, vel voluptate!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem doloremque ducimus
                            ea
                            eum excepturi inventore itaque magnam maxime nihil quibusdam quis, tempore voluptatem? Ab at
                            deleniti distinctio earum sequi.</p>
                        <div class="row">
                            <p>secteurs</p>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <h4>Adresse :</h4>
                        <p>rue de l'avenue </br>
                            65432 Ville
                        </p>
                        <h4>contact :</h4>
                        <ul>
                            <li>Nom Prenom</li>
                            <li>mail</li>
                            <li>telephone</li>
                        </ul>
                        <h4>contact Local :</h4>
                        <ul>
                            <li>Nom Prenom</li>
                            <li>mail</li>
                            <li>telephone</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

</section>

<div class="row">
    <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>
</div>



