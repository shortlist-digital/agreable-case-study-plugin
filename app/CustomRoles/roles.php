<?php
add_action('admin_init', function() {
  if (!get_role('case_studies_editor')) {
    // Add casestudies editor role
    add_role('case_studies_editor',
      'Case Studies Editor',
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
  $roles = array('case_studies_editor','administrator');
  // Loop through each role and assign capabilities
  foreach($roles as $the_role) {
    $role = get_role($the_role);
    $role->add_cap('read_case_study');
    $role->add_cap('read_private_casestudies');
    $role->add_cap('edit_case_study');
    $role->add_cap('edit_case_studies');
    $role->add_cap('edit_others_case_studies');
    $role->add_cap('edit_published_case_studies');
    $role->add_cap('publish_casestudies');
    $role->add_cap('delete_others_case_studies');
    $role->add_cap('delete_private_case_studies');
    $role->add_cap('delete_published_case_studies');
  }
    get_role($roles[0])->remove_cap('edit_posts');
});
