<?php
add_action('admin_init', function() {
  if (!get_role('casestudies_editor')) {
    // Add casestudies editor role
    add_role('casestudies_editor',
      'Casestudies Editor',
      array(
        'read' => true,
        'edit_posts' => true,
        'delete_posts' => true,
        'publish_posts' => true,
        'upload_files' => true,
      )
    );
  }
  // Add the roles you'd like to administer the custom post types
  $roles = array('casestudies_editor','administrator');
  // Loop through each role and assign capabilities
  foreach($roles as $the_role) {
    $role = get_role($the_role);
    $role->add_cap('read_casestudy');
    $role->add_cap('read_private_casestudies');
    $role->add_cap('edit_casestudy');
    $role->add_cap('edit_casestudies');
    $role->add_cap('edit_others_casestudies');
    $role->add_cap('edit_published_casestudies');
    $role->add_cap('publish_casestudies');
    $role->add_cap('delete_others_casestudies');
    $role->add_cap('delete_private_casestudies');
    $role->add_cap('delete_published_casestudies');
  }
    get_role($roles[0])->remove_cap('edit_posts');
});
