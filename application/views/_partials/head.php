<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= isset($meta['title']) ? $meta['title'] : 'CRUD' ?></title>

<style>
	.bg {
		font-family: Arial, sans-serif; 
		background-color: whitesmoke;
		margin: 0;
   		padding: 0;
	}
	.navbar {
		top:0;
		position: fixed;
		display: flex;
		gap: 1em;
		background-color: teal;
	}

	.navbar a {
		font-family: sans-serif;
		font-weight: 500;
		color: white;
		text-decoration: none;
		padding: 1rem;
	}

	.navbar a:hover {
		background-color: rgba(255, 255, 255, 0.1);
	}

	footer {
		font-family: Arial, sans-serif; 
		background-color: whitesmoke;
		padding: 1em;
		position: fixed;
		width:100%;
   		bottom: 0;
		left:0;
		text-align: center;
		border-top: 1px solid lightgray;
	}

	
</style>