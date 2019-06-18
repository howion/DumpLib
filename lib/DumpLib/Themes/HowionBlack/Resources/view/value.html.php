<?php if (!$sculpt->isset('value-kind')) { ?>
    <samp class="dmplb-v">'<?= $sculpt->fetch('value-value') ?>'</samp>
<?php } else { ?>
    <?php if ($sculpt->isset('value-value')) { ?>
        <samp class="dmplb-w"><?= $sculpt->fetch('value-kind') ?>(<samp class="dmplb-v"><?= $sculpt->fetch('value-value') ?></samp>)</samp>
    <?php } else { ?>
        <samp class="dmplb-w"><?= $sculpt->fetch('value-kind') ?></samp>
    <?php } ?>
<?php } ?>
<?php echo ($sculpt->isset('value-additional')) ? $sculpt->fetch('value-additional') : '' // STACK - LABEL - ETC ?>
