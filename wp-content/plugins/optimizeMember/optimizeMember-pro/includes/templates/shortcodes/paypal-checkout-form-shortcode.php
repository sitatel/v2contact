<?php
if (realpath (__FILE__) === realpath ($_SERVER["SCRIPT_FILENAME"]))
	exit("Do not access this file directly.");
?>

[optimizeMember-Pro-PayPal-Form level="%%level%%" ccaps="" desc="%%level_label%% / <?php echo esc_attr (_x ("Description and pricing details here.", "s2member-admin", "s2member")); ?>" ps="paypal" lc="" cc="USD" dg="0" ns="1" custom="%%custom%%" ta="0" tp="0" tt="D" ra="0.01" rp="1" rt="M" rr="1" rrt="" rra="2" accept="paypal,visa,mastercard,amex,discover,maestro,solo" accept_via_paypal="paypal" coupon="" accept_coupons="0" default_country_code="" captcha="0" /]