INSERT INTO cscart_payment_processors (processor, processor_script, processor_template, admin_template, callback, type) VALUES ('PayPal Pro', 'paypal_pro.php', 'views/orders/components/payments/cc.tpl', 'paypal_pro.tpl', 'Y', 'P');
INSERT INTO cscart_payment_processors (processor, processor_script, processor_template, admin_template, callback, type) VALUES ('PayPal', 'paypal.php', 'views/orders/components/payments/cc_outside.tpl', 'paypal.tpl', 'Y', 'P');
INSERT INTO cscart_payment_processors (processor, processor_script, processor_template, admin_template, callback, type) VALUES ('PayFlow Pro', 'payflow_pro.php', 'views/orders/components/payments/cc.tpl', 'payflow_pro.tpl', 'Y', 'P');
INSERT INTO cscart_payment_processors (processor, processor_script, processor_template, admin_template, callback, type) VALUES ('PayPal Express Checkout', 'paypal_express.php', 'views/orders/components/payments/cc_outside.tpl', 'paypal_express.tpl', 'Y', 'B');
INSERT INTO cscart_payment_processors (processor, processor_script, processor_template, admin_template, callback, type) VALUES ('PayPal Advanced', 'paypal_advanced.php', 'views/orders/components/payments/cc_outside.tpl', 'paypal_advanced.tpl', 'N', 'P');
