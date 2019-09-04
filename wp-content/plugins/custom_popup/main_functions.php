<?php
/*
Plugin Name: Popup on main page
Plugin URI: ---
Description: Plugin thet add to main page popup with content
Version: 1.0
Author: Devlooper
Author URI: 
License: 
*/

/*DEFINES*/
define("COM_PATH_N", plugin_dir_path(__FILE__));
define("COM_URL_N", plugin_dir_url(__FILE__));

add_action('admin_menu', 'custom_popup_menu');

add_action('wp_ajax_save_popup', 'save_popup');
add_action('wp_ajax_nopriv_save_popup', 'save_popup');

function custom_popup_menu()
{
	add_menu_page(
'Popup info',
'Popup info',
'manage_options',
'custom_popup',
'custom_popup',
'dashicons-welcome-widgets-menus',
6
	);
}

/*
 * Generate page for popup control.
 */
function custom_popup()
{ ?>
	<div class="wrap">
		<h2 id="place_title"><?php echo get_admin_page_title() ?></h2>

		<?php $enabled = get_option("popup_enabled"); ?>
		<div class="popup_enabled_wrap">
			<label for="popup_enabled">
				<input name="popup_enabled"
					   type="checkbox"
					   id="popup_enabled"
					   value="1" <?php echo $enabled == 1 ? 'checked' : '' ?>>
				Enable popup?
			</label>
		</div>

		<?php
		$content = wp_unslash(get_option("custom_popup", " "));
		$editor_id = 'custom_popup';

		wp_editor($content, $editor_id, array(
			'textarea_name' => 'custom_popups', //нужно указывать!
		));
		?>
		<input type='button' class='button button-primary take_data' value="Save Information" />
	</div>
	<style>
		.wrap .take_data {
			margin-top: 10px;
		}

		.popup_enabled_wrap {
			margin: 10px 0;
			font-size: 14px;
			font-weight: bold;
		}
	</style>
	<script>
		jQuery(document).ready(function ($) {
			$(document).on('click', '.take_data', function () {
				var custom_popup = tinyMCE.activeEditor.getContent();
				var popup_enabled = 0;

				if ($('#popup_enabled').prop("checked") === true) {
					popup_enabled = 1;
				}

				var datasent = {
					info: custom_popup,
					enabled: popup_enabled
				};

				$.ajax({
					type: 'POST',
					url: ajaxurl,
					data: {
						action: 'save_popup',
						data: datasent
					},
					success: function (json) {
						window.location.reload();
					}
				});
			})
		});
	</script>
<?php
}

/*
 * Save popup option on ajax.
 */
function save_popup()
{
	if (isset($_POST['data'])) {
		update_option('custom_popup', $_POST['data']['info']);
		update_option('popup_enabled', $_POST['data']['enabled']);
	}
	wp_die();
}