<form id="form1" method="post" action="javascript:void(0);">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <label for="mark" class="form-label">Марка авто</label>
            <input type="text" class="form-control" id="mark" name="mark" placeholder="" value=""  >
        </div>
        <div class="col-sm-6">
            <label for="model" class="form-label">Модель авто</label>
            <input type="text" class="form-control" id="model" name="model" placeholder="" value=""  >
        </div>
        <div class="col-sm-6">
            <label for="number" class="form-label">Номер авто</label>
            <input type="text" class="form-control" id="number" name="number" placeholder="" value="">
        </div>
        <div class="col-sm-6">
            <label for="color" class="form-label">Цвет авто</label>
            <select class="form-select" id="color" name="color">
                <option value="">Choose...</option>
                <option>Серебристо-светло оранжевый</option>
                <option>Серебристо-чёрный</option>
                <option>Белая двухслойная</option>
                <option>Ярко-жёлтый</option>
                <option>Серебристый сине-зелёный</option>
                <option>Серебристо-коричневый</option>
                <option>Оливково-зелёный</option>
                <option>(ИЖ) Серебристый</option>
                <option>Белый металлик</option>
                <option>Серебристый светло-серый</option>
                <option>Ярко-зелёный</option>
                <option>Серебристый фиолетовый</option>
                <option>Серебристо-тёмно-зелёный</option>
                <option>Голубой</option>
                <option>Тёмно-вишнёвый</option>
                <option>Серебристо-бежевый</option>
                <option>Серебристый оранжевый</option>
                <option>Серебристо-зелёный</option>
            </select>
        </div>
        <div class="col-sm-6">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="payed" name="payed">
                <label class="form-check-label" for="payed">Оплачена парковка</label>
            </div>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="comment" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Комментарий</label>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
            <button class="btn btn-primary me-md-2" type="submit" id="btnSave">Сохранить</button>
            <button class="btn btn-primary" type="button" id="btnCancel">Отмена</button>
        </div>
    </div>
</form>