<div class="row">
  <div class="col-sm"></div>
  <div class="col-sm">
    <form action="/main/download/" method="POST">
      <div class="checkbox">
        <label>
          <input type="checkbox" class="check" id="checkAll"> Check All
        </label>
      </div>
      <?php foreach ($data as $item):?>
      <div class="form-group form-check">
        <input class="form-check-input check" type="checkbox" value="<?=$item->getName()?>" name="<?=$item->getId()?>">
        <label class="form-check-label" for="<?=$item->getId()?>">
          <?=$item->getName()?>
        </label>
      </div>
      <?php endforeach?>
      <input class="btn btn-primary" type="submit" value="Submit">
    </form>
  </div>
  <div class="col-sm"></div>
</div>