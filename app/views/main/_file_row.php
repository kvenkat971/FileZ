
<p class="filename">
  <?php // TODO add a copy to clipboard button ?>
  <?php // TODO add $file->comment ?>
  <a href="<?php echo $file->getDownloadUrl () ?>">
    <span class="filename"><?php echo h ( truncate_string ($file->file_name, 40)) ?></span>
    <span class="url"     ><?php echo $file->getDownloadUrl () ?></span>
  </a>
</p>
<p class="file-info">    
    <span class="filesize">(<?php echo $file->getReadableFileSize () ?>)</span>
    <span class="download-counter">Téléchargé <?php echo (int) $file->download_count ?> fois</span>
</p>
<p class="availability">disponible du 
  <?php if ($file->getAvailableFrom  ()->get (Zend_Date::MONTH) ==
            $file->getAvailableUntil ()->get (Zend_Date::MONTH)): ?>
    <?php echo $file->getAvailableFrom ()->toString ('d')?>
  <?php else: ?>
    <?php echo $file->getAvailableFrom ()->toString ('d MMMM') // TODO i18n ?>
  <?php endif ?>
  au <b><?php echo $file->getAvailableUntil ()->toString ('d MMMM') // TODO i18n ?></b>
</p>
<ul class="actions">
  <li><a href="<?php echo $file->getDownloadUrl () ?>/email"   class="send-by-email">Envoyer l'adresse par email</a></li>
  <li><a href="<?php echo $file->getDownloadUrl () ?>/delete"  class="delete">Supprimer</a></li>
  <li><a href="<?php echo $file->getDownloadUrl () ?>/extends" class="extend">Rendre disponible un jour de plus</a></li>
</ul>

