<select class="form-select" id="aid" name="aid">
<?php
while ($artistItem = $artistList->fetch_assoc()){
?>
   <option value="<?php echo $$artistItem['artist_id']; ?>"><?php echo $$artistItem['artist_name']; ?></option>
<?php
}
?>
</select>
