/* Return the department tag_id from the name */
add_filter( 'gform_field_value_department', 'dept_id_function' );
function dept_id_function( $value ) {
	$user_id = get_current_user_id();
	$user_dept = get_user_meta($user_id, 'mo_ldap_local_custom_attribute_department', true);
	$term = get_term_by('name', $user_dept, 'department');
	$name = $term->term_id;
	return $name;
}
