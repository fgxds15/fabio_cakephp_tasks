<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('') ?></li>
        <li><?= $this->Html->link(__('Nova Task'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Tasks'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="tasks view large-9 medium-8 columns content">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Código') ?></th>
            <td><?= $this->Number->format($task->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($task->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arquivo') ?></th>
            <td><a target="_blank" href="../../uploads/<?= h($task->arquivo) ?>">Ver Arquivo</a></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criando em:') ?></th>
            <td><?= h($task->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ultima modificação') ?></th>
            <td><?= h($task->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($task->descricao)); ?>
    </div>
</div>
