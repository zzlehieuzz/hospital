<?php $sbAdmin    = '../'    . 'sb-admin-2-1.0.7/calendar/'; ?>
<?php $bootstrap2 = $sbAdmin . 'bootstrap2/'; ?>

<?= $this->Html->css($bootstrap2 . 'css/bootstrap-responsive.css') ?>
<?= $this->Html->css($sbAdmin . 'css/calendar.css') ?>

<?= $this->Html->script($sbAdmin . 'underscore/underscore-min.js'); ?>
<?= $this->Html->script($sbAdmin . 'jstimezonedetect/jstz.min.js'); ?>

<?= $this->Html->script($sbAdmin . 'js/calendar.js'); ?>
<?= $this->Html->script($sbAdmin . 'js/app.js'); ?>

<style type="text/css">
    .btn-twitter {
        padding-left: 30px;
        background: rgba(0, 0, 0, 0) url(https://platform.twitter.com/widgets/images/btn.27237bab4db188ca749164efd38861b0.png) -20px 6px no-repeat;
        background-position: -20px 11px !important;
    }
    .btn-twitter:hover {
        background-position:  -20px -18px !important;
    }
</style>

<script type="text/javascript">
    var disqus_shortname = 'bootstrapcalendar'; // required: replace example with your forum shortname
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Calendar</h1>
    </div>
</div>

<div class="row">
    <?= $this->Flash->render() ?>

</div>