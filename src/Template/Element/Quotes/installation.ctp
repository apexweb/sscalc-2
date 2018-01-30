<?php $this->Form->templates([
    'nestingLabel' => '{{input}}<label{{attrs}}>{{text}}</label>',
    'formGroup' => '{{input}}{{label}}',
]); ?>

<div class="col-lg-12 table-responsive">

    <table class="table table-no-border installation-table">

        <tr>
            <td><?= $this->Form->label('installation_type') ?></td>
            <td>
                <div class="radio vertical-radio">
                    <?php if ($installationType == 'preset amount' || $installationType == ''): ?>
                        <?= $this->Form->radio(
                            'installation_type',
                            [
                                ['value' => 'preset amount', 'text' => 'Preset Amount', 'checked' => 'checked'],
                                ['value' => 'custom amount', 'text' => 'Custom Amount'],
                                ['value' => 'incorporate install', 'text' => 'Incorporate Install'],
                            ]
                        ) ?>
                    <?php elseif ($installationType == 'custom amount'): ?>
                        <?= $this->Form->radio(
                            'installation_type',
                            [
                                ['value' => 'preset amount', 'text' => 'Preset Amount'],
                                ['value' => 'custom amount', 'text' => 'Custom Amount','checked' => 'checked'],
                                ['value' => 'incorporate install', 'text' => 'Incorporate Install'],
                            ]
                        ) ?>
                    <?php else: ?>
                        <?= $this->Form->radio(
                            'installation_type',
                            [
                                ['value' => 'preset amount', 'text' => 'Preset Amount'],
                                ['value' => 'custom amount', 'text' => 'Custom Amount','checked' => 'checked'],
                                ['value' => 'incorporate install', 'text' => 'Incorporate Install','checked' => 'checked'],
                            ]
                        ) ?>
                    <?php endif; ?>

                </div>
            </td>
        </tr>

        <tr>

            <td>
                <?php if ($installationType == 'preset amount' || $installationType == ''): ?>
                    <label class="installation-label">Preset Amount:</label>
                <?php elseif ($installationType == 'custom amount'): ?>
                    <label class="installation-label">Custom Amount:</label>
                <?php else: ?>
                    <label class="installation-label">Incorporate Install:</label>
                <?php endif; ?>
            </td>
            <td>
                <?php if ($installationType == 'preset amount' || $installationType == ''): ?>
                    <?= $this->Form->input('installation_preset_amount',
                        ['class' => 'form-control span-input', 'readonly' => 'true', 'label' => false]) ?>


                    <?= $this->Form->input('installation_custom_amount',
                        ['class' => 'form-control input-sm', 'label' => false, 'style' => 'display:none;']) ?>
                
                    <?= $this->Form->input('installation_incorporate_amount',
                        ['class' => 'form-control input-sm', 'label' => false, 'style' => 'display:none;']) ?>
                <?php elseif ($installationType == 'custom amount'): ?>
                    <?= $this->Form->input('installation_preset_amount',
                        ['class' => 'form-control span-input', 'readonly' => 'true', 'label' => false, 'style' => 'display:none;']) ?>


                    <?= $this->Form->input('installation_custom_amount',
                        ['class' => 'form-control input-sm', 'label' => false]) ?>
                
                    <?= $this->Form->input('installation_incorporate_amount',
                        ['class' => 'form-control input-sm', 'label' => false, 'style' => 'display:none;']) ?>
                <?php else: ?>
                    <?= $this->Form->input('installation_preset_amount',
                        ['class' => 'form-control span-input', 'readonly' => 'true', 'label' => false, 'style' => 'display:none;']) ?>


                    <?= $this->Form->input('installation_custom_amount',
                        ['class' => 'form-control input-sm', 'label' => false, 'style' => 'display:none;']) ?>
                
                    <?= $this->Form->input('installation_incorporate_amount',
                        ['class' => 'form-control input-sm', 'readonly' => 'true', 'label' => false]) ?> 
                <?php endif; ?>

            </td>

        </tr>


        <tr style="<?php echo ($installationType == 'incorporate install') ? 'display:none' : ''; ?>">
            <td><?= $this->Form->label('freight_cost') ?></td>
            <td>
                <?= $this->Form->input('freight_cost', ['label' => false, 'class' => 'form-control frieght-cost input-sm']) ?>
            </td>
        </tr>


        <tr>
            <td><?= $this->Form->label('installation_total_cost') ?></td>
            <td>

                <?= $this->Form->input('installation_total_cost',
                    ['class' => 'form-control span-input', 'readonly' => 'true', 'label' => false, 'value' => '0']) ?>

            </td>
        </tr>


        <tr>
            <td colspan="2">
                <?= $this->Form->input('installation_cost_include_on_check_measure', ['type' => 'checkbox', 'templates' => [
                    'nestingLabel' => '{{hidden}}{{input}}<label{{attrs}}>{{text}}</label>']]) ?>
            </td>
        </tr>

    </table>


</div>