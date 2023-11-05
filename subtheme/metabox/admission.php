<?php
    global  $post, $wpdb;
	$registration_admission_table	= $wpdb->prefix . 'registration_admission_table';

    $posteritemquery	= "SELECT * FROM $registration_admission_table";
	$posteritemresult	= $wpdb->get_results($posteritemquery);
	
    $values     = get_post_custom( $post->ID );
    $admissionitem   = isset( $values['admissionitem'] ) ? $values['admissionitem'][0] : '';
?>
<select name="admissionitem" id="admissionitem" >
    <option value="">Please select</option>
    <?php foreach($posteritemresult as $value){ ?>
        <option value="<?php echo $value->id; ?>" <?php if($admissionitem == $value->id) echo ' selected="selected"';  ?> ><?php echo $value->admissionname?></option>
    <?php } ?>
</select>