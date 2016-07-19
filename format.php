<?php
require_once('head.inc.php');
require_once('setdefault.inc.php');

function showchecked($ix) {
    return $_SESSION[$ix]=='on' ? 'checked' : '';
}

function showradiochecked($ix,$val) {
    return $_SESSION[$ix]==$val ? 'checked' : '';
}

function showselected($ix,$val) {
    return $_SESSION[$ix]==$val ? 'selected="selected"' : '';
}

makeheadstart('Den Frie Bibel',true);
makeheadend();
makemenus(1);
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">

          <h1>Sæt dine læsepreferencer</h1>


          <form action="updatepref.php" method="post" accept-charset="utf-8"> 
            <input type="hidden" name="referer"
               value="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php' ?>">

            <div class="checkbox">
              <label>
                <input type="checkbox" name="showverse" <?= showchecked('showverse') ?>> Vis versnumre
              </label>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="showchap" <?= showchecked('showchap') ?>> Vis kapitelnumre ved hvert vers
              </label>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="showh2" <?= showchecked('showh2') ?>> Vis overskrifter
              </label>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="showfn1" <?= showchecked('showfn1') ?>> Vis forklarende fodnoter (1,2,3,...)
              </label>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="showfna" <?= showchecked('showfna') ?>> Vis eksegetiske fodnoter (a,b,c,...)
              </label>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="oneline" <?= showchecked('oneline') ?>> Ét vers per linje
              </label>
            </div>

            <div class="form-group">
              <label for="godsname">Guds navn</label>
              <select name="godsname" id="godsname">
                <option <?= showselected('godsname','Herren') ?> >Herren</option>
                <option <?= showselected('godsname','HERREN') ?> >HERREN</option>
                <option <?= showselected('godsname','Jahve') ?>  >Jahve</option>
                <option <?= showselected('godsname','JHVH') ?>   >JHVH</option>
              </select>
            </div>


            <h3>Skrifttype</h3>

            <?php foreach ($allfonts as $val => $fam): ?>
              <div class="radio">
                <label>
                  <input type="radio" name="font" value="<?= $val ?>"  <?= showradiochecked('font',$val) ?>>
                  <i><?= $val ?>:</i> <span style="font-family: <?= $fam ?>">I begyndelsen skabte Gud himlen og jorden.</span>
                </label>
              </div>
            <?php endforeach; ?>

            <p>&nbsp;</p>

            <p>
              <button type="submit" class="btn btn-primary">OK</button>
              <a class="btn btn-default" href="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php' ?>">Annullér</a>
            </p>
          </form>

        </div><!--col-->
      </div><!--row-->
    </div><!--container-fluid-->

<?php
endbody();
?>
