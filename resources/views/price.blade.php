@extends('layouts.app')

@section('title-block')Цены@endsection

@section('content')
<a id="family"></a>
<div class="main-header bg-white rounded">
    <h2>Цены</h2>
</div>
<div class="price_table container">
    <table class="table table-bordered table-responsive">
        <thead>
            <tr class="bg-success">
                <th>Трасса</th>
                <th>Для кого</th>
                <th>Цена (будние / выходные)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Жёлтая (детская)</th>
                <td>Детская (рост от 100 см)</td>
                <td>200 / 250</td>
            </tr>
            <tr>
                <th scope="row">Зелёная (семейная)</th>
                <td>Детская (рост от 120 см) / взрослая</td>
                <td>300 / 350</td>
            </tr>
            <tr>
                <th scope="row">Синяя (спортивная)</th>
                <td>Детская (рост от 140 см) / взрослая</td>
                <td>400 / 450</td>
            </tr>
            <tr>
                <th scope="row">Фиолетовая (zip-line)</th>
                <td>Детская (рост от 140 см) / взрослая</td>
                <td>300</td>
            </tr>
            <tr>
                <th scope="row">Красная</th>
                <td>Взрослая</td>
                <td>600 / 650</td>
            </tr>
            <tr>
                <th scope="row">Супер-спорт (Зелёная + синяя + фиолетовая)</th>
                <td>Детская (рост от 120 см) / взрослая</td>
                <td>800 / 900</td>
            </tr>
            <tr>
                <th scope="row">Скалодром</th>
                <td>Детская (рост от 120 см) / взрослая</td>
                <td>100</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="main-header bg-white rounded">
    <a id="sale"></a>
    <h2>Акции и скидки</h2>
</div>
<div class="price-sale container">
    <!-- Картинки в соотношении 4:3 -->
    <div class="row">
        <div class="col-xl-6 price-sale-block">
            <img src="/storage/img/family.jpg" alt="Многодетная семья">
            <div class="price-sale-block_text">
                <h5>Скидки многодетным семьям</h5>
                <p>Предоставляется скидка в размере 10% членам многодетной семьи.<br>Скидка предоставляется при предъявлении действующего удостоверения многодетной семьи.</p>
            </div>
        </div>
        <div class="col-xl-6 price-sale-block">
            <img src="/storage/img/birthday.jpg" alt="День рождения">
            <div class="price-sale-block_text">
                <h5>Скидка именинникам</h6>
                    <p>Скидка в размере 50% на входной билет предоставляется только имениннику при предъявлении документа удостоверяющий личность.</p>
            </div>
        </div>
    </div>
</div>
@endsection