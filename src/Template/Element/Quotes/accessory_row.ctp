<tr id="accesorry-row-<?= $i ?>">
    <?= $this->Form->hidden('accessories.' . $i . '.id'); ?>
    <td>
        <?= $this->Form->input('accessories.' . $i . '.accessory_item_number', ['label' => false, 'class' => 'form-control product-item-no accessories']); ?>
    </td>

    <td>
        <?= $this->Form->input('accessories.' . $i . '.accessory_each', ['label' => false, 'class' => 'form-control product-item-no accessories accessory-each']); ?>
    </td>

    <td>

        <?= $this->Form->input(
            'accessories.' . $i . '.accessory_name',
            [
                'type' => 'select',
                'multiple' => false,
                'options' => $accessories,
                'empty' => true,
                'label' => false,
                'class' => 'form-control accessories accessory-name'
            ]
        ); ?>


    </td>
    <td>

        <?= $this->Form->input('accessories.' . $i . '.accessory_price',
            ['label' => false, 'class' => 'form-control accessory-total-price span-input', 'readonly' => 'readonly']); ?>

    </td>


</tr>