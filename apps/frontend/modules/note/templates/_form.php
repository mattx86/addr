<div id="note_form">
  <?php echo form_tag_for($form, '@contact') ?>
    <?php echo $form ?>
    <div class="form-actions">
      <input type="button" class="align-right" id="cancelbtn" value="Cancel" onclick="history.go(-1)" />
      <input type="submit" class="align-right" id="submitbtn" value="Update" />
    </div>
  </form>
</div>