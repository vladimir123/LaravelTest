<table class="auto table table-responsive table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Марка авто</th>
            <th>Модель авто</th>
            <th>Гос.номер</th>
            <th>Цвет авто</th>
            <th>Комментарий</th>
            <th>Оплачено</th>
            <th>Дата регистрации</th>
        </tr>
    </thead>
    <tbody>
        @foreach($autoList as $itm)
            <tr>
                <td>{{ $itm->id }}</td>
                <td>{{ $itm->mark }}</td>
                <td>{{ $itm->model }}</td>
                <td>{{ $itm->number }}</td>
                <td>{{ $itm->color }}</td>
                <td>{{ $itm->comment }}</td>
                <td>{{ ($itm->payed == true ? 'ДА' : 'НЕТ') }}</td>
                <td>{{ $itm->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>