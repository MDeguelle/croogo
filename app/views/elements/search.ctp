<?php
    $b = $block['Block'];
    $class = 'block block-' . $b['alias'];
    if ($block['Block']['class'] != null) {
        $class .= ' ' . $b['class'];
    }
?>
<div id="block-<?php echo $b['id']; ?>" class="<?php echo $class; ?>">
<?php if ($b['show_title'] == 1) { ?>
    <h3><?php echo $b['title']; ?></h3>
<?php } ?>
    <div class="block-body">
        <form name="searchform" method="post" action="javascript: document.location.href=''+Croogo.basePath+'search/q:'+encodeURI(document.searchform.q.value);">
        <?php
            $qValue = null;
            if (isset($this->params['named']['q'])) {
                $qValue = $this->params['named']['q'];
            }
            echo $form->input('q', array(
                'label' => false,
                'name' => 'q',
                'value' => $qValue,
            ));
            echo $form->submit(__('Search', true));
        ?>
        </form>
    </div>
</div>