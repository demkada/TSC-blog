<?php

return array(

	'extend' => 'Geli�mi�',

	'fields' => '�zel Alanlar',
	'fields_desc' => 'Ek alanlar olu�tur',

	'variables' => 'Site De�i�kenleri',
	'variables_desc' => 'Ek meta veriler olu�tur',

	'create_field' => 'Yeni bir alan olu�tur',
	'editing_custom_field' => 'D�zenlenen alan &ldquo;%s&rdquo;',
	'nofields_desc' => 'Hen�z bir alan yok',

	'create_variable' => 'Yeni bir de�i�ken olu�tur',
	'editing_variable' => 'D�zenlenen de�i�ken &ldquo;%s&rdquo;',
	'novars_desc' => 'Hen�z bir de�i�ken yok',

	// form fields
	'type' => 'Tip',
	'type_explain' => 'Bu alana eklemek istedi�iniz i�erik t�r�.',

	'field' => 'Alan',
	'field_explain' => 'Html giri� tipi',

	'key' => 'Benzersiz anahtar',
	'key_explain' => 'Alan�n�z�n benzersiz anahtar�',
	'key_missing' => 'Benzersiz bir anahtar girin',
	'key_exists' => 'Anahtar zaten kullan�lm��',

	'label' => 'Etiket',
	'label_explain' => 'Alan�n�z insanlar taraf�ndan okunabilir',
	'label_missing' => 'L�tfen bir etiket girin',

	'attribute_type' => 'Dosya tipi',
	'attribute_type_explain' => 'Dosya tiplerini virg�l ile ay�r�n.',

	// images
	'attributes_size_width' => 'Resim maksimum geni�li�i',
	'attributes_size_width_explain' => 'E�er resim maksimum de�erden fazla ise yeniden boyutland�r�l�r',

	'attributes_size_height' => 'Resim maksimum y�ksekli�i',
	'attributes_size_height_explain' => 'E�er resim maksimum de�erden fazla ise yeniden boyutland�r�l�r',

	// custom vars
	'name' => '�sim',
	'name_explain' => 'Benzersiz bir isim',
	'name_missing' => 'L�tfen benzersiz bir isim girim',
	'name_exists' => '�sim zaten kullan�lm��',

	'value' => 'De�er',
	'value_explain' => 'Saklamak istedi�iniz veriler (64kb olabilir)',
	'value_code_snipet' => '�ablona eklemek i�in  kod:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'De�i�keniniz olu�turuldu',
	'variable_updated' => 'De�i�keniniz olu�turuldu',
	'variable_deleted' => 'De�i�keniniz olu�turuldu',

	'field_created' => 'Alan�n�z olu�turuldu',
	'field_updated' => 'Alan�n�z olu�turuldu',
	'field_deleted' => 'Alan�n�z olu�turuldu'

);