<?php include 'parts/header.php'; ?>

<!-- Begin page content -->
<main role="main" class="container">
    <div class="container-fluid col-sm-6">
        <form class="form-group" method="post" action="/remonline">
            <div class="container-fluid">
                <label for="example-tel-input">Введите номер телефона</label>
                <input class="form-control" name="tel" type="tel"
                       id="example-tel-input">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <?php if ( !empty($data) && is_array($data) ): ?>
        <div class="container-fluid col-sm-6">
            <h5><?= $data[ 0 ][ 'client' ][ 'name' ] ?></h5>
        </div>

        <?php
        $i = 1;
        foreach ( $data as $item ): ?>
            <?php $arr = getdate(substr($item[ 'created_at' ], 0, -3));
            $day       = $arr[ 'mday' ] < 10 ? '0' . $arr[ 'mday' ] : $arr[ 'mday' ];
            $month     = $arr[ 'mon' ] < 10 ? '0' . $arr[ 'mon' ] : $arr[ 'mon' ];
            $year      = $arr[ 'year' ];
            $date      = $day . '.' . $month . '.' . $year;
            ?>
            <div class="container-fluid col-sm-6">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="heading<?= $i ?>">
                            <h5 class="mb-0">
                                <button class="btn btn-link"
                                        data-toggle="collapse"
                                        data-target="#collapse<?= $i ?>"
                                        aria-expanded="true"
                                        aria-controls="collapse<?= $i ?>">
                                    Заказ <?= $item[ 'id_label' ] ?>
                                    от <?= $date ?>
                                </button>
                            </h5>
                        </div>
                        <div id="collapse<?= $i ?>" class="collapse"
                             aria-labelledby="heading<?= $i ?>"
                             data-parent="#accordion">
                            <div class="card-block" style="padding: 0px">
                                <div class="table-responsive">
                                    <table class="table"
                                           style="display: inline-table;
                                           width: 100%; word-wrap: break-word;">
                                        <tbody>
                                        <tr>
                                            <td style="width:
                                                250px">Устройство
                                            </td>
                                            <td><?= $item[ 'brand' ] . ' ' . $item[ 'model' ] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Серийный номер</td>
                                            <td style="word-break: break-all;"><?= $item[ 'serial' ] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Неисправность</td>
                                            <td><?= $item[ 'malfunction' ] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Стоимость</td>
                                            <td><?= $item[ 'price' ] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Состояние</td>
                                            <td><?= $item[ 'status' ][ 'name' ] ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <?php $i++ ?>
        <?php
        endforeach; ?>
    <?php endif; ?>
</main>

<?php include 'parts/footer.php'; ?>

<script type="text/javascript" src="views/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="views/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        $.mask.definitions['~'] = '[+-]';

        $('#example-tel-input').mask('+7 (999) 999-99-99');

    });
</script>
