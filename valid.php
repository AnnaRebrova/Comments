<h1>Hello <?= $current_user ? $current_user : 'Anonim' ?></h1>
<form>
Title:<input type="text" name="title" placeholder="Введите заголовок"  />

Content: <input type="text" name="content" placeholder="Ведите вашу новость" />

<input type="submit">
</form>
<body>
<br>
<form>
<?= $label ?><input type="text" name="<?= $field_name ?>" placeholder="<?= $placeholder ?>"  />

<input type="submit">
</form>

</body>
<?php
foreach ($fields as $field_name => $info) {
	$label= $info['label'];
	$placeholder = $info['placeholder'];
} 
 
$fields =[
'name' =>[
	'label' => 'Username',
	'placeholder' => 'Your name',
	'validators' => [
	'required' => true,
	'maxlength'=> 10,
	'minlength' => 2
	],
	'errors' => [],
	'value' => '',
	],
'age'=> [
'label'=> 'Your age',
'placeholder' => 'Your age',
	'validators' => [
	'required' => false,
	'max'=> 100,
		],
	'errors' => [],
	'value' => '',
]
];

foreach ($fields as $name => $info) {
	if(!isset($_GET[$name])){
		continue;
};
}


