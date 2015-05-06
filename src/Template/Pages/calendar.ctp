<?php $sbAdmin = '../' . 'sb-admin-2-1.0.7/calendar/'; ?>

<?= $this->Html->css($sbAdmin . 'css/fullcalendar.css') ?>
<?= $this->Html->css('../css/Template/Pages/calendar.css') ?>

<?= $this->Html->script($sbAdmin . 'js/lib/moment.min.js'); ?>
<?= $this->Html->script($sbAdmin . 'js/lib/jquery-ui.custom.min.js'); ?>
<?= $this->Html->script($sbAdmin . 'js/fullcalendar.js'); ?>
<?= $this->Html->script('../js/Template/Pages/calendar.js'); ?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Calendar</h1>
    </div>

    <div class="col-lg-12">
        <div id='external-events'>
            <h4>Draggable Events</h4>
            <div class='fc-event'>My Event 1</div>
            <div class='fc-event'>My Event 2</div>
            <div class='fc-event'>My Event 3</div>
            <div class='fc-event'>My Event 4</div>
            <div class='fc-event'>My Event 5</div>
            <p>
                <input type='checkbox' id='drop-remove' />
                <label for='drop-remove'>remove after drop</label>
            </p>
        </div>

        <div id='calendar'></div>

        <div style='clear:both'></div>
    </div>
</div>

<div class="row">
    <?= $this->Flash->render() ?>
</div>