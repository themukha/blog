<div class="form">
  <div class="form-part">

    <div class="form-control">
      <div class="form-label"><label>Software</label></div>
      <div class="form-element"><p><?= $content['form-underhood']['server-software'] ?></p></div>
      <div class="form-element"><p>PHP <?= PHP_VERSION ?></p></div>
      <div class="form-element"><p><?= $content['form-underhood']['db-software'] ?> <?= $content['form-underhood']['db-version'] ?></p></div>
      <div class="form-element">
        <p>
          Aegea <?= E2_RELEASE ?> (v<?= E2_VERSION ?>)
        </p>
      </div>
      <?php if (!empty ($content['form-underhood']['form-action-engine-rebuild'])) { ?>
      <div class="form-element">
        <form action="<?= $content['form-underhood']['form-action-engine-rebuild'] ?>" method="post">
          <input type="hidden" name="token" value="<?= $content['sign-in']['token'] ?>" />
          <input type="submit" class="e2-button" value="Rebuild core" />
        </form>
      </div>
      <?php } ?>
    </div>

    <div class="form-control">
      <div class="form-label"><label>Cache</label></div>
      <div class="form-element">
        <p>
          <?= $content['form-underhood']['cache-files-count']?> files, 
          <?= $content['form-underhood']['cache-files-size']?> bytes
        </p>
      </div>
      <div class="form-element">
        <form action="<?= @$content['form-underhood']['form-action-cache-invalidate'] ?>" method="post">
          <input type="hidden" name="token" value="<?= $content['sign-in']['token'] ?>" />
          <input type="submit" class="e2-button" value="Invalidate" />
        </form>
      </div>
    </div>

    <div class="form-control">
      <div class="form-label"><label>Search index</label></div>
      <div class="form-element">
        <!-- <span class="e2-svgi"><?= _SVG ('spin') ?></span>  -->
        <p><?= $content['form-underhood']['search-index-percentage']?>% (<?= $content['form-underhood']['search-index-items-count']?> of <?= $content['form-underhood']['search-index-total-items-count']?>)<?php if (!empty ($content['form-underhood']['search-index-time-spent'])) { ?>, at least <?= $content['form-underhood']['search-index-time-spent']?> spent so far<?php } ?></p>
      </div>
      <?php if (!empty ($content['form-underhood']['form-action-search-index-continue'])) { ?>
      <div class="form-element">
        <form action="<?= @$content['form-underhood']['form-action-search-index-continue'] ?>" method="post">
          <input type="submit" class="e2-button" value="Continue" />
        </form>
      </div>
      <?php } ?>
      <?php if (!empty ($content['form-underhood']['form-action-search-index-rebuild'])) { ?>
      <div class="form-element">
        <form action="<?= @$content['form-underhood']['form-action-search-index-rebuild'] ?>" method="post">
          <input type="hidden" name="token" value="<?= $content['sign-in']['token'] ?>" />
          <input type="submit" class="e2-button" value="Erase and rebuild" />
        </form>
      </div>
      <?php } ?>
    </div>

    <div class="form-control">
      <div class="form-label"><label>Self-check</label></div>
      <div class="form-element">
        <p><?= $content['form-underhood']['checklist-percentage']?>% (<?= $content['form-underhood']['checklist-items-count']?> of <?= $content['form-underhood']['checklist-total-items-count']?>)</p>
      </div>
      <?php if (!empty ($content['form-underhood']['checklist-stamp-completed'])) { ?>
      <div class="form-element">
        <p>Completed: <?= $content['form-underhood']['checklist-stamp-completed']?></p>
      </div>
      <?php } ?>
      <div class="form-element">
        <form action="<?= @$content['form-underhood']['form-action-checklist-reset'] ?>" method="post">
          <input type="hidden" name="token" value="<?= $content['sign-in']['token'] ?>" />
          <input type="submit" class="e2-button" value="Reset" />
        </form>
      </div>
    </div>

    <div class="form-control">
      <div class="form-label"><label>Logs</label></div>
      <div class="form-element">
        <p>
          <?php $s = ($content['form-underhood']['log-files-count'] > 1); ?>
          <?= $content['form-underhood']['log-files-count'] ?> <?='file'. ($s?'s':'')?>, 
          <?= $content['form-underhood']['log-files-size'] ?> bytes
        </p>
      </div>
      <?php if (!empty ($content['form-underhood']['form-action-logs-enable'])) { ?>
      <div class="form-element">
        <form action="<?= @$content['form-underhood']['form-action-logs-enable'] ?>" method="post">
          <input type="hidden" name="token" value="<?= $content['sign-in']['token'] ?>" />
          <input type="submit" class="e2-button" value="Enable main log" />
        </form>
      </div>
      <?php } ?>
      <?php if (!empty ($content['form-underhood']['form-action-logs-erase-disable'])) { ?>
      <div class="form-element">
        <form action="<?= @$content['form-underhood']['form-action-logs-erase-disable'] ?>" method="post">
          <input type="hidden" name="token" value="<?= $content['sign-in']['token'] ?>" />
          <input type="submit" class="e2-button" value="Delete all logs" />
        </form>
      </div>
      <?php } ?>
    </div>

    <?php if (!empty ($content['form-underhood']['form-action-database-migrate'])) { ?>
    <div class="form-control">
      <div class="form-label"><label>Model</label></div>
      <div class="form-element">
        <form action="<?= @$content['form-underhood']['form-action-database-migrate'] ?>" method="post">
          <input type="hidden" name="token" value="<?= $content['sign-in']['token'] ?>" />
          <input type="submit" class="e2-button" value="Ensure" />
        </form>
      </div>
    </div>
    <?php } ?>

    <?php if (!empty ($content['form-underhood']['form-action-license-verify'])) { ?>
    <div class="form-control">
      <div class="form-label"><label>License</label></div>
      <div class="form-element">
        <form action="<?= @$content['form-underhood']['form-action-license-verify'] ?>" method="post">
          <input type="hidden" name="token" value="<?= $content['sign-in']['token'] ?>" />
          <input type="submit" class="e2-button" value="Verify" />
        </form>
      </div>
    </div>
    <?php } ?>

    <div class="form-control">
      <div class="form-label"><label>Backup</label></div>
      <?php if (!empty ($content['form-underhood']['backup-last'])) { ?>
      <div class="form-element">
        <p>
          Last full backup: <?= $content['form-underhood']['backup-last']; ?><br />
        </p>
      </div>
      <?php } ?>
      <div class="form-element">
        <form
          id="form-underhood"
          action="<?= @$content['form-underhood']['form-action-backup'] ?>"
          method="post"
        >
          <input type="submit" class="e2-button" value="Rebuild" />
        </form>
      </div>
    </div>

    <div class="form-control">
      <div class="form-label"><label>Current timezone</label></div>
      <div class="form-element">
        <p>
          <?= $content['form-underhood']['current-timezone-offset']?> min (<?= $content['form-underhood']['current-timezone-is-dst']? '' : 'No '?> DST)
        </p>
      </div>
    </div>

    <!-- <div class="form-control">
      <div class="form-label"><label>External resources</label></div>
      <div class="form-element">
        <form
          id="form-underhood"
          action="<?= @$content['form-underhood']['form-action-external-resources-refresh'] ?>"
          method="post"
        >
          <input type="submit" class="e2-button" value="Refresh" />
        </form>
      </div>
    </div> -->

    <!-- <div class="form-control">
      <div class="form-label"><label>Thumbnails</label></div>
      <div class="form-element">
        <form
          id="form-underhood"
          action="<?= @$content['form-underhood']['form-action-thumbnails-refresh'] ?>"
          method="post"
        >
          <input type="submit" class="e2-button" value="Refresh" />
        </form>
      </div>
    </div> -->

  </div>
</div>