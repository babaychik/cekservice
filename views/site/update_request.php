<?php
//namespace app\models;
use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use app\models\spr_res;
use app\models\status_con;
$arr1 = ['- Виберіть РЕМ','Дніпровські РЕМ  (м. Дніпро)','Жовтоводські РЕМ  (м. Жовті Води та м. Вільногірськ)',
    'Павлоградські РЕМ  (м. Павлоград та с.м.т. Гвардійське)',
'Криворізькі РЕМ  (м. Кривий Ріг та м. Апостолове)'];

//debug($model->id);
//debug($role);
?>

<br>
<?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data'],
    'enableAjaxValidation' => false,]); ?>

<div class="scrolldown">
    <!-- Иконка fa-chevron-up (Font Awesome) -->
    <i class="fa fa-chevron-down"></i>
    <!--            <i class="glyphicon glyphicon-eject"></i>-->
<center>Шановні споживачі</center><br>

&nbsp&nbsp&nbsp&nbsp&nbspЗ метою впорядкування бази персональних даних, яка постійно змінюється внаслідок великої міграції населення, спричиненої воєнним станом, забезпечення якісного та безпечного обслуговування населення й упередження будь-яких невизначених ситуацій, якими може скористатися ворог, просимо проявити пильність, відповідальність і не чинити перешкоди у наданні інформації, передбаченої чинним законодавством України!
Тому, якщо у вас відсутній Договір споживача про надання послуг з розподілу електричної енергії (підписаний Паспорт точки розподілу електричної енергії), просимо Вас терміново надати всі необхідні документи згідно з п. 2.1.8 Правил роздрібного ринку електричної енергії, а також відповідно до Постанови НКРЕКП «Щодо захисту інформації, яка в умовах воєнного стану може бути віднесена до інформації з обмеженим доступом» для подальшої комунікації, надання будь-якої інформації та взагалі обслуговування споживачів виключно за умови їх попередньої ідентифікації. У разі відмови споживача від співпраці оператор системи розподілу залишає за собою право припинити обслуговування та будь-яку комунікацію з невизначеною особою. 
Для оформлення Договору Ви маєте можливість надати до структурних підрозділів ПрАТ «ПЕЕМ «ЦЕК» наступні документи в електронному вигляді:<br> 
- заповнену Заяву-приєднання;<br>
- заповнену Заяву співвласника квартири чи будинку (за потребою);<br>
- копію паспорту;<br>
- копію довідки про присвоєння ідентифікаційного номера;<br>
- копію документа, яким визначено право власності чи користування на квартиру чи будинок (приміщення). <br>
&nbsp&nbsp&nbsp&nbsp&nbspЗвертаємо Вашу увагу, що на копіях документів у вільному місці має бути проставлено: «Згідно з оригіналом», Ваші П.І.Б. і підпис. Також рекомендуємо власноруч написати мету використання копії Ваших документів: «Для укладання Договору споживача про надання послуг з розподілу електричної енергії».
Пропонуємо Вам отримати зразки Заяви-Приєднання та здійснити попереднє подання пакету документів для формування Договору.<br>
Більш детальну консультацію можна отримати за номером call-центру Товариства 0800300015, за телефонами:
(067) 541-30-78; (067) 560-67-90; (050) 411-82-35; (056) 736 25 30, а також за телефоном Інформаційно-консультаційного центру Товариства: (0562) 33-38-43.<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp*якщо власників квартири/будинку два або більше, будь ласка, завантажуйте Заяви співвласника квартири чи будинку та копії документів з їх персональними даними залежно від кількості осіб, які мають право власності, повторно вказуючи з лівого боку РЕМ, П.І.Б, адресу, телефон і електронну пошту.<br><br> 


</div>

<div class="row">
    <div class="col-lg-6" id="docs">
        <? if($mode==0): ?>
            <p class="text-warning-doc">Документи (у форматі pdf, jpg, png):</p>
            <?= $form->field($model, 'doc1')->fileInput(); ?>

            <?= $form->field($model, 'doc2')->fileInput(); ?>

            <?= $form->field($model, 'doc3')->fileInput(); ?>

            <?= $form->field($model, 'doc4')->fileInput(); ?>

              <a href="https://cek.dp.ua/images/document/dogovor/add1_v2.docx">Зразок заяви на приєднання</a><br><br>
              
              <a href="https://cek.dp.ua/images/document/dogovor/zayava_spivvlasnyka.docx">Зразок заяви співвласника квартири чи будинку</a>

        <? endif; ?>


    </div>


    <div class="col-lg-4">

        <? if(1==2) {
        Modal::begin([
            'header' => '<h3>Довідка по вибору РЕМ</h3>',
            'toggleButton' => [
                'label' => 'Довідка по вибору РЕМ',
                'tag' => 'button',
                'class' => 'btn btn-success',
            ]
        ]);
        $t = 'с.м.т. Гвардійське - Павлоградські РЕМ';
        $t1 = 'м. Вільногірськ - Жовтоводські РЕМ';
        $t2 = 'м. Апостолово - Криворізькі РЕМ';
        ?>

        <table width="1000px" class="table table-bordered table-hover table-condensed ">
            <th width="1000px"></th>

            <tr>
                <td><?= $t ?></td>
            </tr>
            <tr>
                <td><?= $t1 ?></td>
            </tr>
            <tr>
                <td><?= $t2 ?></td>
            </tr>
        </table>
        <?php
            Modal::end(); }
            ?>




        <?= $form->field($model, 'id_res') -> dropDownList ( $arr1 ) ?>
        <?= $form->field($model, 'fio')->textarea() ?>
        <?= $form->field($model, 'adres')->textarea() ?>

			

        <?= $form->field($model, 'tel',['inputTemplate' => '<div class="input-group"><span class="input-group-addon">'
            . '<span class="glyphicon glyphicon-phone"></span></span>{input}</div>'])->textInput(['maxlength' => true,'onBlur' => 'norm_tel($(this).val())']); 
    
            ?>

        <?= $form->field($model, 'email',
            ['inputTemplate' => '<div class="input-group"><span class="input-group-addon">'
                . '<span class="glyphicon glyphicon-envelope"></span></span>{input}</div>'])->textInput() ?>


        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'ОК' : 'OK', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

            <?php ActiveForm::end(); ?>
        </div>
    </div>


