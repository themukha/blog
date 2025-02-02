<form
  action="<?= @$content['form-database']['form-action'] ?>"
  method="post"
>

<input
  type="hidden"
  id="token"
  name="token"
  value="<?= $content['sign-in']['token'] ?>"
/>

<div class="form">

<div class="form-control">
  <div class="form-label input-label">
    <label><?= _S ('ff--db-host') ?></label>
  </div>
  <div class="form-element">
    <input type="text"
      autofocus="autofocus"
      name="db-server"
      id="db-server"
      class="text input-editable width-2"
      value="<?= @$content['form-database']['db-server'] ?>"
    />
  </div>
</div>

<div class="form-control">

  <div class="form-label input-label">
    <label><?= _S ('ff--db-username-and-password') ?></label>
  </div>

  <div class="form-element">
    <input type="text"
      name="db-user"
      id="db-user"
      class="text input-editable width-2"
      value="<?= @$content['form-database']['db-user'] ?>"
    />
  </div>

  <div class="form-element">
    <input type="text"
      id="db-password"
      class="text input-editable width-2"
      placeholder="••••••••••"
      value=""
      onfocus="this.name='db-password'; this.placeholder=''"
    />
  </div>
  
</div>

<div class="form-control">
  <div class="form-label input-label">
    <label><?= _S ('ff--db-name') ?></label>
  </div>
  <div class="form-element">
    <input type="text"
      name="db-database"
      id="db-database"
      class="text input-editable width-2"
      value="<?= @$content['form-database']['db-database'] ?>"
    />
  </div>
</div>

<div class="form-control">
  <div class="form-element">
    <button type="submit" id="submit-button" class="e2-button e2-submit-button">
      <?= @$content['form-database']['submit-text'] ?>
    </button>
  </div>
</div>

</div>


</form>