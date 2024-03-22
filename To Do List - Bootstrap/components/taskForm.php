<form method="post" action="traitement/taskTraitement.php">
<div class="col-4">
    <label for="TitreTache" class="form-label">Titre</label>
    <input type="text" class="form-control" id="TitreTache" name="TitreTache">
  </div>
  <div class="col-4">
  <label for="DescriptionTache" class="form-label">Description</label>
  <textarea class="form-control" id="DescriptionTache" name="DescriptionTache"></textarea>
</div>
  </div>
  <div class="col-2">
    <label for="Date" class="form-label">Date</label>
    <input type="date" class="form-control" id="Date" name="Date">
  </div>
    <legend class="col-form-label col-sm-2 pt-0">Priorité</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="normal" id="normal" value="option1" checked>
        <label class="form-check-label" for="normal"><span class="badge text-bg-primary">Normal</span>

        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="important" id="important" value="option2">
        <label class="form-check-label" for="important"><span class="badge text-bg-danger">Important</span>
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="checkbox" name="urgent" id="urgent" value="option3">
        <label class="form-check-label" for="urgent"><span class="badge text-bg-warning">Urgent</span>
        </label>
      </div>
    </div>
  </fieldset>
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Créer Tâche</button>
</form>