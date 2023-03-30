<?php (dynamic_sidebar('sidebar-primary')); ?>


<form action="<?php echo e(url('/client-stories')); ?>" method="get">
    <h2>Content Type</h2>
  
    <div class="mb-4">
      <label for="client-letters">
        <input type="checkbox" id="client-letters" name="content_type[]" value="client-letters"
          <?php echo e((in_array('client-letters', request('content_type', []))) ? 'checked' : ''); ?>>
        Client Letters
      </label>
    </div>
  
    <div class="mb-4">
      <label for="case-studies">
        <input type="checkbox" id="case-studies" name="content_type[]" value="case-studies"
          <?php echo e((in_array('case-studies', request('content_type', []))) ? 'checked' : ''); ?>>
        Case Studies
      </label>
    </div>
  
    <div class="mb-4">
      <label for="client-stories">
        <input type="checkbox" id="client-stories" name="content_type[]" value="client-stories"
          <?php echo e((in_array('client-stories', request('content_type', []))) ? 'checked' : ''); ?>>
        Client Stories
      </label>
    </div>
  
    <button type="submit" class="btn btn-primary">Filter</button>
  </form>
  <?php /**PATH /Users/chasedemaster.tech/Local Sites/insperity-theme/app/public/wp-content/themes/insperitytheme/resources/views/partials/filter.blade.php ENDPATH**/ ?>